// Animations
document.addEventListener('DOMContentLoaded', () => {

  /**
   * Add animations using IntersectionObserver when elements are scrolled to
   */
  function animateElements(entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('in-view');
      }
      // Uncomment the lines below if you want the animation to run every time it scrolls into view (not just the first time)
      // else {
      //   entry.target.classList.remove('in-view');
      // }
    });
  }

  function initObserver() {
    const observer = new IntersectionObserver(animateElements);
    const items = document.querySelectorAll('.img_name, .img_caption, .homepage__intro, #slide_bg');
    for(let i in items) {
      if(!items.hasOwnProperty(i)) {
        continue;
      }
      observer.observe(items[i]);
    }
  }

  if (window.IntersectionObserver) {
    initObserver();
  }

}, false);


// Homepage slider
(function($) {
  
  $('#home_slider_thumbs div').click(function(){

      var img_src = $(this).attr('img_src'),
          name    = $(this).attr('name'),
          caption = $(this).attr('caption');

      $('#home_slider_thumbs div').removeClass('active');
      $(this).addClass('active');

      $('.img_name').text(name);
      $('.img_caption').text(caption);

      $('#slide_bg div.active').animate({opacity: 0}, 1000).removeClass('active');
      $('#slide_bg div[img_src="' + img_src + '"]').show().animate({opacity: 1}, 1000).addClass('active');

      window.clearTimeout(timeout);      

      timeout = window.setTimeout(function()
      {
        changeSlideBG();
      }, 4000);
      
    });

  

    /*home slider*/
    setTimeout(function changeSlideBG()
    {
      var bg_active     = $('#slide_bg div.active'),
          bg_next       = $(bg_active).next('div'),
          bg_first      = $('#slide_bg div').first(),
          thumb_active  = $('#home_slider #home_slider_thumbs div.active'),
          thumb_next    = $(thumb_active).next('div'),
          thumb_first   = $('#home_slider #home_slider_thumbs div').first();
  
      $(bg_active).animate({opacity: 0}, 1000).removeClass('active');
      $(thumb_active).removeClass('active');
      
      if(bg_next.length != 0) {
        $(bg_next).animate({opacity: 1}, 1000).addClass('active');
        $(thumb_next).addClass('active');
        $(bg_next).next('div').show();
      }

      else {
        $(bg_first).animate({opacity: 1}, 1000).addClass('active');
        $(thumb_first).addClass('active');
      }  
      
      var name    = $('#home_slider_thumbs div.active').attr('name'),
          caption = $('#home_slider_thumbs div.active').attr('caption');

      $('.img_name').text(name);
      $('.img_caption').text(caption);

      timeout = window.setTimeout(function()
      {
        changeSlideBG();
      }, 4000);
  
    }, 4000);

    changeSlideBG();
  
})( jQuery );