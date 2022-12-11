<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tipodocumento Controller
 *
 * @property \App\Model\Table\TipodocumentoTable $Tipodocumento
 * @method \App\Model\Entity\Tipodocumento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TipodocumentoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $tipodocumento = $this->paginate($this->Tipodocumento);

        $this->set(compact('tipodocumento'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipodocumento id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipodocumento = $this->Tipodocumento->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('tipodocumento'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipodocumento = $this->Tipodocumento->newEmptyEntity();
        if ($this->request->is('post')) {
            $tipodocumento = $this->Tipodocumento->patchEntity($tipodocumento, $this->request->getData());
            if ($this->Tipodocumento->save($tipodocumento)) {
                $this->Flash->success(__('The tipodocumento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipodocumento could not be saved. Please, try again.'));
        }
        $this->set(compact('tipodocumento'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipodocumento id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipodocumento = $this->Tipodocumento->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipodocumento = $this->Tipodocumento->patchEntity($tipodocumento, $this->request->getData());
            if ($this->Tipodocumento->save($tipodocumento)) {
                $this->Flash->success(__('The tipodocumento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipodocumento could not be saved. Please, try again.'));
        }
        $this->set(compact('tipodocumento'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipodocumento id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipodocumento = $this->Tipodocumento->get($id);
        if ($this->Tipodocumento->delete($tipodocumento)) {
            $this->Flash->success(__('The tipodocumento has been deleted.'));
        } else {
            $this->Flash->error(__('The tipodocumento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
