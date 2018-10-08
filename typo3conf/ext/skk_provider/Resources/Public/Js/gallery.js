// init Isotope
var $grid = $('.gallery').isotope({
// options...
});
// layout Isotope after each image loads
$grid.imagesLoaded().progress( function() {
  $grid.isotope('layout');
  $grid.isotope({filter: '.hello'})
});

//this function filters through all categories
$('ul.sorting').on( 'click', 'li', function() {
  var filterValue = $(this).attr('data-filter');
  if(filterValue.indexOf(' ' ) > -1){ //if this word has a space
    filterValue = filterValue.substr(0,filterValue.indexOf(' '));
  }
  $grid.isotope({ filter: filterValue });
});

var selector = 'ul.sorting li';
$(selector).on('click', function() {
  $(selector).removeClass('active');
  $(this).addClass("active");
});
