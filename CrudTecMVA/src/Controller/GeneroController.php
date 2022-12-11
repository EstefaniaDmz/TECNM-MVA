<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Genero Controller
 *
 * @property \App\Model\Table\GeneroTable $Genero
 * @method \App\Model\Entity\Genero[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GeneroController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $genero = $this->paginate($this->Genero);

        $this->set(compact('genero'));
    }

    /**
     * View method
     *
     * @param string|null $id Genero id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $genero = $this->Genero->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('genero'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $genero = $this->Genero->newEmptyEntity();
        if ($this->request->is('post')) {
            $genero = $this->Genero->patchEntity($genero, $this->request->getData());
            if ($this->Genero->save($genero)) {
                $this->Flash->success(__('The genero has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The genero could not be saved. Please, try again.'));
        }
        $this->set(compact('genero'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Genero id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $genero = $this->Genero->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $genero = $this->Genero->patchEntity($genero, $this->request->getData());
            if ($this->Genero->save($genero)) {
                $this->Flash->success(__('The genero has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The genero could not be saved. Please, try again.'));
        }
        $this->set(compact('genero'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Genero id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $genero = $this->Genero->get($id);
        if ($this->Genero->delete($genero)) {
            $this->Flash->success(__('The genero has been deleted.'));
        } else {
            $this->Flash->error(__('The genero could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
