<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Prestamoprefectura Controller
 *
 * @property \App\Model\Table\PrestamoprefecturaTable $Prestamoprefectura
 * @method \App\Model\Entity\Prestamoprefectura[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PrestamoprefecturaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $prestamoprefectura = $this->paginate($this->Prestamoprefectura);

        $this->set(compact('prestamoprefectura'));
    }

    /**
     * View method
     *
     * @param string|null $id Prestamoprefectura id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $prestamoprefectura = $this->Prestamoprefectura->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('prestamoprefectura'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $prestamoprefectura = $this->Prestamoprefectura->newEmptyEntity();
        if ($this->request->is('post')) {
            $prestamoprefectura = $this->Prestamoprefectura->patchEntity($prestamoprefectura, $this->request->getData());
            if ($this->Prestamoprefectura->save($prestamoprefectura)) {
                $this->Flash->success(__('The prestamoprefectura has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prestamoprefectura could not be saved. Please, try again.'));
        }
        $this->set(compact('prestamoprefectura'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Prestamoprefectura id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $prestamoprefectura = $this->Prestamoprefectura->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $prestamoprefectura = $this->Prestamoprefectura->patchEntity($prestamoprefectura, $this->request->getData());
            if ($this->Prestamoprefectura->save($prestamoprefectura)) {
                $this->Flash->success(__('The prestamoprefectura has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prestamoprefectura could not be saved. Please, try again.'));
        }
        $this->set(compact('prestamoprefectura'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Prestamoprefectura id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $prestamoprefectura = $this->Prestamoprefectura->get($id);
        if ($this->Prestamoprefectura->delete($prestamoprefectura)) {
            $this->Flash->success(__('The prestamoprefectura has been deleted.'));
        } else {
            $this->Flash->error(__('The prestamoprefectura could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
