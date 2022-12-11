<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Solicitudsoftware Controller
 *
 * @property \App\Model\Table\SolicitudsoftwareTable $Solicitudsoftware
 * @method \App\Model\Entity\Solicitudsoftware[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SolicitudsoftwareController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $solicitudsoftware = $this->paginate($this->Solicitudsoftware);

        $this->set(compact('solicitudsoftware'));
    }

    /**
     * View method
     *
     * @param string|null $id Solicitudsoftware id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $solicitudsoftware = $this->Solicitudsoftware->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('solicitudsoftware'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $solicitudsoftware = $this->Solicitudsoftware->newEmptyEntity();
        if ($this->request->is('post')) {
            $solicitudsoftware = $this->Solicitudsoftware->patchEntity($solicitudsoftware, $this->request->getData());
            if ($this->Solicitudsoftware->save($solicitudsoftware)) {
                $this->Flash->success(__('The solicitudsoftware has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The solicitudsoftware could not be saved. Please, try again.'));
        }
        $this->set(compact('solicitudsoftware'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Solicitudsoftware id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $solicitudsoftware = $this->Solicitudsoftware->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $solicitudsoftware = $this->Solicitudsoftware->patchEntity($solicitudsoftware, $this->request->getData());
            if ($this->Solicitudsoftware->save($solicitudsoftware)) {
                $this->Flash->success(__('The solicitudsoftware has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The solicitudsoftware could not be saved. Please, try again.'));
        }
        $this->set(compact('solicitudsoftware'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Solicitudsoftware id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $solicitudsoftware = $this->Solicitudsoftware->get($id);
        if ($this->Solicitudsoftware->delete($solicitudsoftware)) {
            $this->Flash->success(__('The solicitudsoftware has been deleted.'));
        } else {
            $this->Flash->error(__('The solicitudsoftware could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
