@extends('layouts.app')
@section('content')
 <div class="app-content content">
         <div class="content-overlay"></div>
         <div class="content-wrapper">
            <div class="content-header row">
               <div class="content-header-left col-12 mb-2 mt-1">
                  <div class="breadcrumbs-top">
                     <h5 class="content-header-title float-left pr-1 mb-0"><a href="{{route('branches.index')}}">{{trans('main.branch')}}</a></h5>
                     <div class="breadcrumb-wrapper d-none d-sm-block">
                        <ol class="breadcrumb p-0 mb-0 pl-1">
                          
                           <li class="breadcrumb-item">
                              {{trans('main.create')}}
                           </li>
                          
                        </ol>
                     </div>
                  </div>
               </div>
            </div>
            <div class="content-body">
               <!-- Simple Validation start -->
               <section class="simple-validation">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="card">
                           <div class="card-header">
                              <h4 class="card-title"> {{trans('main.create_branch')}}</h4>
                           </div>


                           <div class="card-body">
                              <form   action="{{route('branches.update',$resource->id)}}" method="post">
                              {{csrf_field()}}
                                 <div class="form-group">
                                    <label class="form-label" for="name">{{trans('main.branch_name')}}</label>
                                    <input
                                       type="text"
                                       name="name"
                                       class="form-control"
                                       id="name"
                                      
                                       placeholder="{{trans('main.branch_name')}}"
                                       />
                                        <span class="text-danger error-text name_err"></span>
                                 </div>

                                  <div class="form-group">
                                    <label class="form-label" for="address">{{trans('main.address')}}</label>
                                    <input
                                       type="text"
                                       name="address"
                                       class="form-control"
                                       id="address"
                                      
                                       placeholder="{{trans('main.address')}}"
                                       />
                                 </div>

                                  <div class="form-group">
                                    <label class="form-label" for="lat">{{trans('main.lat')}}</label>
                                    <input
                                       type="text"
                                       name="lat"
                                       class="form-control"
                                       id="lat"
                                      
                                       placeholder="{{trans('main.lat')}}"
                                       />
                                 </div>

                                  <div class="form-group">
                                    <label class="form-label" for="long">{{trans('main.long')}}</label>
                                    <input
                                       type="text"
                                       name="long"
                                       class="form-control"
                                       id="long"
                                      
                                       placeholder="{{trans('main.long')}}"
                                       />
                                 </div>

                                  <div class="form-group">
                                    <label class="form-label" for="phone">{{trans('main.phone')}}</label>
                                    <input
                                       type="text"
                                       name="phone"
                                       class="form-control"
                                       id="phone"
                                      
                                       placeholder="{{trans('main.long')}}"
                                       />
                                 </div>
                                
                               
                                 <div class="form-group">
                                    <label class="d-block">{{trans('main.activate')}}</label>
                                    <div class="custom-control custom-radio my-50">
                                       <input type="radio" id="active" name="active" class="custom-control-input" value="1" />
                                       <label class="custom-control-label" for="active">{{trans('main.active')}}</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                       <input type="radio" id="not_active" name="active" class="custom-control-input" value="0" />
                                       <label class="custom-control-label" for="not_active">{{trans('main.not_active')}}</label>
                                    </div>
                                 </div>
                                
                               
                                 <div class="row">
                                    <div class="col-12 ">
                                       <button type="submit" class="btn btn-primary mr-1 btn-submit" >{{trans('main.submit')}}</button>
                                      
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!-- Input Validation end -->
            </div>
         </div>
      </div>
      <!-- END: Content-->
@endsection
