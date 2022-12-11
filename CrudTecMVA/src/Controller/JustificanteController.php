<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Justificante Controller
 *
 * @property \App\Model\Table\JustificanteTable $Justificante
 * @method \App\Model\Entity\Justificante[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class JustificanteController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $justificante = $this->paginate($this->Justificante);

        $this->set(compact('justificante'));
    }

    /**
     * View method
     *
     * @param string|null $id Justificante id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $justificante = $this->Justificante->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('justificante'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $justificante = $this->Justificante->newEmptyEntity();
        if ($this->request->is('post')) {
            $justificante = $this->Justificante->patchEntity($justificante, $this->request->getData());
            if ($this->Justificante->save($justificante)) {
                $this->Flash->success(__('The justificante has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The justificante could not be saved. Please, try again.'));
        }
        $this->set(compact('justificante'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Justificante id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $justificante = $this->Justificante->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $justificante = $this->Justificante->patchEntity($justificante, $this->request->getData());
            if ($this->Justificante->save($justificante)) {
                $this->Flash->success(__('The justificante has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The justificante could not be saved. Please, try again.'));
        }
        $this->set(compact('justificante'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Justificante id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $justificante = $this->Justificante->get($id);
        if ($this->Justificante->delete($justificante)) {
            $this->Flash->success(__('The justificante has been deleted.'));
        } else {
            $this->Flash->error(__('The justificante could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
