<!DOCTYPE html>
<html {{(app()->getLocale() == 'ar') ? ' lang="ar" dir="rtl" ' :  ' lang="en" dir="ltr" ' }}>
<!-- begin::Head -->

<head>
      
    <meta charset="utf-8" />
    <title> </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Blank inner page examples">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <!--begin::Web font -->
<!-- old style

    <link href="{!!asset('dashboard')!!}/assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet"
        type="text/css" />
-->
    @include('layouts.styles')

    @stack('header')
    
</head>
<!-- end::Head -->
<!-- begin::Body -->
 <body class="vertical-layout vertical-menu-modern 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <div id="loader" class="loader loader-bouncing is-active"></div>
    <!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">
        @include('layouts._navbar')
        <!-- END: Header -->
        <!-- begin::Body -->
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

            <!-- BEGIN: Left Aside -->
            @include('layouts._sidebar')
            <!-- END: Left Aside -->
            <div class="m-grid__item m-grid__item--fluid m-wrapper">
                <!-- BEGIN: Subheader -->
                <div class="m-subheader ">
                    <div class="d-flex align-items-center">
                        <div class="mr-auto">
                            
                            @if(!Route::is('home'))
                            <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                                <li class="m-nav__item m-nav__item--home">
                                    <a href="{!!url('/')!!}" class="m-nav__link m-nav__link--icon">
                                        {{trans('main.home')}}
                                    </a>
                                </li>
                                @yield('breadcrumb')
                              
                            </ul>
                            @else 
     
                            @endif
                          
                            <!--<h3 class="m-subheader__title m-subheader__title--separator ">@yield('title')</h3>-->
                        </div>
                     

                      
                    </div>
                    <div class="alert_top">
                        @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            </button>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>
                </div>
                <!-- END: Subheader -->
                <div class="m-content">

                    @yield('content')
                    
                </div>
            </div>

            @include('layouts.chat')

        </div>
        <!-- end:: Body -->

        <!-- begin::Footer -->
        @include('layouts._footer')
        <!-- end::Footer -->
    </div>
    <!-- end:: Page -->
    <!-- Modal Header -->
    <div class="modal" id="myModalNodelted">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"> {{trans('main.no_delted')}}</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body" id="message_no_deleted">
                 
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">{{trans('main.close')}}</button>
                </div>

            </div>
        </div>
    </div>

    <!-- begin::Quick Nav -->

    @include('layouts.scripts')

    <!-- toaster messages  -->

    @toastr_render


    @yield('scripts')

  

</body>
<!-- end::Body -->

</html>
