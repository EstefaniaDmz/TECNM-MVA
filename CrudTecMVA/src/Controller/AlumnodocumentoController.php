<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Alumnodocumento Controller
 *
 * @property \App\Model\Table\AlumnodocumentoTable $Alumnodocumento
 * @method \App\Model\Entity\Alumnodocumento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AlumnodocumentoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $alumnodocumento = $this->paginate($this->Alumnodocumento);

        $this->set(compact('alumnodocumento'));
    }

    /**
     * View method
     *
     * @param string|null $id Alumnodocumento id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $alumnodocumento = $this->Alumnodocumento->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('alumnodocumento'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $alumnodocumento = $this->Alumnodocumento->newEmptyEntity();
        if ($this->request->is('post')) {
            $alumnodocumento = $this->Alumnodocumento->patchEntity($alumnodocumento, $this->request->getData());
            if ($this->Alumnodocumento->save($alumnodocumento)) {
                $this->Flash->success(__('The alumnodocumento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The alumnodocumento could not be saved. Please, try again.'));
        }
        $this->set(compact('alumnodocumento'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Alumnodocumento id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $alumnodocumento = $this->Alumnodocumento->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $alumnodocumento = $this->Alumnodocumento->patchEntity($alumnodocumento, $this->request->getData());
            if ($this->Alumnodocumento->save($alumnodocumento)) {
                $this->Flash->success(__('The alumnodocumento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The alumnodocumento could not be saved. Please, try again.'));
        }
        $this->set(compact('alumnodocumento'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Alumnodocumento id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $alumnodocumento = $this->Alumnodocumento->get($id);
        if ($this->Alumnodocumento->delete($alumnodocumento)) {
            $this->Flash->success(__('The alumnodocumento has been deleted.'));
        } else {
            $this->Flash->error(__('The alumnodocumento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
