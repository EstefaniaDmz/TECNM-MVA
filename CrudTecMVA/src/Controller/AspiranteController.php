<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Aspirante Controller
 *
 * @property \App\Model\Table\AspiranteTable $Aspirante
 * @method \App\Model\Entity\Aspirante[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AspiranteController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $aspirante = $this->paginate($this->Aspirante);

        $this->set(compact('aspirante'));
    }

    /**
     * View method
     *
     * @param string|null $id Aspirante id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aspirante = $this->Aspirante->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('aspirante'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aspirante = $this->Aspirante->newEmptyEntity();
        if ($this->request->is('post')) {
            $aspirante = $this->Aspirante->patchEntity($aspirante, $this->request->getData());
            if ($this->Aspirante->save($aspirante)) {
                $this->Flash->success(__('The aspirante has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aspirante could not be saved. Please, try again.'));
        }
        $this->set(compact('aspirante'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Aspirante id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aspirante = $this->Aspirante->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aspirante = $this->Aspirante->patchEntity($aspirante, $this->request->getData());
            if ($this->Aspirante->save($aspirante)) {
                $this->Flash->success(__('The aspirante has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aspirante could not be saved. Please, try again.'));
        }
        $this->set(compact('aspirante'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Aspirante id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aspirante = $this->Aspirante->get($id);
        if ($this->Aspirante->delete($aspirante)) {
            $this->Flash->success(__('The aspirante has been deleted.'));
        } else {
            $this->Flash->error(__('The aspirante could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
