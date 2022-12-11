<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Software Controller
 *
 * @property \App\Model\Table\SoftwareTable $Software
 * @method \App\Model\Entity\Software[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SoftwareController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $software = $this->paginate($this->Software);

        $this->set(compact('software'));
    }

    /**
     * View method
     *
     * @param string|null $id Software id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $software = $this->Software->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('software'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $software = $this->Software->newEmptyEntity();
        if ($this->request->is('post')) {
            $software = $this->Software->patchEntity($software, $this->request->getData());
            if ($this->Software->save($software)) {
                $this->Flash->success(__('The software has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The software could not be saved. Please, try again.'));
        }
        $this->set(compact('software'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Software id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $software = $this->Software->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $software = $this->Software->patchEntity($software, $this->request->getData());
            if ($this->Software->save($software)) {
                $this->Flash->success(__('The software has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The software could not be saved. Please, try again.'));
        }
        $this->set(compact('software'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Software id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $software = $this->Software->get($id);
        if ($this->Software->delete($software)) {
            $this->Flash->success(__('The software has been deleted.'));
        } else {
            $this->Flash->error(__('The software could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
