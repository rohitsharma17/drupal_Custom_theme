(function ($, Drupal, window, document, undefined) {

Drupal.behaviors.custom = {
    attach: function (context, settings) {   

           // tabs
      $('.cat-tabs li:first').addClass('active');
      $('.photos-slider-block:not(:first-child)').css('display', 'none');
      $('.cat-tabs li a').each(function (index, ele){

        $(ele).on('click', function (e) {
          e.preventDefault();
          $('.cat-tabs li').removeClass('active');
          $(this).parent().addClass('active');
          //$('.tab-slider-center').slick('setPosition', 0);
          jQuery(e.target).parents('.view-header').siblings('.view-content').find('.photos-slider-block').hide();
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
              breakpoint: 1199,
              settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1
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
              $(this).find('.icon-container').show(); // Show the container on hover
            }, 
            function() {
              $(this).find('.icon-container').hide(); // Hide the container when not hovering
            }
          );
        });
    }
};


})(jQuery, Drupal, this, this.document);