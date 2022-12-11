<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Solicitudconsumible Controller
 *
 * @property \App\Model\Table\SolicitudconsumibleTable $Solicitudconsumible
 * @method \App\Model\Entity\Solicitudconsumible[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SolicitudconsumibleController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $solicitudconsumible = $this->paginate($this->Solicitudconsumible);

        $this->set(compact('solicitudconsumible'));
    }

    /**
     * View method
     *
     * @param string|null $id Solicitudconsumible id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $solicitudconsumible = $this->Solicitudconsumible->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('solicitudconsumible'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $solicitudconsumible = $this->Solicitudconsumible->newEmptyEntity();
        if ($this->request->is('post')) {
            $solicitudconsumible = $this->Solicitudconsumible->patchEntity($solicitudconsumible, $this->request->getData());
            if ($this->Solicitudconsumible->save($solicitudconsumible)) {
                $this->Flash->success(__('The solicitudconsumible has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The solicitudconsumible could not be saved. Please, try again.'));
        }
        $this->set(compact('solicitudconsumible'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Solicitudconsumible id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $solicitudconsumible = $this->Solicitudconsumible->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $solicitudconsumible = $this->Solicitudconsumible->patchEntity($solicitudconsumible, $this->request->getData());
            if ($this->Solicitudconsumible->save($solicitudconsumible)) {
                $this->Flash->success(__('The solicitudconsumible has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The solicitudconsumible could not be saved. Please, try again.'));
        }
        $this->set(compact('solicitudconsumible'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Solicitudconsumible id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $solicitudconsumible = $this->Solicitudconsumible->get($id);
        if ($this->Solicitudconsumible->delete($solicitudconsumible)) {
            $this->Flash->success(__('The solicitudconsumible has been deleted.'));
        } else {
            $this->Flash->error(__('The solicitudconsumible could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
