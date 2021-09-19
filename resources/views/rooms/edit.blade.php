@extends('layouts.app')
@section('title') {{trans('main.'.$basicRoute)}}@endsection
@section('header')@endsection

@section('content')

  <!-- BEGIN: Content-->
      <div class="app-content content">
         <div class="content-overlay"></div>
         <div class="content-wrapper">
            <div class="content-header row">
               <div class="content-header-left col-12 mb-2 mt-1">
                  <div class="breadcrumbs-top">
                     <h5 class="content-header-title float-left pr-1 mb-0">Form Validation</h5>
                     <div class="breadcrumb-wrapper d-none d-sm-block">
                        <ol class="breadcrumb p-0 mb-0 pl-1">
                           <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                           </li>
                           <li class="breadcrumb-item"><a href="#">Forms</a>
                           </li>
                           <li class="breadcrumb-item active">Form Validation
                           </li>
                        </ol>
                     </div>
                  </div>
               </div>
            </div>
           

             {!! Form::model($resource,['method'=>'put','route'=>[$basicRoute.'.update',$resource->id],'files'=>'true','class'=>'form m-form m-form--fit m-form--label-align-right validate-in-submit m-form--state'])!!}
        @include($basicViewFolder.'._form')

        <div class="m-portlet__foot m-portlet__foot--fit m-portlet__no-border">
            <div class="m-form__actions m-form__actions text-center ">
                <button type="submit" class="btn btn-success">{{trans('main.save')}}</button>
                <a href="{!! route($basicRoute.'.index') !!}" class="btn btn-secondary">
                    {{trans('main.cancel')}}
                </a>
            </div>
        </div>

        {!!Form::close()!!}
         </div>
      </div>
      <!-- END: Content-->
@endsection



