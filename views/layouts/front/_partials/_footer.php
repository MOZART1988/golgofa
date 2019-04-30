<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 02.04.19
 * Time: 13:59
 */
?>
<footer class="footer">
    <div class="container">
        <ul class="footer-socials clearlist">
            <?php if (\app\modules\custom_variables\models\CustomVariables::getOrCreate(
                'Ссылка инстаграмма', 'https://instagram.com')): ?>
                <li><a href="<?=\app\modules\custom_variables\models\CustomVariables::getOrCreate(
                        'Ссылка инстаграмма', 'https://instagram.com')?>" target="_blank">
                        <img src="/images/icons/icon-inst.png" alt="">
                        <img src="/images/icons/icon-inst-active.png" alt="">
                    </a>
                </li>
            <?php endif; ?>
            <?php if (\app\modules\custom_variables\models\CustomVariables::getOrCreate(
                'Ссылка фейсбука', 'https://facebook.com')): ?>
                <li>
                    <a href="<?=\app\modules\custom_variables\models\CustomVariables::getOrCreate(
                        'Ссылка фейсбука', 'https://facebook.com')?>" target="_blank">
                        <img src="/images/icons/icon-fb.png" alt="">
                        <img src="/images/icons/icon-fb-active.png" alt="">
                    </a>
                </li>
            <?php endif; ?>
            <?php if (\app\modules\custom_variables\models\CustomVariables::getOrCreate(
                'Ссылка VK', 'https://vk.com')): ?>
                <li>
                    <a href="<?=\app\modules\custom_variables\models\CustomVariables::getOrCreate(
                        'Ссылка VK', 'https://vk.com')?>" target="_blank">
                        <img src="/images/icons/icon-vk.png" alt="">
                        <img src="/images/icons/icon-vk-active.png" alt="">
                    </a>
                </li>
            <?php endif; ?>
            <?php if (\app\modules\custom_variables\models\CustomVariables::getOrCreate(
                'Ссылка Телеграмм', 'https://web.telegram.com')): ?>
                <li>
                    <a href="<?=\app\modules\custom_variables\models\CustomVariables::getOrCreate(
                        'Ссылка Телеграмм', 'https://web.telegram.com')?>" target="_blank">
                        <img src="/images/icons/icon-tg.png" alt="">
                        <img src="/images/icons/icon-tg-active.png" alt="">
                    </a>
                </li>
            <?php endif; ?>
            <?php if (\app\modules\custom_variables\models\CustomVariables::getOrCreate(
                'Ссылка Ютуб', 'https://youtube.com')) : ?>
                <li>
                    <a href="<?=\app\modules\custom_variables\models\CustomVariables::getOrCreate(
                        'Ссылка Ютуб', 'https://youtube.com')?>" target="_blank">
                        <img src="/images/icons/icon-yt.png" alt="">
                        <img src="/images/icons/icon-yt-active.png" alt="">
                    </a>
                </li>
            <?php endif ; ?>
        </ul>
        <div class="footer-copyright"><?=\app\modules\custom_variables\models\CustomVariables::getOrCreate(
                'Текст copyright', '© «Golgofa» Первая Алматинская Церковь Евангельских Христиан-Баптистов'
            )?>, <?=date('Y')?></div>
        <div class="footer-address"><?=\app\modules\custom_variables\models\CustomVariables::getOrCreate(
                'Адрес в футере', 'Казахстан, 050005, г.Алматы ул. <span>Бекетова 12</span>'
            )?></div>
    </div>

</footer>
