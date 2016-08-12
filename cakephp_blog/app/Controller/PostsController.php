<?php

App::uses('AppController', 'Controller');

class PostsController extends AppController{
    public $name = 'Posts';
    public $uses = array('Post');

    // ヘルパーの利用宣言
    public $helper = array('Html', 'Form');

    public function index() {
        $options = array(
            'limit' => '2' ,
            );
        $this->set('posts', $this->Post->find('all'));
    }

    public function view($id = null) {
        $this->Post->id = $id;
        $this->set('post', $this->Post->findById($id));
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Post->create();
            if ($this->Post->Save($this->request->data)) {
                $this->Session->setFlash('Saved!!!');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Failed...');
            }
        }

    }

    public function edit($id = null) {
        $this->Post->id = $id;
        $post = $this->Post->findById($id);

        if ($this->request->is('get')) {
            $this->request->data = $post;
        }

        if ($this->request->is(array('post', 'put'))) {
            if ($this->Post->save($this->request->data)){
                $this->Session->setFlash('Updated!!!');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Failed...');
            }
        }
    }

    public function delete($id = null) {
        if ($this->request->is('get')){
            throw new MethodNotAllowedException();
        }

        if ($this->Post->delete($id)) {
            $this->Session->setFlash('Deleted');
        } else {
            $this->Session->setFlash('Could not delete');

        }
        $this->redirect(array('action' => 'index'));
    }

}

?>