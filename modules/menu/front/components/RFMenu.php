<?php
/**
 * Created by PhpStorm.
 * User: yevgeniy
 * Date: 2/23/15
 * Time: 3:04 PM
 */

namespace app\modules\menu\front\components;


use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;

class RFMenu extends \yii\widgets\Menu
{
    public $replaceLinkTemplate = true;

    /**
     * Renders the content of a menu item.
     * Note that the container and the sub-menus are not rendered here.
     * @param array $item the menu item to be rendered. Please refer to [[items]] to see what data might be in the item.
     * @return string the rendering result
     */
    protected function renderItem($item)
    {

        if ($this->replaceLinkTemplate) {
            $this->linkTemplate = '<a href="{url}">{label}</a>';
        }
        if (isset($item['url'])) {
            $template = ArrayHelper::getValue($item, 'template', $this->linkTemplate);

            return strtr($template, [
                '{url}' => Html::encode(Url::to($item['url'], true)),
                '{label}' => $item['label'],
            ]);
        } else {
            $template = ArrayHelper::getValue($item, 'template', $this->labelTemplate);

            return strtr($template, [
                '{label}' => $item['label'],
            ]);
        }
    }

    protected function isItemActive($item)
    {
        if (!empty($this->route) && isset($item['url']) && is_array($item['url']) && isset($item['url'][0])) {
            if (Url::to($item['url']) == $this->route) {
                return true;
            } else {
                return parent::isItemActive($item);
            }
        }

        return false;
    }
}
