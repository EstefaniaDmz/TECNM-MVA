<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Ficha Controller
 *
 * @property \App\Model\Table\FichaTable $Ficha
 * @method \App\Model\Entity\Ficha[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FichaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $ficha = $this->paginate($this->Ficha);

        $this->set(compact('ficha'));
    }

    /**
     * View method
     *
     * @param string|null $id Ficha id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ficha = $this->Ficha->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('ficha'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ficha = $this->Ficha->newEmptyEntity();
        if ($this->request->is('post')) {
            $ficha = $this->Ficha->patchEntity($ficha, $this->request->getData());
            if ($this->Ficha->save($ficha)) {
                $this->Flash->success(__('The ficha has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ficha could not be saved. Please, try again.'));
        }
        $this->set(compact('ficha'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ficha id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ficha = $this->Ficha->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ficha = $this->Ficha->patchEntity($ficha, $this->request->getData());
            if ($this->Ficha->save($ficha)) {
                $this->Flash->success(__('The ficha has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ficha could not be saved. Please, try again.'));
        }
        $this->set(compact('ficha'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ficha id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ficha = $this->Ficha->get($id);
        if ($this->Ficha->delete($ficha)) {
            $this->Flash->success(__('The ficha has been deleted.'));
        } else {
            $this->Flash->error(__('The ficha could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
