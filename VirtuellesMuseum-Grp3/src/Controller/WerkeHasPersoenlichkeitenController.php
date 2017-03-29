<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * WerkeHasPersoenlichkeiten Controller
 *
 * @property \App\Model\Table\WerkeHasPersoenlichkeitenTable $WerkeHasPersoenlichkeiten
 */
class WerkeHasPersoenlichkeitenController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $werkeHasPersoenlichkeiten = $this->paginate($this->WerkeHasPersoenlichkeiten);

        $this->set(compact('werkeHasPersoenlichkeiten'));
        $this->set('_serialize', ['werkeHasPersoenlichkeiten']);
    }

    /**
     * View method
     *
     * @param string|null $id Werke Has Persoenlichkeiten id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $werkeHasPersoenlichkeiten = $this->WerkeHasPersoenlichkeiten->get($id, [
            'contain' => []
        ]);

        $this->set('werkeHasPersoenlichkeiten', $werkeHasPersoenlichkeiten);
        $this->set('_serialize', ['werkeHasPersoenlichkeiten']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $werkeHasPersoenlichkeiten = $this->WerkeHasPersoenlichkeiten->newEntity();
        if ($this->request->is('post')) {
            $werkeHasPersoenlichkeiten = $this->WerkeHasPersoenlichkeiten->patchEntity($werkeHasPersoenlichkeiten, $this->request->getData());
            if ($this->WerkeHasPersoenlichkeiten->save($werkeHasPersoenlichkeiten)) {
                $this->Flash->success(__('The werke has persoenlichkeiten has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The werke has persoenlichkeiten could not be saved. Please, try again.'));
        }
        $this->set(compact('werkeHasPersoenlichkeiten'));
        $this->set('_serialize', ['werkeHasPersoenlichkeiten']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Werke Has Persoenlichkeiten id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $werkeHasPersoenlichkeiten = $this->WerkeHasPersoenlichkeiten->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $werkeHasPersoenlichkeiten = $this->WerkeHasPersoenlichkeiten->patchEntity($werkeHasPersoenlichkeiten, $this->request->getData());
            if ($this->WerkeHasPersoenlichkeiten->save($werkeHasPersoenlichkeiten)) {
                $this->Flash->success(__('The werke has persoenlichkeiten has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The werke has persoenlichkeiten could not be saved. Please, try again.'));
        }
        $this->set(compact('werkeHasPersoenlichkeiten'));
        $this->set('_serialize', ['werkeHasPersoenlichkeiten']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Werke Has Persoenlichkeiten id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $werkeHasPersoenlichkeiten = $this->WerkeHasPersoenlichkeiten->get($id);
        if ($this->WerkeHasPersoenlichkeiten->delete($werkeHasPersoenlichkeiten)) {
            $this->Flash->success(__('The werke has persoenlichkeiten has been deleted.'));
        } else {
            $this->Flash->error(__('The werke has persoenlichkeiten could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
