<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tipocursomateria Controller
 *
 * @property \App\Model\Table\TipocursomateriaTable $Tipocursomateria
 * @method \App\Model\Entity\Tipocursomaterium[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TipocursomateriaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $tipocursomateria = $this->paginate($this->Tipocursomateria);

        $this->set(compact('tipocursomateria'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipocursomaterium id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipocursomaterium = $this->Tipocursomateria->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('tipocursomaterium'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipocursomaterium = $this->Tipocursomateria->newEmptyEntity();
        if ($this->request->is('post')) {
            $tipocursomaterium = $this->Tipocursomateria->patchEntity($tipocursomaterium, $this->request->getData());
            if ($this->Tipocursomateria->save($tipocursomaterium)) {
                $this->Flash->success(__('The tipocursomaterium has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipocursomaterium could not be saved. Please, try again.'));
        }
        $this->set(compact('tipocursomaterium'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipocursomaterium id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipocursomaterium = $this->Tipocursomateria->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipocursomaterium = $this->Tipocursomateria->patchEntity($tipocursomaterium, $this->request->getData());
            if ($this->Tipocursomateria->save($tipocursomaterium)) {
                $this->Flash->success(__('The tipocursomaterium has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipocursomaterium could not be saved. Please, try again.'));
        }
        $this->set(compact('tipocursomaterium'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipocursomaterium id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipocursomaterium = $this->Tipocursomateria->get($id);
        if ($this->Tipocursomateria->delete($tipocursomaterium)) {
            $this->Flash->success(__('The tipocursomaterium has been deleted.'));
        } else {
            $this->Flash->error(__('The tipocursomaterium could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
