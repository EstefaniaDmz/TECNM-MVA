<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tipopago Controller
 *
 * @property \App\Model\Table\TipopagoTable $Tipopago
 * @method \App\Model\Entity\Tipopago[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TipopagoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $tipopago = $this->paginate($this->Tipopago);

        $this->set(compact('tipopago'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipopago id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipopago = $this->Tipopago->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('tipopago'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipopago = $this->Tipopago->newEmptyEntity();
        if ($this->request->is('post')) {
            $tipopago = $this->Tipopago->patchEntity($tipopago, $this->request->getData());
            if ($this->Tipopago->save($tipopago)) {
                $this->Flash->success(__('The tipopago has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipopago could not be saved. Please, try again.'));
        }
        $this->set(compact('tipopago'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipopago id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipopago = $this->Tipopago->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipopago = $this->Tipopago->patchEntity($tipopago, $this->request->getData());
            if ($this->Tipopago->save($tipopago)) {
                $this->Flash->success(__('The tipopago has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipopago could not be saved. Please, try again.'));
        }
        $this->set(compact('tipopago'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipopago id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipopago = $this->Tipopago->get($id);
        if ($this->Tipopago->delete($tipopago)) {
            $this->Flash->success(__('The tipopago has been deleted.'));
        } else {
            $this->Flash->error(__('The tipopago could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
