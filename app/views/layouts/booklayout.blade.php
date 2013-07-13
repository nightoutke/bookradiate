<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
    @section('title')
        BookCheetah
    @show
</title>
<link href="assets/styles/css/stylesheet.css" rel="stylesheet" type="text/css" />

<!-- <link rel="stylesheet" href="{{ asset('assets/styles/css/main.css')}} "> -->

<link rel="stylesheet" href="{{ asset('assets/styles/css/stylesheet.css')}} ">
</head>

<body>

    <div id="wrapper">

        
        <div id="header">
            <!--<div class="top_bar"></div>
            <div class="lower_bar"></div>
            <div class="top-gradient"></div>-->
            <div class="header-gradient">
                <div class="logo"></div>
                <div class="donate-btn"></div>
                <div class="right_top">
                    <ul class="links_space">
                        <li class="link">How it Works | </li>
                        <li class="link">Forum |  </li>
                        <li class="link">Blog |  </li>
                        <li class="link">Contact Us |  </li>
                        <li class="link">Customer Service</li>
                    </ul>
                    
                    <ul class="second_links_space">
                        <li class="link" style="color:#000;">Hi, Timothy | </li>
                        <li class="link" style="color:#000;">South West College | </li>
                        <li class="link" style="color:#000;">My Books | </li>
                        <li class="link" style="color:#000;">My Account | </li>
                        <li class="link" style="color:#000;">Logout</li>
                    </ul>
                </div>
            </div
        </div>
       

        
        <div id="content">
            <div id="search_space">Search</div>
            <div class="left_side">
                @yield('left-side')
            
            </div>

            <div class="center_content">
                
                @yield('center-content')
            </div>

            <div class="right_content">
                @yield('right-content')

            </div>
            
        </div>
        

        
        <div id="footer">
            <div class="left_bottom">
                <ul class="footer_links_space">
                    <li class="link">How it Works | </li>
                    <li class="link">Terms of Use | </li>
                    <li class="link">Privacy Policy | </li>
                    <li class="link">Contact Us</li><br/>
                    
                </ul>
                <span class="devs_space">Designed by <li class="dev"><a href="http://thedevs.org">TheDevs</a></li></span>
                
            </div>
            
            <div class="right_bottom">
                <div class="social_text">Get in Touch...</div><br />
                <div class="social_buttons">
                    <a href="http://www.facebook.com" target="_blank"><div class="fb_btn"></div></a>
                    <a href="http://www.twitter.com" target="_blank"><div class="tw_btn"></div></a>
                    <a href="http://www.linkedin.com" target="_blank"><div class="li_btn"></div></a>
                    <a href="mail:to" target="_blank"><div class="mail_btn"></div></a>
                    <a href="http://www.evernote.com" target="_blank"><div class="evernote_btn"></div></a>
                    <a href="http://www.plus.google.com" target="_blank"><div class="gplus_btn"></div></a>
                </div>
            </div>
        </div>
        
    
    </div>
</body>
</html>