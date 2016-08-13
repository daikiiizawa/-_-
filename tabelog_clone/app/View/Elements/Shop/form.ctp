<?= $this->Form->create('Shop'); ?>
<?= $this->Form->input('name', ['label' => '店名']); ?>
<?= $this->Form->input('tel', ['label' => '電話番号']); ?>
<?= $this->Form->input('addr', ['label' => '住所']); ?>
<?= $this->Form->input('url', ['label' => 'URL']); ?>
<?php if (!empty($this->request->data)) : ?>
    <?= $this->Form->hidden('id'); ?>
<?php endif;?>
<?= $this->Form->end($submitLabel); ?>