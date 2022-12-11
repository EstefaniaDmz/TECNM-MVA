<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tiposangre Controller
 *
 * @property \App\Model\Table\TiposangreTable $Tiposangre
 * @method \App\Model\Entity\Tiposangre[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TiposangreController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $tiposangre = $this->paginate($this->Tiposangre);

        $this->set(compact('tiposangre'));
    }

    /**
     * View method
     *
     * @param string|null $id Tiposangre id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tiposangre = $this->Tiposangre->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('tiposangre'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tiposangre = $this->Tiposangre->newEmptyEntity();
        if ($this->request->is('post')) {
            $tiposangre = $this->Tiposangre->patchEntity($tiposangre, $this->request->getData());
            if ($this->Tiposangre->save($tiposangre)) {
                $this->Flash->success(__('The tiposangre has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tiposangre could not be saved. Please, try again.'));
        }
        $this->set(compact('tiposangre'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tiposangre id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tiposangre = $this->Tiposangre->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tiposangre = $this->Tiposangre->patchEntity($tiposangre, $this->request->getData());
            if ($this->Tiposangre->save($tiposangre)) {
                $this->Flash->success(__('The tiposangre has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tiposangre could not be saved. Please, try again.'));
        }
        $this->set(compact('tiposangre'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tiposangre id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tiposangre = $this->Tiposangre->get($id);
        if ($this->Tiposangre->delete($tiposangre)) {
            $this->Flash->success(__('The tiposangre has been deleted.'));
        } else {
            $this->Flash->error(__('The tiposangre could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
