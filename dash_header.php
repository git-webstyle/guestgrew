<!doctype html>
<html>
    <head>
        <title>Guest Grew</title>
        <link href="css/dashboard.css" type="text/css" rel="stylesheet">
        <link href="css/style.css" type="text/css" rel="stylesheet">
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link href="css/font-awesome-4.2.0/css/font-awesome.min.css"  rel="stylesheet">
        <!-- bxSlider CSS file -->
        <link href="plugins/jquery.bxslider/jquery.bxslider.css" rel="stylesheet" />
        <script src="plugins/chart/Chart.js"></script>
        <!-- Add mousewheel plugin (this is optional) -->
        <script src="js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="plugins/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

        <!-- Add fancyBox -->
        <link rel="stylesheet" href="plugins/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
        <script type="text/javascript" src="plugins/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
        <!-- Optionally add helpers - button, thumbnail and/or media -->
        <link rel="stylesheet" href="plugins//fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
        <script type="text/javascript" src="plugins//fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
        <script type="text/javascript" src="plugins//fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
        <script>
          $(document).ready(function() {
            $(".various").fancybox({
                maxWidth  : 800,
                maxHeight : 600,
                fitToView : false,
                width   : '80%',
                height    : '80%',
                autoSize  : false,
                closeClick  : false,
                openEffect  : 'none',
                closeEffect : 'none',
                padding: 2,
                helpers : {
                      media: {
                          youtube : {
                              params : {
                                  autoplay : 1,
                                  autohide: 1
                              }
                          }
                      }
                  }
              });
        });
        </script>
    </head>
    <body>
        <header>
            <div class="container">
                <!-- Static navbar -->
                <div class="navbar">
                    <div class="navbar-header">

                        <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target="" data-canvas="body">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="#" class="header_account_mobile mobile_version"><img src="images/account.png"></a>
                        <a class="navbar-brand" href="#">Guest Grew</a>
                        <form class="navbar-right serach_mobile_form" role="search">
                            <div class="search_mobile">
                                <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                                <input type="text" class="form-control" placeholder="Search">  
                            </div>
                        </form>
                        <button type="button" class="btn_mobile_search btn"><i class="fa fa-search"></i></button>
                    </div>
                    <div class="">
                        <ul class="nav navbar-nav mobile_version_hidden" >
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle header_link" data-toggle="dropdown">Explore <i class="fa fa-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="navbar-form navbar-left  mobile_version_hidden" role="search">
                            <div class="search">
                                <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                                <input type="text" class="form-control" placeholder="Search">                                   
                            </div>
                        </form>
                        <ul class="nav navbar-nav navbar-right">
                            <li class=" mobile_version_hidden"><a href="#" class="header_account "><img src="images/user_loged.png"><i>Hello</i>, <span>Mr. Robert Norton</span></a></li>                                
                            <li class="mobile_version_hidden"><a href="#" class="log_out ">Log Out</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                    <div class="overlay_menu_mobile"></div>
                </div>
            </div>
        </header>