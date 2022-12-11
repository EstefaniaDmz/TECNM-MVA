<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Empleadodocumento Controller
 *
 * @property \App\Model\Table\EmpleadodocumentoTable $Empleadodocumento
 * @method \App\Model\Entity\Empleadodocumento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmpleadodocumentoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $empleadodocumento = $this->paginate($this->Empleadodocumento);

        $this->set(compact('empleadodocumento'));
    }

    /**
     * View method
     *
     * @param string|null $id Empleadodocumento id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $empleadodocumento = $this->Empleadodocumento->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('empleadodocumento'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $empleadodocumento = $this->Empleadodocumento->newEmptyEntity();
        if ($this->request->is('post')) {
            $empleadodocumento = $this->Empleadodocumento->patchEntity($empleadodocumento, $this->request->getData());
            if ($this->Empleadodocumento->save($empleadodocumento)) {
                $this->Flash->success(__('The empleadodocumento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The empleadodocumento could not be saved. Please, try again.'));
        }
        $this->set(compact('empleadodocumento'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Empleadodocumento id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $empleadodocumento = $this->Empleadodocumento->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $empleadodocumento = $this->Empleadodocumento->patchEntity($empleadodocumento, $this->request->getData());
            if ($this->Empleadodocumento->save($empleadodocumento)) {
                $this->Flash->success(__('The empleadodocumento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The empleadodocumento could not be saved. Please, try again.'));
        }
        $this->set(compact('empleadodocumento'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Empleadodocumento id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $empleadodocumento = $this->Empleadodocumento->get($id);
        if ($this->Empleadodocumento->delete($empleadodocumento)) {
            $this->Flash->success(__('The empleadodocumento has been deleted.'));
        } else {
            $this->Flash->error(__('The empleadodocumento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
