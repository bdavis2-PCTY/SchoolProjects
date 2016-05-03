$(document).ready(function(){

// Navigation 
nav = new Object (  );
function nav_Hide ( useAnim ) { 
	if ( nav.showing ) {
		nav.showing = false;
		$.cookie ( "navShowing", "0" );
		$("#menuDisplay .actionBtn").html ( "Open Menu" );
		if ( !useAnim ) { 
			$("#navigation").css ( "visibility", "hidden" );
			$("#wrapper").css("margin-left", "0" );
		} else { 
			$("#navigation").stop().animate ( {
				left:"-170px"
			},170,function(){
				$("#navigation").css ( "visibility", "hidden" );
			} );
			
			$("#wrapper").stop().animate ( {
				marginLeft:"0"
			},340);
		}
	}
	return false; }

function nav_Show ( useAnim ) { 
	if ( !nav.showing ) {
		nav.showing = true;
		$.cookie ( "navShowing", "1" );
		$("#menuDisplay .actionBtn").html ( "Close Menu" );
		$("#navigation").css ( "visibility", "visible" );
		if ( useAnim ) {
			if ( $("#navigation").position().left == 0 ) {
				$("#navigation").css ( "left", "-170px" ); }
			$("#navigation").stop().animate({
				left:"0px"
			},170);
			
			$("#wrapper").stop().animate ( {
				marginLeft:"170px"
			},340);
		} else {
			$("#wrapper").css("padding-left", "170px" );
		}
	}
}
function nav_Check ( ) {
	if ( $.cookie ( "navShowing" ) == "undefined" ) {
		$.cookie ( "navShowing", true ); }
	nav.showing = $.cookie ( "navShowing" );
	
	if ( nav.showing == "1" ) {
		nav_Show ( false );
	} else {
		nav_Hide ( false );
	}

}
$("#menuDisplay #actionBtn").click(function(){
	if ( nav.showing ) {
		nav_Hide ( true );
	} else {
		nav_Show ( true );
	}
});



// Navigation Link Fade
$("#navigation li .notselected, #contactForm input[type=submit], #contactForm input[type=button]").hover ( function ( ) {
	$(this).stop().animate({
		backgroundColor:"rgb(255,255,255)",
		color:"#444"
	},"fast");
}, function ( ) {
	$(this).stop().animate({
		backgroundColor:"rgb(0,200,0)",
		color:"#fff"
	},"fast");
} );

$(".imageItem").click(function(){
	var _this = $(this);
	var url = _this.children("img").attr ( "src" );
	
	$("body").append(
	'<div class="overlay"></div>'+
	'<div id="imagePop">'+
		'<img src=" ' + url + ' " />' +
	'</div>');
	
	$("#imagePop").click(function(){
		$(".overlay").remove();
		$("#imagePop").remove();
	});
	
});

});