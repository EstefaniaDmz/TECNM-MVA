<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Consumible Controller
 *
 * @property \App\Model\Table\ConsumibleTable $Consumible
 * @method \App\Model\Entity\Consumible[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConsumibleController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $consumible = $this->paginate($this->Consumible);

        $this->set(compact('consumible'));
    }

    /**
     * View method
     *
     * @param string|null $id Consumible id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $consumible = $this->Consumible->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('consumible'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $consumible = $this->Consumible->newEmptyEntity();
        if ($this->request->is('post')) {
            $consumible = $this->Consumible->patchEntity($consumible, $this->request->getData());
            if ($this->Consumible->save($consumible)) {
                $this->Flash->success(__('The consumible has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The consumible could not be saved. Please, try again.'));
        }
        $this->set(compact('consumible'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Consumible id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $consumible = $this->Consumible->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $consumible = $this->Consumible->patchEntity($consumible, $this->request->getData());
            if ($this->Consumible->save($consumible)) {
                $this->Flash->success(__('The consumible has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The consumible could not be saved. Please, try again.'));
        }
        $this->set(compact('consumible'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Consumible id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $consumible = $this->Consumible->get($id);
        if ($this->Consumible->delete($consumible)) {
            $this->Flash->success(__('The consumible has been deleted.'));
        } else {
            $this->Flash->error(__('The consumible could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
