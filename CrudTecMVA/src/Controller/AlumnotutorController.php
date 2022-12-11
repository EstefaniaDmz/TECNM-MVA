<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Alumnotutor Controller
 *
 * @property \App\Model\Table\AlumnotutorTable $Alumnotutor
 * @method \App\Model\Entity\Alumnotutor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AlumnotutorController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $alumnotutor = $this->paginate($this->Alumnotutor);

        $this->set(compact('alumnotutor'));
    }

    /**
     * View method
     *
     * @param string|null $id Alumnotutor id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $alumnotutor = $this->Alumnotutor->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('alumnotutor'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $alumnotutor = $this->Alumnotutor->newEmptyEntity();
        if ($this->request->is('post')) {
            $alumnotutor = $this->Alumnotutor->patchEntity($alumnotutor, $this->request->getData());
            if ($this->Alumnotutor->save($alumnotutor)) {
                $this->Flash->success(__('The alumnotutor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The alumnotutor could not be saved. Please, try again.'));
        }
        $this->set(compact('alumnotutor'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Alumnotutor id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $alumnotutor = $this->Alumnotutor->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $alumnotutor = $this->Alumnotutor->patchEntity($alumnotutor, $this->request->getData());
            if ($this->Alumnotutor->save($alumnotutor)) {
                $this->Flash->success(__('The alumnotutor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The alumnotutor could not be saved. Please, try again.'));
        }
        $this->set(compact('alumnotutor'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Alumnotutor id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $alumnotutor = $this->Alumnotutor->get($id);
        if ($this->Alumnotutor->delete($alumnotutor)) {
            $this->Flash->success(__('The alumnotutor has been deleted.'));
        } else {
            $this->Flash->error(__('The alumnotutor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
