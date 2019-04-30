<main class="page page-404">
    <div class="container">
        <figure class="not-found">
            <img src="/images/img-404.png" alt="">
            <figcaption>
                <h3><?=\Yii::t('front', 'Страница не найдена')?></h3>
                <p><?=\Yii::t('front', 'К сожалению, страница, на которую вы пытаетесь попасть, <br> не существует или была удалена.')?></p>
            </figcaption>

        </figure>

        <div class="news-back">
            <a href="<?=\yii\helpers\Url::to(['/'])?>" class="btn"><?=\Yii::t('front', 'Перейти на главную')?></a>
        </div>
    </div>
</main>