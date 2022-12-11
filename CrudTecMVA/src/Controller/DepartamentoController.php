<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Departamento Controller
 *
 * @property \App\Model\Table\DepartamentoTable $Departamento
 * @method \App\Model\Entity\Departamento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DepartamentoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $departamento = $this->paginate($this->Departamento);

        $this->set(compact('departamento'));
    }

    /**
     * View method
     *
     * @param string|null $id Departamento id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $departamento = $this->Departamento->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('departamento'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $departamento = $this->Departamento->newEmptyEntity();
        if ($this->request->is('post')) {
            $departamento = $this->Departamento->patchEntity($departamento, $this->request->getData());
            if ($this->Departamento->save($departamento)) {
                $this->Flash->success(__('The departamento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The departamento could not be saved. Please, try again.'));
        }
        $this->set(compact('departamento'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Departamento id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $departamento = $this->Departamento->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $departamento = $this->Departamento->patchEntity($departamento, $this->request->getData());
            if ($this->Departamento->save($departamento)) {
                $this->Flash->success(__('The departamento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The departamento could not be saved. Please, try again.'));
        }
        $this->set(compact('departamento'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Departamento id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $departamento = $this->Departamento->get($id);
        if ($this->Departamento->delete($departamento)) {
            $this->Flash->success(__('The departamento has been deleted.'));
        } else {
            $this->Flash->error(__('The departamento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
