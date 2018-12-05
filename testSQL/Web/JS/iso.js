// external js: isotope.pkgd.js


function myFunction() {
    var input, filter, div, li, a, i, txtValue;
	
    input = document.getElementById("myInput");
	
    filter = input.value.toUpperCase();
	
    ul = document.getElementById("myUL");
	
    li = ul.getElementsByTagName("div");
	
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("country")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
        } else {
			
            li[i].style.display = "none";
        }
    }
	
	
	
}


// init Isotope
var $grid = $('.grid').isotope({
  itemSelector: '.element-item',
  layoutMode: 'fitRows',
  getSortData: {
    name: '.name',
    date: '.date',
    country: '.country',
    category: '[data-category]',
    user: '.user',
    
  }
});

// filter functions
var filterFns = {
  lastYear: function() {
    var date = $(this).find('.date').text();
	var today = "2018-01-01";
	 if (date>=today)
	 {
		 return date;
	 }
  },
  
  lastMonth: function() {
    var date = $(this).find('.date').text();
	var today = "2018-11-01";
	 if (date>=today)
	 {
		 return date;
	 }
  },

};

// bind filter button click
$('#filters').on( 'click', 'button', function() {
  var filterValue = $( this ).attr('data-filter');
  // use filterFn if matches value
  filterValue = filterFns[ filterValue ] || filterValue;
  $grid.isotope({ filter: filterValue });
});

// bind sort button click
$('#sorts').on( 'click', 'button', function() {
  var sortByValue = $(this).attr('data-sort-by');
  $grid.isotope({ sortBy: sortByValue });
});

// change is-checked class on buttons
$('.button-group').each( function( i, buttonGroup ) {
  var $buttonGroup = $( buttonGroup );
  $buttonGroup.on( 'click', 'button', function() {
    $buttonGroup.find('.is-checked').removeClass('is-checked');
    $( this ).addClass('is-checked');
  });
});