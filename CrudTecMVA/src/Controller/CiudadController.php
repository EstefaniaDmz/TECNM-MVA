<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Ciudad Controller
 *
 * @property \App\Model\Table\CiudadTable $Ciudad
 * @method \App\Model\Entity\Ciudad[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CiudadController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $ciudad = $this->paginate($this->Ciudad);

        $this->set(compact('ciudad'));
    }

    /**
     * View method
     *
     * @param string|null $id Ciudad id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ciudad = $this->Ciudad->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('ciudad'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ciudad = $this->Ciudad->newEmptyEntity();
        if ($this->request->is('post')) {
            $ciudad = $this->Ciudad->patchEntity($ciudad, $this->request->getData());
            if ($this->Ciudad->save($ciudad)) {
                $this->Flash->success(__('The ciudad has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ciudad could not be saved. Please, try again.'));
        }
        $this->set(compact('ciudad'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ciudad id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ciudad = $this->Ciudad->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ciudad = $this->Ciudad->patchEntity($ciudad, $this->request->getData());
            if ($this->Ciudad->save($ciudad)) {
                $this->Flash->success(__('The ciudad has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ciudad could not be saved. Please, try again.'));
        }
        $this->set(compact('ciudad'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ciudad id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ciudad = $this->Ciudad->get($id);
        if ($this->Ciudad->delete($ciudad)) {
            $this->Flash->success(__('The ciudad has been deleted.'));
        } else {
            $this->Flash->error(__('The ciudad could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
