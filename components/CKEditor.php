<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 15.04.19
 * Time: 16:08
 */

namespace app\components;

use dosamigos\ckeditor\CKEditorWidgetAsset;
use iutbay\yii2kcfinder\KCFinderAsset;
use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;

class CKEditor extends \dosamigos\ckeditor\CKEditor
{
    public $enableKCFinder = true;

    /**
     * Registers CKEditor plugin
     * @codeCoverageIgnore
     */
    protected function registerPlugin()
    {
        if ($this->enableKCFinder) {
            $this->registerKCFinder();
        }

        parent::registerPlugin();
    }

    protected function registerKCFinder()
    {

        $_SESSION['KCFINDER'] = [

            'disabled' => false,
            'uploadURL'=>'/upload',
            'uploadDir'=> Yii::getAlias('@app') . '/web/upload'

        ];

        $register = KCFinderAsset::register($this->view);
        $kcfinderUrl = $register->baseUrl;

        $browseOptions = [
            'filebrowserBrowseUrl' => $kcfinderUrl . '/browse.php?opener=ckeditor&type=files',
            'filebrowserUploadUrl' => $kcfinderUrl . '/upload.php?opener=ckeditor&type=files',
            'filebrowserImageBrowseUrl' => $kcfinderUrl . '/browse.php?opener=ckeditor&type=images',
            'filebrowserImageUploadUrl' => $kcfinderUrl . '/upload.php?opener=ckeditor&type=images',
        ];

        $this->clientOptions = ArrayHelper::merge($browseOptions, $this->clientOptions);
    }
}