    /*
    * ----------------------------------------------------------------------------------------
        Author       : miniboss
        Template Name: jhon - Personal Portfolio Template
        Version      : 1.0
    * ----------------------------------------------------------------------------------------
    */

    (function(){
        "use strict";

    /*
         * ----------------------------------------------------------------------------------------
         *  active owl-carousel
         * ----------------------------------------------------------------------------------------
    */
        $('.clients_says').owlCarousel({
            loop:true,
            margin:10,
            autoplayTimeout:3000,
            smartSpeed:450,
            animateOut: "fadeOut",
            animateIn: "slideInUp",
            autoplay:true,
            stagePadding:30,
            nav: false,
            dots:true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],

            responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
});

    /*
         * ----------------------------------------------------------------------------------------
         *  smooth scroll
         * ----------------------------------------------------------------------------------------
    */
        $("a").on('click', function(event) {
            if (this.hash !== "") {
                event.preventDefault();
                var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
                }, 1200, function(){
                window.location.hash = hash;
          });
        }
      });
    /*
         * ----------------------------------------------------------------------------------------
         *  sticky menu
         * ----------------------------------------------------------------------------------------
    */
        $(window).on('scroll',function(){
            if($(this).scrollTop() > 50){
            $('.navigation_area').addClass('sticky');
        }
        else{
            $('.navigation_area').removeClass('sticky');
    }
  });
        /*----------active mixitup------------*/
        $('.portfolio_items').mixItUp();
    /*
         * ----------------------------------------------------------------------------------------
         *  active venubox
         * ----------------------------------------------------------------------------------------
    */
        $('.venobox_design').venobox({
            framewidth: '430px',
            frameheight: '430px',
            bgcolor: '#5dff5e',
            titleattr: 'data-title',
            numeratio: true,
            infinigall: true,
            spinner:'wave',
            overlayColor:'rgba(0,0,0,0.96)',
            closeBackground:'transparent',
            closeColor:'#333',
            titlePosition:'bottom'
    });

    /*
         * ----------------------------------------------------------------------------------------
         *  active YTPlayer
         * ----------------------------------------------------------------------------------------
    */
        jQuery(".user_quote").YTPlayer();

    /*
         * ----------------------------------------------------------------------------------------
         *  responsive menu
         * ----------------------------------------------------------------------------------------

 //    */
        function mobileMenu(){
                var windwidth = $(window).width();
                    if(windwidth < 768){
                    $('.main_menu').hide();

                    $('.mobile_menu').on('click',function(){

                    $('.main_menu').slideToggle("slow");
                });
                    $('.main_menu .nav > li > a').on('click',function(){
                    $('.main_menu').hide();
            });
         }
        }
        mobileMenu();
        $(window).on('resize',function() {
            mobileMenu();
        });

    /*
         * ----------------------------------------------------------------------------------------
         *  scroll to top
         * ----------------------------------------------------------------------------------------
    */
        $('.scrolltp').fadeOut(1000);
            $(window).on('scroll', function(){

            if($(this).scrollTop()>500){
                 $('.scrolltp').fadeIn(1000);
              }
              else
              {
                 $('.scrolltp').fadeOut(1000);
              }
         });
        $('.scrolltp').on('click', function(){
        $('html,body').animate({scrollTop: 0}, 2000);
     });

     jQuery(window).load(function() {
         $('.preloader').fadeOut('slow');
     });

        var TxtType = function (el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 1000;
            this.txt = '';
            this.tick();
            this.isDeleting = false;
        };

        TxtType.prototype.tick = function () {
            var i = this.loopNum % this.toRotate.length;
            var fullTxt = this.toRotate[i];

            if (this.isDeleting) {
                this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
                this.txt = fullTxt.substring(0, this.txt.length + 1);
            }

            this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

            var that = this;
            var delta = 150 - Math.random() * 100;

            if (this.isDeleting) {
                delta /= 2;
            }

            if (!this.isDeleting && this.txt === fullTxt) {
                delta = this.period;
                this.isDeleting = true;
            } else if (this.isDeleting && this.txt === '') {
                this.isDeleting = false;
                this.loopNum++;
                delta = 500;
            }

            setTimeout(function () {
                that.tick();
            }, delta);
        };

        window.onload = function () {
            var elements = document.getElementsByClassName('typewrite');
            for (var i = 0; i < elements.length; i++) {
                var toRotate = elements[i].getAttribute('data-type');
                var period = elements[i].getAttribute('data-period');
                if (toRotate) {
                    new TxtType(elements[i], JSON.parse(toRotate), period);
                }
            }
            // INJECT CSS
            var css = document.createElement("style");
            css.type = "text/css";
            css.innerHTML = ".typewrite > .wrap { border-right: 0.02em solid #fff}";
            document.body.appendChild(css);
        };


        var bar = new ProgressBar.Line(design, {
            strokeWidth: 4,
            easing: 'easeInOut',
            duration: 1400,
            color: '#fff',
            // trailColor: '#eee',
            // trailWidth: 1,
            svgStyle: {width: '100%', height: '100%'},
            text: {
                style: {
                    // Text color.
                    // Default: same as stroke color (options.color)
                    color: '#999',
                    position: 'absolute',
                    right: '0',
                    top: '30px',
                    padding: 0,
                    margin: 0,
                    transform: null
                },
                autoStyleContainer: false
            },
            from: {color: '#FFEA82'},
            to: {color: '#ED6A5A'},
            step: (state, bar) => {
            bar.setText(Math.round(bar.value() * 100) + ' %');
    }
    });

        bar.animate(0.7);

        var bar = new ProgressBar.Line(front, {
            strokeWidth: 4,
            easing: 'easeInOut',
            duration: 1400,
            color: '#fff',
            // trailColor: '#eee',
            // trailWidth: 1,
            svgStyle: {width: '100%', height: '100%'},
            text: {
                style: {
                    // Text color.
                    // Default: same as stroke color (options.color)
                    color: '#999',
                    position: 'absolute',
                    right: '0',
                    top: '30px',
                    padding: 0,
                    margin: 0,
                    transform: null
                },
                autoStyleContainer: false
            },
            from: {color: '#FFEA82'},
            to: {color: '#ED6A5A'},
            step: (state, bar) => {
            bar.setText(Math.round(bar.value() * 100) + ' %');
    }
    });

        bar.animate(0.9);

        var bar = new ProgressBar.Line(php, {
            strokeWidth: 4,
            easing: 'easeInOut',
            duration: 1400,
            color: '#fff',
            // trailColor: '#eee',
            // trailWidth: 1,
            svgStyle: {width: '100%', height: '100%'},
            text: {
                style: {
                    // Text color.
                    // Default: same as stroke color (options.color)
                    color: '#999',
                    position: 'absolute',
                    right: '0',
                    top: '30px',
                    padding: 0,
                    margin: 0,
                    transform: null
                },
                autoStyleContainer: false
            },
            from: {color: '#FFEA82'},
            to: {color: '#ED6A5A'},
            step: (state, bar) => {
            bar.setText(Math.round(bar.value() * 100) + ' %');
    }
    });

        bar.animate(0.6);

        var bar = new ProgressBar.Line(c_sharp, {
            strokeWidth: 4,
            easing: 'easeInOut',
            duration: 1400,
            color: '#fff',
            // trailColor: '#eee',
            // trailWidth: 1,
            svgStyle: {width: '100%', height: '100%'},
            text: {
                style: {
                    // Text color.
                    // Default: same as stroke color (options.color)
                    color: '#999',
                    position: 'absolute',
                    right: '0',
                    top: '30px',
                    padding: 0,
                    margin: 0,
                    transform: null
                },
                autoStyleContainer: false
            },
            from: {color: '#FFEA82'},
            to: {color: '#ED6A5A'},
            step: (state, bar) => {
            bar.setText(Math.round(bar.value() * 100) + ' %');
    }
    });

        bar.animate(0.75);

        var bar = new ProgressBar.Line(seo, {
            strokeWidth: 4,
            easing: 'easeInOut',
            duration: 1400,
            color: '#fff',
            // trailColor: '#eee',
            // trailWidth: 1,
            svgStyle: {width: '100%', height: '100%'},
            text: {
                style: {
                    // Text color.
                    // Default: same as stroke color (options.color)
                    color: '#999',
                    position: 'absolute',
                    right: '0',
                    top: '30px',
                    padding: 0,
                    margin: 0,
                    transform: null
                },
                autoStyleContainer: false
            },
            from: {color: '#FFEA82'},
            to: {color: '#ED6A5A'},
            step: (state, bar) => {
            bar.setText(Math.round(bar.value() * 100) + ' %');
    }
    });

        bar.animate(0.9);

        var bar = new ProgressBar.Line(laravel, {
            strokeWidth: 4,
            easing: 'easeInOut',
            duration: 1400,
            color: '#fff',
            // trailColor: '#eee',
            // trailWidth: 1,
            svgStyle: {width: '100%', height: '100%'},
            text: {
                style: {
                    // Text color.
                    // Default: same as stroke color (options.color)
                    color: '#999',
                    position: 'absolute',
                    right: '0',
                    top: '30px',
                    padding: 0,
                    margin: 0,
                    transform: null
                },
                autoStyleContainer: false
            },
            from: {color: '#FFEA82'},
            to: {color: '#ED6A5A'},
            step: (state, bar) => {
            bar.setText(Math.round(bar.value() * 100) + ' %');
    }
    });

        bar.animate(0.75);

 })(jQuery);
