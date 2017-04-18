<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Persoenlichkeiten Controller
 *
 * @property \App\Model\Table\PersoenlichkeitenTable $Persoenlichkeiten
 */
class PersoenlichkeitenController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $persoenlichkeiten = $this->paginate($this->Persoenlichkeiten);
		$loginvalue = $this->request->session()->read('Auth.User.username');
		
		if(is_null($loginvalue))
		{
			$login = false;
		}else{
			$login = true;
		}
		$this->set(compact('login'));
		$this->set('_serialize', ['login']);

        $this->set(compact('persoenlichkeiten'));
        $this->set('_serialize', ['persoenlichkeiten']);
    }

    /**
     * View method
     *
     * @param string|null $id Persoenlichkeiten id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $persoenlichkeiten = $this->Persoenlichkeiten->get($id, [
            'contain' => []
        ]);

        $this->set('persoenlichkeiten', $persoenlichkeiten);
        $this->set('_serialize', ['persoenlichkeiten']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $persoenlichkeiten = $this->Persoenlichkeiten->newEntity();
        if ($this->request->is('post')) {
            $persoenlichkeiten = $this->Persoenlichkeiten->patchEntity($persoenlichkeiten, $this->request->getData());
            if ($this->Persoenlichkeiten->save($persoenlichkeiten)) {
                $this->Flash->success(__('The persoenlichkeiten has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The persoenlichkeiten could not be saved. Please, try again.'));
        }
        $this->set(compact('persoenlichkeiten'));
        $this->set('_serialize', ['persoenlichkeiten']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Persoenlichkeiten id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $persoenlichkeiten = $this->Persoenlichkeiten->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $persoenlichkeiten = $this->Persoenlichkeiten->patchEntity($persoenlichkeiten, $this->request->getData());
            if ($this->Persoenlichkeiten->save($persoenlichkeiten)) {
                $this->Flash->success(__('The persoenlichkeiten has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The persoenlichkeiten could not be saved. Please, try again.'));
        }
        $this->set(compact('persoenlichkeiten'));
        $this->set('_serialize', ['persoenlichkeiten']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Persoenlichkeiten id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $persoenlichkeiten = $this->Persoenlichkeiten->get($id);
        if ($this->Persoenlichkeiten->delete($persoenlichkeiten)) {
            $this->Flash->success(__('The persoenlichkeiten has been deleted.'));
        } else {
            $this->Flash->error(__('The persoenlichkeiten could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
