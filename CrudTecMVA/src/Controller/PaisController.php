<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Pais Controller
 *
 * @property \App\Model\Table\PaisTable $Pais
 * @method \App\Model\Entity\Pai[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PaisController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $pais = $this->paginate($this->Pais);

        $this->set(compact('pais'));
    }

    /**
     * View method
     *
     * @param string|null $id Pai id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pai = $this->Pais->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('pai'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pai = $this->Pais->newEmptyEntity();
        if ($this->request->is('post')) {
            $pai = $this->Pais->patchEntity($pai, $this->request->getData());
            if ($this->Pais->save($pai)) {
                $this->Flash->success(__('The pai has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pai could not be saved. Please, try again.'));
        }
        $this->set(compact('pai'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pai id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pai = $this->Pais->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pai = $this->Pais->patchEntity($pai, $this->request->getData());
            if ($this->Pais->save($pai)) {
                $this->Flash->success(__('The pai has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pai could not be saved. Please, try again.'));
        }
        $this->set(compact('pai'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pai id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pai = $this->Pais->get($id);
        if ($this->Pais->delete($pai)) {
            $this->Flash->success(__('The pai has been deleted.'));
        } else {
            $this->Flash->error(__('The pai could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
