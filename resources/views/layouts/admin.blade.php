<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">



<head>

    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords"
        content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Medical instrument</title>
    <!-- Favicon icon -->
    <link rel="icon" href="https://codedthemes.com/demos/admin-templates/guru-able/files/assets/images/favicon.ico"
        type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css"
        href="{{asset('contents/admin')}}/files/bower_components/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css"
        href="{{asset('contents/admin')}}/files/assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{asset('contents/admin')}}/files/assets/icon/icofont/css/icofont.css">
    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css"
        href="{{asset('contents/admin')}}/files/assets/pages/menu-search/css/component.css">
    @stack('css')
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('contents/admin')}}/files/assets/css/style.css">
    <link rel="stylesheet" type="text/css"
        href="{{asset('contents/admin')}}/files/assets/css/jquery.mCustomScrollbar.css">
</head>


<body>
    <!-- Pre-loader start -->
    {{-- <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">

        <div class="pcoded-container navbar-wrapper">

            @include('layouts.partials.topbar')

            <!-- Sidebar chat start -->


            {{-- @include('layouts.partials.sidebar') --}}

            <!-- Sidebar inner chat start-->
            <div class="showChat_inner">
                <div class="media chat-inner-header">
                    <a class="back_chatBox">
                        <i class="icofont icofont-rounded-left"></i> Josephin Doe
                    </a>
                </div>
                <div class="media chat-messages">
                    <a class="media-left photo-table" href="#!">
                        <img class="media-object img-radius img-radius m-t-5"
                            src="{{asset('contents/admin')}}/files/assets/images/avatar-3.jpg"
                            alt="Generic placeholder image">
                    </a>
                    <div class="media-body chat-menu-content">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                </div>
                <div class="media chat-messages">
                    <div class="media-body chat-menu-reply">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                    <div class="media-right photo-table">
                        <a href="#!">
                            <img class="media-object img-radius img-radius m-t-5"
                                src="{{asset('contents/admin')}}/files/assets/images/avatar-4.jpg"
                                alt="Generic placeholder image">
                        </a>
                    </div>
                </div>
                <div class="chat-reply-box p-b-20">
                    <div class="right-icon-control">
                        <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
                        <div class="form-icon">
                            <i class="icofont icofont-paper-plane"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    @include('layouts.partials.sidebar')
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="{{asset('contents/admin')}}/files/bower_components/jquery/js/jquery.min.js">
    </script>
    <script type="text/javascript"
        src="{{asset('contents/admin')}}/files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="{{asset('contents/admin')}}/files/bower_components/popper.js/js/popper.min.js">
    </script>
    <script type="text/javascript"
        src="{{asset('contents/admin')}}/files/bower_components/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript"
        src="{{asset('contents/admin')}}/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{asset('contents/admin')}}/files/bower_components/modernizr/js/modernizr.js">
    </script>
    <!-- am chart -->
    <script src="{{asset('contents/admin')}}/files/assets/pages/widget/amchart/amcharts.min.js"></script>
    <script src="{{asset('contents/admin')}}/files/assets/pages/widget/amchart/serial.min.js"></script>
    <!-- Chart js -->
    <script type="text/javascript" src="{{asset('contents/admin')}}/files/bower_components/chart.js/js/Chart.js">
    </script>
    <!-- Todo js -->
    <script type="text/javascript" src="{{asset('contents/admin')}}/files/assets/pages/todo/todo.js"></script>
    @stack('js')
    <!-- i18next.min.js -->
    <script type="text/javascript" src="{{asset('contents/admin')}}/files/bower_components/i18next/js/i18next.min.js">
    </script>
    <script type="text/javascript"
        src="{{asset('contents/admin')}}/files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js">
    </script>
    <script type="text/javascript"
        src="{{asset('contents/admin')}}/files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js">
    </script>
    <script type="text/javascript"
        src="{{asset('contents/admin')}}/files/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
    <!-- Custom js -->
    <script type="text/javascript"
        src="{{asset('contents/admin')}}/files/assets/pages/dashboard/custom-dashboard.min.js"></script>
    <script type="text/javascript" src="{{asset('contents/admin')}}/files/assets/js/SmoothScroll.js"></script>
    <script src="{{asset('contents/admin')}}/files/assets/pages/data-table/js/data-table-custom.js"></script>
    <script src="{{asset('contents/admin')}}/files/assets/js/pcoded.min.js"></script>
    <script src="{{asset('contents/admin')}}/files/assets/js/demo-12.js"></script>
    <script src="{{asset('contents/admin')}}/files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="{{asset('contents/admin')}}/files/assets/js/script.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    </script>

</body>



</html>
