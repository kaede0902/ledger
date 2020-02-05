<?php
namespace App\Controller;

use App\Controller\AppController;

class LedgersController extends AppController {
    public $paginate = ['limit'=>6];

    public function index(){
        $founds = [];
        if ($this->request->is('post')) {
            $find = $this->request->data['find'];
            $founds = $this->Ledgers->find()->where([
               "customer_name like " => '%' . $find . '%']);
        }    
        $this->set(compact('founds'));
        $this->layout = false;
        $this->set('defaultCss', false);
        $ledgers = $this->paginate($this->Ledgers->find('all'));
        $this->set(compact('ledgers','founds'));
    }


    public function view($id = null) {
        $ledger = $this->Ledgers->get($id);
        $this->set('ledger', $ledger);
    }
    public function add() {
        $this->layout = false;
        $this->set('defaultCss', false);
        $ledger = $this->Ledgers->newEntity();
        if ($this->request->is('post')) {
            $ledger = $this->Ledgers->patchEntity(
                $ledger, $this->request->getData());
            if ($this->Ledgers->save($ledger)) {
                $this->Flash->success(
                    __('The ledger has been saved.'));

                return $this->redirect(
                    ['action' => 'index']);
            }
            $this->Flash->error(
                __('The ledger could not be saved.'));
        }
        $this->set(compact('ledger'));
    }

    public function edit($id = null) {
        $this->layout = false;
        $this->set('defaultCss', false);
        $ledger = $this->Ledgers->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ledger = $this->Ledgers->patchEntity(
                $ledger, $this->request->getData());
            if ($this->Ledgers->save($ledger)) {
                $this->Flash->success(
                    __('The ledger has been saved.'));
                return $this->redirect(
                    ['action' => 'index']);
            }
            $this->Flash->error(
                __('The ledger could not be saved.'));
        }
        $this->set(compact('ledger'));
    }

    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $ledger = $this->Ledgers->get($id);
        if ($this->Ledgers->delete($ledger)) {
            $this->Flash->success(
                __('The ledger has been deleted.'));
        } else {
            $this->Flash->error(
                __('The ledger could not be deleted. '));
        }

        return $this->redirect(['action' => 'index']);
    }
}
