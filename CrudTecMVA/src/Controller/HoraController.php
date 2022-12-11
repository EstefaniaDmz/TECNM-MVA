<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Hora Controller
 *
 * @property \App\Model\Table\HoraTable $Hora
 * @method \App\Model\Entity\Hora[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HoraController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $hora = $this->paginate($this->Hora);

        $this->set(compact('hora'));
    }

    /**
     * View method
     *
     * @param string|null $id Hora id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hora = $this->Hora->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('hora'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hora = $this->Hora->newEmptyEntity();
        if ($this->request->is('post')) {
            $hora = $this->Hora->patchEntity($hora, $this->request->getData());
            if ($this->Hora->save($hora)) {
                $this->Flash->success(__('The hora has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hora could not be saved. Please, try again.'));
        }
        $this->set(compact('hora'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Hora id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hora = $this->Hora->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hora = $this->Hora->patchEntity($hora, $this->request->getData());
            if ($this->Hora->save($hora)) {
                $this->Flash->success(__('The hora has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hora could not be saved. Please, try again.'));
        }
        $this->set(compact('hora'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Hora id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hora = $this->Hora->get($id);
        if ($this->Hora->delete($hora)) {
            $this->Flash->success(__('The hora has been deleted.'));
        } else {
            $this->Flash->error(__('The hora could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
