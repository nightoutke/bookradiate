<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>
            @section('title')
            BookCheetah
            @show
        </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('assets/styles/css/main.css')}} ">
        <link rel="stylesheet" href="{{ asset('assets/styles/css/bookcheetah.css')}} ">
        @yield('css')

        <!-- JS -->
        <script src="{{ asset('assets/scripts/js/vendor/modernizr-2.6.2.min.js') }}"></script>

        <!-- Images -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/images/apple-touch-icon-144-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/images/apple-touch-icon-114-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/images/apple-touch-icon-72-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/apple-touch-icon-57-precomposed.png') }}">

        <!-- ICO -->
        <link rel="shortcut icon" href="favicon.ico">


    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
    <div class="wrapper">
        <div class="header">
            <a href="{{ URL::to('/') }}"><img class="logo" src="{{ asset('assets/images/logo.png') }}"/></a>
            
            <a href="{{ URL::to('donate') }}">
            <div class="charity">
                <span class="charity1">Keep BookCheetah Free!</span><br/>
                <span class="charity2">Click here to donate</span>
            </div>
            </a>

            <ul class="linkbar top1">
                <a href="{{ URL::to('howitworks') }}"><li>How it Works</li></a> |
                <a href="{{ URL::to('forums') }}"><li>Forum</li> | 
                <a href="{{ URL::to('blog') }}"><li>Blog</li></a> | 
                <a href="{{ URL::to('contactus') }}"><li>Contact Us</li></a> | 
                <a href="{{ URL::to('customerservice') }}"><li>Customer Service</li></a>
            </ul>

            <ul class="linkbar top2">
                @yield('toplinks2')
            </ul>
            

    <span class="searchline">
        
        {{ Form::open(array('url' => 'assets/api.php', 'method' => 'GET', 'class' => 'search1')) }}
            {{ Form::text('booksearch', 'Search...', array('class' => 'searchinput searchbooks', 'placeholder' => 'Search...')) }}
            <span class="buttonbabies">
                {{ Form::select('category', array(
                    '1' => 'All Books',
                    '2' => 'All Textbooks',
                    '3' => 'Business & Finance Textbooks',
                    '4' => 'Communication & Journalism Textbooks',
                    '5' => 'Computer Science Textbooks',
                    '6' => 'Education Textbooks',
                    '7' => 'Engineering Textbooks',
                    '8' => 'Humanities Textbooks',
                    '9' => 'Law Textbooks',
                    '10' => 'Medicine & Health Sciences Textbooks',
                    '11' => 'Reference Textbooks',
                    '12' => 'Science &amp; Mathematics Textbooks',
                    '13' => 'Social Sciences Textbooks'

                ), '1', array('class'=>'btn btn-primary')) }}

                {{ Form::select('sort', array(
                    '1' => 'Relevance',
                    '2' => 'Alphabetical: A to Z',
                    '3' => 'Alphabetical: Z to A',
                    '4' => 'Bestselling',
                    '5' => 'Average customer review',
                    '6' => 'Price: low to high',
                    '7' => 'Price: high to low',
                    '8' => 'Publication date: newer to older'

                ), '1', array('class'=>'btn btn-primary')) }}
               
                {{ Form::submit('Search', array('class'=>'btn btn-primary submitbook')) }}
            </span>
        {{ Form::close() }}

        {{ Form::open(array('method' => 'GET', 'class' => 'search2')) }}
            {{ Form::text('collegesearch', 'College finder...', array('class' => 'searchinput searchcolleges', 'placeholder' => 'College finder...')) }}
            <input name="submit" type="image"  class="submitcollege" src="assets/images/lens.png" />
        {{ Form::close() }}

    </span>

        </div>

        <!-- Add your site or application content here -->
        <!-- Container -->
        <div class="container">

            <!-- Notifications -->
            @include('partials.notifications')
            <!-- ./ notifications -->

            <!-- Content -->
            @yield('content')
            <!-- ./ content -->
        </div>
        <!-- ./ container -->

            <!-- jQuery -->
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
            <script>window.jQuery || document.write('<script src="assets/scripts/js/vendor/jquery-1.8.3.min.js"><\/script>')</script>

            <script src="{{ asset('assets/scripts/js/plugins.js') }}"></script>
            <script src="{{ asset('assets/scripts/js/main.js') }}"></script>
            <script src="{{ asset('assets/scripts/js/vendor/bootstrap.min.js') }}"></script>
            <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
            <script>
                // var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
                // (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
                // g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
                // s.parentNode.insertBefore(g,s)}(document,'script'));
            </script>

        <div class="footer">
            <div class="bottom_left">

                <ul class="footer_links_space">
                    <a href="{{ URL::to('howitworks') }}"><li class="link">How it Works | </li></a>
                    <li class="link">Terms of Use | </li>
                    <li class="link">Privacy Policy | </li>
                    <li class="link">Contact Us</li><br/>
                    
                </ul>
                <span class="devs_space">Designed by <a class="dev" href="http://thedevs.org">TheDevs</a></span>
                
            </div>
                    
            <div class="bottom_right">
                <span class="social_text">Get in Touch...</span><br />

                <ul class="social_buttons">
                    <a href="http://www.facebook.com" target="_blank"><li class="fb_btn"></li></a>
                    <a href="http://www.twitter.com" target="_blank"><li class="tw_btn"></li></a>
                    <a href="http://www.linkedin.com" target="_blank"><li class="li_btn"></li></a>
                    <a href="mailto:info@bookcheeetah.com" target="_blank"><li class="mail_btn"></li></a>
                    <a href="http://www.evernote.com" target="_blank"><li class="evernote_btn"></li></a>
                    <a href="http://www.plus.google.com" target="_blank"><li class="gplus_btn"></li></a>
                </ul>
            </div>
        </div>
    </div>
    </body>
</html>
