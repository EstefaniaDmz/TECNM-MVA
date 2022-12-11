<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Asignatura Controller
 *
 * @property \App\Model\Table\AsignaturaTable $Asignatura
 * @method \App\Model\Entity\Asignatura[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AsignaturaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $asignatura = $this->paginate($this->Asignatura);

        $this->set(compact('asignatura'));
    }

    /**
     * View method
     *
     * @param string|null $id Asignatura id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $asignatura = $this->Asignatura->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('asignatura'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $asignatura = $this->Asignatura->newEmptyEntity();
        if ($this->request->is('post')) {
            $asignatura = $this->Asignatura->patchEntity($asignatura, $this->request->getData());
            if ($this->Asignatura->save($asignatura)) {
                $this->Flash->success(__('The asignatura has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The asignatura could not be saved. Please, try again.'));
        }
        $this->set(compact('asignatura'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Asignatura id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $asignatura = $this->Asignatura->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $asignatura = $this->Asignatura->patchEntity($asignatura, $this->request->getData());
            if ($this->Asignatura->save($asignatura)) {
                $this->Flash->success(__('The asignatura has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The asignatura could not be saved. Please, try again.'));
        }
        $this->set(compact('asignatura'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Asignatura id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $asignatura = $this->Asignatura->get($id);
        if ($this->Asignatura->delete($asignatura)) {
            $this->Flash->success(__('The asignatura has been deleted.'));
        } else {
            $this->Flash->error(__('The asignatura could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
