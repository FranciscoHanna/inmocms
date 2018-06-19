<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pictures Controller
 *
 * @property \App\Model\Table\PicturesTable $Pictures
 *
 * @method \App\Model\Entity\Picture[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PicturesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    // public function index($property_id = null)
    // {
    //     $this->paginate = [
    //         'contain' => ['Properties']
    //     ];
    //     $pictures = $this->paginate($this->Pictures->find('all', [
    //         'conditions' => ['property_id' => $property_id]
    //     ]));

    //     $this->set(compact('pictures'));
    // }

    /**
     * View method
     *
     * @param string|null $id Picture id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    // public function view($id = null)
    // {
    //     $picture = $this->Pictures->get($id, [
    //         'contain' => ['Properties']
    //     ]);

    //     $this->set('picture', $picture);
    // }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($property_id = null)
    {
        $picture = $this->Pictures->newEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();

            $image = $data['image']; //put the image data into a var for easy use
            $ext = explode('/', $image['type'])[1]; //get the extension
            
            $path = WWW_ROOT . 'img/properties/';
            $filename = $property_id . '_'. uniqid() . '.' . $ext;
            if(move_uploaded_file($image['tmp_name'], $path . $filename))
            {
                //prepare the filename for database entry
                unset($data['image']);
                $data['url'] = 'img/properties/' . $filename;
                $data['property_id'] = $property_id;

                $picture = $this->Pictures->patchEntity($picture, $data);
                // pr($picture); die();
                if ($this->Pictures->save($picture)) {
                    $this->Flash->success(__('The picture has been saved.'));
                    return $this->redirect('/admin/properties/' . $property_id);
                }
                $this->Flash->error(__('The picture could not be saved. Please, try again.'));
            } else {
                $this->Flash->error(__('The picture could not be saved. Please, try again.'));
            }
        }
        $property = $this->Pictures->Properties->get($property_id);
        $this->set(compact('picture', 'property'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Picture id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    // public function edit($id = null)
    // {
    //     $picture = $this->Pictures->get($id, [
    //         'contain' => []
    //     ]);
    //     if ($this->request->is(['patch', 'post', 'put'])) {
    //         $picture = $this->Pictures->patchEntity($picture, $this->request->getData());
    //         if ($this->Pictures->save($picture)) {
    //             $this->Flash->success(__('The picture has been saved.'));

    //             return $this->redirect(['action' => 'index']);
    //         }
    //         $this->Flash->error(__('The picture could not be saved. Please, try again.'));
    //     }
    //     $properties = $this->Pictures->Properties->find('list', ['limit' => 200]);
    //     $this->set(compact('picture', 'properties'));
    // }

    /**
     * Delete method
     *
     * @param string|null $id Picture id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($property_id = null, $id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $picture = $this->Pictures->get($id);
        unlink(WWW_ROOT . $picture->url);
        if ($this->Pictures->delete($picture)) {
            $this->Flash->success(__('The picture has been deleted.'));
            $this->redirect('/admin/properties/' . $property_id);
        } else {
            $this->Flash->error(__('The picture could not be deleted. Please, try again.'));
            $this->redirect('/admin/properties/' . $property_id);
        }
        return $this->redirect(['action' => 'index']);
    }
}
