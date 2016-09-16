<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo __('CakePHP: the rapid development php framework:'); ?>
      <?php echo $title_for_layout; ?></title>

    <!-- Bootstrap -->
    <?php echo $this -> Html -> css('bootstrap.min'); ?>

    <!-- Le styles -->
    <style>
      /* something style */
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/task/tabelog_clone/">食べログクローン</a>
        </div>
        <div style="height: 1px;" aria-expanded="false" id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active">
              <a href="#">Home</a>
            </li>
            <li>
              <a href="#about">About</a>
            </li>
            <li>
              <a href="#contact">Contact</a>
            </li>
          </ul>

        <ul class="nav navbar-nav navbar-right">
        <?php if ($currentUser) : ?>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $currentUser['email'] ?><span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="menu-second-li">
                        <?= $this->Html->link(
                            '会員情報変更',
                            ['controller' => 'users', 'action' => 'edit']
                        ); ?>
                    </li>
                    <li class="menu-second-li">
                        <?= $this->Html->link(
                            'パスワード変更',
                            ['controller' => 'users', 'action' => 'changePassword']
                        ); ?>
                    </li>
                    <li class="menu-second-li">
                        <?= $this->Html->link(
                            'ログアウト',
                            ['controller' => 'users', 'action' => 'logout']
                        ); ?>
                    </li>
                </ul>
            </li>
        <?php else : ?>
            <li>
                <?= $this->Html->link(
                    '新規会員登録',
                    ['controller' => 'users', 'action' => 'add']
                ); ?>
            </li>
            <li>
                <?= $this->Html->link(
                    'ログイン',
                    ['controller' => 'users', 'action' => 'login']
                ); ?>
            </li>
        <?php endif; ?>
    </ul>



        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <!-- <h1>Bootstrap starter template</h1> -->

      <?php echo $this -> Session -> flash(); ?>

      <?php echo $this -> fetch('content'); ?>
    </div><!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <?php echo $this -> Html -> script('bootstrap.min'); ?>
    <?php echo $this -> fetch('script'); ?>
  </body>
</html>