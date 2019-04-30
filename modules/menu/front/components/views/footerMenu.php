<?php
$items = $menu->getItems();
$countRoot = 0;
foreach ($items as $item) {
    if (empty($item['url'])) {
        continue;
    }
    $countRoot++;
    if ($countRoot <= 2) { ?>
        <?php if ($countRoot == 1) { ?>
            <div class="column">
        <?php } ?>
        <?php if (!empty($item['items']) ) {?>
            <div class="title"><a rel="nofollow"
                                  href="<?= \yii\helpers\Url::to($item['url']) ?>"><span><?= $item['label'] ?></span></a>
            </div>
            <ul class="list-unstyled">
                <?php foreach ($item['items'] as $subItem) { ?>
                    <li><a href="<?= \yii\helpers\Url::to($subItem['url']) ?>"><?= $subItem['label'] ?></a></li>
                <?php } ?>
            </ul>
        <?php } else { ?>
            <div class="title">
                <a <?= (stripos(\yii\helpers\Url::to($item['url']),
                        'sitemap') === false) ? 'rel="nofollow"' : '' ?>
                   href="<?= \yii\helpers\Url::to($item['url']) ?>">
                    <span><?= $item['label'] ?></span>
                </a>
            </div>
        <?php } ?>
        <?php if ($countRoot == 2) { ?>
            </div>
        <?php } ?>
    <?php } else { ?>
        <div class="column">
            <?php if (!empty($item['items'])) {                ?>
                <?php if(isset($item['url']['sefname'])):?>
                    <?php   if($item['url']['sefname'] == 'zhizn'|| $item['url']['sefname'] == 'analitika'):?>
            <ul class="list-unstyled" style="margin-top:5px">
                        <?php else:?>
                        <div class="title"><a rel="nofollow"
                                              href="<?= \yii\helpers\Url::to($item['url']) ?>"><span><?= $item['label'] ?></span></a>
                        </div>
                <ul class="list-unstyled">
                    <?php endif;?>

                 <?php else:?>
                    <div class="title"><a rel="nofollow"
                                          href="<?= \yii\helpers\Url::to($item['url']) ?>"><span><?= $item['label'] ?></span></a>
                    </div>


                <ul class="list-unstyled">
                <?php endif;?>
                    <?php foreach ($item['items'] as $subItem) {
                        if (empty($subItem['url'])) {
                            continue;
                        }
                        ?>
                        <li>
                            <a rel="nofollow"
                               href="<?= \yii\helpers\Url::to($subItem['url']) ?>" <?= (isset($subItem['new_window']) && $subItem['new_window'] == 1) ? 'target="_blank" rel="nofollow"' : '' ?>><?= $subItem['label'] ?></a>
                        </li>
                    <?php } ?>
                </ul>
            <?php } else { ?>
                <div class="title">
                    <a rel="nofollow" href="<?= \yii\helpers\Url::to($item['url']) ?>">
                        <span><?= $item['label'] ?></span>
                    </a>
                </div>
            <?php } ?>
        </div>
        <?php
    } ?>

    <?php
}
