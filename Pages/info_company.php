


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
                <h1><?=__('info_company')?></h1>
            </div>
        </div>
    </section>
    
    <section class="container-fluid ">
        <div class="row sides_padding_3">

            <div class="col-12 text-center top_maring2">
                <a href="<?=APP_FOLDER?>/file/Esas_Sözleşme.pdf" target="_new"
                    class="butn butn-gray-light butn-w100 bg-icon-download"><?=__('info_company_file_1')?></a>
            </div>
            <div class="col-12 text-center top_maring2">
                <a href="<?=APP_FOLDER?>/file/1Q_Finansal_Rapor.pdf" target="_new"
                    class="butn butn-gray-light butn-w100 bg-icon-download"><?=__('info_company_file_2')?></a>
            </div>
            <div class="col-12 text-center top_maring2">
                <a href="<?=APP_FOLDER?>/file/1Q_Faaliyet_Raporu.pdf" target="_new"
                    class="butn butn-gray-light butn-w100 bg-icon-download"><?=__('info_company_file_3')?></a>
            </div>
            <!-- <div class="col-12 text-center top_maring2">
                <a href="javascript:void(0);"
                    class="butn butn-gray-light butn-w100 bg-icon-download"><?=__('info_company_file_4')?></a>
            </div> -->
            
        </div>
    </section>
    
</div>

