<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tipopreparatoria Controller
 *
 * @property \App\Model\Table\TipopreparatoriaTable $Tipopreparatoria
 * @method \App\Model\Entity\Tipopreparatorium[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TipopreparatoriaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $tipopreparatoria = $this->paginate($this->Tipopreparatoria);

        $this->set(compact('tipopreparatoria'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipopreparatorium id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipopreparatorium = $this->Tipopreparatoria->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('tipopreparatorium'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipopreparatorium = $this->Tipopreparatoria->newEmptyEntity();
        if ($this->request->is('post')) {
            $tipopreparatorium = $this->Tipopreparatoria->patchEntity($tipopreparatorium, $this->request->getData());
            if ($this->Tipopreparatoria->save($tipopreparatorium)) {
                $this->Flash->success(__('The tipopreparatorium has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipopreparatorium could not be saved. Please, try again.'));
        }
        $this->set(compact('tipopreparatorium'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipopreparatorium id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipopreparatorium = $this->Tipopreparatoria->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipopreparatorium = $this->Tipopreparatoria->patchEntity($tipopreparatorium, $this->request->getData());
            if ($this->Tipopreparatoria->save($tipopreparatorium)) {
                $this->Flash->success(__('The tipopreparatorium has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipopreparatorium could not be saved. Please, try again.'));
        }
        $this->set(compact('tipopreparatorium'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipopreparatorium id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipopreparatorium = $this->Tipopreparatoria->get($id);
        if ($this->Tipopreparatoria->delete($tipopreparatorium)) {
            $this->Flash->success(__('The tipopreparatorium has been deleted.'));
        } else {
            $this->Flash->error(__('The tipopreparatorium could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
