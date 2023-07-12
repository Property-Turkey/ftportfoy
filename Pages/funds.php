<?php // Header
?>
<header class="header bg-funds accordion_section our_funds" >

    <div class="container-fluid">
        <?php include_once('Elements/mmenu.php') ?>
    </div>
    <div class="col-12 ">
        <h1><?= __('our_investment_funds') ?></h1>
    </div>
</header>



<div class=" accordion_section our_funds" id="accordion">


    <?php /*<section class="container-fluid top_maring2">
        <div class="row sides_padding_3">

            <?php //section 0
            ?>
            <div class="col-12  accordion_header_dark collapsed" data-toggle="collapse" data-target="#sec_0">
                <button class="butn butn-blue-light butn-w100"><?= __('what_is_investement_fund') ?></button>
            </div>

            <div class="col-12 accordion_content">
                <div class="collapse" id="sec_0" data-parent="#accordion">
                    <div class="row sides_padding_2">
                        <h2 class="col-12 ">
                            <?= __('sec_0_h2') ?>
                        </h2>
                        <div class="col-lg-4 ">
                            <h3><?= __('sec_0_h3_1') ?></h3>
                            <?= __('sec_0_p_1') ?>
                        </div>
                        <div class="col-lg-4 ">
                            <h3><?= __('sec_0_h3_2') ?></h3>
                            <?= __('sec_0_p_2') ?>
                        </div>
                        <div class="col-lg-4 ">
                            <h3><?= __('sec_0_h3_3') ?></h3>
                            <?= __('sec_0_p_3') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>*/?>


    <section class="container-fluid top_maring2">
        <div class="row sides_padding_3">
            <?php //section 1
            ?>
            <div class="col-12 accordion_header collapsed" data-toggle="collapse" data-target="#sec_1">
                <button class="butn butn-gray-light butn-w100"><?= __('realestate_investment_funds') ?></button>
            </div>

            <div class="col-12 accordion_content">
                <div class="collapse " id="sec_1" data-parent="#accordion">
                    <div class="row">

                        <div class="col-lg-8 ">
                            <div class="row sides_padding_2">
                                <h2 class="col-12">
                                    <?= __('sec_1_h2') ?>
                                </h2>

                                <div class="col-lg-6">
                                    <?= __('sec_1_p_1') ?>
                                </div>
                                <div class="col-lg-6">
                                    <?= __('sec_1_p_2') ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 bg_img_2 order-lg-0 order-first">
                            <?php // background image
                            ?>
                        </div>

                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid ">
        <div class="row sides_padding_3">
            <?php //section 2
            ?>
            <div class="col-12 accordion_header collapsed" data-toggle="collapse" data-target="#sec_2">
                <button class="butn butn-gray-light butn-w100"><?= __('private_realestate_investment_funds') ?></button>
            </div>

            <div class="col-12 accordion_content">
                <div class="collapse" id="sec_2" data-parent="#accordion">
                    <div class="row">

                        <div class="col-lg-8 ">
                            <div class="row sides_padding_2">
                                <h2 class="col-12 ">
                                    <?= __('sec_2_h2') ?>
                                </h2>
                                <div class="col-lg-6 ">
                                    <?= __('sec_2_p_1') ?>
                                </div>
                                <div class="col-lg-6 ">
                                    <?= __('sec_2_p_2') ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 bg_img_2 order-lg-0 order-first">
                            <?php // background image
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="container-fluid ">
        <div class="row sides_padding_3">
            <?php //section 3
            ?>
            <div class="col-12 accordion_header collapsed" data-toggle="collapse" data-target="#sec_3">
                <button class="butn butn-gray-light butn-w100"><?= __('venture_capital_investment_funds') ?></button>
            </div>

            <div class="col-12 accordion_content">
                <div class="collapse" id="sec_3" data-parent="#accordion">
                    <div class="row ">
                        <div class="col-lg-8 ">
                            <div class="row sides_padding_2">
                                <h2 class="col-12 ">
                                    <?= __('sec_3_h2') ?>
                                </h2>
                                <div class="col-lg-6 ">
                                    <?= __('sec_3_p_1') ?>
                                </div>
                                <div class="col-lg-6 ">
                                    <?= __('sec_3_p_2') ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 bg_img_2 order-lg-0 order-first">
                            <?php // background image
                            ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>