<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Agencies Controller
 *
 * @property \App\Model\Table\AgenciesTable $Agencies
 *
 * @method \App\Model\Entity\Agency[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AgenciesController extends AppController
{
    public function isAuthorized($user) {
        // All registered users can add posts
        
    
        // The owner of a post can edit and delete it
        if (in_array($this->action, array('edit', 'delete','add','index','logout','view'))) {
            $postId = (int) $this->request->params['pass'][0];
            if ($this->Post->isOwnedBy($postId, $user['id'])) {
                return true;
            }
        }
    
        return parent::isAuthorized($user);
    }
 
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    // public function index()
    // {
    //     $this->paginate = [
    //         'contain' => ['Users']
    //     ];
    //     $agencies = $this->paginate($this->Agencies);

    //     $this->set(compact('agencies'));
    // }

    /**
     * View method
     *
     * @param string|null $id Agency id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $id = 1;
        $agency = $this->Agencies->get($id, [
            'contain' => ['Users', 'Properties']
        ]);

        $this->set('agency', $agency);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    // public function add()
    // {
    //     $agency = $this->Agencies->newEntity();
    //     if ($this->request->is('post')) {
    //         $agency = $this->Agencies->patchEntity($agency, $this->request->getData());
    //         if ($this->Agencies->save($agency)) {
    //             $this->Flash->success(__('The agency has been saved.'));

    //             return $this->redirect(['action' => 'index']);
    //         }
    //         $this->Flash->error(__('The agency could not be saved. Please, try again.'));
    //     }
    //     $users = $this->Agencies->Users->find('list', ['limit' => 200]);
    //     $this->set(compact('agency', 'users'));
    // }

    /**
     * Edit method
     *
     * @param string|null $id Agency id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $id = 1;
        $agency = $this->Agencies->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $agency = $this->Agencies->patchEntity($agency, $this->request->getData());
            if ($this->Agencies->save($agency)) {
                $this->Flash->success('Los datos han sido actualizados');

                return $this->redirect('/admin/agency');
            }
            $this->Flash->error('Los datos no pudieron ser actualizados');
        }
        $users = $this->Agencies->Users->find('list', ['limit' => 200]);
        $this->set(compact('agency', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Agency id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $agency = $this->Agencies->get($id);
        if ($this->Agencies->delete($agency)) {
            $this->Flash->success(__('The agency has been deleted.'));
        } else {
            $this->Flash->error(__('The agency could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
}
