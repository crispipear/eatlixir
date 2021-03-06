<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[] paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }
    public function initialize()
	{
    	parent::initialize();
      $this->Auth->allow(['logout', 'add', 'configure']);
      $this->loadComponent('RequestHandler');
	}

	public function logout()
	{
      $this->Flash->success('You are now logged out.');
    	return $this->redirect($this->Auth->logout());
	}
	public function login()
	{
    	if ($this->request->is('post')) {
        	$user = $this->Auth->identify();
        	if ($user) {
            	$this->Auth->setUser($user);
              // $this->log(var_export($user,true),'debug');
              $uid = '/'.$this->Auth->user('id');
            	return $this->redirect(['action' => 'view'.$uid]);
        	}
        	$this->Flash->error('Your username or password is incorrect.');
    	}
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
            'contain' => []
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }
    public function configure()
	   {
    	// Check for User Already Setup
    	$query = $this->Users->find('all')->where(['Users.id' => 1]);
    	$user = $query->first();
    	if ($user) {
        	$this->Flash->error(
    	        __('This application has already been configured.')
            	);
        	$this->redirect('/');
    	}

    	// COnfigure New User
    	$user = $this->Users->newEntity();
    	if ($this->request->is('post')) {
     	   $user = $this->Users->patchEntity($user, $this->request->data);
        	$user->id = 1;
        	$user->username = $user->username;
        	$user->name = 'Administrator';
        	$user->role = 'admin';
        	$user->fail_count = 0;
        	if ($this->Users->save($user)) {
            	$this->Flash->success(__('The user has been saved.'));
            	return $this->redirect(['action' => 'index']);
        	} else {
	            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        	}
    	}
    	$this->set(compact('user'));
    	$this->set('_serialize', ['user']);
	}
  public function addtype()
    {
      $id = $this->Auth->user('id');
		  $this->RequestHandler->renderAs($this, 'json');
      $user = $this->Users->get($id, [
        'contain' => []
      ]);
      $this->log(var_export($user,true),'debug');

      if ($this->request->is('post')) {
			$data = $this->request->input('json_decode', true);
			$user->bodytype = $data["body_type"];
			  if($this->Users->save($user)) {
          $this->set(compact('user'));
          $this->set('_serialize', ['user']);
        } else {
				  $this->set('error',$this->error);
				  $this->set('_serialize', ['error']);
        }
      }
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
            $user = $this->Users->patchEntity($user, $this->request->getData());
            // $user->id = $total+1;
            $user->name = 'Registered User';
            $user->role = 'user';
            $user->fail_count = 0;
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'login']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
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
        $return = 'view/' . $id;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => $return]);
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
}
