<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{   
   /* public function isAuthorized($user)
    {
        if(isset($user['username'])!== null){
            if(in_array($this->request->action,['index','logout','add']))
            {
                return true;
            }
            return parent::isAuthorized($user);
        }
    }*/
    public function home()
    {
        $this->viewBuilder()->setLayout('landing');
        $this->loadModel('Agencies');
        $id = 1;

        $agency = $this->Agencies->get($id);

        $properties = $this->Agencies->Properties->find('all', [
            'agency_id' => $id,
            'contain' => ['Pictures']
        ]);

        $this->set('agency', $agency);
        $this->set('properties', $properties);
    }

    public function properties($property_id = null)
    {
        $this->viewBuilder()->setLayout('landing');
        $this->loadModel('Agencies');
        $this->loadModel('Properties');
        $this->loadModel('Comments');

        $comment = $this->Comments->newEntity([
            'property_id' => $property_id
        ]);

        if ($this->request->is('post')) {
            $comment = $this->Comments->patchEntity($comment, $this->request->getData());
            if ($this->Comments->save($comment)) {
                $this->Flash->success(__('Hemos recibido tu consulta. Te responderemos en breve!'));

                return $this->redirect('/properties/'.$property_id);
            }
            $this->Flash->error(__('Tu consulta no fue enviada. Intentá nuevamente'));
        }
        
        $agency = $this->Agencies->get(1);
        $property = $this->Properties->get($property_id, [
            'contain' => ['Pictures', 'Comments']
        ]);


        $this->set('agency', $agency);
        $this->set('property', $property);
        $this->set('comment', $comment);
    }
}
