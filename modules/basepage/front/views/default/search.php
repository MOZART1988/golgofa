<?php
/**
 * @var array $resultModels
 */
?>

<div class="title-block " style="background-image: url(/images/search-title-bg.jpg)">
    <div class="container">
        <h1><?=\Yii::t('front', 'Поиск по разделам сайта')?></h1>
    </div>
</div>

<main class="page page-search">
    <div class="container">
        <section class="search-form">
            <form method="get">
                <input type="text" class="form-control" name="query" value="<?=\Yii::$app->request->get('query')?>">
                <input type="submit">
            </form>
        </section>
        <?php if (!empty($resultModels)): ?>
            <div class="search-status">По вашему запросу найдено <?=count($resultModels)?> записи</div>

            <section class="search-results">
                <?php foreach ($resultModels as $item) : ?>
                    <div class="search-item">
                        <h4 class="search-item-title">
                            <a href="<?=\app\components\UniversalHelper::getUrlByType($item)?>">
                                <?=$item['title']?>
                            </a>
                        </h4>
                        <div class="search-item-text"> <?=$item['text']?> </div>
                        <?=\app\components\UniversalHelper::getBreadByType($item)?>
                    </div>
                <?php endforeach; ?>
            </section>
        <?php else : ?>
            <div class="search-status">По вашему запросу ничего не найдено</div>
        <?php endif; ?>
    </div>
</main>
