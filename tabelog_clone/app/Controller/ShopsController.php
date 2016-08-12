<?php

class ShopsController extends AppController{

    public function index() {
        $this->set('shops', $this->Shop->find('all'));
    }

    public function view($id = null){
        if (!$this->Shop->exists($id)){
            throw new NotFoundException('レストランが見つかりません');
        }
        $this->set('shop', $this->findById($id));
    }

}