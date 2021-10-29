<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<!--  33:43  -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <title>LearnPLUS | Learning Management System HTML Template</title>
    <link rel="shortcut icon" href="{{ asset('asset/images/favicon.ico') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('asset/images/apple-touch-icon.png') }}" />
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('asset/images/apple-touch-icon-57x57.png') }}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('asset/images/xapple-touch-icon-72x72.png.pagespeed.ic.lf5d8kCpOf.png') }}" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('asset/images/xapple-touch-icon-76x76.png.pagespeed.ic.ATZZpSeito.png') }}" />
    <link rel="apple-touch-icon" sizes="114x114"
        href="{{ asset('asset/images/xapple-touch-icon-114x114.png.pagespeed.ic.Fi5O5s2tzL.png') }}" />
    <link rel="apple-touch-icon" sizes="120x120"
        href="{{ asset('asset/images/xapple-touch-icon-120x120.png.pagespeed.ic.uPQH0sygdV.png') }}" />
    <link rel="apple-touch-icon" sizes="144x144"
        href="{{ asset('asset/images/xapple-touch-icon-144x144.png.pagespeed.ic.yZ9-_sm5OF.png') }}" />
    <link rel="apple-touch-icon" sizes="152x152"
        href="{{ asset('asset/images/xapple-touch-icon-152x152.png.pagespeed.ic.gThaVrKtXF.png') }}" />
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('asset/images/xapple-touch-icon-180x180.png.pagespeed.ic.Q8Pmsj5fQM.png') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/rs-plugin/css/A.settings.css.pagespeed.cf.xeOyGChsgq.css') }}"
        media="screen" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('asset/A.fonts%2c%2c_font-awesome-4.3.0%2c%2c_css%2c%2c_font-awesome.min.css%2bcss%2c%2c_bootstrap.css%2bcss%2c%2c_animate.css%2cMcc.kSNwpaaMDX.css.pagespeed.cf.w2G3xGgFf0.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/A.menu.css.pagespeed.cf.0_hLwXzYkZ.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('asset/css/A.carousel.css%2bbxslider.css%2cMcc.jgeTii-u52.css.pagespeed.cf.STKSIMl7GF.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('asset/A.style.css%2bcss%2c%2c_custom.css%2cMcc.HvWh1qoob-.css.pagespeed.cf.pWH5huNcWh.css') }}" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div id="loader">
        <div class="loader-container">
            <img src="{{ asset('asset/images/site.gif') }}" alt="" class="loader-site">
        </div>
    </div>
    <div id="wrapper">
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="text-left col-md-9">
                        <ul class="list-inline">
                            <li class="col-md-12">
                              @foreach ($sites as $site)
                        @if ($site->site_key=='logo')
                        <a class="col col-md-6"><i class="fa fa-graduation-cap"></i>{{ $site->site_value }}</a>
                        @endif
                        @endforeach
                        @foreach ($sites as $site)
                                @if ($site->site_key=='phone')

    <a class="col col-md-2"><i class="fa fa-phone"></i>{{ $site->site_value }}</a>
                                @endif

                                @endforeach
                                @foreach ($sites as $site)
                                @if ($site->site_key=='email')
     <a class="col col-md-3"><i class="fa fa-envelope-o"></i>{{ $site->site_value }}</a>
                                @endif

                                @endforeach
                            </li>
                        </ul>

                    </div>
                    <div class="text-right col-md-3">
                        <ul class="list-inline">
                            <li>
                                @foreach ($sites as $site)
                                @if ($site->site_key=='facebook')
  <a class="social" href="{{ $site->site_value }}"><i class="fa fa-facebook"></i></a>
                                @endif
                                 @if ($site->site_key=='google')
      <a class="social" href="{{ $site->site_value }}"><i class="fa fa-google-plus"></i></a>
                                @endif
                                 @if ($site->site_key=='linkedin')
 <a class="social" href="{{ $site->site_value }}"><i class="fa fa-linkedin"></i></a>
                                @endif

                                @endforeach




                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
