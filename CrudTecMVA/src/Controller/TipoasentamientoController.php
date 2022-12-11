<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tipoasentamiento Controller
 *
 * @property \App\Model\Table\TipoasentamientoTable $Tipoasentamiento
 * @method \App\Model\Entity\Tipoasentamiento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TipoasentamientoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $tipoasentamiento = $this->paginate($this->Tipoasentamiento);

        $this->set(compact('tipoasentamiento'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipoasentamiento id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipoasentamiento = $this->Tipoasentamiento->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('tipoasentamiento'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipoasentamiento = $this->Tipoasentamiento->newEmptyEntity();
        if ($this->request->is('post')) {
            $tipoasentamiento = $this->Tipoasentamiento->patchEntity($tipoasentamiento, $this->request->getData());
            if ($this->Tipoasentamiento->save($tipoasentamiento)) {
                $this->Flash->success(__('The tipoasentamiento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipoasentamiento could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoasentamiento'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipoasentamiento id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipoasentamiento = $this->Tipoasentamiento->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipoasentamiento = $this->Tipoasentamiento->patchEntity($tipoasentamiento, $this->request->getData());
            if ($this->Tipoasentamiento->save($tipoasentamiento)) {
                $this->Flash->success(__('The tipoasentamiento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipoasentamiento could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoasentamiento'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipoasentamiento id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipoasentamiento = $this->Tipoasentamiento->get($id);
        if ($this->Tipoasentamiento->delete($tipoasentamiento)) {
            $this->Flash->success(__('The tipoasentamiento has been deleted.'));
        } else {
            $this->Flash->error(__('The tipoasentamiento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
