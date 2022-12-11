<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Serviciosocial Controller
 *
 * @property \App\Model\Table\ServiciosocialTable $Serviciosocial
 * @method \App\Model\Entity\Serviciosocial[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ServiciosocialController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $serviciosocial = $this->paginate($this->Serviciosocial);

        $this->set(compact('serviciosocial'));
    }

    /**
     * View method
     *
     * @param string|null $id Serviciosocial id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $serviciosocial = $this->Serviciosocial->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('serviciosocial'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $serviciosocial = $this->Serviciosocial->newEmptyEntity();
        if ($this->request->is('post')) {
            $serviciosocial = $this->Serviciosocial->patchEntity($serviciosocial, $this->request->getData());
            if ($this->Serviciosocial->save($serviciosocial)) {
                $this->Flash->success(__('The serviciosocial has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The serviciosocial could not be saved. Please, try again.'));
        }
        $this->set(compact('serviciosocial'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Serviciosocial id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $serviciosocial = $this->Serviciosocial->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $serviciosocial = $this->Serviciosocial->patchEntity($serviciosocial, $this->request->getData());
            if ($this->Serviciosocial->save($serviciosocial)) {
                $this->Flash->success(__('The serviciosocial has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The serviciosocial could not be saved. Please, try again.'));
        }
        $this->set(compact('serviciosocial'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Serviciosocial id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $serviciosocial = $this->Serviciosocial->get($id);
        if ($this->Serviciosocial->delete($serviciosocial)) {
            $this->Flash->success(__('The serviciosocial has been deleted.'));
        } else {
            $this->Flash->error(__('The serviciosocial could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
