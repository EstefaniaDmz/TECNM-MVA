<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Softwareequipo Controller
 *
 * @property \App\Model\Table\SoftwareequipoTable $Softwareequipo
 * @method \App\Model\Entity\Softwareequipo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SoftwareequipoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $softwareequipo = $this->paginate($this->Softwareequipo);

        $this->set(compact('softwareequipo'));
    }

    /**
     * View method
     *
     * @param string|null $id Softwareequipo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $softwareequipo = $this->Softwareequipo->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('softwareequipo'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $softwareequipo = $this->Softwareequipo->newEmptyEntity();
        if ($this->request->is('post')) {
            $softwareequipo = $this->Softwareequipo->patchEntity($softwareequipo, $this->request->getData());
            if ($this->Softwareequipo->save($softwareequipo)) {
                $this->Flash->success(__('The softwareequipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The softwareequipo could not be saved. Please, try again.'));
        }
        $this->set(compact('softwareequipo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Softwareequipo id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $softwareequipo = $this->Softwareequipo->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $softwareequipo = $this->Softwareequipo->patchEntity($softwareequipo, $this->request->getData());
            if ($this->Softwareequipo->save($softwareequipo)) {
                $this->Flash->success(__('The softwareequipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The softwareequipo could not be saved. Please, try again.'));
        }
        $this->set(compact('softwareequipo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Softwareequipo id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $softwareequipo = $this->Softwareequipo->get($id);
        if ($this->Softwareequipo->delete($softwareequipo)) {
            $this->Flash->success(__('The softwareequipo has been deleted.'));
        } else {
            $this->Flash->error(__('The softwareequipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
