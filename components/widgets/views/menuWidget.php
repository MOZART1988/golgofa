<?php
/**
 * @var $menuItems[] $menuItems
 */
?>
<nav class="header-menu" id="jsNav">
    <ul class="clearlist">
    <?php foreach ($menuItems as $item) : ?>
        <?php $children = $item->children(1)->all()  ?>
        <?php if (!empty($children)) : ?>
            <li class="sub">
                <a href="<?=$item->link?>"><?=$item->title?></a>
                <nav>
                    <ul class="clearlist">
                        <?php foreach ($children as $sub) : ?>
                            <li class="<?=(strpos($_SERVER['REQUEST_URI'], $sub->link) !== false ? 'active' : '')?>">
                                <a href="<?=$sub->link?>"><?=$sub->title?></a>
                            </li>
                        <?php endforeach ; ?>
                    </ul>
                </nav>
            </li>
        <?php else: ?>
            <li class="<?=(strpos($_SERVER['REQUEST_URI'], $item->link) !== false ? 'active' : '')?>">
                <a href="<?=$item->link?>"><?=$item->title?></a>
            </li>
        <?php endif; ?>
    <?php endforeach ?>
    </ul>
</nav>
