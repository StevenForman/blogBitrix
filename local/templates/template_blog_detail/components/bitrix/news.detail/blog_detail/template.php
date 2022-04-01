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

<div class="slider" style="background-image: url('<?=$arResult["DETAIL_PICTURE"]["SRC"]?>');">

</div>

<section class="post-area">
    <div class="container">

        <div class="row">

            <div class="col-lg-1 col-md-0"></div>
            <div class="col-lg-10 col-md-12">

                <div class="main-post">

                    <div class="post-top-area">

                        <h3 class="title"><a href="#"><b><?=$arResult["NAME"]?></b></a></h3>

                        <div class="middle-area">
                            <h6 class="date"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></h6>
                        </div>

                        <p class="para"><?=$arResult["DETAIL_TEXT"]?></p>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
