<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Periodo Controller
 *
 * @property \App\Model\Table\PeriodoTable $Periodo
 * @method \App\Model\Entity\Periodo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PeriodoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $periodo = $this->paginate($this->Periodo);

        $this->set(compact('periodo'));
    }

    /**
     * View method
     *
     * @param string|null $id Periodo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $periodo = $this->Periodo->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('periodo'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $periodo = $this->Periodo->newEmptyEntity();
        if ($this->request->is('post')) {
            $periodo = $this->Periodo->patchEntity($periodo, $this->request->getData());
            if ($this->Periodo->save($periodo)) {
                $this->Flash->success(__('The periodo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The periodo could not be saved. Please, try again.'));
        }
        $this->set(compact('periodo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Periodo id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $periodo = $this->Periodo->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $periodo = $this->Periodo->patchEntity($periodo, $this->request->getData());
            if ($this->Periodo->save($periodo)) {
                $this->Flash->success(__('The periodo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The periodo could not be saved. Please, try again.'));
        }
        $this->set(compact('periodo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Periodo id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $periodo = $this->Periodo->get($id);
        if ($this->Periodo->delete($periodo)) {
            $this->Flash->success(__('The periodo has been deleted.'));
        } else {
            $this->Flash->error(__('The periodo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
