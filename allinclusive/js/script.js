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
  
}