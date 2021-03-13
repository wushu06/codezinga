jQuery(document).ready(function($) {

  $('[data-vp-add-class]').viewportChecker({
    offset: "10%"
  });
  
  $('.menu-toggle').on('click', function(e) {
    e.preventDefault();
    var $this = $(this);
    if($this.hasClass('open')) {
      $(this).removeClass('open').html('Menu');
      $('.menu-tray').removeClass('open');
      $('.menu-blocker').fadeOut('300');
    } else {
      $(this).addClass('open').html('Close');
      $('.menu-tray').addClass('open');
      $('.menu-blocker').fadeIn('300');
    }
  });

  $('.menu-blocker').on('click', function() {
    $('.menu-toggle').trigger('click');
  });

  $('img.svg').each(function() {
    var $img = $(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');

    $.get(imgURL, function(data) {
      // Get the SVG tag, ignore the rest
      var $svg = jQuery(data).find('svg');

      // Add replaced image's ID to the new SVG
      if(typeof imgID !== 'undefined') {
        $svg = $svg.attr('id', imgID);
      }
      // Add replaced image's classes to the new SVG
      if(typeof imgClass !== 'undefined') {
        $svg = $svg.attr('class', imgClass + ' replaced-svg');
      }

      // Remove any invalid XML tags as per http://validator.w3.org
      $svg = $svg.removeAttr('xmlns:a');

      // Replace image with new SVG
      $img.replaceWith($svg);

      logoCheck();

    }, 'xml');

  });

  function logoCheck() {
    var scrollTop = $(window).scrollTop() + ($('nav').height() / 2);

    $('section').each(function(i, v) {
      var elementStart = Math.abs($(v).offset().top - $(v).css('marginTop').replace('px', ''));
      var elementEnd = Math.abs($(v).offset().top + $(v).outerHeight(true));

      if(scrollTop >= elementStart && scrollTop <= elementEnd) {
        if($(window).width() < 768) {
          if(scrollTop > 100) {
            $('nav').addClass('scrolled');
          } else {
            $('nav').removeClass('scrolled');
          }
        }
        if($(v).hasClass('bg-white') || $(v).hasClass('bg-off-white')) {
          $('nav').addClass('dark');
        } else {
          $('nav').removeClass('dark');
        }
      }
    });
  }

  $(window).on('scroll', function() {
    logoCheck();
    if($(window).scrollTop() > 100) {
      $('.cta_button').addClass('visible animated fadeIn');
    } else {
      $('.cta_button').removeClass('visible animated fadeIn');
    }
  });

  var duration = 8000;
  
  $('#text-carousel').on('init', function(event, slick){    
    $('.progress-bar-inner').stop(true, true).css('width', '0px').animate({ width: '100%' }, duration, 'linear');
    $(slick.$slides.get(0)).children().each(function(i,v){
      setTimeout(function(){
        $(v).addClass($(v).data('addClass'));
      }, $(v).data('delay'));
    });
  }).on('beforeChange', function(event, slick, currentSlide, nextSlide){
    $('.progress-bar-inner').stop(true, true).css('width', '0px').animate({ width: '100%' }, duration, 'linear');
  }).on('afterChange', function(event, slick, currentSlide, nextSlide){
    $(slick.$slides.get(currentSlide)).children().each(function(i,v){
      setTimeout(function(){
        $(v).addClass($(v).data('addClass'));
      }, $(v).data('delay'));
    });
    $(slick.$slides.get(nextSlide)).children().each(function(i,v){
      $(v).removeClass($(v).data('addClass'));
    });
  }).slick({
    dots: false,
    autoplay: true,
    autoplaySpeed: duration,
    pauseOnHover: false,
    pauseOnFocus: false,
    fade: true
  });
  
  $('#gform_1 input, #gform_1 textarea, #gform_2 input, #gform_2 textarea').each(function(i, v) {
    if($(v).val() != "") {
      $(v).closest('.gfield').addClass('active');
    }
    $(v).on('focus', function() {
      $(v).closest('.gfield').addClass('active');
    });
    $(v).on('blur', function() {
      if($(v).val() == "") {
        $(v).closest('.gfield').removeClass('active');
      }
    });
  });
  
  var max = 0;
  
  $('.block-featured-posts h5').each(function(i,v){
    if( $(v).height() > max ) {
      max = $(v).height();
    }
  });
  $('.block-featured-posts h5').height(max);

//

  var $grid = $('.grid').imagesLoaded(function () {
    // init Isotope after all images have loaded
    $grid.isotope({
      itemSelector: '.grid-item',
      masonry: {
        columnWidth: '.grid-sizer'
      }
    });
    // filter items on button click
    $('.filter-button-group').on('click', 'button', function () {
      var filterValue = $(this).attr('data-filter');
      $grid.isotope({filter: filterValue});
    });
  });
  // filter functions
  var filterFns = {
    // show if number is greater than 50
    numberGreaterThan50: function () {
      var number = $(this).find('.number').text();
      return parseInt(number, 10) > 50;
    },
    // show if name ends with -ium
    ium: function () {
      var name = $(this).find('.name').text();
      return name.match(/ium$/);
    }
  };
  function getHashFilter() {
    // get filter=filterName
    var matches = location.hash.match(/filter=([^&]+)/i);
    var hashFilter = matches && matches[1];
    return hashFilter && decodeURIComponent(hashFilter);
  }
  // init Isotope
  // bind filter button click
  var $filterButtonGroup = $('.filter-button-group');
  $filterButtonGroup.on('click', 'button', function () {
    var filterAttr = $(this).attr('data-filter');
    // set filter in hash
    location.hash = 'filter=' + encodeURIComponent(filterAttr);
  });
  var isIsotopeInit = false;
  function onHashchange() {
    var hashFilter = getHashFilter();
    if (!hashFilter && isIsotopeInit) {
      return;
    }
    isIsotopeInit = true;
    // filter isotope
    var $grid = $('.grid').imagesLoaded(function () {
      $grid.isotope({
        itemSelector: '.grid-item',
        masonry: {
          columnWidth: '.grid-sizer'
        },
        // use filterFns
        filter: filterFns[hashFilter] || hashFilter
      });
    });
    // set selected class on button
    if (hashFilter) {
      $filterButtonGroup.find('.is-checked').removeClass('is-checked');
      $filterButtonGroup.find('[data-filter="' + hashFilter + '"]').addClass('is-checked');
    }
  }
  $(window).on('hashchange', onHashchange);
  // trigger event handler to init Isotope
  onHashchange();

  $('[data-fancybox]').fancybox({
    animationDuration : 600,
    animationEffect   : 'slide-in-out'
  });


});