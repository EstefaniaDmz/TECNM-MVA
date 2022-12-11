<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Zona Controller
 *
 * @property \App\Model\Table\ZonaTable $Zona
 * @method \App\Model\Entity\Zona[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ZonaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $zona = $this->paginate($this->Zona);

        $this->set(compact('zona'));
    }

    /**
     * View method
     *
     * @param string|null $id Zona id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $zona = $this->Zona->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('zona'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $zona = $this->Zona->newEmptyEntity();
        if ($this->request->is('post')) {
            $zona = $this->Zona->patchEntity($zona, $this->request->getData());
            if ($this->Zona->save($zona)) {
                $this->Flash->success(__('The zona has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The zona could not be saved. Please, try again.'));
        }
        $this->set(compact('zona'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Zona id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $zona = $this->Zona->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $zona = $this->Zona->patchEntity($zona, $this->request->getData());
            if ($this->Zona->save($zona)) {
                $this->Flash->success(__('The zona has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The zona could not be saved. Please, try again.'));
        }
        $this->set(compact('zona'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Zona id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $zona = $this->Zona->get($id);
        if ($this->Zona->delete($zona)) {
            $this->Flash->success(__('The zona has been deleted.'));
        } else {
            $this->Flash->error(__('The zona could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
