<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Cursoextraordinario Controller
 *
 * @property \App\Model\Table\CursoextraordinarioTable $Cursoextraordinario
 * @method \App\Model\Entity\Cursoextraordinario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CursoextraordinarioController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $cursoextraordinario = $this->paginate($this->Cursoextraordinario);

        $this->set(compact('cursoextraordinario'));
    }

    /**
     * View method
     *
     * @param string|null $id Cursoextraordinario id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cursoextraordinario = $this->Cursoextraordinario->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('cursoextraordinario'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cursoextraordinario = $this->Cursoextraordinario->newEmptyEntity();
        if ($this->request->is('post')) {
            $cursoextraordinario = $this->Cursoextraordinario->patchEntity($cursoextraordinario, $this->request->getData());
            if ($this->Cursoextraordinario->save($cursoextraordinario)) {
                $this->Flash->success(__('The cursoextraordinario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cursoextraordinario could not be saved. Please, try again.'));
        }
        $this->set(compact('cursoextraordinario'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cursoextraordinario id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cursoextraordinario = $this->Cursoextraordinario->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cursoextraordinario = $this->Cursoextraordinario->patchEntity($cursoextraordinario, $this->request->getData());
            if ($this->Cursoextraordinario->save($cursoextraordinario)) {
                $this->Flash->success(__('The cursoextraordinario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cursoextraordinario could not be saved. Please, try again.'));
        }
        $this->set(compact('cursoextraordinario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cursoextraordinario id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cursoextraordinario = $this->Cursoextraordinario->get($id);
        if ($this->Cursoextraordinario->delete($cursoextraordinario)) {
            $this->Flash->success(__('The cursoextraordinario has been deleted.'));
        } else {
            $this->Flash->error(__('The cursoextraordinario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
