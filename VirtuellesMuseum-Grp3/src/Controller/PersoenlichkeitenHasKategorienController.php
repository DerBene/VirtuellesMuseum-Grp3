<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PersoenlichkeitenHasKategorien Controller
 *
 * @property \App\Model\Table\PersoenlichkeitenHasKategorienTable $PersoenlichkeitenHasKategorien
 */
class PersoenlichkeitenHasKategorienController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $persoenlichkeitenHasKategorien = $this->paginate($this->PersoenlichkeitenHasKategorien);

		$loginvalue = $this->request->session()->read('Auth.User.username');
		
		if(is_null($loginvalue))
		{
			$login = false;
		}else{
			$login = true;
		}
		$this->set(compact('login'));
		$this->set('_serialize', ['login']);
		
		
        $this->set(compact('persoenlichkeitenHasKategorien'));
        $this->set('_serialize', ['persoenlichkeitenHasKategorien']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $persoenlichkeitenHasKategorien = $this->PersoenlichkeitenHasKategorien->newEntity();
        if ($this->request->is('post')) {
            $persoenlichkeitenHasKategorien = $this->PersoenlichkeitenHasKategorien->patchEntity($persoenlichkeitenHasKategorien, $this->request->getData());
            if ($this->PersoenlichkeitenHasKategorien->save($persoenlichkeitenHasKategorien)) {
                $this->Flash->success(__('The persoenlichkeiten has kategorien has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The persoenlichkeiten has kategorien could not be saved. Please, try again.'));
        }
        $this->set(compact('persoenlichkeitenHasKategorien'));
        $this->set('_serialize', ['persoenlichkeitenHasKategorien']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Persoenlichkeiten Has Kategorien id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $persoenlichkeitenHasKategorien = $this->PersoenlichkeitenHasKategorien->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $persoenlichkeitenHasKategorien = $this->PersoenlichkeitenHasKategorien->patchEntity($persoenlichkeitenHasKategorien, $this->request->getData());
            if ($this->PersoenlichkeitenHasKategorien->save($persoenlichkeitenHasKategorien)) {
                $this->Flash->success(__('The persoenlichkeiten has kategorien has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The persoenlichkeiten has kategorien could not be saved. Please, try again.'));
        }
        $this->set(compact('persoenlichkeitenHasKategorien'));
        $this->set('_serialize', ['persoenlichkeitenHasKategorien']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Persoenlichkeiten Has Kategorien id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $persoenlichkeitenHasKategorien = $this->PersoenlichkeitenHasKategorien->get($id);
        if ($this->PersoenlichkeitenHasKategorien->delete($persoenlichkeitenHasKategorien)) {
            $this->Flash->success(__('The persoenlichkeiten has kategorien has been deleted.'));
        } else {
            $this->Flash->error(__('The persoenlichkeiten has kategorien could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
