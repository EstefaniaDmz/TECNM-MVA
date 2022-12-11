<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Alumnocursoextra Controller
 *
 * @property \App\Model\Table\AlumnocursoextraTable $Alumnocursoextra
 * @method \App\Model\Entity\Alumnocursoextra[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AlumnocursoextraController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $alumnocursoextra = $this->paginate($this->Alumnocursoextra);

        $this->set(compact('alumnocursoextra'));
    }

    /**
     * View method
     *
     * @param string|null $id Alumnocursoextra id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $alumnocursoextra = $this->Alumnocursoextra->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('alumnocursoextra'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $alumnocursoextra = $this->Alumnocursoextra->newEmptyEntity();
        if ($this->request->is('post')) {
            $alumnocursoextra = $this->Alumnocursoextra->patchEntity($alumnocursoextra, $this->request->getData());
            if ($this->Alumnocursoextra->save($alumnocursoextra)) {
                $this->Flash->success(__('The alumnocursoextra has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The alumnocursoextra could not be saved. Please, try again.'));
        }
        $this->set(compact('alumnocursoextra'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Alumnocursoextra id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $alumnocursoextra = $this->Alumnocursoextra->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $alumnocursoextra = $this->Alumnocursoextra->patchEntity($alumnocursoextra, $this->request->getData());
            if ($this->Alumnocursoextra->save($alumnocursoextra)) {
                $this->Flash->success(__('The alumnocursoextra has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The alumnocursoextra could not be saved. Please, try again.'));
        }
        $this->set(compact('alumnocursoextra'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Alumnocursoextra id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $alumnocursoextra = $this->Alumnocursoextra->get($id);
        if ($this->Alumnocursoextra->delete($alumnocursoextra)) {
            $this->Flash->success(__('The alumnocursoextra has been deleted.'));
        } else {
            $this->Flash->error(__('The alumnocursoextra could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
