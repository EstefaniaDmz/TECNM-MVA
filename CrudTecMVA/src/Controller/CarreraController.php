<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Carrera Controller
 *
 * @property \App\Model\Table\CarreraTable $Carrera
 * @method \App\Model\Entity\Carrera[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CarreraController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $carrera = $this->paginate($this->Carrera);

        $this->set(compact('carrera'));
    }

    /**
     * View method
     *
     * @param string|null $id Carrera id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $carrera = $this->Carrera->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('carrera'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $carrera = $this->Carrera->newEmptyEntity();
        if ($this->request->is('post')) {
            $carrera = $this->Carrera->patchEntity($carrera, $this->request->getData());
            if ($this->Carrera->save($carrera)) {
                $this->Flash->success(__('The carrera has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The carrera could not be saved. Please, try again.'));
        }
        $this->set(compact('carrera'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Carrera id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $carrera = $this->Carrera->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $carrera = $this->Carrera->patchEntity($carrera, $this->request->getData());
            if ($this->Carrera->save($carrera)) {
                $this->Flash->success(__('The carrera has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The carrera could not be saved. Please, try again.'));
        }
        $this->set(compact('carrera'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Carrera id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $carrera = $this->Carrera->get($id);
        if ($this->Carrera->delete($carrera)) {
            $this->Flash->success(__('The carrera has been deleted.'));
        } else {
            $this->Flash->error(__('The carrera could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
