// jQuery is successfully linked!



$(document).on('ready', function(){
  console.log('hi');
  // removes the link to '/blog' category from category page:
  var $removeBlog = $( "li a:contains('Blog')" );
  $removeBlog.parent().css( "display", "none" );


  (function(){
    // Fades in main title on homepage only:
    var $siteTitle = $('h1#homepage-title');
    $siteTitle.fadeIn(1500).removeClass('hidden');

    // Hide nav on homepage initially:
    var $navLinks = $('.homepage-nav ul li');

    $navLinks.each(function(index, link){
      $(link).addClass('faded-out');
    });


    $navLinks.each(function(index, link){
      setTimeout(function() {
        $(link).addClass('fade-in').removeClass('faded-out');
      }, 500 * index);
    });




  })();

  // =====================================
  //        H O V E R   E F F E C T
  // =====================================
  
  if (Modernizr.touch) {
    $(".close-overlay").removeClass("hidden");
    $(".img").click(function(e){
      if (!$(this).hasClass("hover")) {
        $(this).addClass("hover");
      }
    });
    $(".close-overlay").click(function(e){
      e.preventDefault();
      e.stopPropagation();
      if ($(this).closest(".img").hasClass("hover")) {
        $(this).closest(".img").removeClass("hover");
      }
    });
  } else {
    $(".img").mouseenter(function(){
      $(this).addClass("hover");
    })
    .mouseleave(function(){
      $(this).removeClass("hover");
    });
  }


  // =====================================
  //      F A D E   I M A G E   I N
  // =====================================

  (function(){
    var $linkImages = $('#effect .category-link')
    fadeInEachElement($linkImages, 300);
  })();


// ========================================
//    T H U M B N A I L   G A L L E R Y 
// ========================================

(function(){
  var $thumbnailContainers = $('figure.gallery-item');

  $thumbnailContainers.each(function(index, thumbnail){
    $(thumbnail).attr('data-equalizer-watch');
  });

})();

(function(){
  var $images = $('#gallery img');

  // NOTE: Remove this when ready to go live:
  // fadeInEachElement($images, 300)

  var $featuredImage = $('div#featured-image');
  var defaultImage  = $images[0];

  $featuredImage.html($(defaultImage).clone());

  $images.each(function(index, image){

    $(image).on('click', function(e){
      e.preventDefault();
      var $self = $(this);
      $featuredImage.html($self.clone());
      // Scroll to top of image so you can see it clearly:
      $('html, body').animate({
        scrollTop: $featuredImage.offset().top + (-40) // Plus -40 to give it some room at the top
      }, 500);
    });
  });

})();


// ==========================================
//   H I D E   W O R K S   C A T E G O R Y 
// ==========================================

(function(){
  $categories = $('#category-index .category-link');
  var toHide = ($categories.slice(-1)[0]);
  $(toHide).remove()
  fadeInEachElement($categories, 500)
})();


(function(){
  var $featuredImage = $('#featured-image');
  var $images        = $('.gallery img')
  var defaultImage   = $images[0];

  $featuredImage.html($(defaultImage).clone());


  var gallery = $('#post-description .gallery');


  var container = $('.thumbnails');
  container.append(gallery);

  var thumb = $('.gallery-item img')

  thumb.on('click', function(e){
    e.preventDefault();
    var $self = $(this);

    $featuredImage.html($self.clone());
    $('html, body').animate({
      scrollTop: $featuredImage.offset().top + (-40) // Plus -40 to give it some room at the top
    }, 500);

  });



})();



// =======================================
//           F U N C T I O N S
// =======================================

function hideLastElement(array){
  var elementToHide = array.slice(-1)[0];
  return $(elementToHide).hide();
}

function fadeInEachElement(selector, time){
  $(selector).each(function() {
    $(this).hide();
  });

  $(selector).each(function(index) {
    $(this).delay(index * time).fadeIn('slow');
  });
}

}); // End of $(document).on('ready', function(){})










