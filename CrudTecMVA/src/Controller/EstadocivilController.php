<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Estadocivil Controller
 *
 * @property \App\Model\Table\EstadocivilTable $Estadocivil
 * @method \App\Model\Entity\Estadocivil[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EstadocivilController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $estadocivil = $this->paginate($this->Estadocivil);

        $this->set(compact('estadocivil'));
    }

    /**
     * View method
     *
     * @param string|null $id Estadocivil id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $estadocivil = $this->Estadocivil->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('estadocivil'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $estadocivil = $this->Estadocivil->newEmptyEntity();
        if ($this->request->is('post')) {
            $estadocivil = $this->Estadocivil->patchEntity($estadocivil, $this->request->getData());
            if ($this->Estadocivil->save($estadocivil)) {
                $this->Flash->success(__('The estadocivil has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estadocivil could not be saved. Please, try again.'));
        }
        $this->set(compact('estadocivil'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Estadocivil id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $estadocivil = $this->Estadocivil->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $estadocivil = $this->Estadocivil->patchEntity($estadocivil, $this->request->getData());
            if ($this->Estadocivil->save($estadocivil)) {
                $this->Flash->success(__('The estadocivil has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estadocivil could not be saved. Please, try again.'));
        }
        $this->set(compact('estadocivil'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Estadocivil id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $estadocivil = $this->Estadocivil->get($id);
        if ($this->Estadocivil->delete($estadocivil)) {
            $this->Flash->success(__('The estadocivil has been deleted.'));
        } else {
            $this->Flash->error(__('The estadocivil could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
