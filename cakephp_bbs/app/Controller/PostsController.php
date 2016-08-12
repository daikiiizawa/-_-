<?php

class PostsController extends AppController
{

  public $uses = array('User', 'Post');

  public $components = array(
             'Session',
             'Auth' => array(
                  'authenticate' => array(
                       'Form' =>  array(
                            'fields' =>
                              array('username' => 'name','password' => 'email')
                        )
                   ),
                   'loginRedirect' => array('controller' => 'posts', 'action' => 'postlist'),
                   'logoutRedirect' => array('controller' => 'posts', 'action' => 'index'),
                   'loginAction' => array('controller' => 'posts', 'action' => 'index'),
              )
         );

  public function beforeFilter ()
  {
      $this->Auth->allow('index', 'logout');
      $this->set('user',$this->Auth->user());
  }


  public function index ()
  {
      if ($this->request->is('post'))
      {
          if ($this->Auth->login())
          {
              return $this->redirect($this->Auth->redirect());
          }
           else
          {
              $this->Session->setFlash('ユーザーネームかメールアドレスが間違っています', 'default', array(), 'auth');
          }
      }
  }

  public function postlist()
  {
      $this->set('list', $this->Post->find('all'));
  }

  public function add ()
  {

    if ($this->request->is('post'))
    {
        $request = $this->request->data['Post'];
        $user = $this->Auth->user();

        $data = array(
            'name' => $user['name'],
            'message' => $request['message']
        );

        $this->Post->save($data);
    }
    $this->redirect('postlist');
  }

  public function edit ($id = null)
  {
      if ($this->request->is('post'))
      {
          $request = $this->request->data['Post'];
          $data = array(
            'id' => $request['id'],
            'message' => $request['message']
          );
          $this->Post->save($data);
          $this->redirect('postlist');
      }
       else
      {
          $data = $this->Post->findById($id);
      }
      $this->set('data', $data['Post']);
  }

  public function delete ($id)
  {
      $this->Post->delete($id);
      $this->redirect('postlist');
  }

  public function logout ()
  {
      $this->Auth->logout();
      $this->Session->destroy(); //セッションを完全削除
      $this->redirect(array('action' => 'index'));
  }

}