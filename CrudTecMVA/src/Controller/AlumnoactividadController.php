<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Alumnoactividad Controller
 *
 * @property \App\Model\Table\AlumnoactividadTable $Alumnoactividad
 * @method \App\Model\Entity\Alumnoactividad[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AlumnoactividadController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $alumnoactividad = $this->paginate($this->Alumnoactividad);

        $this->set(compact('alumnoactividad'));
    }

    /**
     * View method
     *
     * @param string|null $id Alumnoactividad id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $alumnoactividad = $this->Alumnoactividad->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('alumnoactividad'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $alumnoactividad = $this->Alumnoactividad->newEmptyEntity();
        if ($this->request->is('post')) {
            $alumnoactividad = $this->Alumnoactividad->patchEntity($alumnoactividad, $this->request->getData());
            if ($this->Alumnoactividad->save($alumnoactividad)) {
                $this->Flash->success(__('The alumnoactividad has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The alumnoactividad could not be saved. Please, try again.'));
        }
        $this->set(compact('alumnoactividad'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Alumnoactividad id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $alumnoactividad = $this->Alumnoactividad->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $alumnoactividad = $this->Alumnoactividad->patchEntity($alumnoactividad, $this->request->getData());
            if ($this->Alumnoactividad->save($alumnoactividad)) {
                $this->Flash->success(__('The alumnoactividad has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The alumnoactividad could not be saved. Please, try again.'));
        }
        $this->set(compact('alumnoactividad'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Alumnoactividad id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $alumnoactividad = $this->Alumnoactividad->get($id);
        if ($this->Alumnoactividad->delete($alumnoactividad)) {
            $this->Flash->success(__('The alumnoactividad has been deleted.'));
        } else {
            $this->Flash->error(__('The alumnoactividad could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
