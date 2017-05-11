<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Mailer\Email;
use Cake\Auth\DefaultPasswordHasher;


/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
     public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
        $this->Auth->allow(['logout']);
		$this->Auth->allow(['passwordreset']);
		$this->Auth->allow(['passwordreseter']);
		$this->Auth->allow(['login']);
		$this->Auth->allow(['verify']);
        $this->Auth->deny(['index']);
    }

    public function login()   //Login seite mit Identifizierung
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
			
			if($user['emailverificated'] == true)
			{
				if ($user) {
					$this->Auth->setUser($user);
					return $this->redirect($this->Auth->redirectUrl());
				}
			}else
			{
				$this->Flash->error(__('Dein Email Adresse wurde noch nicht bestätigt'));
				return $this->redirect(['action' => 'login']);
			}
            $this->Flash->error(__('Ungültiger Benutzername oder Passwort'));
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

     public function index()   // Alle User anzeigen
     {
        $this->set('users', $this->Users->find('all'));
    }

    public function view($id)   //vom Framework zur Verfügung gestellt
    {
        $user = $this->Users->get($id);
        $this->set(compact('user'));
    }

    public function add()  //vom Framework zur Verfügung gestellt
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());  //Rest
			$user->emailverificated = false;
			$user->resetkey = (new DefaultPasswordHasher)->hash($user->email);
            if ($this->Users->save($user)) {
				$this->email($user->id);
                $this->Flash->success(__('Ein Link zm Bestätigen der Email Adressen wurde an folgende Email Adresse versandt ' . $user->email));
                return $this->redirect(['action' => 'add']);
            }
            $this->Flash->error(__('Der Benutzer konnte nicht hinzugefügt werden.'));
        }
        $this->set('user', $user);
    }
	
	public function verify()
	{
		
		$code = $this->request->query('code');
		$id = $this->request->query('id');
		$user = $this->Users->get($id);
	
		if($user->resetkey == $code)
		{
			$user->emailverificated = true;
			$user->resetkey = NULL;
			if ($this->Users->save($user)) {
				$this->Flash->success(__('Die Emailadresse wurde erfolgreich aktiviert.'));
				return $this->redirect(['action' => 'index']);
			}
		}
		$this->Flash->error(__('Ihr Account wurde bereits aktiviert'));		
	}
	
	
	public function email($id)
	{	
		$email = new Email('vmuseum');
		$user = $this->Users->get($id);
		//$email->to($user->email);
		$email->to($user->email);
		$email->subject('E-Mail Bestätigung - Virtuelles Museum');
		$email->setEmailFormat('html');
		$email->send('Hallo ' . $user->username. ',<br><br>' .
		'Bitte klicken Sie auf den Link, um ihre E-Mail Adresse zu verifizieren.<br><br>' . 
		'http://localhost/VirtuellesMuseum-Grp3/users/verify?id=' . $user->id . '&code=' . $user->resetkey.'<br><br>'.
		'Mit freundlichen Grüßen,<br>'.
		'Virtuelles Museum');
		;
	}
	
	public function emailResetPW($id)
	{	
		$email = new Email('vmuseum');
		$user = $this->Users->get($id);
		//$email->to($user->email);
		$email->to($user->email);
		$email->subject('Password Zurücksetzen - Virtuelles Museum');
		$email->setEmailFormat('html');
		$email->send('Hallo ' . $user->username. ',<br><br>' .
		'Bitte klicken Sie auf den Link, um ihr Passwort zurückzusetzen.<br><br>' . 
		'http://localhost/VirtuellesMuseum-Grp3/users/passwordreseter?id=' . $user->id . '&code=' . $user->resetkey.'<br><br>'.
		'Mit freundlichen Grüßen,<br>'.
		'Virtuelles Museum');
		;
	}
	
	
	public function passwordreset()
	{
		if ($this->request->is('post')) {
			$data = $this->request->getData();
			$users = $this->Users->find('all');
			
			foreach($users as $user)
			{	
				if($data['email'] == $user->email)
				{
					$user->resetkey = (new DefaultPasswordHasher)->hash($user->email);
					if ($this->Users->save($user)) {
						$this->emailResetPW($user->id);
						$this->Flash->success(__('Ein Link zum zurücksetzen des Passworts wurde an ihre Email Adresse versandt.'));
						return $this->redirect(['action' => 'login']);
					}
				}
			}
			$this->Flash->success(__('Kein Account mit der angegebenen Email Adresse gefunden.'));
		}
	}	
	
	public function passwordreseter()
	{
		$code = $this->request->query('code');
		$id = $this->request->query('id');
		$user = $this->Users->get($id);
		
		if($user->resetkey == $code)
		{
			if ($this->request->is('post')) {
				$data = $this->request->getData();
				if($data['password'] == $data['passwordCheck']){
					
					$user->resetkey = NULL;
					$user->password = $data['password'];
					if ($this->Users->save($user)) {
						$this->Flash->success(__('Dein Passwort wurde geändert'));
						return $this->redirect(['action' => 'login']);
					}
				}else
					$this->Flash->error(__('Die Passwörter stimmen nicht überein'));
				
			}
		}
		else
			$this->Flash->error(__('Dein ResetCode ist abgelaufen, bitte nochmal Passwort vergessen durchführen.'));
	}
	

	
    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)  //vom Framework zur Verfügung gestellt
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());  //Rest
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }
	
    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
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
}
