<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tipourgencia Controller
 *
 * @property \App\Model\Table\TipourgenciaTable $Tipourgencia
 * @method \App\Model\Entity\Tipourgencium[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TipourgenciaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $tipourgencia = $this->paginate($this->Tipourgencia);

        $this->set(compact('tipourgencia'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipourgencium id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipourgencium = $this->Tipourgencia->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('tipourgencium'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipourgencium = $this->Tipourgencia->newEmptyEntity();
        if ($this->request->is('post')) {
            $tipourgencium = $this->Tipourgencia->patchEntity($tipourgencium, $this->request->getData());
            if ($this->Tipourgencia->save($tipourgencium)) {
                $this->Flash->success(__('The tipourgencium has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipourgencium could not be saved. Please, try again.'));
        }
        $this->set(compact('tipourgencium'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipourgencium id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipourgencium = $this->Tipourgencia->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipourgencium = $this->Tipourgencia->patchEntity($tipourgencium, $this->request->getData());
            if ($this->Tipourgencia->save($tipourgencium)) {
                $this->Flash->success(__('The tipourgencium has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipourgencium could not be saved. Please, try again.'));
        }
        $this->set(compact('tipourgencium'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipourgencium id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipourgencium = $this->Tipourgencia->get($id);
        if ($this->Tipourgencia->delete($tipourgencium)) {
            $this->Flash->success(__('The tipourgencium has been deleted.'));
        } else {
            $this->Flash->error(__('The tipourgencium could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
