<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Asentamiento Controller
 *
 * @property \App\Model\Table\AsentamientoTable $Asentamiento
 * @method \App\Model\Entity\Asentamiento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AsentamientoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $asentamiento = $this->paginate($this->Asentamiento);

        $this->set(compact('asentamiento'));
    }

    /**
     * View method
     *
     * @param string|null $id Asentamiento id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $asentamiento = $this->Asentamiento->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('asentamiento'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $asentamiento = $this->Asentamiento->newEmptyEntity();
        if ($this->request->is('post')) {
            $asentamiento = $this->Asentamiento->patchEntity($asentamiento, $this->request->getData());
            if ($this->Asentamiento->save($asentamiento)) {
                $this->Flash->success(__('The asentamiento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The asentamiento could not be saved. Please, try again.'));
        }
        $this->set(compact('asentamiento'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Asentamiento id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $asentamiento = $this->Asentamiento->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $asentamiento = $this->Asentamiento->patchEntity($asentamiento, $this->request->getData());
            if ($this->Asentamiento->save($asentamiento)) {
                $this->Flash->success(__('The asentamiento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The asentamiento could not be saved. Please, try again.'));
        }
        $this->set(compact('asentamiento'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Asentamiento id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $asentamiento = $this->Asentamiento->get($id);
        if ($this->Asentamiento->delete($asentamiento)) {
            $this->Flash->success(__('The asentamiento has been deleted.'));
        } else {
            $this->Flash->error(__('The asentamiento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
