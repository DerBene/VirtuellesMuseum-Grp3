<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Geographisch Controller
 *
 * @property \App\Model\Table\GeographischTable $Geographisch
 */
class GeographischController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $geographisch = $this->paginate($this->Geographisch);

        $this->set(compact('geographisch'));
        $this->set('_serialize', ['geographisch']);
    }

    /**
     * View method
     *
     * @param string|null $id Geographisch id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $geographisch = $this->Geographisch->get($id, [
            'contain' => []
        ]);

        $this->set('geographisch', $geographisch);
        $this->set('_serialize', ['geographisch']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $geographisch = $this->Geographisch->newEntity();
        if ($this->request->is('post')) {
            $geographisch = $this->Geographisch->patchEntity($geographisch, $this->request->getData());
            if ($this->Geographisch->save($geographisch)) {
                $this->Flash->success(__('The geographisch has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The geographisch could not be saved. Please, try again.'));
        }
        $this->set(compact('geographisch'));
        $this->set('_serialize', ['geographisch']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Geographisch id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $geographisch = $this->Geographisch->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $geographisch = $this->Geographisch->patchEntity($geographisch, $this->request->getData());
            if ($this->Geographisch->save($geographisch)) {
                $this->Flash->success(__('The geographisch has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The geographisch could not be saved. Please, try again.'));
        }
        $this->set(compact('geographisch'));
        $this->set('_serialize', ['geographisch']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Geographisch id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $geographisch = $this->Geographisch->get($id);
        if ($this->Geographisch->delete($geographisch)) {
            $this->Flash->success(__('The geographisch has been deleted.'));
        } else {
            $this->Flash->error(__('The geographisch could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
