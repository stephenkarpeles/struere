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
    const items = document.querySelectorAll('.img_name, .img_caption, .homepage__intro, #slide_bg, .awards__list li, .publications__list li, .publications__print-list li');
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


// Isotope filters
var iso = new Isotope( '.portfolio-grid', {
  itemSelector: '.portfolio-item',
  layoutMode: 'fitRows'
});

// filter functions
var filterFns = {
  // show if number is greater than 50
  numberGreaterThan50: function( itemElem ) {
    var number = itemElem.querySelector('.number').textContent;
    return parseInt( number, 10 ) > 50;
  },
  // show if name ends with -ium
  ium: function( itemElem ) {
    var name = itemElem.querySelector('.name').textContent;
    return name.match( /ium$/ );
  }
};

// bind filter button click
var filtersElem = document.querySelector('.filters-button-group');
filtersElem.addEventListener( 'click', function( event ) {
  // only work with buttons
  if ( !matchesSelector( event.target, 'button' ) ) {
    return;
  }
  var filterValue = event.target.getAttribute('data-filter');
  // use matching filter function
  filterValue = filterFns[ filterValue ] || filterValue;
  iso.arrange({ filter: filterValue });
});

// change is-checked class on buttons
var buttonGroups = document.querySelectorAll('.button-group');
for ( var i=0, len = buttonGroups.length; i < len; i++ ) {
  var buttonGroup = buttonGroups[i];
  radioButtonGroup( buttonGroup );
}

function radioButtonGroup( buttonGroup ) {
  buttonGroup.addEventListener( 'click', function( event ) {
    // only work with buttons
    if ( !matchesSelector( event.target, 'button' ) ) {
      return;
    }
    buttonGroup.querySelector('.is-checked').classList.remove('is-checked');
    event.target.classList.add('is-checked');
  });
}
