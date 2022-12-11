<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Asignaturacarrera Controller
 *
 * @property \App\Model\Table\AsignaturacarreraTable $Asignaturacarrera
 * @method \App\Model\Entity\Asignaturacarrera[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AsignaturacarreraController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $asignaturacarrera = $this->paginate($this->Asignaturacarrera);

        $this->set(compact('asignaturacarrera'));
    }

    /**
     * View method
     *
     * @param string|null $id Asignaturacarrera id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $asignaturacarrera = $this->Asignaturacarrera->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('asignaturacarrera'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $asignaturacarrera = $this->Asignaturacarrera->newEmptyEntity();
        if ($this->request->is('post')) {
            $asignaturacarrera = $this->Asignaturacarrera->patchEntity($asignaturacarrera, $this->request->getData());
            if ($this->Asignaturacarrera->save($asignaturacarrera)) {
                $this->Flash->success(__('The asignaturacarrera has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The asignaturacarrera could not be saved. Please, try again.'));
        }
        $this->set(compact('asignaturacarrera'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Asignaturacarrera id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $asignaturacarrera = $this->Asignaturacarrera->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $asignaturacarrera = $this->Asignaturacarrera->patchEntity($asignaturacarrera, $this->request->getData());
            if ($this->Asignaturacarrera->save($asignaturacarrera)) {
                $this->Flash->success(__('The asignaturacarrera has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The asignaturacarrera could not be saved. Please, try again.'));
        }
        $this->set(compact('asignaturacarrera'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Asignaturacarrera id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $asignaturacarrera = $this->Asignaturacarrera->get($id);
        if ($this->Asignaturacarrera->delete($asignaturacarrera)) {
            $this->Flash->success(__('The asignaturacarrera has been deleted.'));
        } else {
            $this->Flash->error(__('The asignaturacarrera could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
