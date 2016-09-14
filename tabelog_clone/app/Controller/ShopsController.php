<?php

class ShopsController extends AppController{

    public $uses = ['Shop', 'Review'];

    public $helpers = ['Shop'];

    public $components = ['Paginator' => ['limit' => 10,'order' => ['created' => 'desc']]];


    public function beforefilter() {
        parent::beforefilter();
        $this->Auth->allow('index', 'view');
    }

    public function index() {
        // $this->set('shops', $this->Shop->find('all'));
        $this->set('shops', $this->Paginator->paginate());
    }

    public function view($id = null){
        if (!$this->Shop->exists($id)){
            throw new NotFoundException('レストランが見つかりません');
        }

        // 現在のユーザーがレビューを投稿済かチェック


        // レストランのレビューの平均点を取得


        // レストラン情報を取得


        // ビューに値を渡す








    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Shop->create();

            if ($this->Shop->save($this->request->data)) {
                $this->Flash->success('レストランを登録しました');
                return $this->redirect(['action' => 'index']);
            }
        }
    }

    public function edit($id = null) {
        if (!$this->Shop->exists($id)) {
            throw new NotFoundException('レストランが見つかりません');
        }

        if ($this->request->is(['post', 'put'])) {
            if ($this->Shop->save($this->request->data)){
                $this->Flash->success('レストランを更新しました');
                return $this->redirect(['action' => 'index']);
            }
        } else {
            $this->request->data = $this->Shop->findById($id);
        }
    }

    public function delete($id = null) {
        if (!$this->Shop->exists($id)) {
            throw new NotFoundException('レストランが見つかりません');
        }

        $this->request->allowMethod('post', 'delete');

        if ($this->Shop->delete($id)) {
            $this->Flash->success('レストランを削除しました');
        } else {
            $this->Flash->error('レストランを削除できませんでした');
        }

        return $this->redirect(['action' => 'index']);

    }


}