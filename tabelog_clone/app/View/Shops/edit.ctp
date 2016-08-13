<h2>レストラン編集</h2>

<div>
    <?= $this->Form->create('Shop'); ?>
    <?= $this->Form->input('name', ['label' => '店名']); ?>
    <?= $this->Form->input('tel', ['label' => '電話番号']); ?>
    <?= $this->Form->input('addr', ['label' => '住所']); ?>
    <?= $this->Form->input('url', ['label' => 'URL']); ?>
    <?= $this->Form->hidden('id'); ?>
    <?= $this->Form->end('更新する'); ?>

</div>