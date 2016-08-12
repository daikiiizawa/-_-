<!-- task01完成版 -->
<!DOCTYPE html>
<html lang="ja">
  <head>
    <title>課題サイト作成</title>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="style.css">
  </head>

  <body>
  <div id="container">

    <header>
      <div id="logo">
        <h1>LOGO</h1>
      </div>
      <div class ="headerimg"><img src="img/header.jpg" alt=""></div>
    </header>

    <nav>
      <ul>
        <li class="on"><a href="index.html">nav1</a></li>
        <li><a href="">nav2</a></li>
      </ul>
    </nav>

    <aside>
      <div class="menu">
        <h3>menu1</h3>
        <ul>
          <li><a href="#">1-1</a></li>
          <li><a href="#">1-2</a></li>
          <li><a href="#">1-3</a></li>
          <li><a href="#">1-4</a></li>
        </ul>
      </div>
      <div class="menu">
        <h3>menu2</h3>
        <ul>
          <li><a href="#">2-1</a></li>
          <li><a href="#">2-2</a></li>
          <li><a href="#">2-3</a></li>
          <li><a href="#">2-4</a></li>
        </ul>
      </div>
      <div class="menu">
        <h3>menu3</h3>
        <ul>
          <li><a href="#">3-1</a></li>
          <li><a href="#">3-2</a></li>
          <li><a href="#">3-3</a></li>
          <li><a href="#">3-4</a></li>
        </ul>
      </div>
    </aside>

    <article>
      <section>
        <h2 id="a1">タイトル1</h2>
        <img src="img/index1.jpg" alt="">
        <p>pは段落です。pは段落です。</p>
      </section>
      <section>
        <h2 id="a2">タイトル2</h2>
        <img src="img/index2.jpg" alt="">
        <p>pは段落です。pは段落です。</p>
      </section>
    </article>

    <footer>
      <p><a href="http://nowall.co.jp/">株式会社 NOWALL</a></p>
      <small> @<?php echo date("Y"); ?> NOWALL, Inc. All Rights Reserved.</small>
    </footer>
  </div>

  </body>
</html>

