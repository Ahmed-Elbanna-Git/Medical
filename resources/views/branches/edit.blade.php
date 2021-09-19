@extends('layouts.app')
@section('content')
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
            <div class="content-body">
               <!-- Simple Validation start -->
               <section class="simple-validation">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="card">
                           <div class="card-header">
                              <h4 class="card-title">jQuery Validation</h4>
                           </div>
                           <div class="card-body">
                              <form id="jquery-val-form" method="post">
                                 <div class="form-group">
                                    <label class="form-label" for="basic-default-name">Name</label>
                                    <input
                                       type="text"
                                       class="form-control"
                                       id="basic-default-name"
                                       name="basic-default-name"
                                       placeholder="John Doe"
                                       />
                                 </div>
                                 <div class="form-group">
                                    <label class="form-label" for="basic-default-email">Email</label>
                                    <input
                                       type="text"
                                       id="basic-default-email"
                                       name="basic-default-email"
                                       class="form-control"
                                       placeholder="john.doe@email.com"
                                       />
                                 </div>
                                 <div class="form-group">
                                    <label class="form-label" for="basic-default-password">Password</label>
                                    <input
                                       type="password"
                                       id="basic-default-password"
                                       name="basic-default-password"
                                       class="form-control"
                                       placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                       />
                                 </div>
                                 <div class="form-group">
                                    <label class="form-label" for="confirm-password">Confirm Password</label>
                                    <input
                                       type="password"
                                       id="confirm-password"
                                       name="confirm-password"
                                       class="form-control"
                                       placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                       />
                                 </div>
                                 <div class="form-group">
                                    <label for="select-country">Country</label>
                                    <select class="form-control select2" id="select-country" name="select-country">
                                       <option value="">Select Country</option>
                                       <option value="usa">USA</option>
                                       <option value="uk">UK</option>
                                       <option value="france">France</option>
                                       <option value="australia">Australia</option>
                                       <option value="spain">Spain</option>
                                    </select>
                                 </div>
                                 <div class="form-group">
                                    <label>Profile pic</label>
                                    <div class="custom-file">
                                       <input type="file" class="custom-file-input" id="customFile" name="customFile" />
                                       <label class="custom-file-label" for="customFile">Choose profile pic</label>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="d-block">Gender</label>
                                    <div class="custom-control custom-radio my-50">
                                       <input type="radio" id="validationRadiojq1" name="validationRadiojq" class="custom-control-input" />
                                       <label class="custom-control-label" for="validationRadiojq1">Male</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                       <input type="radio" id="validationRadiojq2" name="validationRadiojq" class="custom-control-input" />
                                       <label class="custom-control-label" for="validationRadiojq2">Female</label>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="d-block" for="validationBio">Bio</label>
                                    <textarea class="form-control" id="validationBio" name="validationBiojq" rows="3"></textarea>
                                 </div>
                                 <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                       <input type="checkbox" class="custom-control-input" id="validationCheck" name="validationCheck" />
                                       <label class="custom-control-label" for="validationCheck">Agree to our terms and conditions</label>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-12 ">
                                       <button type="submit" class="btn btn-primary mr-1" name="submit" value="Submit">Submit</button>
                                       <button type="" class="btn btn-light-secondary">Cancel</button>
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