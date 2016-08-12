<h2>レストラン一覧</h2>

<table>
    <tbody style="border: solid 1px #000">
    <?php foreach ($shops as $shop) : ?>
        <tr>
            <td style="width: 30%">
                <?= $this->Html->link(
                    $shop['Shop']['name'], ['action' => 'view', $shop['Shop']['id']]
                    ) ; ?>
            </td>
            <td style="width: 70%">
                登録日: <?= $this->Time->format($shop['Shop']['created'], '%Y/%m/%d') ; ?>
            </td>

        </tr>

    <?php endforeach; ?>

    </tbody>

</table>