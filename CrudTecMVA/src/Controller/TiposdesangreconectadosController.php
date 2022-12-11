<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tiposdesangreconectados Controller
 *
 * @property \App\Model\Table\TiposdesangreconectadosTable $Tiposdesangreconectados
 * @method \App\Model\Entity\Tiposdesangreconectado[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TiposdesangreconectadosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $tiposdesangreconectados = $this->paginate($this->Tiposdesangreconectados);

        $this->set(compact('tiposdesangreconectados'));
    }

    /**
     * View method
     *
     * @param string|null $id Tiposdesangreconectado id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tiposdesangreconectado = $this->Tiposdesangreconectados->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('tiposdesangreconectado'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tiposdesangreconectado = $this->Tiposdesangreconectados->newEmptyEntity();
        if ($this->request->is('post')) {
            $tiposdesangreconectado = $this->Tiposdesangreconectados->patchEntity($tiposdesangreconectado, $this->request->getData());
            if ($this->Tiposdesangreconectados->save($tiposdesangreconectado)) {
                $this->Flash->success(__('The tiposdesangreconectado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tiposdesangreconectado could not be saved. Please, try again.'));
        }
        $this->set(compact('tiposdesangreconectado'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tiposdesangreconectado id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tiposdesangreconectado = $this->Tiposdesangreconectados->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tiposdesangreconectado = $this->Tiposdesangreconectados->patchEntity($tiposdesangreconectado, $this->request->getData());
            if ($this->Tiposdesangreconectados->save($tiposdesangreconectado)) {
                $this->Flash->success(__('The tiposdesangreconectado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tiposdesangreconectado could not be saved. Please, try again.'));
        }
        $this->set(compact('tiposdesangreconectado'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tiposdesangreconectado id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tiposdesangreconectado = $this->Tiposdesangreconectados->get($id);
        if ($this->Tiposdesangreconectados->delete($tiposdesangreconectado)) {
            $this->Flash->success(__('The tiposdesangreconectado has been deleted.'));
        } else {
            $this->Flash->error(__('The tiposdesangreconectado could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
