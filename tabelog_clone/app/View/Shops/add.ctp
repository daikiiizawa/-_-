<h2>レストラン新規登録</h2>

<div>
    <?= $this->Form->create('Shop'); ?>
    <?= $this->Form->input('name', ['label' => '店名']); ?>
    <?= $this->Form->input('tel', ['label' => '電話番号']); ?>
    <?= $this->Form->input('addr', ['label' => '住所']); ?>
    <?= $this->Form->input('url', ['label' => 'URL']); ?>
    <?= $this->Form->end('登録する'); ?>

</div>