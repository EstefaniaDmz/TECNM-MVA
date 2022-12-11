<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tipoorganizacion Controller
 *
 * @property \App\Model\Table\TipoorganizacionTable $Tipoorganizacion
 * @method \App\Model\Entity\Tipoorganizacion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TipoorganizacionController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $tipoorganizacion = $this->paginate($this->Tipoorganizacion);

        $this->set(compact('tipoorganizacion'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipoorganizacion id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipoorganizacion = $this->Tipoorganizacion->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('tipoorganizacion'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipoorganizacion = $this->Tipoorganizacion->newEmptyEntity();
        if ($this->request->is('post')) {
            $tipoorganizacion = $this->Tipoorganizacion->patchEntity($tipoorganizacion, $this->request->getData());
            if ($this->Tipoorganizacion->save($tipoorganizacion)) {
                $this->Flash->success(__('The tipoorganizacion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipoorganizacion could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoorganizacion'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipoorganizacion id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipoorganizacion = $this->Tipoorganizacion->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipoorganizacion = $this->Tipoorganizacion->patchEntity($tipoorganizacion, $this->request->getData());
            if ($this->Tipoorganizacion->save($tipoorganizacion)) {
                $this->Flash->success(__('The tipoorganizacion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipoorganizacion could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoorganizacion'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipoorganizacion id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipoorganizacion = $this->Tipoorganizacion->get($id);
        if ($this->Tipoorganizacion->delete($tipoorganizacion)) {
            $this->Flash->success(__('The tipoorganizacion has been deleted.'));
        } else {
            $this->Flash->error(__('The tipoorganizacion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
