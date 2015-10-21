jQuery(document).ready(function($) {

	//Versión responsive del menú; oculta la navegación y en su defecto aparece un botón para mostrar u ocultarl la navegación
	$('.toggle-nav').click(function(e) {
        $(this).toggleClass('activo');
        $('#header-main-nav ul').toggleClass('activo'); 
        e.preventDefault();
    });

	// Pone la clase .active a cualquier link que haya en el documento que corresponda con el url actual
	var url = window.location.href;
	$('a[href="'+url+'"]').addClass('active');


	//Agrega una animación al hacer scroll al llegar a un elemento gracias a waypoints
	$('.titulo').waypoint(function(direction) {
	  $('.titulo').addClass( 'fadeInUp animated' );
	},{
	  offset:'20%'
	});



	/* FLEXSLIDER; #cover-slider
	--------------------------------------------*/

	$('#cover-slider-thumb-nav').flexslider({
	 	animation: "slide",
	 	controlNav: false,
		directionNav: false,
	 	animationLoop: true,
	 	slideshow: true,
	 	itemWidth: 103,
	 	asNavFor: '#cover-slider'
	});

	$('#cover-slider').flexslider({
		animation: "slide",
		controlNav: false,
		animationLoop: true,
		directionNav: false,
		slideshow: true,
		prevText: "",
		nextText: "",
		sync: "#cover-slider-thumb-nav"
	});

	$('#cover-slider-columnistas').flexslider({
	  	animation: "slide",
	  	animationLoop: true,
	  	slideshow: true,
	  	itemWidth: 300,
	  	controlNav: false,
	  	prevText: "",
	  	nextText: ""
	});

	$('#cover-slider-videos').flexslider({
	  animation: "slide",
	  prevText: "",
	  nextText: ""
	});

	$('#cover-slider-analisis').flexslider({
	  animation: "slide",
	  prevText: "",
	  nextText: ""
	});

	$('#filmstrip').flexslider({
	  animation: "slide",
	  animationLoop: true,
	  itemWidth: 210,
	  itemMargin: 5,
	  prevText: "",
	  nextText: ""
	});
});

