<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Edificio Controller
 *
 * @property \App\Model\Table\EdificioTable $Edificio
 * @method \App\Model\Entity\Edificio[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EdificioController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $edificio = $this->paginate($this->Edificio);

        $this->set(compact('edificio'));
    }

    /**
     * View method
     *
     * @param string|null $id Edificio id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $edificio = $this->Edificio->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('edificio'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $edificio = $this->Edificio->newEmptyEntity();
        if ($this->request->is('post')) {
            $edificio = $this->Edificio->patchEntity($edificio, $this->request->getData());
            if ($this->Edificio->save($edificio)) {
                $this->Flash->success(__('The edificio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The edificio could not be saved. Please, try again.'));
        }
        $this->set(compact('edificio'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Edificio id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $edificio = $this->Edificio->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $edificio = $this->Edificio->patchEntity($edificio, $this->request->getData());
            if ($this->Edificio->save($edificio)) {
                $this->Flash->success(__('The edificio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The edificio could not be saved. Please, try again.'));
        }
        $this->set(compact('edificio'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Edificio id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $edificio = $this->Edificio->get($id);
        if ($this->Edificio->delete($edificio)) {
            $this->Flash->success(__('The edificio has been deleted.'));
        } else {
            $this->Flash->error(__('The edificio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
