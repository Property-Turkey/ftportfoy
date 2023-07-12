<?php // Footer
?>
<footer class="container-fluid footer sides_padding">
    <div class="row">
        <div class="col-lg-3 logo">
            <a class="" href="<?= APP_FOLDER ?>/">
                <img src="img/FT_Portfoy_tr_AltSignature_Vert_4C_1.svg" title="<?= __('site_motto') ?>" alt="<?= __('site_motto') ?>">
            </a>
        </div>
        
        <div class="col-lg-9 contact_info">
            <div class="row separator">
                <img src="img/FundingTurkey_Footer_Icon.svg" title="<?= __('site_motto') ?>" alt="<?= __('site_motto') ?>">
            </div>
            <div class="row">
                <div class="col-lg-4 info_clm">
                    <a href="mailto:<?= __('site_email') ?>">
                        <span><img src="img/Icon_Email.svg" title="<?= __('site_motto') ?>" alt="<?= __('site_motto') ?>"></span>
                        <span><?= __('site_email') ?></span>
                    </a>
                </div>
                <div class="col-lg-4 info_clm text-center">
                    <a target="_blank" href="https://www.google.com/maps/place/Property+Turkey/@41.063297,28.9804953,17z/data=!3m1!4b1!4m5!3m4!1s0x14cab7164afb8bbf:0x63265ca8c1d207ab!8m2!3d41.063293!4d28.982684">
                        <!-- <span><img src="img/Icon_Address.svg" title="<?= __('site_motto') ?>" alt="<?= __('site_motto') ?>"></span> -->
                        <span><?= __('site_address') ?></span>
                    </a>
                </div>
                <div class="col-lg-4 info_clm text-right">
                    <a href="https://wa.me/<?= str_replace( '+', '', str_replace( ' ', '', __('site_wts'))) ?>">
                        <span><img src="img/Icon_WhatsApp.svg" title="<?= __('site_motto') ?>" alt="<?= __('site_motto') ?>"></span>
                        <span><?= __('site_wts') ?></span>
                    </a>
                </div>
            </div>

            <div class="row footer_2">
                <div class="col-12 redTitle">
                    <?=__('important_links')?>
                </div>
                <hr class="redHr"/>
            </div>
            <div class="row footer_2">
                <div class="col-lg-4">
                    <a target="_blank" href="<?=APP_FOLDER?>/info-continue">
                        <?= __('footer_important_1') ?>
                    </a>
                    <a target="_blank" href="<?=APP_FOLDER?>/info-company">
                        <?= __('footer_important_1_2') ?>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a target="_blank" href="<?=APP_FOLDER?>/file/KVKK Aydınlatma Metni.pdf">
                        <?= __('footer_important_2') ?>
                    </a>
                    <a target="_blank" href="https://e-sirket.mkk.com.tr/?page=company&company=24185#">
                        <?= __('footer_important_2_2') ?>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a target="_blank" href="<?=APP_FOLDER?>/file/Acil ve Beklenmedik Durum Planı.pdf">
                        <?= __('footer_important_3') ?>
                    </a>
                    <a target="_blank" href="<?=APP_FOLDER?>/file/Yasal Uyarı.pdf">
                        <?= __('footer_important_3_2') ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row footer_2">
        <div class="col-lg-3">
            
        </div>
        
    </div>
</footer>