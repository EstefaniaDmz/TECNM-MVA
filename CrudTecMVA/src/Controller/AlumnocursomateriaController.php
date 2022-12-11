<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Alumnocursomateria Controller
 *
 * @property \App\Model\Table\AlumnocursomateriaTable $Alumnocursomateria
 * @method \App\Model\Entity\Alumnocursomaterium[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AlumnocursomateriaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $alumnocursomateria = $this->paginate($this->Alumnocursomateria);

        $this->set(compact('alumnocursomateria'));
    }

    /**
     * View method
     *
     * @param string|null $id Alumnocursomaterium id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $alumnocursomaterium = $this->Alumnocursomateria->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('alumnocursomaterium'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $alumnocursomaterium = $this->Alumnocursomateria->newEmptyEntity();
        if ($this->request->is('post')) {
            $alumnocursomaterium = $this->Alumnocursomateria->patchEntity($alumnocursomaterium, $this->request->getData());
            if ($this->Alumnocursomateria->save($alumnocursomaterium)) {
                $this->Flash->success(__('The alumnocursomaterium has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The alumnocursomaterium could not be saved. Please, try again.'));
        }
        $this->set(compact('alumnocursomaterium'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Alumnocursomaterium id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $alumnocursomaterium = $this->Alumnocursomateria->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $alumnocursomaterium = $this->Alumnocursomateria->patchEntity($alumnocursomaterium, $this->request->getData());
            if ($this->Alumnocursomateria->save($alumnocursomaterium)) {
                $this->Flash->success(__('The alumnocursomaterium has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The alumnocursomaterium could not be saved. Please, try again.'));
        }
        $this->set(compact('alumnocursomaterium'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Alumnocursomaterium id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $alumnocursomaterium = $this->Alumnocursomateria->get($id);
        if ($this->Alumnocursomateria->delete($alumnocursomaterium)) {
            $this->Flash->success(__('The alumnocursomaterium has been deleted.'));
        } else {
            $this->Flash->error(__('The alumnocursomaterium could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
