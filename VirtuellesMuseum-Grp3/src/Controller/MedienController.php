<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Medien Controller
 *
 * @property \App\Model\Table\MedienTable $Medien
 */
class MedienController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $medien = $this->paginate($this->Medien);
		$loginvalue = $this->request->session()->read('Auth.User.username');
		
		if(is_null($loginvalue))
		{
			$login = false;
		}else{
			$login = true;
		}
		$this->set(compact('login'));
		$this->set('_serialize', ['login']);

        $this->set(compact('medien'));
        $this->set('_serialize', ['medien']);
    }

    /**
     * View method
     *
     * @param string|null $id Medien id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $medien = $this->Medien->get($id, [
            'contain' => []
        ]);

        $this->set('medien', $medien);
        $this->set('_serialize', ['medien']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $medien = $this->Medien->newEntity();
        if ($this->request->is('post')) {
            $medien = $this->Medien->patchEntity($medien, $this->request->getData());
            if ($this->Medien->save($medien)) {
                $this->Flash->success(__('The medien has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The medien could not be saved. Please, try again.'));
        }
        $this->set(compact('medien'));
        $this->set('_serialize', ['medien']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Medien id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $medien = $this->Medien->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $medien = $this->Medien->patchEntity($medien, $this->request->getData());
            if ($this->Medien->save($medien)) {
                $this->Flash->success(__('The medien has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The medien could not be saved. Please, try again.'));
        }
        $this->set(compact('medien'));
        $this->set('_serialize', ['medien']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Medien id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $medien = $this->Medien->get($id);
        if ($this->Medien->delete($medien)) {
            $this->Flash->success(__('The medien has been deleted.'));
        } else {
            $this->Flash->error(__('The medien could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
