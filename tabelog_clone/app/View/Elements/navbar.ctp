<div id="navbar">
    <ul>
        <li><?= $this->Html->link('食べログクローン', ['controller' => 'shops', 'action' => 'index'] ); ?></li>
        <li><?= $this->Html->link('レストラン一覧', ['controller' => 'shops', 'action' => 'index']); ?></li>
        <li style="float: right"><?= $this->Html->link('ユーザー登録', ['controller' => 'users', 'action' => 'add']); ?></li>
    </ul>
</div>