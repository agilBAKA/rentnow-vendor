// Native

function modify_qty(val){
	var qty = document.getElementById('qty').value;
	var new_qty = parseInt(qty,10) + val;

	if(new_qty < 0){
		new_qty = 0;
	}
	document.getElementById('qty').value = new_qty;
	return new_qty;
}

document.querySelector('.delete').onclick = function(){
	
	swal({
		title: "Are you sure?",
		text: "You will not be able to recover this imaginary file!",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'Yes, delete it!',
		closeOnConfirm: false
	},
	function(){
		swal("Deleted!", "Your imaginary file has been deleted!", "success");
	});
};

// jQuery

$(document).ready(function () {
	$('.account').on('click', function(){
		$('.menu-account').toggleClass('on-show');
	});

	// $(document).on('click', function(){
	// 	if($('.menu-account').hasClass('on-show') == true) {
	// 		$('menu-account').removeClass('on-show')
	// 	}
	// });

	$('#burger').on('click', function(){
	    $(this).toggleClass('close');
	    $('.menu').toggleClass('menu-open');
	    $('body').toggleClass('no-scroll');
	    $('.overlay-menu').toggleClass('overlay-menu-open');
	    $('.submenu').toggleClass('open-submenu');
	});

	 // tabbed content
// http://www.entheosweb.com/tutorials/css/tabs.asp
$(".tab_content").hide();
$(".tab_content:first").show();

/* if in tab mode */
$("ul.tabs li").click(function() {
	
  $(".tab_content").hide();
  var activeTab = $(this).attr("rel"); 
  $("#"+activeTab).fadeIn();		
	
  $("ul.tabs li").removeClass("active");
  $(this).addClass("active");

  $(".tab_drawer_heading").removeClass("d_active");
  $(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");
  
});
/* if in drawer mode */
$(".tab_drawer_heading").click(function() {
  
  $(".tab_content").hide();
  var d_activeTab = $(this).attr("rel"); 
  $("#"+d_activeTab).fadeIn();
  
  $(".tab_drawer_heading").removeClass("d_active");
  $(this).addClass("d_active");
  
  $("ul.tabs li").removeClass("active");
  $("ul.tabs li[rel^='"+d_activeTab+"']").addClass("active");
});


/* Extra class "tab_last" 
   to add border to right side
   of last tab */
$('ul.tabs li').last().addClass("tab_last");
});

$('.btn-for-filter').on('click', function(){
	$('.box-filter').toggleClass('show-filter')
});

$('.close-filter').on('click', function(){
	$('.box-filter').removeClass('show-filter')
});
