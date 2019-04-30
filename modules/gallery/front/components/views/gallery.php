<?php
/**
 * @var \app\modules\gallery\models\Gallery $gallery
*/
?>
<h3 class="gallery-title"><?=$gallery->title?></h3>
<?php if (!empty($gallery->galleryImages)) : ?>
    <div class="news-gallery-slider gallery-slider js-gallery" id="jsGallery<?=$gallery->id?>">
        <?php foreach ($gallery->galleryImages as $item) : ?>
            <div class="gallery-item">
                <a href="<?=$item->getUploadUrl()?>" data-fancybox="gallery" data-caption="<?=$item->gallery->title?>">
                    <img src="<?=$item->getThumbUrl()?>" alt="">
                </a>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

