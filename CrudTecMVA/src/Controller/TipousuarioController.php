<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tipousuario Controller
 *
 * @property \App\Model\Table\TipousuarioTable $Tipousuario
 * @method \App\Model\Entity\Tipousuario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TipousuarioController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $tipousuario = $this->paginate($this->Tipousuario);

        $this->set(compact('tipousuario'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipousuario id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipousuario = $this->Tipousuario->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('tipousuario'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipousuario = $this->Tipousuario->newEmptyEntity();
        if ($this->request->is('post')) {
            $tipousuario = $this->Tipousuario->patchEntity($tipousuario, $this->request->getData());
            if ($this->Tipousuario->save($tipousuario)) {
                $this->Flash->success(__('The tipousuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipousuario could not be saved. Please, try again.'));
        }
        $this->set(compact('tipousuario'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipousuario id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipousuario = $this->Tipousuario->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipousuario = $this->Tipousuario->patchEntity($tipousuario, $this->request->getData());
            if ($this->Tipousuario->save($tipousuario)) {
                $this->Flash->success(__('The tipousuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipousuario could not be saved. Please, try again.'));
        }
        $this->set(compact('tipousuario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipousuario id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipousuario = $this->Tipousuario->get($id);
        if ($this->Tipousuario->delete($tipousuario)) {
            $this->Flash->success(__('The tipousuario has been deleted.'));
        } else {
            $this->Flash->error(__('The tipousuario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
