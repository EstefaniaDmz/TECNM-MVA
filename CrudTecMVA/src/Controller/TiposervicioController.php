<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tiposervicio Controller
 *
 * @property \App\Model\Table\TiposervicioTable $Tiposervicio
 * @method \App\Model\Entity\Tiposervicio[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TiposervicioController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $tiposervicio = $this->paginate($this->Tiposervicio);

        $this->set(compact('tiposervicio'));
    }

    /**
     * View method
     *
     * @param string|null $id Tiposervicio id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tiposervicio = $this->Tiposervicio->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('tiposervicio'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tiposervicio = $this->Tiposervicio->newEmptyEntity();
        if ($this->request->is('post')) {
            $tiposervicio = $this->Tiposervicio->patchEntity($tiposervicio, $this->request->getData());
            if ($this->Tiposervicio->save($tiposervicio)) {
                $this->Flash->success(__('The tiposervicio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tiposervicio could not be saved. Please, try again.'));
        }
        $this->set(compact('tiposervicio'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tiposervicio id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tiposervicio = $this->Tiposervicio->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tiposervicio = $this->Tiposervicio->patchEntity($tiposervicio, $this->request->getData());
            if ($this->Tiposervicio->save($tiposervicio)) {
                $this->Flash->success(__('The tiposervicio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tiposervicio could not be saved. Please, try again.'));
        }
        $this->set(compact('tiposervicio'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tiposervicio id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tiposervicio = $this->Tiposervicio->get($id);
        if ($this->Tiposervicio->delete($tiposervicio)) {
            $this->Flash->success(__('The tiposervicio has been deleted.'));
        } else {
            $this->Flash->error(__('The tiposervicio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
