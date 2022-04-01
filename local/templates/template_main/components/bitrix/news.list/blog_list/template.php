<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?php /*debug($arResult); */?>

<section class="blog-area section">
    <div class="container">
        <div class="row">
            <?php foreach($arResult["ITEMS"] as $arItem): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="single-post post-style-1">

                            <div class="blog-image"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>" alt="Blog Image"></div>

                            <div class="blog-info">

                                <h4 class="title"><a href="<?=$arItem['DETAIL_PAGE_URL'];?>"><b><?=$arItem['NAME'];?></b></a></h4>

                            </div><!-- blog-info -->
                        </div><!-- single-post -->
                    </div><!-- card -->
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
        <?=$arResult["NAV_STRING"]?>
    <?endif;?>
</section>
