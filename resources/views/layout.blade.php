<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>

        <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
        <link href="css/default.css" rel="stylesheet" />
        <link href="css/fonts.css" rel="stylesheet" />
    </head>
    <body>
        <div id="header-wrapper">
            <div id="header" class="container">
                <div id="logo">
                    <h1><a href="/">SimpleWork</a></h1>
                </div>
                <div id="menu">
                    <ul>
                        <li class="{{ Request::path() === '/' ? 'current_page_item' : '' }}"><a href="/" accesskey="1" title="">Homepage</a></li>
                        <li class="{{ Request::path() === 'clients' ? 'current_page_item' : '' }}"><a href="#" accesskey="2" title="">Our Clients</a></li>
                        <li class="{{ Request::path() === 'about' ? 'current_page_item' : '' }}"><a href="#" accesskey="3" title="">About Us</a></li>
                        <li class="{{ Request::path() === 'carear' ? 'current_page_item' : '' }}"><a href="#" accesskey="4" title="">Careers</a></li>
                        <li class="{{ Request::is('contact') ? 'current_page_item' : '' }}"><a href="/contact" accesskey="5" title="">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            @yield('header')
        </div>
        @yield('content')
    </body>
</html>
