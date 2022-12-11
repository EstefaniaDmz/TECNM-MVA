<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Enfermeriaservicio Controller
 *
 * @property \App\Model\Table\EnfermeriaservicioTable $Enfermeriaservicio
 * @method \App\Model\Entity\Enfermeriaservicio[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EnfermeriaservicioController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $enfermeriaservicio = $this->paginate($this->Enfermeriaservicio);

        $this->set(compact('enfermeriaservicio'));
    }

    /**
     * View method
     *
     * @param string|null $id Enfermeriaservicio id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $enfermeriaservicio = $this->Enfermeriaservicio->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('enfermeriaservicio'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $enfermeriaservicio = $this->Enfermeriaservicio->newEmptyEntity();
        if ($this->request->is('post')) {
            $enfermeriaservicio = $this->Enfermeriaservicio->patchEntity($enfermeriaservicio, $this->request->getData());
            if ($this->Enfermeriaservicio->save($enfermeriaservicio)) {
                $this->Flash->success(__('The enfermeriaservicio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The enfermeriaservicio could not be saved. Please, try again.'));
        }
        $this->set(compact('enfermeriaservicio'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Enfermeriaservicio id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $enfermeriaservicio = $this->Enfermeriaservicio->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $enfermeriaservicio = $this->Enfermeriaservicio->patchEntity($enfermeriaservicio, $this->request->getData());
            if ($this->Enfermeriaservicio->save($enfermeriaservicio)) {
                $this->Flash->success(__('The enfermeriaservicio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The enfermeriaservicio could not be saved. Please, try again.'));
        }
        $this->set(compact('enfermeriaservicio'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Enfermeriaservicio id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $enfermeriaservicio = $this->Enfermeriaservicio->get($id);
        if ($this->Enfermeriaservicio->delete($enfermeriaservicio)) {
            $this->Flash->success(__('The enfermeriaservicio has been deleted.'));
        } else {
            $this->Flash->error(__('The enfermeriaservicio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
