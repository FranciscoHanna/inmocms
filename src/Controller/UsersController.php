<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @property \App\Model\Table\AgenciesTable $Agencies
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */

     public function login()
     {
      
         if($this->request->is('post'))
         { 
             // debug($this->request->data);
             $user = $this->Auth->identify();
             if($user)
             {

                
                 $this->Auth->setUser($user);
              /*   $query->select(['name'])->where(['Agencies.id'=>$user['id']]);
                 debug($this->$query);*/
                 //$opciones=array('conditions' => array('Agencies.user_id' => $user.id));
                // $todasAgencias = $this->Users->Agencies->find('all');


                 return $this->redirect($this->Auth->redirectUrl());
             }else
             {
                 $this->Flash->error('Los datos ingresados son incorrectos, intente nuevamente',
                ['key'=>'auth']);
             }
         }
     }

     public function logout()
     {
         return $this->redirect($this->Auth->logout());
     }
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Agencies']
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {

           /* debug($this->request->data);*/
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('El usuario ha sido creado exitosamente'));

                return $this->redirect(['controller' => 'Agencies', 'action' => 'add']);
            }
            $this->Flash->error(__('El usuario no fue creado. Intente nuevamente'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
/*
    public function findAuth(\Cake\ORM\Query $query, array $options){
        $query->select(['name'])
        ->where(['Agencies.id'=>$user['id']]);
        return $query;

    }*/
}
