<footer class="dark footer section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-md-6 col-xs-12">
                        <div class="widget">
                            <div class="widget-title">
                                <h4>About Us</h4>
                                <hr>
                            </div>
                            @foreach ($sites as $site)
                            @if ($site->site_key=='about')
                            <p>{{ Illuminate\Support\Str::words($site->site_value, 15, '...')}}</p>
                            <a href="{{ url('aboutus') }}" class="btn btn-default">Read More</a>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-3 col-md-6 col-xs-12">
                        <div class="widget">
                            <div class="widget-title">
                                <h4>Quick Link</h4>
                                <hr>
                                <ul class="contact-details">
                                <li> <a href="{{ url('index') }}">Home</a></li>
                                <li> <a href="{{ url('aboutus') }}">About Us</a></li>
                                <li> <a href="{{ url('notices') }}">Examination</a></li>
                                <li> <a href="{{ url('courses') }}">Courses</a></li>
                                <li> <a href="{{ url('teachers') }}">Teacher</a></li>
                                <li> <a href="{{ url('galleries') }}">Gallery</a></li>
                            </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-md-6 col-xs-12">
                        <div class="widget">
                            <div class="widget-title">
                                <h4>Contact Details</h4>
                                <hr>
                            </div>
                            <ul class="contact-details">
                                @foreach ($sites as $site)
                                @if ($site->site_key=='website')
                                <li><i class="fa fa-link"></i> <a href="{{ $site->site_value}}">{{ $site->site_value}}</a></li>
                                @endif
                                @endforeach
                                @foreach ($sites as $site)
                                @if ($site->site_key=='phone')
                                <li><i class="fa fa-phone"></i> {{ $site->site_value}}</li>
                                @endif
                                @endforeach
                                @foreach ($sites as $site)
                                @if ($site->site_key=='address')
                                <li><i class="fa fa-home"></i>{{ $site->site_value}}</li>
                                @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="mb-40 footer-widget">

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box">

                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112488.24760131458!2d83.88657799411769!3d28.229855807896243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995937bbf0376ff%3A0xf6cf823b25802164!2sPokhara!5e0!3m2!1sen!2snp!4v1631172772593!5m2!1sen!2snp" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                            </div>
                        </div>
                    </div>
                </div>

                </div>
            </div>
        </footer>
        <section class="copyright">
            <div class="container">
                <div class="row">
                    <div class="text-left col-md-6">
                        <p><a target="_blank" href="https://www.templateshub.net">Xdezo Technologies</a></p>
                    </div>
                    <div class="text-right col-md-6">
                        {{-- <ul class="list-inline">
                            <li><a href="#">Terms of Usage</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Sitemap</a></li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="{{ asset('asset/js/jquery.min.js.pagespeed.jm.iDyG3vc4gw.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap.min.js%2bretina.js%2bwow.js.pagespeed.jc.pMrMbVAe_E.js') }}"></script>
    <script>
    eval(mod_pagespeed_gFRwwUbyVc);
    </script>
    <script>
    eval(mod_pagespeed_rQwXk4AOUN);
    </script>
    <script>
    eval(mod_pagespeed_U0OPgGhapl);
    </script>
    <script src="{{ asset('asset/js/carousel.js%2bcustom.js.pagespeed.jc.nVhk-UfDsv.js') }}"></script>
    <script>
    eval(mod_pagespeed_6Ja02QZq$f);
    </script>
    <script>
    eval(mod_pagespeed_KxQMf5X6rF);
    </script>
    <script src="{{ asset('asset/rs-plugin/js/jquery.themepunch.tools.min.js.pagespeed.jm.0PLSBOOLZa.js') }}"></script>
    <script src="{{ asset('asset/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script>
    jQuery(document).ready(function() {
        jQuery('.tp-banner').show().revolution({
            dottedOverlay: "none",
            delay: 16000,
            startwidth: 1170,
            startheight: 620,
            hideThumbs: 200,
            thumbWidth: 100,
            thumbHeight: 50,
            thumbAmount: 5,
            navigationType: "none",
            navigationArrows: "solo",
            navigationStyle: "preview3",
            touchenabled: "on",
            onHoverStop: "on",
            swipe_velocity: 0.7,
            swipe_min_touches: 1,
            swipe_max_touches: 1,
            drag_block_vertical: false,
            parallax: "mouse",
            parallaxBgFreeze: "on",
            parallaxLevels: [10, 7, 4, 3, 2, 5, 4, 3, 2, 1],
            parallaxDisableOnMobile: "off",
            keyboardNavigation: "off",
            navigationHAlign: "center",
            navigationVAlign: "bottom",
            navigationHOffset: 0,
            navigationVOffset: 20,
            soloArrowLeftHalign: "left",
            soloArrowLeftValign: "center",
            soloArrowLeftHOffset: 20,
            soloArrowLeftVOffset: 0,
            soloArrowRightHalign: "right",
            soloArrowRightValign: "center",
            soloArrowRightHOffset: 20,
            soloArrowRightVOffset: 0,
            shadow: 0,
            fullWidth: "on",
            fullScreen: "off",
            spinner: "spinner4",
            stopLoop: "off",
            stopAfterLoops: -1,
            stopAtSlide: -1,
            shuffle: "off",
            autoHeight: "off",
            forceFullWidth: "off",
            hideThumbsOnMobile: "off",
            hideNavDelayOnMobile: 1500,
            hideBulletsOnMobile: "off",
            hideArrowsOnMobile: "off",
            hideThumbsUnderResolution: 0,
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            startWithSlide: 0,
            fullScreenOffsetContainer: ""
        });
    });
    </script>
    <script src="{{ asset('asset/js/bxslider.js.pagespeed.jm.X-sF7YFq4Y.js') }}"></script>
    <script type="text/javascript">
    (function($) {
        "use strict";
        $('.bxslider').bxSlider({
            mode: 'vertical',
            minSlides: 1,
            maxSlides: 1,
            slideMargin: 0,
            pager: false,
            nextText: '<i class="fa fa-arrow-down"></i>',
            prevText: '<i class="fa fa-arrow-up"></i>',
            speed: 1000,
            auto: true
        });
    })(jQuery);
    </script>

    <script src="{{ asset('asset/js/isotope.js.pagespeed.jm.3o8H2mhlCK.js') }}"></script>
    <script
      type="text/javascript">(function ($) { "use strict"; $(window).load(function () { $('.portfolio').isotope({ itemSelector: '.item', layoutMode: 'fitRows' }); $('#filters a.selected').trigger("click"); }); $('#filters a').click(function (e) { e.preventDefault(); var selector = $(this).attr('data-option-value'); $('.portfolio').isotope({ filter: selector }); $(this).parents('ul').find('a').removeClass('selected'); $(this).addClass('selected'); }); jQuery(document).ready(function ($) { $(window).resize(); $Filter.find('a').click(function () { $Filter.find('ul li').not($(this)).removeClass('active'); $(this).parent('li').addClass('active'); }); }); })(jQuery);</script>
</body>

<!--  38:47  -->

</html>
