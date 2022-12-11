<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Asignaturadocente Controller
 *
 * @property \App\Model\Table\AsignaturadocenteTable $Asignaturadocente
 * @method \App\Model\Entity\Asignaturadocente[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AsignaturadocenteController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $asignaturadocente = $this->paginate($this->Asignaturadocente);

        $this->set(compact('asignaturadocente'));
    }

    /**
     * View method
     *
     * @param string|null $id Asignaturadocente id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $asignaturadocente = $this->Asignaturadocente->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('asignaturadocente'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $asignaturadocente = $this->Asignaturadocente->newEmptyEntity();
        if ($this->request->is('post')) {
            $asignaturadocente = $this->Asignaturadocente->patchEntity($asignaturadocente, $this->request->getData());
            if ($this->Asignaturadocente->save($asignaturadocente)) {
                $this->Flash->success(__('The asignaturadocente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The asignaturadocente could not be saved. Please, try again.'));
        }
        $this->set(compact('asignaturadocente'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Asignaturadocente id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $asignaturadocente = $this->Asignaturadocente->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $asignaturadocente = $this->Asignaturadocente->patchEntity($asignaturadocente, $this->request->getData());
            if ($this->Asignaturadocente->save($asignaturadocente)) {
                $this->Flash->success(__('The asignaturadocente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The asignaturadocente could not be saved. Please, try again.'));
        }
        $this->set(compact('asignaturadocente'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Asignaturadocente id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $asignaturadocente = $this->Asignaturadocente->get($id);
        if ($this->Asignaturadocente->delete($asignaturadocente)) {
            $this->Flash->success(__('The asignaturadocente has been deleted.'));
        } else {
            $this->Flash->error(__('The asignaturadocente could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
