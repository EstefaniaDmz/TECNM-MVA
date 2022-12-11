<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Alumnoasignaturadocente Controller
 *
 * @property \App\Model\Table\AlumnoasignaturadocenteTable $Alumnoasignaturadocente
 * @method \App\Model\Entity\Alumnoasignaturadocente[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AlumnoasignaturadocenteController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $alumnoasignaturadocente = $this->paginate($this->Alumnoasignaturadocente);

        $this->set(compact('alumnoasignaturadocente'));
    }

    /**
     * View method
     *
     * @param string|null $id Alumnoasignaturadocente id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $alumnoasignaturadocente = $this->Alumnoasignaturadocente->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('alumnoasignaturadocente'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $alumnoasignaturadocente = $this->Alumnoasignaturadocente->newEmptyEntity();
        if ($this->request->is('post')) {
            $alumnoasignaturadocente = $this->Alumnoasignaturadocente->patchEntity($alumnoasignaturadocente, $this->request->getData());
            if ($this->Alumnoasignaturadocente->save($alumnoasignaturadocente)) {
                $this->Flash->success(__('The alumnoasignaturadocente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The alumnoasignaturadocente could not be saved. Please, try again.'));
        }
        $this->set(compact('alumnoasignaturadocente'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Alumnoasignaturadocente id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $alumnoasignaturadocente = $this->Alumnoasignaturadocente->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $alumnoasignaturadocente = $this->Alumnoasignaturadocente->patchEntity($alumnoasignaturadocente, $this->request->getData());
            if ($this->Alumnoasignaturadocente->save($alumnoasignaturadocente)) {
                $this->Flash->success(__('The alumnoasignaturadocente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The alumnoasignaturadocente could not be saved. Please, try again.'));
        }
        $this->set(compact('alumnoasignaturadocente'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Alumnoasignaturadocente id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $alumnoasignaturadocente = $this->Alumnoasignaturadocente->get($id);
        if ($this->Alumnoasignaturadocente->delete($alumnoasignaturadocente)) {
            $this->Flash->success(__('The alumnoasignaturadocente has been deleted.'));
        } else {
            $this->Flash->error(__('The alumnoasignaturadocente could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
