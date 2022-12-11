<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Residencia Controller
 *
 * @property \App\Model\Table\ResidenciaTable $Residencia
 * @method \App\Model\Entity\Residencium[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ResidenciaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $residencia = $this->paginate($this->Residencia);

        $this->set(compact('residencia'));
    }

    /**
     * View method
     *
     * @param string|null $id Residencium id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $residencium = $this->Residencia->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('residencium'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $residencium = $this->Residencia->newEmptyEntity();
        if ($this->request->is('post')) {
            $residencium = $this->Residencia->patchEntity($residencium, $this->request->getData());
            if ($this->Residencia->save($residencium)) {
                $this->Flash->success(__('The residencium has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The residencium could not be saved. Please, try again.'));
        }
        $this->set(compact('residencium'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Residencium id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $residencium = $this->Residencia->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $residencium = $this->Residencia->patchEntity($residencium, $this->request->getData());
            if ($this->Residencia->save($residencium)) {
                $this->Flash->success(__('The residencium has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The residencium could not be saved. Please, try again.'));
        }
        $this->set(compact('residencium'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Residencium id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $residencium = $this->Residencia->get($id);
        if ($this->Residencia->delete($residencium)) {
            $this->Flash->success(__('The residencium has been deleted.'));
        } else {
            $this->Flash->error(__('The residencium could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
