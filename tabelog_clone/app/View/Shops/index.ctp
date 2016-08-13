<h2>レストラン一覧</h2>

<table>
    <tbody style="border: solid 1px #000">
    <?php foreach ($shops as $shop) : ?>
        <tr>
            <td style="width: 50%">
                <?= $this->Html->link(
                    $shop['Shop']['name'], ['action' => 'view', $shop['Shop']['id']]
                    ) ; ?>
            </td>

            <td style="width: 40%">
                登録日: <?= $this->Time->format($shop['Shop']['created'], '%Y/%m/%d') ; ?>
            </td>

            <td style="width: 5%">
                <?= $this->Html->link(
                '編集', ['action' => 'edit', $shop['Shop']['id']]
                ) ; ?>
            </td>

            <td style="width: 5%">
                <?= $this->Form->postlink(
                '削除', ['action' => 'delete', $shop['Shop']['id']],
                ['confirm' => '本当に削除してよろしいですか？']
                ) ; ?>
            </td>
        </tr>

    <?php endforeach; ?>

    </tbody>

</table>

<div style="text-align: center">
    <?= $this->Paginator->prev('< 前へ'); ?>&nbsp;
    <?= $this->Paginator->numbers(); ?>&nbsp;
    <?= $this->Paginator->next('次へ >'); ?>
</div>