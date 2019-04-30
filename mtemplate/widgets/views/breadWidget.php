<?php
/**
 * @var array $breads
 */
?>

<div class="container">
    <?php
    echo \yii\widgets\Breadcrumbs::widget([
        'links' => isset($breads) ? $breads : [],
    ]);
    ?>
</div>
