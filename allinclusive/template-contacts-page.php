<?php 
/*
Template Name: Контакты
*/
get_header();
?>
    
    <!-- header_basic / Start -->
	<?php include (TEMPLATEPATH . '/template-header-basic.php'); ?>
	<!-- header_basic / End -->
   
    <!-- nav_primary / start -->
    <?php include (TEMPLATEPATH . '/nav-primary.php'); ?>
    <!-- nav_primary / end -->   
    
    <!-- ------------------------- content / start --------------------------- -->
    
    <!-- contacts / start -->
    <section class="contacts">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <?php# get_field('contact_form'); ?>
                    <?php
                     $formCode = get_field('contact_form');
                     echo $formCode;
                    ?> 
                </div>
                <div class="col-xs-6">
                    <h2>Контактые телефоны:</h2>
                    <p>+38 (096) 707-59-70</p>
                    <p>+38 (093) 573-76-66</p>
                </div>
            </div>
        </div>
    </section>
    <!-- contacts / end -->    
    
    <!-- ------------------------- content / end --------------------------- -->
    
<?php get_footer(); ?>