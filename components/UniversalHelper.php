<?php
/**
 * Created by PhpStorm.
 * User: wfwda
 * Date: 13.04.2019
 * Time: 8:25
 */

namespace app\components;


use yii\helpers\Url;

class UniversalHelper
{
    public static function getUrlByType($item)
    {
        switch ($item['type']) {
            case 'content':
                return Url::to(['/content/default/view', 'slug' => $item['slug']]);
                break;
            case 'pages':
                return Url::to(['/pages/default/view', 'slug' => $item['slug']]);
                break;
            case 'events':
                return Url::to(['/events/default/view', 'slug' => $item['slug']]);
                break;
            case 'history':
                return Url::to(['/history/default/view', 'id' => $item['id']]);
                break;
        }
    }

    public static function getBreadByType($item)
    {
        switch ($item['type']) {
            case 'content':
                return '
                    <ul class="clearlist search-item-breadcrumbs">
                    <li><a href="'.Url::to(['/']).'">'.\Yii::t('front', 'Главная').'</a></li>
                    <li><a href="'.self::getUrlByType($item).'">'.$item['title'].'</a></li>
                </ul>
                ';
                break;
            case 'pages':
                return '
                    <ul class="clearlist search-item-breadcrumbs">
                    <li><a href="'.Url::to(['/']).'">'.\Yii::t('front', 'Главная').'</a></li>
                    <li><a href="'.Url::to(['/pages/default/index']).'">'.\Yii::t('front', 'Новости').'</a></li>
                    <li><a href="'.self::getUrlByType($item).'">'.$item['title'].'</a></li>
                </ul>
                ';
                break;
            case 'events':
                return '
                    <ul class="clearlist search-item-breadcrumbs">
                    <li><a href="'.Url::to(['/']).'">'.\Yii::t('front', 'Главная').'</a></li>
                    <li><a href="'.Url::to(['/events/default/index']).'">'.\Yii::t('front', 'События').'</a></li>
                    <li><a href="'.self::getUrlByType($item).'">'.$item['title'].'</a></li>
                </ul>
                ';
                break;
            case 'history':
                return '
                    <ul class="clearlist search-item-breadcrumbs">
                    <li><a href="'.Url::to(['/']).'">'.\Yii::t('front', 'Главная').'</a></li>
                    <li><a href="'.Url::to(['/history/default/index']).'">'.\Yii::t('front', 'История церкви').'</a></li>
                    <li><a href="'.self::getUrlByType($item).'">'.$item['title'].'</a></li>
                </ul>
                ';
                break;
        }
    }
}