<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Medrecipes Controller
 *
 * @property \App\Model\Table\MedrecipesTable $Medrecipes
 *
 * @method \App\Model\Entity\Medrecipe[] paginate($object = null, array $settings = [])
 */
class MedrecipesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
     public function initialize()
     {
       parent::initialize();
       $this->Auth->allow(['index','all']);
     }
    public function index()
    {
        $medrecipes = $this->paginate($this->Medrecipes);

        $this->set(compact('medrecipes'));
        $this->set('_serialize', ['medrecipes']);
    }

    /**
     * View method
     *
     * @param string|null $id Medrecipe id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $medrecipe = $this->Medrecipes->get($id, [
            'contain' => []
        ]);

        $this->set('medrecipe', $medrecipe);
        $this->set('_serialize', ['medrecipe']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $medrecipe = $this->Medrecipes->newEntity();
        if ($this->request->is('post')) {
            $medrecipe = $this->Medrecipes->patchEntity($medrecipe, $this->request->getData());
            if ($this->Medrecipes->save($medrecipe)) {
                $this->Flash->success(__('The medrecipe has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The medrecipe could not be saved. Please, try again.'));
        }
        $this->set(compact('medrecipe'));
        $this->set('_serialize', ['medrecipe']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Medrecipe id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $medrecipe = $this->Medrecipes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $medrecipe = $this->Medrecipes->patchEntity($medrecipe, $this->request->getData());
            if ($this->Medrecipes->save($medrecipe)) {
                $this->Flash->success(__('The medrecipe has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The medrecipe could not be saved. Please, try again.'));
        }
        $this->set(compact('medrecipe'));
        $this->set('_serialize', ['medrecipe']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Medrecipe id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $medrecipe = $this->Medrecipes->get($id);
        if ($this->Medrecipes->delete($medrecipe)) {
            $this->Flash->success(__('The medrecipe has been deleted.'));
        } else {
            $this->Flash->error(__('The medrecipe could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function all () {
      $this->set('Medrecipes',$this->Medrecipes->find('all',array('recursive' => 0)));
      $this->RequestHandler->renderAs($this, 'json');
      $this->set('_serialize',array('Medrecipes'));
    }
}
