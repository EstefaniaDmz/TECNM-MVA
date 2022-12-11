<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Activofijo Controller
 *
 * @property \App\Model\Table\ActivofijoTable $Activofijo
 * @method \App\Model\Entity\Activofijo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ActivofijoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $activofijo = $this->paginate($this->Activofijo);

        $this->set(compact('activofijo'));
    }

    /**
     * View method
     *
     * @param string|null $id Activofijo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $activofijo = $this->Activofijo->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('activofijo'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $activofijo = $this->Activofijo->newEmptyEntity();
        if ($this->request->is('post')) {
            $activofijo = $this->Activofijo->patchEntity($activofijo, $this->request->getData());
            if ($this->Activofijo->save($activofijo)) {
                $this->Flash->success(__('The activofijo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The activofijo could not be saved. Please, try again.'));
        }
        $this->set(compact('activofijo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Activofijo id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $activofijo = $this->Activofijo->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $activofijo = $this->Activofijo->patchEntity($activofijo, $this->request->getData());
            if ($this->Activofijo->save($activofijo)) {
                $this->Flash->success(__('The activofijo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The activofijo could not be saved. Please, try again.'));
        }
        $this->set(compact('activofijo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Activofijo id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $activofijo = $this->Activofijo->get($id);
        if ($this->Activofijo->delete($activofijo)) {
            $this->Flash->success(__('The activofijo has been deleted.'));
        } else {
            $this->Flash->error(__('The activofijo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
