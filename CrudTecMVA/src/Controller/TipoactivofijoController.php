<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tipoactivofijo Controller
 *
 * @property \App\Model\Table\TipoactivofijoTable $Tipoactivofijo
 * @method \App\Model\Entity\Tipoactivofijo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TipoactivofijoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $tipoactivofijo = $this->paginate($this->Tipoactivofijo);

        $this->set(compact('tipoactivofijo'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipoactivofijo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipoactivofijo = $this->Tipoactivofijo->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('tipoactivofijo'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipoactivofijo = $this->Tipoactivofijo->newEmptyEntity();
        if ($this->request->is('post')) {
            $tipoactivofijo = $this->Tipoactivofijo->patchEntity($tipoactivofijo, $this->request->getData());
            if ($this->Tipoactivofijo->save($tipoactivofijo)) {
                $this->Flash->success(__('The tipoactivofijo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipoactivofijo could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoactivofijo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipoactivofijo id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipoactivofijo = $this->Tipoactivofijo->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipoactivofijo = $this->Tipoactivofijo->patchEntity($tipoactivofijo, $this->request->getData());
            if ($this->Tipoactivofijo->save($tipoactivofijo)) {
                $this->Flash->success(__('The tipoactivofijo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipoactivofijo could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoactivofijo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipoactivofijo id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipoactivofijo = $this->Tipoactivofijo->get($id);
        if ($this->Tipoactivofijo->delete($tipoactivofijo)) {
            $this->Flash->success(__('The tipoactivofijo has been deleted.'));
        } else {
            $this->Flash->error(__('The tipoactivofijo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
