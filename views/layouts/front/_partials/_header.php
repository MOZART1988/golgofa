<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 02.04.19
 * Time: 13:58
 */
?>
<header class="header" id="header">
    <div class="container">
        <div class="menu-toggle" id="jsMenuToggle"><i></i></div>
        <div class="header-logo"><a href="<?=\yii\helpers\Url::to(['/'])?>"><img src="/images/logo.png" alt=""></a></div>
        <div class="header-nav">
            <?=\app\components\widgets\MenuWidget::widget()?>
            <div class="header-options">
                <div class="header-search">
                    <form id="jsSearchForm" action="/<?=\app\modules\languages\models\Languages::getCurrent()->code?>/search/">
                        <input name="search" type="text" class="form-control" placeholder="Введите запрос">
                        <input type="submit">
                        <a class="header-search-toggle"></a>
                    </form>
                </div>
                <?=\app\components\widgets\LanguageSwitcher::widget()?>
            </div>
        </div>
    </div>
</header>
