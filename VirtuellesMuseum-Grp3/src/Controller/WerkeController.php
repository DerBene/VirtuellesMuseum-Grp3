<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Werke Controller
 *
 * @property \App\Model\Table\WerkeTable $Werke
 */
class WerkeController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $werke = $this->paginate($this->Werke);

        $this->set(compact('werke'));
        $this->set('_serialize', ['werke']);
    }

    /**
     * View method
     *
     * @param string|null $id Werke id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $werke = $this->Werke->get($id, [
            'contain' => []
        ]);

        $this->set('werke', $werke);
        $this->set('_serialize', ['werke']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $werke = $this->Werke->newEntity();
        if ($this->request->is('post')) {
            $werke = $this->Werke->patchEntity($werke, $this->request->getData());
            if ($this->Werke->save($werke)) {
                $this->Flash->success(__('The werke has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The werke could not be saved. Please, try again.'));
        }
        $this->set(compact('werke'));
        $this->set('_serialize', ['werke']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Werke id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $werke = $this->Werke->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $werke = $this->Werke->patchEntity($werke, $this->request->getData());
            if ($this->Werke->save($werke)) {
                $this->Flash->success(__('The werke has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The werke could not be saved. Please, try again.'));
        }
        $this->set(compact('werke'));
        $this->set('_serialize', ['werke']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Werke id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $werke = $this->Werke->get($id);
        if ($this->Werke->delete($werke)) {
            $this->Flash->success(__('The werke has been deleted.'));
        } else {
            $this->Flash->error(__('The werke could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
