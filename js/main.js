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
    fadeInEachElement($navLinks, 500)
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
  var $linkImages = $('#effect .medium-6.columns.category-link')
  fadeInEachElement($linkImages, 300);
})();


// ========================================
//    T H U M B N A I L   G A L L E R Y 
// ========================================

(function(){
  var $thumbnailContainers = $('figure.gallery-item');

  $thumbnailContainers.each(function(index, thumbnail){
    console.log(thumbnail)
    $(thumbnail).attr('data-equalizer-watch')
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
        scrollTop: $featuredImage.offset().top
      }, 500);
    });
  });

})();


// =======================================
//           F U N C T I O N S
// =======================================


function fadeInEachElement(selector, time){
  $(selector).each(function() {
    $(this).hide();
  });

  $(selector).each(function(index) {
    $(this).delay(index * time).fadeIn('slow');
  });
}

}); // End of $(document).on('ready', function(){})












