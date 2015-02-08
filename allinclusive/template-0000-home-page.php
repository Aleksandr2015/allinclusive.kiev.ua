<?php 
/*
Template Name: Главная
*/
get_header();
?>
<body class="home-page">
    
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
    
    <!-- tabs_slider / start -->
    <section class="tabs_slider">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                                   
                  <div id="tabs-wrapper">
                              <div id="pager" class="nav nav-tabs">
                                <a href="#">Домашний</a>
                                <a href="#">Деловой</a>
                                <a href="#">Отдых</a>
                              </div>
                              
                              <div id="tabs">
                                  <div id="tab-1">
                                    <div class="carousel">
                                      <ul>
                                        <li><a href="#"><img src="http://lorempixel.com/250/250/abstract" alt="" /></a></li>
                                        <li><a href="#"><img src="http://lorempixel.com/250/250/animals" alt="" /></a></li>
                                        <li><a href="#"><img src="http://lorempixel.com/250/250/business" alt="" /></a></li>
                                        <li><a href="#"><img src="http://lorempixel.com/250/250/cats" alt="" /></a></li>
                                        <li><a href="#"><img src="http://lorempixel.com/250/250/city" alt="" /></a></li>
                                        <li><a href="#"><img src="http://lorempixel.com/250/250/food" alt="" /></a></li>
                                        <li><a href="#"><img src="http://lorempixel.com/250/250/nightlife" alt="" /></a></li>
                                        <li><a href="#"><img src="http://lorempixel.com/250/250/fashion" alt="" /></a></li>
                                        <li><a href="#"><img src="http://lorempixel.com/250/250/people" alt="" /></a></li>
                                        <li><a href="#"><img src="http://lorempixel.com/250/250/technics" alt="" /></a></li>
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
                                        <li><a href="#"><img src="http://lorempixel.com/250/250/animals" alt="" /></a></li>
                                        <li><a href="#"><img src="http://lorempixel.com/250/250/business" alt="" /></a></li>                                        
                                        <li><a href="#"><img src="http://lorempixel.com/250/250/fashion" alt="" /></a></li>
                                        <li><a href="#"><img src="http://lorempixel.com/250/250/people" alt="" /></a></li>
                                        <li><a href="#"><img src="http://lorempixel.com/250/250/technics" alt="" /></a></li>
                                        <li><a href="#"><img src="http://lorempixel.com/250/250/cats" alt="" /></a></li>
                                        <li><a href="#"><img src="http://lorempixel.com/250/250/city" alt="" /></a></li>
                                        <li><a href="#"><img src="http://lorempixel.com/250/250/food" alt="" /></a></li>
                                        <li><a href="#"><img src="http://lorempixel.com/250/250/nightlife" alt="" /></a></li>
                                        <li><a href="#"><img src="http://lorempixel.com/250/250/abstract" alt="" /></a></li>
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
                                        <li><a href="#"><img src="http://lorempixel.com/250/250/food" alt="" /></a></li>
                                        <li><a href="#"><img src="http://lorempixel.com/250/250/nightlife" alt="" /></a></li>
                                        <li><a href="#"><img src="http://lorempixel.com/250/250/fashion" alt="" /></a></li>
                                        <li><a href="#"><img src="http://lorempixel.com/250/250/people" alt="" /></a></li>
                                        <li><a href="#"><img src="http://lorempixel.com/250/250/technics" alt="" /></a></li>
                                        <li><a href="#"><img src="http://lorempixel.com/250/250/abstract" alt="" /></a></li>
                                        <li><a href="#"><img src="http://lorempixel.com/250/250/animals" alt="" /><</a>/li>
                                        <li><a href="#"><img src="http://lorempixel.com/250/250/business" alt="" /></a></li>
                                        <li><a href="#"><img src="http://lorempixel.com/250/250/cats" alt="" /></a></li>
                                        <li><a href="#"><img src="http://lorempixel.com/250/250/city" alt="" /></a></li>
                                      </ul>
                                      <div class="clearfix"></div>
                                      <a id="prev" class="prev" href="#">&lt;</a>
                                      <a id="next" class="next" href="#">&gt;</a>
                                      <div  class="pagination"></div>
                                    </div> 
                                  </div>                                  
                              </div>
                  </div>
                  
                </div>
            </div>
        </div>
    </section>
    <!-- tabs_slider / end -->
    
    <!-- private office and ask blocks / start -->
    <div class="container">
      <div class="row">
        <div class="col-xs-5">
          <div style="
            width: 458px;
            height:149px;
            line-height:149px;
            background:#ccc;
            margin-top: 30px;
            text-align:center;
            font-size:30px;
            color:#000;           
          ">Блок "Личный кабинет"</div>
        </div>
        <div class="col-xs-7">
          <div style="
            width: 654px;
            height:149px;       
            line-height:149px;
            background:#ccc;
            margin-top: 30px;            
            text-align:center;
            font-size:30px;
            color:#000;           
          ">Блок "задать вопрос"</div>
        </div>
      </div>      
    </div>
    <!-- private office and ask blocks / end-->
    <div class="container">
      <div class="row">
        <div class="col-xs-3">
          <div style="
            width: 263px;
            height:350px;       
            line-height:350px;     
            background:#ccc;
            margin-top: 30px;            
            text-align:center;
            font-size:30px;
            color:#000;           
          ">Блок "Акции"</div>
        </div>
        <div class="col-xs-4">
          <div style="
            padding-top: 123px;
            width: 360px;
            height:350px;       
            line-height:35px;     
            background:#ccc;
            margin-top: 30px;            
            text-align:center;
            font-size:30px;
            color:#000;            
          ">Блок "Контакты"<br/>Карта с маркерами<br/>Киев, Днепропетровск</div>
        </div>
        <div class="col-xs-5">
          <div style="            
            width: 457px;
            height:150px;       
            line-height:150px;     
            background:#ccc;
            margin-top: 30px;            
            text-align:center;
            font-size:30px;
            color:#000;            
          ">Блок "Дисконтная программа"</div>
          <div style="            
            width: 200px;
            height: 170px;
            line-height: 170px;
            background: #ccc;
            margin-top: 30px;
            text-align: center;
            font-size: 16px;
            color: #000;
            display: inline-block;
          ">Блок "Другие проекты"</div>
          <div style="            
            width: 237px;
            height: 170px;
            line-height: 170px;
            background: #ccc;
            margin-top: 30px;
            text-align: center;
            font-size: 20px;
            color: #000;
            display: inline-block;
            margin-left: 15px;
          ">Блок "Отзывы"</div>
        </div>
      </div>
    </div>
    <!-- ------------------------- content / end --------------------------- -->
    
    
    
<?php get_footer(); ?>