<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Solicitudlaboratorio Controller
 *
 * @property \App\Model\Table\SolicitudlaboratorioTable $Solicitudlaboratorio
 * @method \App\Model\Entity\Solicitudlaboratorio[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SolicitudlaboratorioController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $solicitudlaboratorio = $this->paginate($this->Solicitudlaboratorio);

        $this->set(compact('solicitudlaboratorio'));
    }

    /**
     * View method
     *
     * @param string|null $id Solicitudlaboratorio id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $solicitudlaboratorio = $this->Solicitudlaboratorio->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('solicitudlaboratorio'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $solicitudlaboratorio = $this->Solicitudlaboratorio->newEmptyEntity();
        if ($this->request->is('post')) {
            $solicitudlaboratorio = $this->Solicitudlaboratorio->patchEntity($solicitudlaboratorio, $this->request->getData());
            if ($this->Solicitudlaboratorio->save($solicitudlaboratorio)) {
                $this->Flash->success(__('The solicitudlaboratorio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The solicitudlaboratorio could not be saved. Please, try again.'));
        }
        $this->set(compact('solicitudlaboratorio'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Solicitudlaboratorio id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $solicitudlaboratorio = $this->Solicitudlaboratorio->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $solicitudlaboratorio = $this->Solicitudlaboratorio->patchEntity($solicitudlaboratorio, $this->request->getData());
            if ($this->Solicitudlaboratorio->save($solicitudlaboratorio)) {
                $this->Flash->success(__('The solicitudlaboratorio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The solicitudlaboratorio could not be saved. Please, try again.'));
        }
        $this->set(compact('solicitudlaboratorio'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Solicitudlaboratorio id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $solicitudlaboratorio = $this->Solicitudlaboratorio->get($id);
        if ($this->Solicitudlaboratorio->delete($solicitudlaboratorio)) {
            $this->Flash->success(__('The solicitudlaboratorio has been deleted.'));
        } else {
            $this->Flash->error(__('The solicitudlaboratorio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
