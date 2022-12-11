<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Organizacion Controller
 *
 * @property \App\Model\Table\OrganizacionTable $Organizacion
 * @method \App\Model\Entity\Organizacion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrganizacionController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $organizacion = $this->paginate($this->Organizacion);

        $this->set(compact('organizacion'));
    }

    /**
     * View method
     *
     * @param string|null $id Organizacion id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $organizacion = $this->Organizacion->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('organizacion'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $organizacion = $this->Organizacion->newEmptyEntity();
        if ($this->request->is('post')) {
            $organizacion = $this->Organizacion->patchEntity($organizacion, $this->request->getData());
            if ($this->Organizacion->save($organizacion)) {
                $this->Flash->success(__('The organizacion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The organizacion could not be saved. Please, try again.'));
        }
        $this->set(compact('organizacion'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Organizacion id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $organizacion = $this->Organizacion->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $organizacion = $this->Organizacion->patchEntity($organizacion, $this->request->getData());
            if ($this->Organizacion->save($organizacion)) {
                $this->Flash->success(__('The organizacion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The organizacion could not be saved. Please, try again.'));
        }
        $this->set(compact('organizacion'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Organizacion id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $organizacion = $this->Organizacion->get($id);
        if ($this->Organizacion->delete($organizacion)) {
            $this->Flash->success(__('The organizacion has been deleted.'));
        } else {
            $this->Flash->error(__('The organizacion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
