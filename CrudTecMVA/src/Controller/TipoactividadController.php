<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tipoactividad Controller
 *
 * @property \App\Model\Table\TipoactividadTable $Tipoactividad
 * @method \App\Model\Entity\Tipoactividad[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TipoactividadController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $tipoactividad = $this->paginate($this->Tipoactividad);

        $this->set(compact('tipoactividad'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipoactividad id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipoactividad = $this->Tipoactividad->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('tipoactividad'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipoactividad = $this->Tipoactividad->newEmptyEntity();
        if ($this->request->is('post')) {
            $tipoactividad = $this->Tipoactividad->patchEntity($tipoactividad, $this->request->getData());
            if ($this->Tipoactividad->save($tipoactividad)) {
                $this->Flash->success(__('The tipoactividad has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipoactividad could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoactividad'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipoactividad id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipoactividad = $this->Tipoactividad->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipoactividad = $this->Tipoactividad->patchEntity($tipoactividad, $this->request->getData());
            if ($this->Tipoactividad->save($tipoactividad)) {
                $this->Flash->success(__('The tipoactividad has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipoactividad could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoactividad'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipoactividad id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipoactividad = $this->Tipoactividad->get($id);
        if ($this->Tipoactividad->delete($tipoactividad)) {
            $this->Flash->success(__('The tipoactividad has been deleted.'));
        } else {
            $this->Flash->error(__('The tipoactividad could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
