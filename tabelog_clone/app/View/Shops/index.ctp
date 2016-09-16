<div class="container">


    <h2>レストラン一覧</h2>
    <?php echo $this->Paginator->pager(
        [
        'prev' => ('« 前へ'),
        'next' => ('次へ »')
        ]);
    ?>


<?php if ($currentUser) : ?>
    <button type="button" class="btn btn-default">
        <?= $this->Html->link('レストラン新規追加', ['action' => 'add']); ?>
    </button>
<?php endif; ?>

<table class="table table-bordered">
    <thead>
        <th style="width: 100px;">イメージ</th>
        <th>名前</th>
        <th>レビュー</th>
        <th>日付</th>
        <th>編集/削除</th>
    </thead>

    <tbody>
    <?php foreach ($shops as $shop) : ?>
        <tr>
            <td style="width: 15%;">
                <?= $this->Html->link(
                    $this->Shop->photoImage($shop, ['style' => 'width: 100%']),
                    ['action' => 'view', $shop['Shop']['id']],
                    ['escape' => false]
                ); ?>
            </td>
            <td style="width: 20%;">
                <?= $this->Html->link(
                    h($shop['Shop']['name']),
                    ['action' => 'view', $shop['Shop']['id']]
                ); ?>
            </td>

            <td style="width: 15%;">
                <?php
                    if ($shop['Shop']['cnt'] > 0) {
                        printf("レビュー: %d 件<br>%s ( %.1f )",
                            $shop['Shop']['cnt'],
                            $this->Shop->scoreList()[round((int)$shop['Shop']['avg'])],
                            $shop['Shop']['avg']
                        );
                    } else {
                        echo 'レビュー: 0 件';
                    }
                ?>
            </td>

            <td style="width: 15%;">
                登録日: <?= $this->Time->format($shop['Shop']['created'], '%Y/%m/%d'); ?>
            </td>
            <?php if ($currentUser) : ?>
                <td style="width: 15%;">
                    <button class="btn">
                    <?= $this->Html->link(
                        '編集',
                        ['action' => 'edit', $shop['Shop']['id']]
                    ); ?>
                    </button>

                    <button class="btn">
                    <?= $this->Form->postLink(
                        '削除',
                        ['action' => 'delete', $shop['Shop']['id']],
                        ['confirm' => '本当に削除してよろしいですか？']
                    ); ?>
                    </button>
                </td>
            <?php endif; ?>
            <?php if (!($currentUser)) : ?>
                <td>操作不可</td>
            <?php endif; ?>

        </tr>
    <?php endforeach; ?>
    </tbody>
</table>



<!-- <div class="pagination">
    <ul>
        <?php // echo $this->Paginator->prev(__('＜＜'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a')); ?>
        <?php // echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1, 'ellipsis' => '<li class="disabled"><a>...</a></li>')); ?>
        <?php // echo $this->Paginator->next(__('＞＞'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a')); ?>
    </ul>
</div> -->


<?php
echo '<div class="pagiWrapper">';
        echo '<div class="pagination">';
        echo $this->Paginator->first('最初', $options = array());
        echo $this->Paginator->prev('前へ', array(), null, array('class' => 'prev disabled'));
        echo $this->Paginator->numbers(array('separator' => ''));
        echo $this->Paginator->next('次へ', array(), null, array('class' => 'next disabled'));
        echo $this->Paginator->last('最後', $options = array());
        echo '</div>';
echo '</div>';
?>

</div>