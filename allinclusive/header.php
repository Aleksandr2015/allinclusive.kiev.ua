<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- delete if non-responsive / end -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>allinclusive.kiev.ua</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="">
    <!-- styles -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/vendor/bootstrap/3.3.1/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/vendor/font-awesome-4.2.0/css/font-awesome.css">
    <!-- latest jquery version -->
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <!-- bootstrap js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>    
    <!-- header slider -->    
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/vendor/unslider/unslider.css">
    <script src="//unslider.com/unslider.min.js"></script>
    <script>
        $( window ).load(function() {
                $('.banner').unslider ({
                    speed: 900,               //  The speed to animate each slide (in milliseconds)
                    delay: 5000,              //  The delay between slide animations (in milliseconds)                                
                    keys: true,               //  Enable keyboard (left, right) arrow shortcuts
                    dots: true,               //  Display dot navigation
                    fluid: true,              //  Support responsive design. May break non-responsive designs
                });
            });        
    </script>    
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/vendor/coolcarousel/coolcarousel.css">
    <script src="<?php bloginfo('template_url'); ?>/vendor/coolcarousel/jquery.carouFredSel-6.2.1-packed.js"></script>
    <script>
      $(document).ready(function(){          
          CustomHandler();
      });
      var CustomHandler = function() {
        
        $('.carousel ul').carouFredSel({
          responsive: true,
          circular: true,
          infinite: true,
          auto: false,
          cookie: false,
          prev: {
            button: ".carousel  .prev"
          },
          next: {
              button: ".carousel .next"
          },
          pagination: ".carousel .pagination",
          items: {
            visible: 4
          },    
          scroll: {
              items: 1
          }        
				});
        
        $('.carousel2 ul').carouFredSel({
           responsive: true,
           circular: true,
           infinite: true,
           auto: false,
           cookie: false,
           prev: {
              button: " .carousel2  .prev"
            },
            next: {
                button: ".carousel2 .next"
            },
            pagination: ".carousel2 .pagination",
            items: {
              visible: 4
            },    
            scroll: {
                items: 1
            }   
          });   
        
          $('.carousel3 ul').carouFredSel({
             responsive: true,
             circular: true,
             infinite: true,
             auto: false,
             cookie: false,
             prev: {
                button: ".carousel3  .prev"
              },
              next: {
                  button: ".carousel3 .next"
              },
              pagination: ".carousel3 .pagination",
              items: {
                visible: 4
              },    
              scroll: {
                  items: 1
              }            
            }); 
      }
    </script>
    
    <script type="text/javascript">
        $(function() {
              $('#tabs').carouFredSel({
                      circular: false,
                      items: 1,
                      width: '100%',
                      responsive: 'true',
                      auto: false,
                      pagination: {
                        container: '#pager',
                        anchorBuilder: false,                      
                      },
                scroll : { fx : "crossfade" },
        });
      });
    </script>
    
    <!--[if IE]>
        <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <p class="browsehappy">Вы используете <strong>устаревшую</strong> версию браузера, поэтому страница может работать некорректно. Обновить браузер можно <a href="http://browsehappy.com/">по этой ссылке</a> или перейти на сайт http://browsehappy.com</p>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body> 