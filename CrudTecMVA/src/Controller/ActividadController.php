<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Actividad Controller
 *
 * @property \App\Model\Table\ActividadTable $Actividad
 * @method \App\Model\Entity\Actividad[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ActividadController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $actividad = $this->paginate($this->Actividad);

        $this->set(compact('actividad'));
    }

    /**
     * View method
     *
     * @param string|null $id Actividad id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $actividad = $this->Actividad->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('actividad'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $actividad = $this->Actividad->newEmptyEntity();
        if ($this->request->is('post')) {
            $actividad = $this->Actividad->patchEntity($actividad, $this->request->getData());
            if ($this->Actividad->save($actividad)) {
                $this->Flash->success(__('The actividad has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The actividad could not be saved. Please, try again.'));
        }
        $this->set(compact('actividad'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Actividad id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $actividad = $this->Actividad->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $actividad = $this->Actividad->patchEntity($actividad, $this->request->getData());
            if ($this->Actividad->save($actividad)) {
                $this->Flash->success(__('The actividad has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The actividad could not be saved. Please, try again.'));
        }
        $this->set(compact('actividad'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Actividad id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $actividad = $this->Actividad->get($id);
        if ($this->Actividad->delete($actividad)) {
            $this->Flash->success(__('The actividad has been deleted.'));
        } else {
            $this->Flash->error(__('The actividad could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
