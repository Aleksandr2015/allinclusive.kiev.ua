<?php get_header(); ?>
<body class="index">
    
    <!-- header_basic / Start -->
	<?php include (TEMPLATEPATH . '/template-part-0000-header-basic.php'); ?>
	<!-- header_basic / End -->
   
    <!-- nav_primary / start -->
    <?php include (TEMPLATEPATH . '/template-part-0100-nav-primary.php'); ?>
    <!-- nav_primary / end -->

    <!-- nav_secondary/ start -->
    <?php include (TEMPLATEPATH . '/template-part-0150-nav-secondary.php'); ?>
    <!-- nav_secondary / end -->     
    
    <!-- ------------------------- content / start --------------------------- -->
    
    <!-- Index / start -->
    <div class="index">
      <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Index / end -->    
    
    <!-- ------------------------- content / end --------------------------- -->
    
<?php get_footer(); ?>
