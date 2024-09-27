(function ($, Drupal, window, document, undefined) {
//Drupal behaviour
Drupal.behaviors.custom = {
    attach: function (context, settings) {   

           // tabs
      $('.cat-tabs li:first').addClass('active');
      $('.photos-slider-block:not(:first-child)').css('display', 'none');
      $('.cat-tabs li a').each(function (index, ele){

        $(ele).on('click', function (e) {
          e.preventDefault();
          //for removing class from the li
          $('.cat-tabs li').removeClass('active');
          //for adding class on current li
          $(this).parent().addClass('active');
          //hiding all view photos-slider-block div 
          jQuery(e.target).parents('.view-header').siblings('.view-content').find('.photos-slider-block').hide();
          //this will show the photos-slider-block div
          jQuery(e.target).parents('.view-header').siblings('.view-content').find('.photos-slider-block:nth-child(' + (index + 1) + ')').show();
          jQuery('.tab-slider-center').slick('setPosition', 0);
          equalheight('.eq-height');
        });
      })

      //slick 
        $('.tab-slider-center').not('.slick-initialized').slick({
            infinite: false,
            speed: 500,
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: false,
            responsive: [{
              breakpoint: 1300,
              settings: {
                  slidesToShow: 2,
                  dots: false,
              }
          },  
          {
              breakpoint: 1060,
              settings: {
                  slidesToShow: 1,
                  dots: true,
              }
          },
          {
              breakpoint: 991,
              settings: {
                  slidesToShow: 1,
                  dots: true,
              }
          },
              {
              breakpoint: 750,
              settings: {
                slidesToShow: 1,
                dots: true,
                //slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                dots: true,
              }
            }
            ]
        });

        $(document).ready(function() {
          $('.icon-container').hide();
          // When hovering over the card, show the icon container
          $('.tab-slider-item').hover(
            function() {
              $(this).find('.zoom img:first').addClass('hovered');
              $(this).find('.icon-container').show(); // Show the container on hover
            }, 
            function() {
              $(this).find('.zoom img:first').removeClass('hovered');
              $(this).find('.icon-container').hide(); // Hide the container when not hovering
            }
          );
        });
    }
};


})(jQuery, Drupal, this, this.document);