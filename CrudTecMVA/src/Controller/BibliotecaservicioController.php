<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Bibliotecaservicio Controller
 *
 * @property \App\Model\Table\BibliotecaservicioTable $Bibliotecaservicio
 * @method \App\Model\Entity\Bibliotecaservicio[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BibliotecaservicioController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $bibliotecaservicio = $this->paginate($this->Bibliotecaservicio);

        $this->set(compact('bibliotecaservicio'));
    }

    /**
     * View method
     *
     * @param string|null $id Bibliotecaservicio id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bibliotecaservicio = $this->Bibliotecaservicio->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('bibliotecaservicio'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bibliotecaservicio = $this->Bibliotecaservicio->newEmptyEntity();
        if ($this->request->is('post')) {
            $bibliotecaservicio = $this->Bibliotecaservicio->patchEntity($bibliotecaservicio, $this->request->getData());
            if ($this->Bibliotecaservicio->save($bibliotecaservicio)) {
                $this->Flash->success(__('The bibliotecaservicio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bibliotecaservicio could not be saved. Please, try again.'));
        }
        $this->set(compact('bibliotecaservicio'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bibliotecaservicio id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bibliotecaservicio = $this->Bibliotecaservicio->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bibliotecaservicio = $this->Bibliotecaservicio->patchEntity($bibliotecaservicio, $this->request->getData());
            if ($this->Bibliotecaservicio->save($bibliotecaservicio)) {
                $this->Flash->success(__('The bibliotecaservicio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bibliotecaservicio could not be saved. Please, try again.'));
        }
        $this->set(compact('bibliotecaservicio'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bibliotecaservicio id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bibliotecaservicio = $this->Bibliotecaservicio->get($id);
        if ($this->Bibliotecaservicio->delete($bibliotecaservicio)) {
            $this->Flash->success(__('The bibliotecaservicio has been deleted.'));
        } else {
            $this->Flash->error(__('The bibliotecaservicio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
