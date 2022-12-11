<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Documento Controller
 *
 * @property \App\Model\Table\DocumentoTable $Documento
 * @method \App\Model\Entity\Documento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DocumentoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $documento = $this->paginate($this->Documento);

        $this->set(compact('documento'));
    }

    /**
     * View method
     *
     * @param string|null $id Documento id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $documento = $this->Documento->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('documento'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $documento = $this->Documento->newEmptyEntity();
        if ($this->request->is('post')) {
            $documento = $this->Documento->patchEntity($documento, $this->request->getData());
            if ($this->Documento->save($documento)) {
                $this->Flash->success(__('The documento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The documento could not be saved. Please, try again.'));
        }
        $this->set(compact('documento'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Documento id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $documento = $this->Documento->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $documento = $this->Documento->patchEntity($documento, $this->request->getData());
            if ($this->Documento->save($documento)) {
                $this->Flash->success(__('The documento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The documento could not be saved. Please, try again.'));
        }
        $this->set(compact('documento'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Documento id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $documento = $this->Documento->get($id);
        if ($this->Documento->delete($documento)) {
            $this->Flash->success(__('The documento has been deleted.'));
        } else {
            $this->Flash->error(__('The documento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
