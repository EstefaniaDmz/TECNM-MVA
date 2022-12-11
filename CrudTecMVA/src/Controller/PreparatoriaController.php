<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Preparatoria Controller
 *
 * @property \App\Model\Table\PreparatoriaTable $Preparatoria
 * @method \App\Model\Entity\Preparatorium[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PreparatoriaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $preparatoria = $this->paginate($this->Preparatoria);

        $this->set(compact('preparatoria'));
    }

    /**
     * View method
     *
     * @param string|null $id Preparatorium id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $preparatorium = $this->Preparatoria->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('preparatorium'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $preparatorium = $this->Preparatoria->newEmptyEntity();
        if ($this->request->is('post')) {
            $preparatorium = $this->Preparatoria->patchEntity($preparatorium, $this->request->getData());
            if ($this->Preparatoria->save($preparatorium)) {
                $this->Flash->success(__('The preparatorium has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The preparatorium could not be saved. Please, try again.'));
        }
        $this->set(compact('preparatorium'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Preparatorium id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $preparatorium = $this->Preparatoria->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $preparatorium = $this->Preparatoria->patchEntity($preparatorium, $this->request->getData());
            if ($this->Preparatoria->save($preparatorium)) {
                $this->Flash->success(__('The preparatorium has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The preparatorium could not be saved. Please, try again.'));
        }
        $this->set(compact('preparatorium'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Preparatorium id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $preparatorium = $this->Preparatoria->get($id);
        if ($this->Preparatoria->delete($preparatorium)) {
            $this->Flash->success(__('The preparatorium has been deleted.'));
        } else {
            $this->Flash->error(__('The preparatorium could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
