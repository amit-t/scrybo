<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
        <meta name="description" content="Scrybo | Inscribing Thoughts">
        <meta name="keywords" content="read, blog, html5, portfolio">
        <meta name="author" content="Amit Tiwari">

        <title>@yield( 'title' )</title>

        <!-- FAV and TOUCH ICONS -->
        <!--    
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/logo-144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/logo-114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/logo-72.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/logo-57.png">
        -->
        <!-- FONTS -->
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Clicker+Script' rel='stylesheet' type='text/css'>
        <!--[if lte IE 9]>
            <script src="js/html5shiv.js"></script>
            <script src="js/selectivizr-min.js"></script>
        <![endif]-->
        <!-- STYLES -->
        <link rel="stylesheet" type="text/css" media="print" href="{{ URL::asset( 'css/print.css' ) }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset( 'css/grid.css' ) }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset( 'css/style.css' ) }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset( 'css/normalize.css' ) }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset( 'css/font-awesome.css' ) }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset( 'js/google-code-prettify/prettify.css' ) }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset( 'css/uniform.default.css' ) }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset( 'css/iphoneMaker.css' ) }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset( 'css/flexslider.css' ) }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset( 'css/main.css' ) }}">
        <!-- SCRIPTS -->
        <script src="{{ URL::asset( 'js/jquery-1.8.3.min.js' ) }}"></script>
    </head>
    <!--Body-->
    <body>
        <!-- #PAGE -->
        <div id="page" class="hfeed site">
            
            <!-- .site-header -->
            <header class="site-header wrapper" role="banner"> 
                <!-- .row -->
                <div class="row">
                    <!-- .site-title -->
                    <hgroup>
                        <h1 class="site-title"><a href="#" rel="home">Scrybo</a></h1>
                        <h2 class="site-description">Inscribing Thoughts</h2>
                    </hgroup>
                    <!-- .site-title -->
                    
                    @if( $header == 'yes' )
                        @include( 'master.header' )
                    @endif
                </div>
                <!-- .row -->
            </header>
            <!-- .site-header -->
            
            <!-- #main -->
            <section id="main" class="middle wrapper">
                
                <!--row fluid-->
                <div class="row row-fluid">
                    @yield( 'content' )
                </div>
                
            </section>
            <!-- #main -->
            
            @include( 'master.footer' )
            
        </div>
        <!-- SCRIPTS -->
        <script src="{{ URL::asset( 'js/detectmobilebrowser.js' ) }}"></script>
        <script src="{{ URL::asset( 'js/modernizr.js' ) }}"></script>
        <script src="{{ URL::asset( 'js/jquery.imagesloaded.min.js' ) }}"></script>
        <script src="{{ URL::asset( 'js/jquery.fitvids.js' ) }}"></script>
        <script src="{{ URL::asset( 'js/google-code-prettify/prettify.js' ) }}"></script>
        <script src="{{ URL::asset( 'js/jquery.uniform.min.js' ) }}"></script>

        <!-- InstanceBeginEditable name="body-end" -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset( 'js/mediaelement/mediaelementplayer.css' ) }}" >
        <script src="{{ URL::asset( 'js/jquery.flexslider-min.js' ) }}"></script>
        <script src="{{ URL::asset( 'js/mediaelement/mediaelement-and-player.min.js' ) }}"></script>
        <script src="{{ URL::asset( 'js/easing.js' ) }}"></script>
        <script src="{{ URL::asset( 'js/jquery.ui.totop.js' ) }}"></script>
        <!-- InstanceEndEditable -->

        <script src="{{ URL::asset( 'js/main.js' ) }}"></script>
        <!-- SCRIPTS -->
    </body>