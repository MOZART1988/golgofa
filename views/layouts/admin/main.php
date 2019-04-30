<?php

/**
 * @var string $content
 * @var \yii\web\View $this
 */
use yii\helpers\Html;

$bundle = yiister\gentelella\assets\Asset::register($this);

$current_user = \app\modules\users\models\Users::findOne(\Yii::$app->getUser()->id);

$kcfDefaultOptions = [
    'disabled'=>false,
    'denyZipDownload' => true,
    'denyUpdateCheck' => true,
    'denyExtensionRename' => true,
    'theme' => 'default',
    'access' =>[    // @link http://kcfinder.sunhater.com/install#_access
        'files' =>[
            'upload' => false,
            'delete' => false,
            'copy' => false,
            'move' => false,
            'rename' => false,
        ],
        'dirs' =>[
            'create' => false,
            'delete' => false,
            'rename' => false,
        ],
    ],
    'types'=>[  // @link http://kcfinder.sunhater.com/install#_types
        'files' => [
            'type' => '',
        ],
        'images' => [
            'type' => '*img',
        ],
    ],
    'thumbsDir' => '.thumbs',
    'thumbWidth' => 100,
    'thumbHeight' => 100,
];

$kcfOptions = array_merge($kcfDefaultOptions, [
    'uploadURL' => Yii::getAlias('@app').'/upload',
    'access' => [
        'files' => [
            'upload' => true,
            'delete' => false,
            'copy' => false,
            'move' => false,
            'rename' => false,
        ],
        'dirs' => [
            'create' => true,
            'delete' => false,
            'rename' => false,
        ],
    ],
]);

?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta charset="<?= Yii::$app->charset ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
        var EDITOR_GALLERIES = <?=\yii\helpers\Json::encode(\app\modules\gallery\models\Gallery::getCkeditorList())?>;
    </script>
</head>
<body class="nav-<?= !empty($_COOKIE['menuIsCollapsed']) && $_COOKIE['menuIsCollapsed'] == 'true' ? 'sm' : 'md' ?>" >
<?php $this->beginBody(); ?>
<div class="container body">

    <div class="main_container">

        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">

                <div class="navbar nav_title" style="border: 0;">
                    <a href="/" class="site_title"><span>Golgofa.kz</span></a>
                </div>
                <div class="clearfix"></div>

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                    <div class="menu_section">
                        <?=
                        \yiister\gentelella\widgets\Menu::widget(
                            [
                                'items' => [
                                    [
                                        'label' => 'Главная',
                                        'url' => '#',
                                        'icon' => 'home',
                                        'items' => [
                                            [
                                                'label' => 'Слово пастора',
                                                'icon' => 'user',
                                                'url' => ['/basepage/pastor/index']
                                            ],
                                            [
                                                'label' => 'Слайдер',
                                                'icon' => 'image',
                                                'url' => ['/basepage/slides/index']
                                            ]
                                        ]
                                    ],
                                    [
                                        'label' => 'Контент',
                                        'icon' => 'file',
                                        'url' => '#',
                                        'items' => [
                                            [
                                                'label' => 'Текстовые страницы',
                                                'icon' => 'sticky-note',
                                                'url' => ['/content/default/index']
                                            ],
                                            [
                                                'label' => 'Наши проекты',
                                                'icon' => 'tasks',
                                                'url' => ['/content/projects/index'],
                                            ],
                                            [
                                                'label' => 'Контакты',
                                                'icon' => 'id-card',
                                                'url' => ['/content/contacts/index'],
                                            ],
                                            [
                                                'label' => 'Расписание',
                                                'icon' => 'list',
                                                'url' => ['/content/scedules/index']
                                            ],
                                            [
                                                'label' => 'Поддержать нас',
                                                'icon' => 'list',
                                                'url' => ['/content/donation/index'],
                                            ]
                                        ]
                                    ],
                                    [
                                        'label' => 'История церкви',
                                        'icon' => 'list',
                                        'url' => '#',
                                        'items' => [
                                            [
                                                'label' => 'Главы',
                                                'icon' => 'list',
                                                'url' => ['/history/default/index'],
                                            ],
                                            [
                                                'label' => 'Подглавы',
                                                'icon' => 'list',
                                                'url' => ['/history/subchapter/index']
                                            ]
                                        ]
                                    ],
                                    [
                                        'label' => 'Меню',
                                        'icon' => 'th',
                                        'url' => ['/menu/menu-items/index']
                                    ],
                                    [
                                        'label' => 'Жизнь церкви',
                                        'icon' => 'clone',
                                        'url' => '#',
                                        'items' => [
                                            [
                                                'label' => 'Рубрики',
                                                'icon' => 'list',
                                                'url' => ['/events/category/index']
                                            ],
                                            [
                                                'label' => 'События',
                                                'icon' => 'file',
                                                'url' => ['/events/event/index']
                                            ]
                                        ]
                                    ],
                                    [
                                        'label' => 'Новости',
                                        'icon' => 'list',
                                        'url' => ['/pages/default/index'],
                                    ],
                                    [
                                        'label' => 'Галереи',
                                        'icon' => 'image',
                                        'url' => ['/gallery/default/index']
                                    ],
                                    [
                                        'label' => 'Пользователи',
                                        'icon' => 'th',
                                        'url' => ['/users/default/index']
                                    ],
                                    [
                                        'label' => 'Модули',
                                        'icon' => 'th',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Языки', 'url' => ['/languages/default/index']],
                                            ['label' => 'Переменные', 'url' => ['/custom_variables/default/index']]
                                        ]
                                    ],
                                    [
                                        'label' => 'Переводы',
                                        'icon' => 'table',
                                        'url' => ['/translate/default/index']
                                    ]
                                ],
                            ]
                        )
                        ?>
                    </div>

                </div>
                <!-- /sidebar menu -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">

            <div class="nav_menu">
                <nav class="" role="navigation">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="http://placehold.it/128x128" alt=""><?=$current_user->getUserFio()?>
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="<?=\yii\helpers\Url::to(['/users/default/view', 'id' => $current_user->id])?>">  Профиль</a>
                                </li>
                                <li>
                                    <a href="<?=\yii\helpers\Url::to(['/users/default/update', 'id' => $current_user->id])?>">
                                        <span>Изменить</span>
                                    </a>
                                </li>
                                <li><a href="<?=\yii\helpers\Url::to(['/users/default/logout'])?>"><i class="fa fa-sign-out pull-right"></i> Выйти</a>
                                </li>
                            </ul>
                        </li>

                        <li class="languages">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <?=\Yii::t('front', 'Язык')?> - <?=\app\modules\languages\models\Languages::getAdminCurrent()->title?>
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <?php foreach (\app\modules\languages\models\Languages::getDropdownList() as $id => $language) {
                                    if ($id == \app\modules\languages\models\Languages::getAdminCurrent()->id) {
                                        continue;
                                    }
                                    ?>
                                    <li><a href="<?= \yii\helpers\Url::to([
                                            '/languages/default/set-language',
                                            'id' => $id
                                        ]) ?>"><?= $language ?></a></li>
                                <?php } ?>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <?php if (isset($this->params['h1'])): ?>
                <div class="page-title">
                    <div class="title_left">
                        <h1><?= $this->params['h1'] ?></h1>
                    </div>
                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="clearfix"></div>

            <?= $content ?>
        </div>
        <!-- /page content -->
        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Ivan Mosiagin @ <?=date('Y')?>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>

</div>

<div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
</div>
<!-- /footer content -->
<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>
