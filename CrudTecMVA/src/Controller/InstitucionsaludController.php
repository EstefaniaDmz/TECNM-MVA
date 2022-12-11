<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Institucionsalud Controller
 *
 * @property \App\Model\Table\InstitucionsaludTable $Institucionsalud
 * @method \App\Model\Entity\Institucionsalud[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InstitucionsaludController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $institucionsalud = $this->paginate($this->Institucionsalud);

        $this->set(compact('institucionsalud'));
    }

    /**
     * View method
     *
     * @param string|null $id Institucionsalud id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $institucionsalud = $this->Institucionsalud->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('institucionsalud'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $institucionsalud = $this->Institucionsalud->newEmptyEntity();
        if ($this->request->is('post')) {
            $institucionsalud = $this->Institucionsalud->patchEntity($institucionsalud, $this->request->getData());
            if ($this->Institucionsalud->save($institucionsalud)) {
                $this->Flash->success(__('The institucionsalud has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The institucionsalud could not be saved. Please, try again.'));
        }
        $this->set(compact('institucionsalud'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Institucionsalud id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $institucionsalud = $this->Institucionsalud->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $institucionsalud = $this->Institucionsalud->patchEntity($institucionsalud, $this->request->getData());
            if ($this->Institucionsalud->save($institucionsalud)) {
                $this->Flash->success(__('The institucionsalud has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The institucionsalud could not be saved. Please, try again.'));
        }
        $this->set(compact('institucionsalud'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Institucionsalud id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $institucionsalud = $this->Institucionsalud->get($id);
        if ($this->Institucionsalud->delete($institucionsalud)) {
            $this->Flash->success(__('The institucionsalud has been deleted.'));
        } else {
            $this->Flash->error(__('The institucionsalud could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
