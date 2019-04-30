<?php
/**
 * @var \app\modules\content\models\Donation $model
*/

?>

<div class="title-block " style="background-image: url(/images/donat-title-bg.jpg)">
    <div class="container">
        <h1><?=\Yii::t('front', 'Поддержать служение Церкви')?></h1>
    </div>
</div>

<main class="page page-donations">
    <div class="container">
        <div class="page-content donation-content">
            <div class="donation-img"><img src="<?=$model->getUploadUrl('image')?>" alt=""></div>
            <h3 class="donation-title"><?=$model->title?></h3>
            <div class="donation-text"><?=$model->text?></div>
            <div class="donation-links">
                <a href="#" onclick="PrintDiv();" class="btn btn--print"><?=\Yii::t('front', 'Распечатать реквизиты')?></a>
                <a href="#" onclick="copyFormatted();" class="btn btn--copy"><?=\Yii::t('front', 'Скопировать реквизиты')?></a>
            </div>
        </div>
        <div class="page-back">
            <a href="<?=\yii\helpers\Url::to(['/'])?>" class="btn btn--lucid"><?=\Yii::t('front', 'Вернуться на главную')?></a>
        </div>
    </div>
</main>


<div id="divToPrint" style="display:none;">
    <?=$model->requisites?>
</div>

<script type="text/javascript">
    function PrintDiv() {
        var divToPrint = document.getElementById('divToPrint');
        var popupWin = window.open('', '_blank', 'width=1200,height=600');
        popupWin.document.open();
        popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }

    function copyFormatted () {
        // Create container for the HTML
        // [1]
        var container = document.createElement('div')
        container.innerHTML = document.getElementById('divToPrint').innerHTML;

        // Hide element
        // [2]
        container.style.position = 'fixed'
        container.style.pointerEvents = 'none'
        container.style.opacity = 0

        // Detect all style sheets of the page
        var activeSheets = Array.prototype.slice.call(document.styleSheets)
            .filter(function (sheet) {
                return !sheet.disabled
            })

        // Mount the container to the DOM to make `contentWindow` available
        // [3]
        document.body.appendChild(container)

        // Copy to clipboard
        // [4]
        window.getSelection().removeAllRanges()

        var range = document.createRange()
        range.selectNode(container)
        window.getSelection().addRange(range)

        // [5.1]
        document.execCommand('copy')

        // [5.2]
        for (var i = 0; i < activeSheets.length; i++) activeSheets[i].disabled = true

        // [5.3]
        document.execCommand('copy')

        // [5.4]
        for (var i = 0; i < activeSheets.length; i++) activeSheets[i].disabled = false

        // Remove the container
        // [6]
        document.body.removeChild(container)
        alert('Скопировано');
    }
</script>

