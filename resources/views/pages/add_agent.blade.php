@extends('navigation.master')

@section('agents','active')
@section('create','active')

@section('content')
    <!-- Page Content  -->

    <div id="content-page" class="content-page">
        <div class="container-fluid">
           <div class="row">
              <div class="col-sm-12 col-lg-12">
                 <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                       <div class="iq-header-title">
                          <h4 class="card-title">Create Agent</h4>
                       </div>
                    </div>
                    <div class="iq-card-body">
                       <div class="row">
                          <div class="col-md-3">
                             <ul id="top-tabbar-vertical" class="p-0">
                                <li class="active" id="personal">
                                   <a href="javascript:void();">
                                   <i class="ri-lock-unlock-line text-primary"></i><span>Personal</span>
                                   </a>
                                </li>
                                <li id="contact">
                                   <a href="javascript:void();">
                                   <i class="ri-user-fill text-danger"></i><span>Contact</span>
                                   </a>
                                </li>
                                <li id="payment">
                                   <a href="javascript:void();">
                                   <i class="ri-check-fill text-warning"></i><span>Payment</span>
                                   </a>
                                </li>
                             </ul>
                          </div>
                          <div class="col-md-9">
                             <form id="form-wizard3" class="text-center form">
                                <!-- fieldsets -->
                                <fieldset>
                                   <div class="form-card text-left">
                                      <div class="row">
                                         <div class="col-12">
                                            <h3 class="mb-4">User Information:</h3>
                                         </div>
                                      </div>
                                      <div class="row">
                                         <div class="col-md-12">
                                            <div class="form-group">
                                               <label for="fname">First Name: *</label>
                                               <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required="required" />
                                            </div>
                                         </div>
                                         <div class="col-md-12">
                                            <div class="form-group">
                                               <label for="lname">Last Name: *</label>
                                               <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" required="required" />
                                            </div>
                                         </div>
                                         <div class="col-md-12">
                                            <div class="form-group">
                                               <label>Gender: *</label>
                                               <div class="form-check">
                                                  <div class="custom-control custom-radio custom-control-inline">
                                                     <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                     <label class="custom-control-label" for="customRadio1"> Male</label>
                                                  </div>
                                                  <div class="custom-control custom-radio custom-control-inline">
                                                     <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                     <label class="custom-control-label" for="customRadio2"> Female</label>
                                                  </div>
                                               </div>
                                            </div>
                                         </div>
                                         <div class="col-md-12">
                                            <div class="form-group">
                                               <label for="dob">Date Of Birth: *</label>
                                               <input type="date" class="form-control" id="dob" name="dob" required="required" />
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                   <button id="submit" type="button" name="next" class="btn btn-primary next action-button float-right" value="Next" >Next</button>
                                </fieldset>
                                <fieldset>
                                   <div class="form-card text-left">
                                      <div class="row">
                                         <div class="col-12">
                                            <h3 class="mb-4">Contact Information:</h3>
                                         </div>
                                      </div>
                                      <div class="row">
                                         <div class="col-md-12">
                                            <div class="form-group">
                                               <label for="email">Email Id: *</label>
                                               <input type="email" class="form-control" id="email" name="email" placeholder="Email Id" />
                                            </div>
                                         </div>
                                         <div class="col-md-12">
                                            <div class="form-group">
                                               <label for="ccno">Contact Number: *</label>
                                               <input type="text" class="form-control" id="ccno" name="ccno" placeholder="Contact Number" />
                                            </div>
                                         </div>
                                         <div class="col-md-12">
                                            <div class="form-group">
                                               <label for="state">Region: *</label>
                                               <input type="text" class="form-control" id="state" name="state" placeholder="Region." />
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                   <button type="button" name="next" class="btn btn-primary next action-button float-right" value="Next" >Next</button>
                                   <button type="button" name="previous" class="btn btn-dark previous action-button-previous float-right mr-3" value="Previous" >Previous</button>
                                </fieldset>

                                <fieldset>
                                   <div class="form-card text-left">
                                      <div class="row">
                                         <div class="col-12">
                                            <h3 class="mb-4 text-left">Payment:</h3>
                                         </div>
                                      </div>
                                      <div class="row">
                                         <div class="col-md-12">
                                            <div class="form-group">
                                               <label for="panno">Bank Name: *</label>
                                               <input type="text" class="form-control" id="panno" name="panno" placeholder="Bank Name" />
                                            </div>
                                         </div>
                                         <div class="col-md-12">
                                            <div class="form-group">
                                               <label for="accno">Account No: *</label>
                                               <input type="number" class="form-control" id="accno" name="accno" placeholder="Account No." />
                                            </div>
                                         </div>
                                         <div class="col-md-12">
                                            <div class="form-group">
                                               <label for="holname">Account Holder Name: *</label>
                                               <input type="text" class="form-control" id="holname" name="accname" placeholder="Account Holder Name." />
                                            </div>
                                         </div>
                                         <div class="col-md-12">
                                            <div class="form-group">
                                               <label for="ifsc">MPESA Number: *</label>
                                               <input type="text" class="form-control" id="ifsc" name="ifsc" placeholder="Mpesa Phone." />
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                   <a class="btn btn-primary action-button float-right" href="" >Submit</a>
                                   <button type="button" name="previous" class="btn btn-dark previous action-button-previous float-right mr-3" value="Previous" >Previous</button>
                                </fieldset>
                             </form>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
    </div>


@endsection
