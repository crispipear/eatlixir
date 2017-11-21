<?php
namespace App\Controller;

use App\Controller\AppController;

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
            	return $this->redirect($this->Auth->redirectUrl());
        	}
        	$this->Flash->error('Your username or password is incorrect.');
    	}
	}

	/**
 	* View method
 	*
 	* @param string|null $id User id.
 	* @return \Cake\Network\Response|null
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
        	$user->username = $user->email;
        	$user->name = 'Administrator';
        	$user->role = 'admin';
        	$user->fail_count = 0;
 	       $this->log(var_export($user,true),'debug');
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



	/**
 	* Add method
 	*
 	* @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
 	*/
	public function add()
	{
    	$user = $this->Users->newEntity();
    	if ($this->request->is('post')) {
        	$user = $this->Users->patchEntity($user, $this->request->data);
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

	/**
 	* Edit method
 	*
 	* @param string|null $id User id.
 	* @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
 	* @throws \Cake\Network\Exception\NotFoundException When record not found.
 	*/
	public function edit($id = null)
	{
    	$user = $this->Users->get($id, [
        	'contain' => []
    	]);
    	if ($this->request->is(['patch', 'post', 'put'])) {
        	$user = $this->Users->patchEntity($user, $this->request->data);
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
