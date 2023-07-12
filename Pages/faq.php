
<?php // Header
?>
<header class="header bg-faq container-fluid">

    <?php include_once('Elements/mmenu.php') ?>

    <?php // Video 
    ?>
    <div class="row form_div sides_padding">
        <div class="col-12">
            <h1><?= __('frequently_asked_questions') ?></h1>
        </div>
        <?php /* <div class="col-12">
            <form class="form_1" id="form" onsubmit="doSend(event);">
                <h2><?=__('form_header')?></h2>
                <div><input type="input" placeholder="<?=__('name')?>" id="name" /></div>
                <div><input type="input" placeholder="<?=__('phone')?>" id="phone" /></div>
                <div><input type="input" placeholder="<?=__('email')?>" id="email" /></div>
                <div><button class="butn butn-red"><?=__('contact')?></button></div>
            </form>
        </div> */?>
    </div>
</header>

<div class="faq_div" id="accordion">

    <?php /*<section class="container-fluid ">
        <div class="row sides_padding_3">
            <?php //Question 1
            ?>
            <div class="col-12 accordion_header collapsed" data-toggle="collapse" data-target="#question_1">
                <button class="butn butn-gray-light butn-w100"><?= __('question_1') ?></button>
            </div>
            
            <div class="col-12 accordion_content">
                <div class="collapse" id="question_1" data-parent="#accordion">
                    <div class="row sides_padding_2">

                        <div class="col-lg-4">
                            <h2><?= __('question_1_h2_1') ?></h2>
                            <?= __('question_1_p_1') ?>
                            <h2><?= __('question_1_h2_2') ?></h2>
                            <?= __('question_1_p_2_prt1') ?>
                        </div>

                        <div class="col-lg-4">
                            <?= __('question_1_p_2_prt2') ?>
                            <h2><?= __('question_1_h2_3') ?></h2>
                            <?= __('question_1_p_3_prt1') ?>
                        </div>

                        <div class="col-lg-4">
                            <?= __('question_1_p_3_prt2') ?>
                            <h2><?= __('question_1_h2_4') ?></h2>
                            <?= __('question_1_p_4') ?>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>*/?>

<section class="container-fluid ">
        <div class="row sides_padding_3">
            <?php //Question 2
            ?>
            <div class="col-12 accordion_header collapsed" data-toggle="collapse" data-target="#question_2">
                <button class="butn butn-gray-light butn-w100"><?= __('question_2') ?></button>
            </div>
            
            <div class="col-12 accordion_content">
                <div class="collapse " id="question_2" data-parent="#accordion">
                    <div class="row sides_padding_2">

                        <div class="col-lg-4">
                            <picture>
                                <source media="(max-width: 950px)" srcset="img/FAQ_Image_1.webp">
                                <img src="img/FAQ_Feat_WhatisREIF.webp" title="<?= __('site_alt_img') ?>" alt="<?= __('site_alt_img') ?>">
                            </picture>
                        </div>

                        <div class="col-lg-4">
                            <h3 class="mt-3 mb-3"><?=__('question_2_q_1')?></h3>
                            <?= __('question_2_p_1') ?>
                            <h3 class="mt-3 mb-3"><?=__('question_2_q_2')?></h3>
                            <?= __('question_2_p_2') ?>
                        </div>

                        <div class="col-lg-4">
                            <h3 class="mt-3 mb-3"><?=__('question_2_q_3')?></h3>
                            <?= __('question_2_p_3') ?>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="container-fluid ">
        <div class="row sides_padding_3">
            <?php //Question 3
            ?>
            <div class="col-12 accordion_header collapsed" data-toggle="collapse" data-target="#question_3">
                <button class="butn butn-gray-light butn-w100"><?= __('question_3') ?></button>
            </div>
            
            <div class="col-12 accordion_content">
                <div class="collapse " id="question_3" data-parent="#accordion">
                    <div class="row sides_padding_2">

                        <div class="col-lg-4">
                            <picture>
                                <source media="(max-width: 950px)" srcset="img/FAQ_Image_2.webp">
                                <img src="img/FAQ_Feat_WhatisVCIF.webp" title="<?= __('site_alt_img') ?>" alt="<?= __('site_alt_img') ?>">
                            </picture>
                        </div>

                        <div class="col-lg-4">
                            <h3 class="mt-3 mb-3"><?=__('question_3_q_1')?></h3>
                            <?= __('question_3_p_1') ?>
                            <h3 class="mt-3 mb-3"><?=__('question_3_q_2')?></h3>
                            <?= __('question_3_p_2') ?>
                            <h3 class="mt-3 mb-3"><?=__('question_3_q_3')?></h3>
                            <?= __('question_3_p_3') ?>
                            <h3 class="mt-3 mb-3"><?=__('question_3_q_4')?></h3>
                            <?= __('question_3_p_4') ?>
                        </div>

                        <div class="col-lg-4">
                            <h3 class="mt-3 mb-3"><?=__('question_3_q_5')?></h3>
                            <?= __('question_3_p_5') ?>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="container-fluid ">
        <div class="row sides_padding_3">
            <?php //Question 4
            ?>
            <div class="col-12 accordion_header collapsed" data-toggle="collapse" data-target="#question_4">
                <button class="butn butn-gray-light butn-w100"><?= __('question_4') ?></button>
            </div>
            
            <div class="col-12 accordion_content">
                <div class="collapse " id="question_4" data-parent="#accordion">
                    <div class="row sides_padding_2">

                        <div class="col-lg-4">
                            <picture>
                                <source media="(max-width: 950px)" srcset="img/FAQ_Image_3.webp">
                                <img src="img/FAQ_Feat_WhoCanCreate.webp" title="<?= __('site_alt_img') ?>" alt="<?= __('site_alt_img') ?>">
                            </picture>
                        </div>

                        <div class="col-lg-4">
                            <h3 class="mt-3 mb-3"><?=__('question_4_q_1')?></h3>
                            <?= __('question_4_p_1') ?>
                            <h3 class="mt-3 mb-3"><?=__('question_4_q_2')?></h3>
                            <?= __('question_4_p_2') ?>
                        </div>

                        <div class="col-lg-4">
                            <h3 class="mt-3 mb-3"><?=__('question_4_q_3')?></h3>
                            <?= __('question_4_p_3') ?>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="container-fluid ">
        <div class="row sides_padding_3">
            <?php //Question 5
            ?>
            <div class="col-12 accordion_header collapsed" data-toggle="collapse" data-target="#question_5">
                <button class="butn butn-gray-light butn-w100"><?= __('question_5') ?></button>
            </div>
            
            <div class="col-12 accordion_content">
                <div class="collapse " id="question_5" data-parent="#accordion">
                    <div class="row sides_padding_2">

                        <div class="col-lg-4">
                            <picture>
                                <source media="(max-width: 950px)" srcset="img/FAQ_Image_4.webp">
                                <img src="img/FAQ_Feat_REIF-VCFDifferences.webp" title="<?= __('site_alt_img') ?>" alt="<?= __('site_alt_img') ?>">
                            </picture>
                        </div>

                        <div class="col-lg-4">
                            <h3 class="mt-3 mb-3"><?=__('question_5_q_1')?></h3>
                            <?= __('question_5_p_1') ?>
                            <h3 class="mt-3 mb-3"><?=__('question_5_q_2')?></h3>
                            <?= __('question_5_p_2') ?>
                            <h3 class="mt-3 mb-3"><?=__('question_5_q_3')?></h3>
                            <?= __('question_5_p_3') ?>
                            <h3 class="mt-3 mb-3"><?=__('question_5_q_4')?></h3>
                            <?= __('question_5_p_4') ?>
                            <h3 class="mt-3 mb-3"><?=__('question_5_q_5')?></h3>
                            <?= __('question_5_p_5') ?>
                            <h3 class="mt-3 mb-3"><?=__('question_5_q_6')?></h3>
                            <?= __('question_5_p_6') ?>
                        </div>

                        <div class="col-lg-4">
                            <h3 class="mt-3 mb-3"><?=__('question_5_q_7')?></h3>
                            <?= __('question_5_p_7') ?>
                            <h3 class="mt-3 mb-3"><?=__('question_5_q_8')?></h3>
                            <?= __('question_5_p_8') ?>
                            <h3 class="mt-3 mb-3"><?=__('question_5_q_9')?></h3>
                            <?= __('question_5_p_9') ?>
                            <h3 class="mt-3 mb-3"><?=__('question_5_q_10')?></h3>
                            <?= __('question_5_p_10') ?>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid ">
        <div class="row sides_padding_3">
            <?php //Question 6
            ?>
            <div class="col-12 accordion_header collapsed" data-toggle="collapse" data-target="#question_6">
                <button class="butn butn-gray-light butn-w100"><?= __('question_6') ?></button>
            </div>
            
            <div class="col-12 accordion_content">
                <div class="collapse " id="question_6" data-parent="#accordion">
                    <div class="row sides_padding_2">

                        <div class="col-lg-4">
                            <picture>
                                <source media="(max-width: 950px)" srcset="img/FAQ_Image_5.webp">
                                <img src="img/FAQ_Feat_Tax.webp" title="<?= __('site_alt_img') ?>" alt="<?= __('site_alt_img') ?>">
                            </picture>
                        </div>

                        <div class="col-lg-4">
                            <h3 class="mt-3 mb-3"><?=__('question_6_q_1')?></h3>
                            <?= __('question_6_p_1') ?>
                            <h3 class="mt-3 mb-3"><?=__('question_6_q_2')?></h3>
                            <?= __('question_6_p_2') ?>
                        </div>

                        <div class="col-lg-4">
                            <h3 class="mt-3 mb-3"><?=__('question_6_q_3')?></h3>
                            <?= __('question_6_p_3') ?>
                            <h3 class="mt-3 mb-3"><?=__('question_6_q_4')?></h3>
                            <?= __('question_6_p_4') ?>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>