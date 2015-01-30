<?php 
/*
Template Name: Главная
*/
get_header();
?>
    
    <!-- header_basic / Start -->
	<?php include (TEMPLATEPATH . '/template-header-basic.php'); ?>
	<!-- header_basic / End -->
   
    <!-- nav_primary / start -->
    <?php include (TEMPLATEPATH . '/nav-primary.php'); ?>
    <!-- nav_primary / end -->

    <!-- nav_secondary/ start -->
    <?php include (TEMPLATEPATH . '/nav-secondary.php'); ?>
    <!-- nav_secondary / end -->
    
    <!-- ------------------------- content / start --------------------------- -->
    
    <!-- homepage_tabs_slider / start -->
    <section class="homepage_tabs_slider">
<!--
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                  <div role="tabpanel">

                    
                    <ul class="nav nav-tabs" role="tablist">
                      <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Домашний</a></li>
                      <li role="presentation"><a href="#business" aria-controls="business" role="tab" data-toggle="tab">Деловой</a></li>
                      <li role="presentation"><a href="#rest" aria-controls="rest" role="tab" data-toggle="tab">Отдых</a></li>                      
                    </ul>

                    
                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane fade in active" id="home"></div>
                      <div role="tabpanel" class="tab-pane fade" id="business"></div>
                       <div role="tabpanel" class="tab-pane fade" id="rest"></div>
                    </div>

                  </div>
                </div>
            </div>            
        </div>
-->
        
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                  
                  <div id="tabs-wrapper">
                              <div id="pager">
                                <a href="#">Домашний</a>
                                <a href="#">Деловой</a>
                                <a href="#">Отдых</a>
                              </div>
                              <div id="tabs">
                                  <div id="tab-1">
                                    <div class="carousel">
                                      <ul>
                                        <li><img src="http://lorempixel.com/250/250/abstract" alt="" /></li>
                                        <li><img src="http://lorempixel.com/250/250/animals" alt="" /></li>
                                        <li><img src="http://lorempixel.com/250/250/business" alt="" /></li>
                                        <li><img src="http://lorempixel.com/250/250/cats" alt="" /></li>
                                        <li><img src="http://lorempixel.com/250/250/city" alt="" /></li>
                                        <li><img src="http://lorempixel.com/250/250/food" alt="" /></li>
                                        <li><img src="http://lorempixel.com/250/250/nightlife" alt="" /></li>
                                        <li><img src="http://lorempixel.com/250/250/fashion" alt="" /></li>
                                        <li><img src="http://lorempixel.com/250/250/people" alt="" /></li>
                                        <li><img src="http://lorempixel.com/250/250/technics" alt="" /></li>
                                      </ul>
                                      <div class="clearfix"></div>
                                      <a id="prev" class="prev" href="#">&lt;</a>
                                      <a id="next" class="next" href="#">&gt;</a>
                                      <div  class="pagination"></div>
                                    </div> 
                                  </div>
                                  <div id="tab-2">
                                    <div class="carousel2">
                                      <ul>
                                        <li><img src="http://lorempixel.com/250/250/cats" alt="" /></li>
                                        <li><img src="http://lorempixel.com/250/250/city" alt="" /></li>
                                        <li><img src="http://lorempixel.com/250/250/food" alt="" /></li>
                                        <li><img src="http://lorempixel.com/250/250/nightlife" alt="" /></li>
                                        <li><img src="http://lorempixel.com/250/250/abstract" alt="" /></li>
                                        <li><img src="http://lorempixel.com/250/250/animals" alt="" /></li>
                                        <li><img src="http://lorempixel.com/250/250/business" alt="" /></li>                                        
                                        <li><img src="http://lorempixel.com/250/250/fashion" alt="" /></li>
                                        <li><img src="http://lorempixel.com/250/250/people" alt="" /></li>
                                        <li><img src="http://lorempixel.com/250/250/technics" alt="" /></li>
                                      </ul>
                                      <div class="clearfix"></div>
                                      <a id="prev" class="prev" href="#">&lt;</a>
                                      <a id="next" class="next" href="#">&gt;</a>
                                      <div  class="pagination"></div>
                                    </div> 
                                  </div>
                                  <div id="tab-3">
                                    <div class="carousel3">
                                      <ul>
                                        <li><img src="http://lorempixel.com/250/250/food" alt="" /></li>
                                        <li><img src="http://lorempixel.com/250/250/nightlife" alt="" /></li>
                                        <li><img src="http://lorempixel.com/250/250/fashion" alt="" /></li>
                                        <li><img src="http://lorempixel.com/250/250/people" alt="" /></li>
                                        <li><img src="http://lorempixel.com/250/250/technics" alt="" /></li>
                                        <li><img src="http://lorempixel.com/250/250/abstract" alt="" /></li>
                                        <li><img src="http://lorempixel.com/250/250/animals" alt="" /></li>
                                        <li><img src="http://lorempixel.com/250/250/business" alt="" /></li>
                                        <li><img src="http://lorempixel.com/250/250/cats" alt="" /></li>
                                        <li><img src="http://lorempixel.com/250/250/city" alt="" /></li>
                                      </ul>
                                      <div class="clearfix"></div>
                                      <a id="prev" class="prev" href="#">&lt;</a>
                                      <a id="next" class="next" href="#">&gt;</a>
                                      <div  class="pagination"></div>
                                    </div> 
                                  </div>
                                  <div id="tab-4"> Tab [4] content </div>
                              </div>
                  </div>
                  
                </div>
            </div>
        </div>
    </section>
    <!-- homepage_tabs_slider / end -->        
    
    <!-- ------------------------- content / end --------------------------- -->
    
    
    
<?php get_footer(); ?>