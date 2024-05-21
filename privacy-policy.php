<?php
$active_tab = 'privacy policy';
require_once('header.php'); 
$page = $QueryFire->getAllData('pageandcontents',' slug="privacy-policy"')[0];
?>
<section class="breadcrumbs">
    <div class="container">
        <ol>
            <li><a href="<?= base_url;?>">Home</a></li>
            <li>Privacy Policy</li>
        </ol>
        <h2>Privacy Policy</h2>
    </div>
</section>
<section class="inner-page">
    <div class="container" data-aos="fade-up ">
        <?= stripslashes(html_entity_decode($page['text'])); ?>
    </div>
</section>
<?php require_once('footer.php');?>