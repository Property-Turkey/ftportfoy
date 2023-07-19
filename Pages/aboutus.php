


<?php // Header
?>
<div class="header bg-no-photo">

    <header class="container-fluid">
        <?php include_once('Elements/mmenu.php') ?>
    </header>

    <?php // Tabs
    ?>
    <section class="container-fluid tabs_section">
        <div class="row sides_padding">
            <div class="col-12 ">
                <h1><?=__('aboutus')?></h1>
            </div>
            <div class="col-lg-4">
                <div class="tabs_btns nav">
                    <a data-toggle="pill" data-target="#tab_1" class="tab_item active"><?=__('ABOUT_OUR_COMPANY')?></a>
                    <a data-toggle="pill" data-target="#tab_2" class="tab_item"><?=__('OUR_STORY')?></a>
                    <a data-toggle="pill" data-target="#tab_3" class="tab_item"><?=__('ECOSYSTEM')?></a>
                    <a data-toggle="pill" data-target="#tab_4" class="tab_item"><?=__('OUR_PHILOSOPHY')?></a>
                    <a data-toggle="pill" data-target="#tab_5" class="tab_item"><?=__('SHAREHOLDERS_STRUCTURE')?></a>
                    <a data-toggle="pill" data-target="#tab_6" class="tab_item"><?=__('BOARD_OF_DIRECTORS')?></a>
                    <a data-toggle="pill" data-target="#tab_7" class="tab_item"><?=__('CERTIFICATE_OF_AUTHORITY')?></a>
                    <a data-toggle="pill" data-target="#tab_8" class="tab_item"><?=__('OUR_PARTNERS')?></a>
                </div>
            </div>
            <div class="col-lg-8 tab-content">
                
                <?php // ABOUT_OUR_COMPANY
                ?>
                <div class="tab-pane active" id="tab_1">
                    <div class="row">
                        <div class="col-12">
                            <h2><?=__('tab_header_1')?></h2>
                        </div>
                        <div class="col-lg-6">
                            <?=__('tab_p1_1')?>
                        </div>
                        <div class="col-lg-6">
                            <?=__('tab_p2_1')?>
                        </div>
                    </div>
                </div>
                
                <?php // OUR_STORY
                ?>
                <div class="tab-pane fade" id="tab_2">
                    <div class="row">
                        <div class="col-12">
                            <h2><?=__('tab_header_2')?></h2>
                        </div>
                        <div class="col-lg-6">
                            <?=__('tab_p1_2')?>
                        </div>
                        <div class="col-lg-6">
                            <?=__('tab_p2_2')?>
                        </div>
                    </div>
                </div>

                <?php // ECOSYSTEM
                ?>
                <div class="tab-pane fade" id="tab_3">
                    <div class="row">
                        <div class="col-12">
                            <h2><?=__('tab_header_3')?></h2>
                        </div>
                        <div class="col-lg-6">
                            <?=__('tab_p1_3')?>
                        </div>
                        <div class="col-lg-6">
                            <?=__('tab_p2_3')?>
                        </div>
                    </div>
                    
                </div>

                <?php // OUR_PHILOSOPHY
                ?>
                <div class="tab-pane fade" id="tab_4">
                    <div class="row">
                        <div class="col-12">
                            <h2><?=__('tab_header_4_1')?></h2>
                        </div>
                        <div class="col-lg-6">
                            <?=__('tab_p1_4_1')?>
                        </div>
                        <div class="col-lg-6">
                            <?=__('tab_p2_4_2')?>
                        </div>
                        <div class="col-12">
                            <h2><?=__('tab_header_4_2')?></h2>
                        </div>
                        <div class="col-lg-6">
                            <?=__('tab_p1_4_3')?>
                        </div>
                        <div class="col-lg-6">
                            <?=__('tab_p2_4_4')?>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-12 mt-4">
                            <a href="file/Onaylı_Yetki_Belgesi_FT_License.pdf" target="_blank" class="butn butn-gray-light butn-w100 dl-icon"><?=__('tab_butn_4')?></a>
                        </div>
                    </div> -->
                </div>
                
                <?php // SHAREHOLDERS_STRUCTURE 
                ?>
                <div class="tab-pane fade" id="tab_5">
                    <div class="row">

                        <div class="col-12">
                            <h2><?=__('tab_header_5')?></h2>
                        </div>
                    
                        <div class="col-lg-4 hideMob mb-3">
                            <b><?=__('tab_h3_5_1')?></b>
                        </div>
                        <div class="col-lg-4 hideMob">
                            <b><?=__('tab_h3_5_2')?></b>
                        </div>
                        <div class="col-lg-4 hideMob">
                            <b><?=__('tab_h3_5_3')?></b>
                        </div>


                        <div class="col-lg-4">
                            <b><?=__('tab_div_5_1_1')?></b>
                        </div>
                        <div class="col-6 hideWeb"> <small><?=__('tab_h3_5_2')?></small> </div>
                        <div class="col-lg-4 col">
                            <?=__('tab_div_5_1_2')?>
                        </div>
                        <div class="col-6 hideWeb"> <small><?=__('tab_h3_5_3')?></small> </div>
                        <div class="col-lg-4 col mb-5">
                            <?=__('tab_div_5_1_3')?>
                        </div>


                        <div class="col-lg-4">
                            <b><?=__('tab_div_5_2_1')?></b>
                        </div>
                        <div class="col-6 hideWeb"> <small><?=__('tab_h3_5_2')?></small> </div>
                        <div class="col-lg-4 col">
                            <?=__('tab_div_5_2_2')?>
                        </div>
                        <div class="col-6 hideWeb"> <small><?=__('tab_h3_5_3')?></small> </div>
                        <div class="col-lg-4 col mb-5">
                            <?=__('tab_div_5_2_3')?>
                        </div>

                        
                        <div class="col-lg-4">
                            <b><?=__('tab_div_5_3_1')?></b>
                        </div>
                        <div class="col-6 hideWeb"> <small><?=__('tab_h3_5_2')?></small> </div>
                        <div class="col-lg-4 col">
                            <?=__('tab_div_5_3_2')?>
                        </div>
                        <div class="col-6 hideWeb"> <small><?=__('tab_h3_5_3')?></small> </div>
                        <div class="col-lg-4 col mb-5">
                            <?=__('tab_div_5_3_3')?>
                        </div>
                            

                    </div>
                </div>
                
                <?php // BOARD_OF_DIRECTORS
                ?>
                <div class="tab-pane fade" id="tab_6">
                    <div class="row">
                        <div class="col-12">
                            <h2><?=__('tab_header_6')?></h2>
                        </div>
                        <div class="col-lg-6">

                            <h3  class=""><?=__('tab_h3_1')?></h3>
                            <div><?=__('tab_bi_6_1')?></div>
                            <div><?=__('tab_p1_6_1')?></div>
                            <div class="col-12 mb-5"></div>

                            <h3  class=""><?=__('tab_h3_2')?></h3>
                            <div><?=__('tab_bi_6_2')?></div>
                            <div><?=__('tab_p1_6_2')?></div>
                            <div class="col-12 mb-5"></div>

                            <h3  class=""><?=__('tab_h3_3')?></h3>
                            <div><?=__('tab_bi_6_3')?></div>
                            <div><?=__('tab_p1_6_3')?></div>
                            <div class="col-12 mb-5"></div>

                        </div>
                        <div class="col-lg-6">
                            <h3  class=""><?=__('tab_h3_4')?></h3>
                            <div><?=__('tab_bi_6_4')?></div>
                            <div><?=__('tab_p1_6_4')?></div>
                            <div class="col-12 mb-5"></div>

                            <h3  class=""><?=__('tab_h3_5')?></h3>
                            <div><?=__('tab_bi_6_5')?></div>
                            <div><?=__('tab_p1_6_5')?></div>
                            <div class="col-12 mb-5"></div>
                        </div>
                    </div>
                </div>
                
                <?php // CERTIFICATE_OF_AUTHORITY
                ?>
                <div class="tab-pane fade" id="tab_7">
                    <div class="row">
                        <div class="col-12">
                            <h2><?=__('tab_header_7')?></h2>
                        </div>
                        <div class="col-12">
                            <a href="<?=APP_FOLDER?>/file/Onaylı_Yetki_Belgesi_FT_License.pdf" target="_blank" class="butn butn-gray-light butn-w100 bg-icon-download"><?=__('tab_7_btn')?></a>
                        </div>
                    </div>
                </div>

                <?php // OUR_PARTNERS
                ?>
                <div class="tab-pane fade" id="tab_8">
                    <div class="row">
                        <div class="col-12">
                            <h2><?=__('tab_header_8')?></h2>
                        </div>
                        <div class="col-12 partners ">
                            <div class="partner">
                                <img src="img/partners/GYODER_Logo.webp" alt>
                            </div>
                            <div class="partner">
                                <img src="img/partners/GİGDER_Logo.webp" alt>
                            </div>
                            <div class="partner">
                                <img src="img/partners/Ekol Gayrimenkul Değerleme_Logo.webp" alt>
                            </div>
                            <div class="partner">
                            <img src="img/partners/akbank-logo-300x150.webp" alt>
                            </div>
                            <div class="partner">
                                <img src="img/partners/Bizim Menkul Değerler Logo.webp" alt>
                            </div>
                            <div class="partner">
                                <img src="img/partners/Emlak Katılım Bankası.webp" alt>
                            </div>
                            <div class="partner">
                                <img src="img/partners/integral-logo.webp" alt>
                            </div>
                            <div class="partner">
                                <img src="img/partners/İdeal_Gayrimenkul Değerleme_Logo.webp" alt>
                            </div>
                            <div class="partner">
                                <img src="img/partners/İSFA_Logo.webp" alt>
                            </div>
                            <div class="partner">
                                <img src="img/partners/Mercek Bağımsız Denetim_Logo.webp" alt>
                            </div>
                            <div class="partner">
                                <img src="img/partners/Optimus Yazılım-Logo.webp" alt>
                            </div>
                            <div class="partner">
                                <img src="img/partners/İSLAM İKTİSADI ARAŞTIRMALARI VAKFI_Logo.webp" alt>
                            </div>
                            <div class="partner">
                                <img src="img/partners/riskactive_Logo.webp" alt>
                            </div>
                            <div class="partner">
                                <img src="img/partners/SGD Bağımsız denetim_Logo.webp" alt>
                            </div>
                            <div class="partner">
                                <img src="img/partners/takasbank_Logo.webp" alt>
                            </div>
                            <div class="partner">
                                <img src="img/partners/TKYD_Logo.webp" alt>
                            </div>
                            <div class="partner">
                                <img src="img/partners/TSPB_Logo.webp" alt>
                            </div>
                            <div class="partner">
                                <img src="img/partners/Yatırım Finansman_Logo.webp" alt>
                            </div>
                            <div class="partner">
                                <img src="img/partners/Koza-YMM.webp" alt>
                            </div>

                        <!-- <div class="butn butn-blue-light butn-w100 bg-icon-link"><?=__('tab_8_btn')?></div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

