<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Turno Controller
 *
 * @property \App\Model\Table\TurnoTable $Turno
 * @method \App\Model\Entity\Turno[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TurnoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $turno = $this->paginate($this->Turno);

        $this->set(compact('turno'));
    }

    /**
     * View method
     *
     * @param string|null $id Turno id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $turno = $this->Turno->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('turno'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $turno = $this->Turno->newEmptyEntity();
        if ($this->request->is('post')) {
            $turno = $this->Turno->patchEntity($turno, $this->request->getData());
            if ($this->Turno->save($turno)) {
                $this->Flash->success(__('The turno has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The turno could not be saved. Please, try again.'));
        }
        $this->set(compact('turno'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Turno id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $turno = $this->Turno->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $turno = $this->Turno->patchEntity($turno, $this->request->getData());
            if ($this->Turno->save($turno)) {
                $this->Flash->success(__('The turno has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The turno could not be saved. Please, try again.'));
        }
        $this->set(compact('turno'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Turno id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $turno = $this->Turno->get($id);
        if ($this->Turno->delete($turno)) {
            $this->Flash->success(__('The turno has been deleted.'));
        } else {
            $this->Flash->error(__('The turno could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
