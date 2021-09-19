@extends('layouts.app')
@section('title') {{trans('main.'.$basicRoute)}}@endsection
@section('header')@endsection

@if(Auth()->user()->is_super_admin || Auth()->user()->can("users index"))
@section('breadcrumb')
@php($breadcrumbs=[trans('main.'.$basicRoute)=>route($basicRoute.'.index'),$resource->name =>route('profile',['id'
=> $resource->id])])
@includeWhen(isset($breadcrumbs),'layouts._breadcrumb', ['breadcrumbs' =>$breadcrumbs ])
@endsection
@endif

@section('content')
<div class="row">
    <div class="col-xl-3 col-lg-4">
        <div class="m-portlet m-portlet--full-height  ">
            <div class="m-portlet__body">
                <div class="m-card-profile">
                    <div class="m-card-profile__title m--hide">
                        <!-- Your Profile -->
                    </div>
                    <div class="m-card-profile__pic">
                        <!--<div class="m-card-profile__pic-wrapper" data-toggle="modal" data-target="#myModal">-->
                        <div class="m-card-profile__pic-wrapper" >
                            <img src="{!!asset($resource->image)!!}" alt="">
                        </div>
                    </div>
                    <div class="m-card-profile__details">
                        <span class="m-card-profile__name">{{$resource->name}}</span>
                        <a href="" class="m-card-profile__email m-link">{{$resource->email}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-9 col-lg-8">
        <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
            <div class="m-portlet__head">
                <div class="m-portlet__head-tools">
                    <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
                        <li class="nav-item m-tabs__item">
                            <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_user_profile_tab_1"
                                role="tab">
                                <i class="flaticon-share m--hide"></i>

                                {{trans('main.update_Profile')}}
                            </a>
                        </li>
           
                    </ul>
                </div>
            </div>


            <div class="m-portlet__body ">
                <div class="tab-content">
                    <div class="tab-pane active " id="m_user_profile_tab_1">
                        {!!
                        Form::model($resource,['method'=>'put','route'=>['users.update_profile',$resource->id],'files'=>'true','class'=>'m-form
                        m-form--fit m-form--label-align-right'])!!}

                        <div class="m-portlet__body">
                            <!-- <h3 class="m-form__section">{{trans('main.personal_details')}}</h3> -->
                            <div class="form-group m-form__group row">
                                <div class="col-lg-6">
                                    <label for="example-text-input" class="col-form-label">{!! trans('main.name')
                                        !!}</label>
                                    <div class="">
                                        {!! Form::text('name',null,['class'=>'form-control
                                        m-input','id'=>'name','placeholder'=>trans('main.name')])!!}
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label for="example-text-input" class="col-form-label">{!! trans('main.email')
                                        !!}</label>
                                    <div class="">
                                        {!! Form::text('email',null,['class'=>'form-control
                                        m-input','id'=>'email','placeholder'=>trans('main.email')])!!}
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label for="example-text-input" class="col-form-label">{!! trans('main.password')
                                        !!}</label>
                                    <div class="">
                                        {!! Form::password('password',['class'=>'form-control
                                        m-input','id'=>'password','placeholder'=>trans('main.password')])!!} </div>
                                </div>
                                <div class="col-lg-6">
                                    <label for="example-text-input" class="col-form-label">{!!
                                        trans('main.password_confirmation') !!}</label>
                                    <div class="">
                                        {!! Form::password('password_confirmation',['class'=>'form-control
                                        m-input','id'=>'password_confirmation','placeholder'=>trans('main.password_confirmation')])!!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__foot m-portlet__foot--fit m-portlet__no-border">
                            <div class="m-form__actions m-form__actions text-center ">
                                <button type="submit" class="btn btn-success">
                                    {{trans('main.save')}}
                                </button>

                            </div>
                        </div>
                           
                        

                        {!!Form::close()!!}
                    </div>


       

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">

        {!!
        Form::model($resource,['method'=>'PUT','route'=>['users.update_photo',Auth()->user()->id],'files'=>'true','class'=>'m-form
        m-form--fit m-form--label-align-right'])!!}
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{!! trans('main.change_image') !!}</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="form-control-label" for="imageInput"> {!! trans('main.image') !!} </label>


                    <div class="custom-file">
                        <input type="file" class="form-control m-input custom-file-input" name="image" id="imageInput">
                        <label class="custom-file-label" for="customFile">أختر الملف</label>
                    </div>

                </div>
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions--solid">
                    <button type="submit" class="btn btn-primary">{{trans('main.save')}}</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">{{trans('main.cancel')}}</button>
                </div>

            </div>
        </div>
        {!!Form::close()!!}
    </div>
</div>

@endsection

@section('scripts')
<script>
    function showmodelchange(status, lead_id) {

        $("#lead_id").val(lead_id);
        $("#lead_status_id").val(status);
        $("#changestatuslead").modal();
        // alert(status);
    }

    function changestatus() {

        var lead_id = $("#lead_id").val();
        var lead_status_id = $("#lead_status_id").val();
        var route_url = "{!!url('leads/changestatus')!!}" + '/' + lead_id + '/' + lead_status_id
        $.ajax({
            url: route_url,
            type: 'get', // replaced from put
            success: function (response) {

                $("#changestatus" + lead_id).text(response.data.status);
                $("#changestatuslead").modal("hide");
                if (response.status == 1) {
                    toastr['success'](response.message);
                }
            }
        });

    }

</script>
@endsection
