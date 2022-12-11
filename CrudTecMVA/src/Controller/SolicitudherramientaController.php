<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Solicitudherramienta Controller
 *
 * @property \App\Model\Table\SolicitudherramientaTable $Solicitudherramienta
 * @method \App\Model\Entity\Solicitudherramientum[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SolicitudherramientaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $solicitudherramienta = $this->paginate($this->Solicitudherramienta);

        $this->set(compact('solicitudherramienta'));
    }

    /**
     * View method
     *
     * @param string|null $id Solicitudherramientum id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $solicitudherramientum = $this->Solicitudherramienta->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('solicitudherramientum'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $solicitudherramientum = $this->Solicitudherramienta->newEmptyEntity();
        if ($this->request->is('post')) {
            $solicitudherramientum = $this->Solicitudherramienta->patchEntity($solicitudherramientum, $this->request->getData());
            if ($this->Solicitudherramienta->save($solicitudherramientum)) {
                $this->Flash->success(__('The solicitudherramientum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The solicitudherramientum could not be saved. Please, try again.'));
        }
        $this->set(compact('solicitudherramientum'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Solicitudherramientum id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $solicitudherramientum = $this->Solicitudherramienta->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $solicitudherramientum = $this->Solicitudherramienta->patchEntity($solicitudherramientum, $this->request->getData());
            if ($this->Solicitudherramienta->save($solicitudherramientum)) {
                $this->Flash->success(__('The solicitudherramientum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The solicitudherramientum could not be saved. Please, try again.'));
        }
        $this->set(compact('solicitudherramientum'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Solicitudherramientum id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $solicitudherramientum = $this->Solicitudherramienta->get($id);
        if ($this->Solicitudherramienta->delete($solicitudherramientum)) {
            $this->Flash->success(__('The solicitudherramientum has been deleted.'));
        } else {
            $this->Flash->error(__('The solicitudherramientum could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
