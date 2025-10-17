/*
Author       : Dreamguys
Template Name: Dreams LMS - Bootstrap Template
Version      : 1.0
*/

(function($) {
    "use strict";

    var $slimScrolls = $('.slimscroll');

    // Stick Sidebar
	
	if ($(window).width() > 767) {
		if($('.theiaStickySidebar').length > 0) {
			$('.theiaStickySidebar').theiaStickySidebar({
			  // Settings
			  additionalMarginTop: 70
			});
		}
	}
	
	// Body Overlay Js
	$(".body-overlay").on("click", function () {
	$(".offcanvas__area").removeClass("offcanvas-opened");
	$(".df-search-area").removeClass("opened");
	$(".body-overlay").removeClass("opened");
	});
		

	// Sticky Header
	$(window).scroll(function () {
		if ($(this).scrollTop() > 130) {
		  $("header").addClass("fixed");
		} else {
		  $("header").removeClass("fixed");
		}
	  });
	
	// Sidebar

	function bindMobileMenu() {
	// Unbind previous events to avoid duplicates
	$(document).off('click.mobileMenu');

		// Only bind for mobile view
		if ($(window).width() <= 991) {
			$(document).on('click.mobileMenu', '.main-nav a', function (e) {
				var $this = $(this);

				if ($this.parent().hasClass('has-submenu')) {
					e.preventDefault();

					if (!$this.hasClass('submenu')) {
						// Close other open submenus
						$this.closest('ul').find('ul').slideUp(350);
						$this.closest('ul').find('a').removeClass('submenu');

						// Open current submenu
						$this.next('ul').slideDown(350);
						$this.addClass('submenu');
					} else {
						$this.removeClass('submenu');
						$this.next('ul').slideUp(350);
					}
				}
			});
		}
	}

	// Initial binding
	bindMobileMenu();

	// Re-bind on window resize
	$(window).on('resize', function () {
		bindMobileMenu();
	});

	
	// Icon Btn
	
	$('.course-share .fa-heart').on('click', function (e) {
		e.preventDefault();
      	$(this).toggleClass('color-active');
    });
	
	// JQuery counterUp

	if($('.course-count .counterUp').length > 0) {
		$('.course-count .counterUp, .course-inner-content h4 span, .rate-head span, .rate-head-five h2 span').counterUp({
            delay: 15,
            time: 1500
        });
	}

	if($('.counterup').length > 0) {
		$('.counterup').counterUp({
            delay: 15,
            time: 1500
        });
	}
	
	// Mobile menu sidebar overlay

	$('body').append('<div class="sidebar-overlay"></div>');
	$(document).on('click', '#mobile_btn', function () {
		$('main-wrapper').toggleClass('slide-nav');
		$('.sidebar-overlay').toggleClass('opened');
		$('html').toggleClass('menu-opened');
		return false;
	});

	
	$(document).on('click', '.sidebar-overlay', function() {
		$('html').removeClass('menu-opened');
		$(this).removeClass('opened');
		$('main-wrapper').removeClass('slide-nav');
	});
	
	$(document).on('click', '#menu_close', function() {
		$('html').removeClass('menu-opened');
		$('.sidebar-overlay').removeClass('opened');
		$('main-wrapper').removeClass('slide-nav');
	});

	 // Add Class to Menu
	 if ($(".megamenu").length > 0) {
		const megamenuItem = document.querySelector('.megamenu');
		const megamenuContent = document.querySelector('.main-nav');
		const megamenuWrapper = document.querySelector('.main-menu-wrapper');
		megamenuItem.addEventListener('mouseenter', () => {
		  megamenuContent.classList.add('active');
		  megamenuWrapper.classList.add('active');
		});
		megamenuItem.addEventListener('mouseleave', () => {
		  megamenuContent.classList.remove('active');
		  megamenuWrapper.classList.remove('active');
		});
	  }
	
	// Select 2
	
	if ($('.select').length > 0) {
		$('.select').select2({
			minimumResultsForSearch: -1,
			width: '100%'
		});
	}
	
	// tooltip
	
	$(document).ready(function(){
		$('[data-bs-toggle="tooltip"]').tooltip();   
	});

    // Leading Companies

	if($('.owl-carousel.lead-group-slider').length > 0 ){
		var owl = $('.owl-carousel.lead-group-slider');
      		owl.owlCarousel({
			margin: 24,
			nav : false,
			dots: false,
			loop: true,
			autoplay:false,
			autoplaySpeed: 2000,
		    responsive: {
	          0: {
            	items: 2,
				nav : false,
				dots: false,
	        },
	        768 : {
            	items: 3,
				nav : false,
				dots: false,
	        },
          	1170: {
            	items: 6,
				dots: false,
          		}
    		}
	   });
    }
	
	// Testimonial slider 5

	if($('.testimonial-five.lazy').length > 0) {
		$(".testimonial-five.lazy").slick({
			lazyLoad: 'ondemand',
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: false,
			autoplaySpeed: 0,
			speed: 3000,
			autoplaySpeed: 1800,
			arrows: false,
		});
	}

	// Features Clinic Four

	if($('.owl-carousel.real-reviews').length > 0) {
		$('.owl-carousel.real-reviews').owlCarousel({
			loop:true,
			margin:15,
			dots: false,
			nav:true,
			navContainer: '.slide-nav-8',
			navText: [ '<i class="fa-sharp fa-solid fa-arrow-left-long"></i>', '<i class="fa-sharp fa-solid fa-arrow-right-long"></i>' ], 
			responsive:{
				0:{
					items:1
				},
				500:{
					items:1
				},
				768:{
					items:1
				},
				1000:{
					items:1
				},
				1300:{
					items:1
				}
			}
		})	
	}

	// They Trusted us Testimonails

	if($('.swiper-testimonial-three').length > 0 ){
		var swiper = new Swiper(".swiper-testimonial-three", {
			effect: "coverflow",
			loop: false,
			grabCursor: true,
			center:true,
			centeredSlides: true,
			slidesPerView: "auto",
			centeredSlides: true,
			initialSlide: 2,
			nav:true,
			navigation: {
				prevEl: '.slide-prev-btn',
				nextEl: '.slide-next-btn',
				speed: 400,
 				spaceBetween: 100,
			},
			coverflowEffect: {
			rotate: 0,
			stretch: 0,
			depth: 100,
			modifier: 10,
			initialSlide: 2,
			slideShadows: true
			},
			pagination: {
			el: ".swiper-pagination",
			clickable: true
			}
		});
	}
	
	// Slick testimonial three

	if($('.mentor-testimonial.lazy').length > 0) {
		$(".mentor-testimonial.lazy").slick({
			lazyLoad: 'ondemand',
			infinite: true,
		});
	}

	// Home header

	$(window).scroll(function(){
		var sticky = $('.scroll-sticky'),
		  scroll = $(window).scrollTop();

		if (scroll >= 100) sticky.addClass('add-header-bg');
		else sticky.removeClass('add-header-bg');
	});
	
	// Timer countdown
	
	if($('.countdown-container').length > 0 ){
		const daysEl = document.getElementById("days");
		const hoursEl = document.getElementById("hours");
		const minsEl = document.getElementById("mins");

		const newYears = "1 Aug 2024";

		function countdown() {
			const newYearsDate = new Date(newYears);
			const currentDate = new Date();

			const totalSeconds = (newYearsDate - currentDate) / 1000;

			const days = Math.floor(totalSeconds / 3600 / 24);
			const hours = Math.floor(totalSeconds / 3600) % 24;
			const mins = Math.floor(totalSeconds / 60) % 60;

			daysEl.innerHTML = days;
			hoursEl.innerHTML = formatTime(hours);
			minsEl.innerHTML = formatTime(mins);
		}

		function formatTime(time) {
			return time < 10 ? `0${time}` : time;
		}

		// initial call
		countdown();

		setInterval(countdown, 1000);
	}
	
	// Circle Progress Bar
	
	function animateElements() {
		$('.circle-bar1').each(function () {
			var elementPos = $(this).offset().top;
			var topOfWindow = $(window).scrollTop();
			var percent = $(this).find('.circle-graph1').attr('data-percent');
			var animate = $(this).data('animate');
			if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
				$(this).data('animate', true);
				$(this).find('.circle-graph1').circleProgress({
					value: percent / 100,
					size : 400,
					thickness: 40,
					startAngle: -1.6,
					fill: {
						color: '#159f46'
					}
				});
			}
		});
	}	
	
	if($('.circle-bar').length > 0) {
		animateElements();
	}
	$(window).scroll(animateElements);

	// Fade in scroll

	if($('.main-wrapper .aos').length > 0) {
	    AOS.init({
		  duration: 1200,
		  once: true,
		});
	}

	// Content div min height set
	
	function resizeInnerDiv() {
		var height = $(window).height();	
		var header_height = $(".header").height();
		var footer_height = $(".footer").height();
		var setheight = height - header_height;
		var trueheight = setheight - footer_height;
		$(".content").css("min-height", trueheight);
	}
	
	if($('.content').length > 0 ){
		resizeInnerDiv();
	}

	$(window).resize(function(){
		if($('.content').length > 0 ){
			resizeInnerDiv();
		}
	});

	// Wizard

	$(document).ready(function () {
        let progressVal = 0;
        let businessType = 0;
      
		$(".next_btn").click(function () {
			$(this).parent().parent().parent().next().fadeIn('slow');
			$(this).parent().parent().parent().css({
				'display': 'none'
			});
			progressVal = progressVal + 1;
			$('.progress-active').removeClass('progress-active').addClass('progress-activated').next().addClass('progress-active');
		});

		$(".prev_btn").click(function () {
			$(this).parent().parent().parent().prev().fadeIn('slow');
			$(this).parent().parent().parent().css({
				'display': 'none'
			});
			progressVal = progressVal - 1;
			$('.progress-active').removeClass('progress-active').prev().removeClass('progress-activated').addClass('progress-active'); 
		});
  	});

  	// CK Editor

	if ($('#editor').length > 0) {
		ClassicEditor
		.create( document.querySelector( '#editor' ), {
			 toolbar: {
			    items: [
			        'heading', '|',
			        'fontfamily', 'fontsize', '|',
			        'alignment', '|',
			        'fontColor', 'fontBackgroundColor', '|',
			        'bold', 'italic', 'strikethrough', 'underline', 'subscript', 'superscript', '|',
			        'link', '|',
			        'outdent', 'indent', '|',
			        'bulletedList', 'numberedList', 'todoList', '|',
			        'code', 'codeBlock', '|',
			        'insertTable', '|',
			        'uploadImage', 'blockQuote', '|',
			        'undo', 'redo'
			    ],
			    shouldNotGroupWhenFull: true
			}
		} )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );
	}

	 // Sidebar Slimscroll

	 if($slimScrolls.length > 0) {
		$slimScrolls.slimScroll({
			height: 'auto',
			width: '100%',
			position: 'right',
			size: '7px',
			color: '#ccc',
			wheelStep: 10,
			touchScrollStep: 100
		});
		var wHeight = $(window).height();
		$slimScrolls.height(wHeight);
		$('.left-sidebar .slimScrollDiv, .sidebar-menu .slimScrollDiv, .sidebar-menu .slimScrollDiv').height(wHeight);
		$('.right-sidebar .slimScrollDiv').height(wHeight - 30);
		$('.chat .slimScrollDiv').height(wHeight - 70);
		$('.chat.settings-main .slimScrollDiv').height(wHeight);
		$('.right-sidebar.video-right-sidebar .slimScrollDiv').height(wHeight - 90);
		$(window).resize(function() {
			var rHeight = $(window).height();
			$slimScrolls.height(rHeight);
			$('.left-sidebar .slimScrollDiv, .sidebar-menu .slimScrollDiv, .sidebar-menu .slimScrollDiv').height(rHeight);
			$('.right-sidebar .slimScrollDiv').height(wHeight - 30);
			$('.chat .slimScrollDiv').height(rHeight - 70);
			$('.chat.settings-main .slimScrollDiv').height(wHeight);
			$('.right-sidebar.video-right-sidebar .slimScrollDiv').height(wHeight - 90);
		});
	}

	// Tooltip
	if($('[data-bs-toggle="tooltip"]').length > 0) {
		var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
		var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
			return new bootstrap.Tooltip(tooltipTriggerEl)
		})
	}

	// Date Range Picker

	if($('.bookingrange').length > 0) {
		var start = moment().subtract(6, 'days');
		var end = moment();

		function booking_range(start, end) {
			$('.bookingrange span').html(start.format('M/D/YYYY') + ' - ' + end.format('M/D/YYYY'));
		}

		$('.bookingrange').daterangepicker({
			startDate: start,
			endDate: end,
			ranges: {
				'Today': [moment(), moment()],
				'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
				'Last 7 Days': [moment().subtract(6, 'days'), moment()],
				'Last 30 Days': [moment().subtract(29, 'days'), moment()],
				'This Month': [moment().startOf('month'), moment().endOf('month')],
				'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
			}
		}, booking_range);

		booking_range(start, end);
	}
	

	if($('.yearpicker').length > 0 ){
		$('.yearpicker').datetimepicker({
			viewMode: 'years',
			format: 'YYYY',

			icons: {
				up: "fas fa-angle-up",
				down: "fas fa-angle-down",
				next: 'fas fa-angle-right',
				previous: 'fas fa-angle-left'
			}
		});
	}

	//Top Online Contacts
	if($('.top-online-contacts .swiper-container').length > 0 ){
		var swiper = new Swiper('.top-online-contacts .swiper-container', {
			slidesPerView: 5,
			spaceBetween: 15,
		});
	}

	// Chat Search Visible

	$('.user-chat-search-btn').on('click', function () {
		$('.user-chat-search').addClass('visible-chat');
	});
	$('.user-close-btn-chat').on('click', function () {
		$('.user-chat-search').removeClass('visible-chat');
	});

	// Chat Search Visible

	$('.chat-search-btn').on('click', function () {
		$('.chat-search').addClass('visible-chat');
	});
	$('.close-btn-chat').on('click', function () {
		$('.chat-search').removeClass('visible-chat');
	});
	$(".chat-search .form-control").on("keyup", function() {
		var value = $(this).val().toLowerCase();
		$(".chat .chat-body .messages .chats").filter(function() {
		  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
	});

	$(".user-list-item:not(body.status-page .user-list-item, body.voice-call-page .user-list-item)").on('click', function () {
		if ($(window).width() < 992) {
			$('.left-sidebar').addClass('hide-left-sidebar');
			$('.chat').addClass('show-chatbar');
		}
	});
	
	$(".left_sides").on('click', function () {
		if ($(window).width() <= 991) {
			$('.sidebar-group').removeClass('hide-left-sidebar');
			$('.sidebar-menu').removeClass('d-none');
		}
	});
	$(".left_sides").on('click', function () {
		if ($(window).width() <= 991) {
			$('.chat-messages').removeClass('show-chatbar');
		}
	});
	$(".user-list li a").on('click', function () {
		if ($(window).width() <= 767) {
			$('.left-sidebar').addClass('hide-left-sidebar');
				$('.sidebar-menu').addClass('d-none');
		}
	});

	// Date Time Picker
	
	if($('.datetimepicker').length > 0) {
		$('.datetimepicker').datetimepicker({
			format: 'DD-MM-YYYY',
			icons: {
				up: "fa fa-angle-up",
				down: "fa-solid fa-angle-down",
				next: 'fa-solid fa-angle-right',
				previous: 'fa-solid fa-angle-left'
			}
		});
	}

	 // Timepicker
	 if ($(".timepicker").length > 0) {
		$(".timepicker").datetimepicker({
		  format: "hh:mm A",
		  icons: {
			up: "fa fa-angle-up",
			down: "fa fa-angle-down",
			next: "fa fa-angle-right",
			previous: "fa fa-angle-left",
		  },
		});
	  }

	// Circle Progress

	$(".circle-progress").each(function() {
  
		var value = $(this).attr('data-value');
		var left = $(this).find('.progress-left .progress-bar');
		var right = $(this).find('.progress-right .progress-bar');
	
		if (value > 0) {
		  if (value <= 50) {
			right.css('transform', 'rotate(' + percentageToDegrees(value) + 'deg)')
		  } else {
			right.css('transform', 'rotate(180deg)')
			left.css('transform', 'rotate(' + percentageToDegrees(value - 50) + 'deg)')
		  }
		}
	
	  })
	
	  function percentageToDegrees(percentage) {  
		return percentage / 100 * 360  
	  }

	// Fav Icon
	if ($(".fav-icon").length > 0) {
		$(".fav-icon").on("click", function () {
		$(this).toggleClass("selected");
		});
	}

	if ($('.quiz-wizard').length > 0) {
		$(".quiz-wizard .next_btn").on('click', function () { // Function Runs On NEXT Button Click
			$(this).closest('fieldset').next().fadeIn('slow').css({ 'display': 'block' });
			$(this).closest('fieldset').css({
				'display': 'none'
			});


		});
		$(".quiz-wizard .prev_btn").on('click', function () { // Function Runs On NEXT Button Click
			$(this).closest('fieldset').prev().fadeIn('slow').css({ 'display': 'block' });
			$(this).closest('fieldset').css({
				'display': 'none'
			});

		});
	}

	// Installer Wizard

	let progressVal = 0;
	let businessType = 0;
	
	$(".next_btns").on('click', function () {
		$(this).parent().parent().parent().next().fadeIn('slow');
		$(this).parent().parent().parent().css({
			'display': 'none'
		});
		progressVal = progressVal + 1;
		$('.progress-active').removeClass('progress-active').addClass('progress-activated').next().addClass('progress-active');
	});
	$(".prev_btns").on('click', function () {
		$(this).parent().parent().parent().prev().fadeIn('slow');
		$(this).parent().parent().parent().css({
			'display': 'none'
		});
		progressVal = progressVal - 1;
		$('.progress-active').removeClass('progress-active').prev().removeClass('progress-activated').addClass('progress-active'); 
	});

	  // Summernote
	  if($('.summernote').length > 0) {
		$('.summernote').summernote({
		  height: 160,  
		  minHeight: null,           
		  maxHeight: null,      
		  toolbar: [
		  ['fontsize', ['fontsize']],
		  ['font', ['bold', 'italic', 'underline', 'clear', 'strikethrough']],
		  ['insert', ['picture']]
		  ],          
		});
	  }

	     //Range Slider
	
		 if($('.input-range').length > 0) {
			$(".input-range").ionRangeSlider({
				type: "double",
				grid: true,
				min: 0,
				max: 120000,
				from: 50,
				to: 100 ,
				prefix: "$"      
			});
		}
		
		$('.input-range').on('input', function () {
			$('.demo span').html(this.value);
		});
		
		// institutions-slider
		if($('.institutions-slider.lazy').length > 0) {
			$(".institutions-slider.lazy").slick({
				lazyLoad: 'ondemand',
				slidesToShow: 7,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 0,
				speed: 3000,
				autoplaySpeed: 1800,
				arrows: false,
				responsive: [
					{
						breakpoint: 1400,
						settings: {
						slidesToShow: 6,
						infinite: true,
						dots: false
						}
					},
					{
						breakpoint: 1200,
						settings: {
						slidesToShow: 5,
						}
					},
					{
						breakpoint: 992,
						settings: {
						slidesToShow: 3,
						}
					},
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 2,
						}
						}
				]
				
			});
		}
		// institutions-slider
		if($('.institutions-slider-rtl.lazy').length > 0) {
			$(".institutions-slider-rtl.lazy").slick({
				lazyLoad: 'ondemand',
				slidesToShow: 7,
				slidesToScroll: 1,
				rtl:true,
				autoplay: true,
				autoplaySpeed: 0,
				speed: 3000,
				autoplaySpeed: 1800,
				arrows: false,
				responsive: [
					{
						breakpoint: 1400,
						settings: {
						slidesToShow: 6,
						infinite: true,
						dots: false
						}
					},
					{
						breakpoint: 1200,
						settings: {
						slidesToShow: 5,
						}
					},
					{
						breakpoint: 992,
						settings: {
						slidesToShow: 3,
						}
					},
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 2,
						}
						}
				]
				
			});
		}

		// testimonials slider
		if($('.testimonials-slider.lazy').length > 0) {
			$('.testimonials-slider.lazy').slick({
				infinite: true,
				slidesToShow: 3,
				slidesToScroll: 3,
				responsive: [
					{
					breakpoint: 992,
					settings: {
						slidesToShow: 2,
						infinite: true,
						dots: false
					}
					},
					{
					breakpoint: 768,
					settings: {
						slidesToShow: 1,
					}
					},
				]
			});
		}

		// testimonials slider
		if($('.testimonials-slider-rtl.lazy').length > 0) {
			$('.testimonials-slider-rtl.lazy').slick({
				infinite: true,
				slidesToShow: 3,
				slidesToScroll: 3,
				rtl: true,
				responsive: [
					{
					breakpoint: 992,
					settings: {
						slidesToShow: 2,
						infinite: true,
						dots: false
					}
					},
					{
					breakpoint: 768,
					settings: {
						slidesToShow: 1,
					}
					},
				]
			});
		}

		// testimonials slider
		if($('.leading-slider-five').length > 0) {
			$('.leading-slider-five').slick({
				infinite: true,
				slidesToShow: 5,
				slidesToScroll: 1,
				autoplay: true,
				arrows: false,
				responsive: [
					{
					breakpoint: 992,
					settings: {
						slidesToShow: 3,
						infinite: true,
						dots: false
					}
					},
					{
					breakpoint: 768,
					settings: {
						slidesToShow: 2,
					}
					},
				]
			});
		}
		
		//   toggle-passwords
		if($('.toggle-passwords').length > 0) {
			$(document).on('click', '.toggle-passwords', function() {
				$(this).toggleClass("isax-eye isax-eye-slash");
				var input = $(".pass-inputs");
				if (input.attr("type") == "password") {
					input.attr("type", "text");
				} else {
					input.attr("type", "password");
				}
			});
		}
		
		if($('.toggle-password').length > 0) {
			$(document).on('click', '.toggle-password', function() {
				$(this).toggleClass("isax-eye isax-eye-slash");
				var input = $(".pass-input");
				if (input.attr("type") == "password") {
					input.attr("type", "text");
				} else {
					input.attr("type", "password");
				}
			});
		}
		if($('.toggle-passworda').length > 0) {
			$(document).on('click', '.toggle-passworda', function() {
				$(this).toggleClass("isax-eye isax-eye-slash");
				var input = $(".pass-inputa");
				if (input.attr("type") == "password") {
					input.attr("type", "text");
				} else {
					input.attr("type", "password");
				}
			});
		}

		// blog slider
		if($('.blog-slider.lazy').length > 0) {
		$('.blog-slider.lazy').slick({
			dots: true,
			infinite: false,
			speed: 300,
			slidesToShow: 3,
			slidesToScroll: 3,
			responsive: [
			  {
				breakpoint: 1200,
				settings: {
				  slidesToShow: 2,
				  slidesToScroll: 2,
				  infinite: true,
				  dots: true
				}
			  },
			  {
				breakpoint: 768,
				settings: {
				  slidesToShow: 1,
				  slidesToScroll: 1
				}
			  }
			]
		  });
		}

		// blog slider
		if($('.favourite-carousel').length > 0) {
		$('.favourite-carousel').slick({
			dots: true,
			infinite: false,
			speed: 300,
			slidesToShow: 5,
			slidesToScroll: 5,
			arrows: false,
			responsive: [
				{
				  breakpoint: 1399,
				  settings: {
					slidesToShow: 4,
					slidesToScroll: 4,
					infinite: true,
					dots: true
				  }
				},
			  {
				breakpoint: 1300,
				settings: {
				  slidesToShow: 3,
				  slidesToScroll: 3,
				  infinite: true,
				  dots: true
				}
			  },
			  {
				breakpoint: 768,
				settings: {
				  slidesToShow: 1,
				  slidesToScroll: 1
				}
			  }
			]
		  });
		}

		// Course Slider
		if($('.home-five-course').length > 0) {
		$('.home-five-course').slick({
			dots: true,
			infinite: false,
			speed: 300,
			slidesToShow: 4,
			slidesToScroll: 4,
			arrows: false,
			responsive: [
			  {
				breakpoint: 1300,
				settings: {
				  slidesToShow: 3,
				  slidesToScroll: 3,
				  infinite: true,
				  dots: true
				}
			  },
			  {
				breakpoint: 768,
				settings: {
				  slidesToShow: 1,
				  slidesToScroll: 1
				}
			  }
			]
		  });
		}
		// Course Slider
		if($('.course-slider-slick').length > 0) {
		$('.course-slider-slick').slick({
			dots: true,
			infinite: false,
			speed: 300,
			slidesToShow: 4,
			slidesToScroll: 4,
			arrows: false,
			responsive: [
			  {
				breakpoint: 1300,
				settings: {
				  slidesToShow: 3,
				  slidesToScroll: 3,
				  infinite: true,
				  dots: true
				}
			  },
			  {
				breakpoint: 768,
				settings: {
				  slidesToShow: 1,
				  slidesToScroll: 1
				}
			  }
			]
		  });
		}
		// Trending Courses Slider
		if($('.home-five-trending-course').length > 0) {
		$('.home-five-trending-course').slick({
			dots: true,
			infinite: false,
			speed: 300,
			slidesToShow: 4,
			slidesToScroll: 4,
			arrows: false,
			responsive: [
			  {
				breakpoint: 1300,
				settings: {
				  slidesToShow: 3,
				  slidesToScroll: 3,
				  infinite: true,
				  dots: true
				}
			  },
			  {
				breakpoint: 992,
				settings: {
				  slidesToShow: 2,
				  slidesToScroll: 2
				}
			  },
			  {
				breakpoint: 768,
				settings: {
				  slidesToShow: 1,
				  slidesToScroll: 1
				}
			  }
			]
		  });
		}

		//   intructor details
		if($('.course-carousal').length > 0) {
		$('.course-carousal').slick({
			infinite: true,
			slidesToShow: 2,
			slidesToScroll: 1,
			autoplay: true,
			responsive: [
				{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					infinite: true,
					dots: false
				}
				},
			]
		  });
		}

		//   Login
		if($('.login-carousel').length > 0) {
		$('.login-carousel').slick({
			dots: true,
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			// autoplay: true,
			adaptiveHeight: true
		});
	}

	// testimonials slider
		if($('.top-courses-slider.lazy').length > 0) {
		$('.top-courses-slider.lazy').slick({
			infinite: true,
			slidesToShow: 6,
			slidesToScroll: 1,
			responsive: [
				{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					infinite: true,
					dots: false
				}
				},
				{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
				}
				},
			]
		});
		}
	// testimonials slider
		if($('.top-courses-slider-rtl.lazy').length > 0) {
		$('.top-courses-slider-rtl.lazy').slick({
			infinite: true,
			slidesToShow: 6,
			slidesToScroll: 1,
			rtl:true,
			responsive: [
				{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					infinite: true,
					dots: false
				}
				},
				{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
				}
				},
			]
		});
		}

		// fea instructor slider
		if($('.featured-instructor-slider.lazy').length > 0) {
			$('.featured-instructor-slider.lazy').slick({
				infinite: true,
				slidesToShow: 4,
				slidesToScroll: 4,
				responsive: [
					{
					breakpoint: 1200,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 3,
						infinite: true,
						dots: false
					}
					},
					{
					breakpoint: 992,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2,
					}
					},
					{
					breakpoint: 768,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
					}
					},
				]
			});
			}

		// fea instructor slider
		if($('.featured-instructor-slider-rtl.lazy').length > 0) {
			$('.featured-instructor-slider-rtl.lazy').slick({
				infinite: true,
				slidesToShow: 4,
				slidesToScroll: 4,
				rtl:true,
				responsive: [
					{
					breakpoint: 1200,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 3,
						infinite: true,
						dots: false
					}
					},
					{
					breakpoint: 992,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2,
					}
					},
					{
					breakpoint: 768,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
					}
					},
				]
			});
			}
		// Coming Soon
		if($('.comming-soon-pg').length > 0) {
			// Get html elements
			let day = document.querySelector('.days');
			let hour = document.querySelector('.hours');
			let minute = document.querySelector('.minutes');
			let second = document.querySelector('.seconds');

			function setCountdown() {

			// Set countdown date
			let countdownDate = new Date('oct 2, 2025 16:00:00').getTime();

			// Update countdown every second
			let updateCount = setInterval(function(){

				// Get today's date and time
				let todayDate = new Date().getTime();

				// Get distance between now and countdown date
				let distance = countdownDate - todayDate;

				let days = Math.floor(distance / (1000 * 60 * 60 *24));

				let hours = Math.floor(distance % (1000 * 60 * 60 *24) / (1000 * 60 *60));

				let minutes = Math.floor(distance % (1000 * 60 * 60 ) / (1000 * 60));

				let seconds = Math.floor(distance % (1000 * 60) / 1000);

				// Display values in html elements
				day.textContent = days;
				hour.textContent = hours;
				minute.textContent = minutes;
				second.textContent = seconds;

				// if countdown expires
				if(distance < 0){
					clearInterval(updateCount);
					document.querySelector(".comming-soon-pg").innerHTML = '<h1>EXPIRED</h1>'
				}
			}, 1000)
			}

			setCountdown()
		}

		$(".add-choice").on('click', function () {

			var servicecontent = '<div class="mb-3 extra-choice-row">' +
				'<div class="d-flex align-items-end justify-content-between">' +
				'<div class="flex-fill">' +
				'<div class="d-flex align-items-center justify-content-between">' +
				'<label class="form-label">Choice 2 <span class="text-danger"> *</span></label>' +
				'<div class="form-check form-switch form-switch-end">' +
				'<label class="form-check-label" for="switch-sm2">Correct Answer</label>' +
				'<input class="form-check-input" type="checkbox" role="switch" id="switch-sm2">' +
				'</div>' +
				'</div>' +
				'<input type="text" class="form-control">' +
				'</div>' +
				'<a href="#" class="delete-item ms-4"><i class="isax isax-trash"></i></a>' +
				'</div>' +
				'</div>' ;
		
			$(".add-choice-data").append(servicecontent);
			return false;
		});
		
		$(".add-choice-data").on('click', '.delete-item', function () {
			$(this).closest('.extra-choice-row').remove();
			return false;
		});


		// add new education
		$(".add-education").on('click', function () {

		var servicecontent = `<div class="row extra-choice-row">
								<div class="col-xl-7">
									<div class="row">
									<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Degree<span class="text-danger"> *</span></label>
										<input type="text" class="form-control" value="">
									</div>
									</div>
									<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">University<span class="text-danger"> *</span></label>
										<input type="text" class="form-control" value="">
									</div>
									</div>
								</div>
								</div>
								<div class="col-xl-5">
									<div class="row">
									<div class="col-md-6">
										<div class="mb-3">
										<label class="form-label">From Date<span class="text-danger"> *</span></label>
										<div class="input-icon position-relative calender-input">
											<span class="input-icon-addon">
												<i class="isax isax-calendar"></i>
											</span>
											<input type="text" class="form-control datetimepicker" placeholder="">
										</div>
									</div>
									</div>
									<div class="col-md-6 d-flex align-items-center">
										<div class="mb-3 w-100">
										<label class="form-label">To Date<span class="text-danger"> *</span></label>
										<div class="input-icon position-relative calender-input">
											<span class="input-icon-addon calender-input">
												<i class="isax isax-calendar"></i>
											</span>
											<input type="text" class="form-control datetimepicker" placeholder="">
										</div>
									</div>
									<a href="#" class="delete-item ms-2 flex-shrink-0"><i class="isax isax-trash"></i></a>
									</div>
									</div>
									
								</div>
							</div>` ;

			$('.datetimepicker');
			setTimeout(function () {
			$('.datetimepicker').datetimepicker({
			format: 'DD-MM-YYYY',
			icons: {
				up: "fa fa-angle-up",
				down: "fa-solid fa-angle-down",
				next: 'fa-solid fa-angle-right',
				previous: 'fa-solid fa-angle-left'
			}
		});
		}, 100);
		
			$(".add-education-data").append(servicecontent);
			return false;
		});
		
		$(".add-education-data").on('click', '.delete-item', function () {
			$(this).closest('.extra-choice-row').remove();
			return false;
		});

		// add experience
		
		$(".add-exp").on('click', function () {

			var servicecontent =   `<div class="row extra-choice-row">
			<div class="col-xl-7">
			  <div class="row">
			   <div class="col-md-6">
				<div class="mb-3">
					<label class="form-label">Company<span class="text-danger"> *</span></label>
					<input type="text" class="form-control" value="">
				</div>
			   </div>
			   <div class="col-md-6">
				<div class="mb-3">
					<label class="form-label">Position<span class="text-danger"> *</span></label>
					<input type="text" class="form-control" value="">
				</div>
			   </div>
			</div>
		   </div>
			<div class="col-xl-5">
				<div class="row">
				<div class="col-md-6">
					<div class="mb-3">
					<label class="form-label">From Date<span class="text-danger"> *</span></label>
					<div class="input-icon position-relative calender-input">
						<span class="input-icon-addon">
							<i class="isax isax-calendar"></i>
						</span>
						<input type="text" class="form-control datetimepicker" placeholder="">
					</div>
				   </div>
				</div>
				<div class="col-md-6 d-flex align-items-center">
					<div class="mb-3 w-100">
					<label class="form-label">To Date<span class="text-danger"> *</span></label>
					<div class="input-icon position-relative calender-input">
						<span class="input-icon-addon calender-input">
							<i class="isax isax-calendar"></i>
						</span>
						<input type="text" class="form-control datetimepicker" placeholder="">
					</div>
					</div>
					<a href="#" class="delete-item ms-2 flex-shrink-0"><i class="isax isax-trash"></i></a>
				</div>
			   </div>
			</div>
		</div>`;

		$('.datetimepicker');
		setTimeout(function () {
		$('.datetimepicker').datetimepicker({
		format: 'DD-MM-YYYY',
		icons: {
			up: "fa fa-angle-up",
			down: "fa-solid fa-angle-down",
			next: 'fa-solid fa-angle-right',
			previous: 'fa-solid fa-angle-left'
		}
	});
	}, 100);
		
			$(".add-exp-data").append(servicecontent);
			return false;
		});
		
		$(".add-exp-data").on('click', '.delete-item', function () {
			$(this).closest('.extra-choice-row').remove();
			return false;
		});

	// Owl Carousel
	if($('.category-carousel').length > 0 ){
		$('.category-carousel').owlCarousel({
			loop:true,
			margin:16,
			nav:false,
			dots:true,
			autoplay: true,
			autoplayTimeout: 2500,
			autoplayHoverPause: true,
			smartSpeed: 1000,
			responsive:{
				0:{
					items:1
				},
				576:{
					items:2
				},
				768:{
					items:3
				},
				992:{
					items:5
				},
				1200:{
					items:5
				},
				1400:{
					items:6
				}
			}
		});
	}

	if($('.brand-carousel').length > 0 ){
		$('.brand-carousel').owlCarousel({
			loop:true,
			margin:24,
			nav: false,
			dots: false,
			autoplay: true,
			autoplayTimeout: 3000,
			autoplayHoverPause: true,
			smartSpeed: 1000,
			responsive:{
				0:{
					items:2
				},
				576:{
					items:3
				},
				768:{
					items:4
				},
				992:{
					items:4
				},
				1200:{
					items:6
				},
				1400:{
					items:6
				}
			}
		});
	}

	if($('#review-carousel').length>0) {
		$('#review-carousel').owlCarousel({
			loop:true,
			margin:24,
			nav:false,
			dots: true,
			autoplay: true,
			autoplayTimeout: 2500,
			autoplayHoverPause: true,
			smartSpeed: 1000,
			responsive:{
				0:{
					items:1
				},
				576:{
					items:1
				},
				768:{
					items:1
				},
				992:{
					items:1
				},
				1200:{
					items:2
				},
				1400:{
					items:2
				}
			}
		});
	}
	
	document.addEventListener("DOMContentLoaded", function () {
		// Timer setup
		let timeLeft = 600; // 10 minutes in seconds
		const timerElement = document.getElementById("otp_timer");
	
		if (timerElement) { // Only run if the element exists
			function updateTimer() {
				let minutes = Math.floor(timeLeft / 60);
				let seconds = timeLeft % 60;
				seconds = seconds < 10 ? "0" + seconds : seconds;
				timerElement.textContent = `${minutes}:${seconds}`;
	
				if (timeLeft > 0) {
					timeLeft--;
				} else {
					clearInterval(timerInterval);
					alert("Time's up!");
				}
			}
	
			// Start the timer
			const timerInterval = setInterval(updateTimer, 1000);
		}
	});
	


		if($('.instructor-carousel').length > 0 ){
			$('.instructor-carousel').owlCarousel({
				loop: true,
				margin: 24,
				nav: false,
				dots: true,
				autoplay: true,
				autoplayTimeout: 2500,
				autoplayHoverPause: true,
				smartSpeed: 1000,
				responsive:{
					0:{
						items:1
					},
					576:{
						items:1
					},
					768:{
						items:2
					},	
					992:{
						items:3
					},
					1200:{
						items:4
					},
					1400:{
						items:4
					}
				}
			});
		}

		//  mentoring course
		if($('.mentoring-course').length > 0) {
			$('.mentoring-course').slick({
				dots: true,
				infinite: true,
				slidesToShow: 4,
				slidesToScroll: 1,
				arrows: false,
				responsive: [
					{
					  breakpoint: 1024,
					  settings: {
						slidesToShow: 2,
						slidesToScroll: 1,
						infinite: true,
						dots: true
					  }
					},
					{
					  breakpoint: 600,
					  settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					  }
					},
					{
					  breakpoint: 480,
					  settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					  }
					}
				  ]
				});
			}

		//  trending course
		if($('.trending-course').length > 0) {
			$('.trending-course').slick({
				dots: true,
				infinite: true,
				slidesToShow: 3,
				slidesToScroll: 1,
				arrows: false,
				responsive: [
					{
					  breakpoint: 1024,
					  settings: {
						slidesToShow: 2,
						slidesToScroll: 1,
						infinite: true,
						dots: true
					  }
					},
					{
					  breakpoint: 768,
					  settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					  }
					},
					{
					  breakpoint: 480,
					  settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					  }
					}
				  ]
				});
			}

		//  instructors course
		if($('.instructors-course').length > 0) {
			$('.instructors-course').slick({
				dots: true,
				infinite: true,
				slidesToShow: 4,
				slidesToScroll: 1,arrows: false,
				responsive: [
					{
					  breakpoint: 1024,
					  settings: {
						slidesToShow: 2,
						slidesToScroll: 1,
						infinite: true,
						dots: true
					  }
					},
					{
					  breakpoint: 768,
					  settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					  }
					},
					{
					  breakpoint: 480,
					  settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					  }
					}
				  ]
				});
			}

		//  blogs-slide
		if($('.blogs-slide').length > 0) {
			$('.blogs-slide').slick({
				dots: true,
				infinite: true,
				slidesToShow: 3,
				slidesToScroll: 1,
				arrows: false,
				responsive: [
					{
					  breakpoint: 1024,
					  settings: {
						slidesToShow: 2,
						slidesToScroll: 1,
						infinite: true,
						dots: true
					  }
					},
					{
					  breakpoint: 768,
					  settings: {
						slidesToShow: 1,
						slidesToScroll: 2
					  }
					},
					{
					  breakpoint: 480,
					  settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					  }
					}
				  ]
				});
			}

		if($('#openVideoBtn').length > 0) {
			document.addEventListener("DOMContentLoaded", function () {
				const openVideoBtn = document.getElementById('openVideoBtn');
				const videoModal = document.getElementById('videoModal');
				const closeModal = document.getElementById('closeModal');
				const youtubeIframe = document.getElementById('youtubeIframe');
			
				// Ensure all necessary elements are present
				if (openVideoBtn && videoModal && closeModal && youtubeIframe) {
					// YouTube video URL with an actual video ID
					const youtubeVideoUrl = "https://www.youtube.com/embed/1trvO6dqQUI";
			
					openVideoBtn.addEventListener('click', (e) => {
						e.preventDefault();
						youtubeIframe.src = youtubeVideoUrl;
						videoModal.style.display = 'flex';
					});
			
					closeModal.addEventListener('click', () => {
						videoModal.style.display = 'none';
						youtubeIframe.src = ""; // Reset the iframe to stop the video
					});
				}
			});
		}
			
		// // Testimonial slider 5

	if($('.client-slider').length > 0) {
		$(".client-slider").slick({
			lazyLoad: 'ondemand',
			slidesToShow: 7,
			slidesToScroll: 1,
			autoplay: false,
			autoplaySpeed: 0,
			speed: 3000,
			autoplaySpeed: 1800,
			arrows: false,
			responsive: [
				{
				  breakpoint: 1199,
				  settings: {
					slidesToShow: 6,
					slidesToScroll: 1,
					infinite: true,
				  }
				},
				{
				  breakpoint: 767,
				  settings: {
					slidesToShow: 5,
					slidesToScroll: 2
				  }
				},
				{
				  breakpoint: 576,
				  settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				  }
				}
			  ]
			
		});
	}		
		  // add new item
		  document.addEventListener("DOMContentLoaded", function() {
			const addNewTopicBtn = document.getElementById("add-new-topic-btn");
			const inputBlock = document.getElementById("input-block");
		  
			if (addNewTopicBtn && inputBlock) {
			  // Add new item
			  addNewTopicBtn.addEventListener("click", function() {
				// Create new input group
				const newInputGroup = document.createElement("div");
				newInputGroup.className = "d-flex align-items-center add-new-input";
		  
				// Create new input element
				const newInput = document.createElement("input");
				newInput.type = "text";
				newInput.className = "form-control";
				newInput.placeholder = "Enter new item";
		  
				// Create trash icon link
				const trashLink = document.createElement("a");
				trashLink.href = "javascript:void(0);";
				trashLink.className = "link-trash";
				trashLink.innerHTML = '<i class="isax isax-trash"></i>';
		  
				// Append input and trash link to new input group
				newInputGroup.appendChild(newInput);
				newInputGroup.appendChild(trashLink);
		  
				// Append new input group to input-block
				inputBlock.appendChild(newInputGroup);
		  
				// Add event listener to trash icon to remove input
				trashLink.addEventListener("click", function() {
				  newInputGroup.remove();
				});
			  });
			}
		  });
		  
			
		  // upload img 
		  document.addEventListener("DOMContentLoaded", function() {
			const uploadSection = document.getElementById("upload-img-section");
			const fileInput = document.getElementById("upload-img-input");
		  
			if (uploadSection && fileInput) {
			  // Open file input when clicking the section
			  uploadSection.addEventListener("click", function() {
				fileInput.click();
			  });
		  
			  // Handle file input change
			  fileInput.addEventListener("change", function() {
				handleFileUpload(fileInput.files[0]);
			  });
		  
			  // Drag and drop functionality
			  uploadSection.addEventListener("dragover", function(event) {
				event.preventDefault();
				uploadSection.classList.add("drag-over");
			  });
		  
			  uploadSection.addEventListener("dragleave", function() {
				uploadSection.classList.remove("drag-over");
			  });
		  
			  uploadSection.addEventListener("drop", function(event) {
				event.preventDefault();
				uploadSection.classList.remove("drag-over");
				const file = event.dataTransfer.files[0];
				if (file) {
				  handleFileUpload(file);
				}
			  });
		  
			  // Function to handle file upload (basic example)
			  function handleFileUpload(file) {
				if (file && file.size <= 2 * 1024 * 1024) {
				  alert(`File "${file.name}" uploaded successfully.`);
				} else {
				  alert("File size exceeds 2 MB or invalid format.");
				}
			  }
			}
		  });

		  // like botton
		  document.addEventListener("DOMContentLoaded", function() {
			const likeElement = document.querySelector(".like");
		  
			if (likeElement) {
			  likeElement.addEventListener("mouseover", function() {
				this.querySelector("i").classList.add("isax-heart-filled"); // Add filled icon class
			  });
		  
			  likeElement.addEventListener("mouseout", function() {
				this.querySelector("i").classList.remove("isax-heart-filled"); // Revert to original icon
			  });
			}
		  });

		//   otp
		// Select all OTP input elements
		const otpInputs = document.querySelectorAll('.otp');

		// Check if any OTP inputs are found before adding event listeners
		if (otpInputs.length > 0) {
			otpInputs.forEach((input, index) => {
				input.addEventListener('input', (event) => {
					// Ensure only one character is accepted
					input.value = input.value.slice(0, 1);
	
					if (input.value.length === 1) {
						// Move to the next input if available
						if (index < otpInputs.length - 1) {
							otpInputs[index + 1].focus();
						}
					}
				});
	
				input.addEventListener('keydown', (event) => {
					if (event.key === 'Backspace' && !input.value) {
						// Move to the previous input if available
						if (index > 0) {
							otpInputs[index - 1].focus();
						}
					}
				});
			});
		}

		if($('.swiper-slider-banner').length > 0) {
			var swiper = new Swiper(".swiper-slider-banner", {
				effect: "cards",
      			grabCursor: true,
			  });
		}

		// Feature Courses Slider
		if($('.feature-course-slider-2').length > 0) {
			$('.feature-course-slider-2').slick({
				dots: false,
				infinite: true,
				speed: 300,
				slidesToShow: 4,
				slidesToScroll: 1,
				responsive: [
				  {
					breakpoint: 1300,
					settings: {
					  slidesToShow: 3,
					  slidesToScroll: 1,
					  infinite: true,
					  dots: true
					}
				  },
				  {
					breakpoint: 992,
					settings: {
					  slidesToShow: 2,
					  slidesToScroll: 1,
					  infinite: true,
					  dots: true
					}
				  },
				  {
					breakpoint: 768,
					settings: {
					  slidesToShow: 1,
					  slidesToScroll: 1
					}
				  }
				]
			  });
			}

		// Feature Courses Slider
		if($('.feature-course-slider-2-rtl').length > 0) {
			$('.feature-course-slider-2-rtl').slick({
				dots: false,
				infinite: true,
				speed: 300,
				rtl:true,
				slidesToShow: 4,
				slidesToScroll: 1,
				responsive: [
				  {
					breakpoint: 1300,
					settings: {
					  slidesToShow: 3,
					  slidesToScroll: 1,
					  infinite: true,
					  dots: true
					}
				  },
				  {
					breakpoint: 992,
					settings: {
					  slidesToShow: 2,
					  slidesToScroll: 1,
					  infinite: true,
					  dots: true
					}
				  },
				  {
					breakpoint: 768,
					settings: {
					  slidesToShow: 1,
					  slidesToScroll: 1
					}
				  }
				]
			  });
			}
		// home-2-brand-slide
		if($('.brand-slide').length > 0) {
			$('.brand-slide').slick({
				dots: false,
				infinite: true,
				speed: 2000,
				slidesToShow: 6,
				slidesToScroll: 1,
				autoplay: true,
				arrows: false,
				responsive: [
				  {
					breakpoint: 1300,
					settings: {
					  slidesToShow: 5,
					  slidesToScroll: 1,
					  infinite: true,
					  dots: true
					}
				  },
				  {
					breakpoint: 992,
					settings: {
					  slidesToShow: 4,
					  slidesToScroll: 1,
					  infinite: true,
					  dots: true
					}
				  },
				  {
					breakpoint: 768,
					settings: {
					  slidesToShow: 2,
					  slidesToScroll: 1
					}
				  }
				]
			  });
			}
		// home-2-brand-slide
		if($('.brand-slide-rtl').length > 0) {
			$('.brand-slide-rtl').slick({
				dots: false,
				infinite: true,
				rtl: true,
				speed: 2000,
				slidesToShow: 6,
				slidesToScroll: 1,
				autoplay: true,
				arrows: false,
				responsive: [
				  {
					breakpoint: 1300,
					settings: {
					  slidesToShow: 5,
					  slidesToScroll: 1,
					  infinite: true,
					  dots: true
					}
				  },
				  {
					breakpoint: 992,
					settings: {
					  slidesToShow: 4,
					  slidesToScroll: 1,
					  infinite: true,
					  dots: true
					}
				  },
				  {
					breakpoint: 768,
					settings: {
					  slidesToShow: 2,
					  slidesToScroll: 1
					}
				  }
				]
			  });
			}
		
})(jQuery);
