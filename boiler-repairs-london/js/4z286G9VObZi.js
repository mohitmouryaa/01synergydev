!function(e){e(window).on("load",(function(){e(".intro-slider").length>0&&e(".intro-slider").owlCarousel({autoHeight:!0,loop:!0,autoplay:!0,autoplayTimeout:6e3,animateOut:"fadeOut",animateIn:"fadeIn",items:1,nav:!1,navText:['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>']})})),e(document).ready((function(){e(".wow").length>0&&(wow=new WOW({animateClass:"animated",offset:100}),wow.init()),e(".incremental-counter").length>0&&e(".incremental-counter").incrementalCounter(),e(".typed").length>0&&e(".typed").length>0&&new Typed(".typed",{strings:["Leading Boiler Installation","Plumbing and Heating Specialists In London"],typeSpeed:100,backSpeed:80,backDelay:500,startDelay:100,showCursor:!1,loop:!0}),e(".typed-1").length>0&&new Typed(".typed-1",{strings:["Welcome To Local Boiler"],typeSpeed:200,backSpeed:80,backDelay:500,startDelay:200,showCursor:!1,loop:!1}),e(".wow").length>0&&(wow=new WOW({animateClass:"animated",offset:100}),wow.init()),e(".nav-button").click((function(){return e(this).hasClass("open")?(e(this).removeClass("open"),e(".main-menu").removeClass("open"),e(".header").removeClass("is-fixed"),e("body").removeClass("scroll-off")):(e(this).addClass("open"),e(".main-menu").addClass("open"),e(".header").addClass("is-fixed"),e("body").addClass("scroll-off")),!1})),e(".arrow-down").length&&e(".arrow-down").click((function(){var t=e(".intro").height();return e("html, body").animate({scrollTop:t},"slow"),!1})),e(".ppc-arrow").length&&e(".ppc-arrow").click((function(){return e("html, body").animate({scrollTop:0},"slow"),!1})),e(".trustpilot-slider").length>0&&e(".trustpilot-slider").owlCarousel({stagePadding:50,margin:20,autoplay:!1,autoplayTimeout:2e3,slideSpeed:2e3,loop:!0,items:3,autoWidth:!0,nav:!0,navText:['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],smartSpeed:2e3,responsive:{0:{items:1},600:{items:2},1e3:{items:3}}}),e(".testimonial-slider").length&&e(".testimonial-slider").owlCarousel({autoplay:!0,autoplayTimeout:4e3,slideSpeed:2e3,items:3,dots:!1,nav:!0,navText:['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],smartSpeed:1e3,responsive:{0:{items:1},600:{items:1},1e3:{items:2},1200:{items:3}}}),e(".clients-slider").length>0&&e(".clients-slider").owlCarousel({stagePadding:50,autoplay:!0,autoplayTimeout:2e3,slideSpeed:2e3,loop:!0,items:6,autoWidth:!0,nav:!1,navText:['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],smartSpeed:1e3,responsive:{0:{items:1},600:{items:3},1e3:{items:6}}}),e("#instagram").length&&e("#instagram").instastory({get:"#topazdetailing",limit:8,imageSize:320,template:'<div class="col-6 col-md-3 py-3 px-2"><a href="{{link}}" rel="follow" target="_blank"><img class="img-fluid" src="{{image}}" alt="{{caption}}"></a></div>'}),e(".checkbox").change((function(){e(".icon-field").find(".check-icon").removeClass("active"),e(".icon-field").removeClass("active");var t=e(this).parents(".icon-field");t.addClass("active"),t.find(".check-icon").addClass("active")})),e(".next").length>0&&e(".next").click((function(){var t=e(this).parents("#step1");t.hide("1000"),t.next().show("1000")})),e(".btn-back").length>0&&e(".btn-back").click((function(){e("#step2").hide("1000"),e("#step1").show("1000")})),e(".btn-help").length>0&&e(".btn-help").hover((function(){e(this).find(".help-data").text(e(this).attr("data-help")),e(this).find(".help-data").show(500)}),(function(){e(this).find(".help-data").hide(500)})),e(".boiler-system").length>0&&e("input[type=radio][name=boiler_system]").change((function(){if(e(this).is(":checked")){var t=e(this).parents(".qtn").next();t.find(".qtn-title").addClass("active"),t.find(".qtn-body").addClass("active");t.find(".qtn-title");t.find(".btn-help").prop("disabled",!1)}})),e(".type-of-work").length>0&&e("input[type=radio][name=type_of_work]").change((function(){if(e(this).is(":checked")){var t=e(this).parents(".qtn").next();t.find(".qtn-title").addClass("active"),t.find(".qtn-body").addClass("active");t.find(".qtn-title");t.find(".btn-help").prop("disabled",!1)}})),e(".bedrooms").length>0&&e("input[type=radio][name=bedrooms]").change((function(){if(e(this).is(":checked")){var t=e(this).parents(".qtn").next();t.find(".qtn-title").addClass("active"),t.find(".qtn-body").addClass("active");t.find(".qtn-title");t.find(".btn-help").prop("disabled",!1)}})),e(".bathrooms").length>0&&e("input[type=radio][name=bathrooms]").change((function(){if(e(this).is(":checked")){var t=e(this).parents(".qtn").next();t.find(".qtn-title").addClass("active"),t.find(".qtn-body").addClass("active");t.find(".qtn-title");t.find(".btn-help").prop("disabled",!1)}})),e(".radiators").length>0&&e("input[type=radio][name=radiators]").change((function(){if(e(this).is(":checked")){var t=e(this).parents(".qtn").next();t.find(".qtn-title").addClass("active"),t.find(".qtn-body").addClass("active");t.find(".qtn-title");t.find(".btn-help").prop("disabled",!1)}})),e(".timer").length>0&&e("input[type=radio][name=timer]").change((function(){if(e(this).is(":checked")){var t=e(this).parents(".qtn").next();t.find(".qtn-title").addClass("active"),t.find(".qtn-body").addClass("active");t.find(".qtn-title");t.find(".btn-help").prop("disabled",!1)}})),e(".hear-about-us").length>0&&e(".hear-about-us").change((function(){e(".btn-next").show()})),e(".btn-next").click((function(){e(".form-1").hide(200),e(".form-2").show(200),e(".steps-menu .menu1").removeClass("active"),e(".steps-menu .menu2").addClass("active"),e("html, body").animate({scrollTop:0},400),e("#BoilerSystem").text(e("input[name='boiler_system']:checked").val()),e("#Estimate").text(e("input[name='type_of_work']:checked").val()),e("#Bedrooms").text(e("input[name='bedrooms']:checked").val()+" Bedrooms"),e("#Bathrooms").text(e("input[name='bathrooms']:checked").val()+" Bathrooms"),e("#Radiators").text(e("input[name='radiators']:checked").val()+" Radiators")})),e(".btn-back").click((function(){e(".form-1").show(200),e(".form-2").hide(200),e(".steps-menu .menu1").addClass("active"),e(".steps-menu .menu2").removeClass("active"),e("html, body").animate({scrollTop:0},400)})),e(".show-info").click((function(){var t=e(this).parent(".info");console.log(t.next()),t.next().css("height","auto"),e(this).hide()})),e(".hide-info").click((function(){e(this).parent(".info-text").css("height","0"),e(".show-info").show()})),e(".Property Type").length>0&&e("input[name='Property Type']").change((function(){e("#CurrentProperty .radio-box").removeClass("active"),e(this).parents(".radio-box").addClass("active")})),e(".type-of-work").length>0&&e("input[name='service-type']").change((function(){e("#TypeOfWork .radio-box").removeClass("active"),e(this).parents(".radio-box").addClass("active")})),e(".btn-package").click((function(){var t=e(this).attr("data-package");e('input[name="package"]').val(t),e('input[name="package"]').prop("disabled",!0)}))})),e(window).on("scroll",(function(){var t=e(window).scrollTop();if(t>80?e(".header").addClass("is-fixed"):e(".header").removeClass("is-fixed"),e(".page-section").length>0){var a=e(".intro").height()/2;t>e(".page-section").offset().top-a?e(".running-car").addClass("in-view"):e(".running-car").removeClass("in-view")}}))}(jQuery);