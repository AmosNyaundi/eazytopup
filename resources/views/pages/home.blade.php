@extends('navigation.master')

@section('home','active')

@section('content')
    <!-- Page Content  -->
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-8">

                    <div class="iq-card iq-card-block iq-card-stretch">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Monthly sales trend </h4>
                          </div>
                          <div class="iq-card-header-toolbar d-flex align-items-center">
                             <div class="custom-control custom-switch custom-switch-text custom-control-inline">
                                <div class="custom-switch-inner">
                                   <input type="checkbox" class="custom-control-input" id="switch-title" checked="">
                                   </label>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div class="iq-card-body rounded">
                          <div class="d-flex justify-content-around">
                             <div class="price-week-box mr-5">
                                <span>This Week</span>
                                <h3>KES <span class="counter">{{ number_format($week1) }}</span> <i class="ri-funds-line text-success font-size-18"></i></h3>
                             </div>
                             <div class="price-week-box">
                                <span>Last Week</span>
                                <h3>KES <span class="counter">{{ number_format($week2) }}</span><i class="ri-funds-line text-danger font-size-18"></i></h3>
                             </div>
                          </div>
                       </div>
                       <div>
                        {!! $chart->container() !!}
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-4 d-flex flex-wrap p-0">
                    <div class="col-md-6">
                       <div class="iq-card iq-card-block iq-card-stretch iq-card-height rounded">
                          <div class="iq-card-body">
                             <div class="row">
                                <div class="col-lg-12 mb-2 d-flex justify-content-between">
                                   <div class="icon iq-icon-box rounded bg-primary rounded shadow" data-wow-delay="0.2s">
                                      <i class="las la-users"></i>
                                   </div>
                                </div>
                                <div class="col-lg-12 mt-3">
                                   <h6 class="card-title text-uppercase text-secondary mb-0">Customer</h6>
                                   <span class="h2 text-dark mb-0 counter d-inline-block w-100">60,586</span>
                                </div>
                             </div>
                             <p class="mb-0 text-muted mt-3">
                                <span class="badge badge-primary mr-2"><i class="ri-arrow-up-fill"></i> 3.48%</span>
                             </p>
                          </div>
                       </div>
                    </div>
                    <div class="col-md-6">
                       <div class="iq-card iq-card-block iq-card-stretch iq-card-height rounded">
                          <div class="iq-card-body">
                             <div class="row">
                                <div class="col-lg-12 mb-2 d-flex justify-content-between">
                                   <div class="icon iq-icon-box rounded bg-warning rounded shadow" data-wow-delay="0.2s">
                                      <i class="las la-balance-scale"></i>
                                   </div>
                                </div>
                                <div class="col-lg-12 mt-3">
                                   <h6 class="card-title text-uppercase text-secondary mb-0">Sales</h6>
                                   <span class="h2 text-dark mb-0 counter d-inline-block w-100">80,586</span>
                                </div>
                             </div>
                             <p class="mb-0 text-muted mt-3">
                                <span class="badge badge-warning mr-2"><i class="ri-arrow-up-fill"></i> 3.48%</span>
                             </p>
                          </div>
                       </div>
                    </div>
                    <div class="col-md-6">
                       <div class="iq-card iq-card-block iq-card-stretch iq-card-height rounded">
                          <div class="iq-card-body">
                             <div class="row">
                                <div class="col-lg-12 mb-2 d-flex justify-content-between">
                                   <div class="icon iq-icon-box rounded bg-info rounded shadow" data-wow-delay="0.2s">
                                      <i class="las la-plus-circle"></i>
                                   </div>
                                </div>
                                <div class="col-lg-12 mt-3">
                                   <h6 class="card-title text-uppercase text-secondary mb-0">Profit</h6>
                                   <span class="h2 text-dark mb-0 d-inline-block w-100"><span class="counter">80</span>%</span>
                                </div>
                             </div>
                             <p class="mb-0 text-muted mt-3">
                                <span class="badge badge-info mr-2"><i class="ri-arrow-up-fill"></i> 3.48%</span>
                             </p>
                          </div>
                       </div>
                    </div>
                    <div class="col-md-6">
                       <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                          <div class="iq-card-body">
                             <div class="row">
                                <div class="col-lg-12 mb-2 d-flex justify-content-between">
                                   <div class="icon iq-icon-box rounded bg-danger rounded shadow" data-wow-delay="0.2s">
                                      <i class="las la-minus-circle"></i>
                                   </div>
                                </div>
                                <div class="col-lg-12 mt-3">
                                   <h6 class="card-title text-uppercase text-secondary mb-0">Loss</h6>
                                   <span class="h2 text-dark mb-0 d-inline-block w-100"><span class="counter">15</span>%</span>
                                </div>
                             </div>
                             <p class="mb-0 text-muted mt-3">
                                <span class="badge badge-danger mr-2"><i class="ri-arrow-up-fill"></i> 3.48%</span>
                             </p>
                          </div>
                       </div>
                    </div>
                 </div>


                {{-- <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body iq-box-relative">
                            <div class="iq-box-absolute icon iq-icon-box rounded-circle iq-bg-primary">
                                <i class="las la-users"></i>
                            </div>
                            <p class="text-secondary">Total Transactions</p>
                            <div class="d-flex align-items-center justify-content-between">

                                <h4><b> {{ number_format($total_trans) }} </b></h4>

                                <span class="text-danger">
                                  <a href="airtime"> View
                                      <i class="ri-arrow-right-fill"></i>
                                  </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body iq-box-relative">
                            <div class="iq-box-absolute icon iq-icon-box rounded-circle iq-bg-danger">
                                <i class="las la-user"></i>
                            </div>
                            <p class="text-secondary">Total Airtime Purchased</p>
                            <div class="d-flex align-items-center justify-content-between">

                                <h4><b>KES {{ number_format($total_air) }}</b></h4>
                                <span ><b><a href="mpesa" class="text-danger"> View <i class="ri-arrow-right-fill"></i></a></b></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body iq-box-relative">
                            <div class="iq-box-absolute icon iq-icon-box rounded-circle iq-bg-success">
                                <i class="ri-database-2-line"></i>
                            </div>
                            <p class="text-secondary">Today Transactions</p>
                            <div class="d-flex align-items-center justify-content-between">

                                <h4><b>{{ number_format($trans) }}</b></h4>
                                <span ><b><a href="airtime" class="text-success"> View <i class="ri-arrow-right-fill"></i></a></b></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body iq-box-relative">
                            <div class="iq-box-absolute icon iq-icon-box rounded-circle iq-bg-info">
                                <i class="las la-coins"></i>
                            </div>
                            <p class="text-secondary">Today Airtime</p>
                            <div class="d-flex align-items-center justify-content-between">

                                <h4><b>KES {{ number_format($air) }}</b></h4>
                                <span ><b><a href="mpesa" class="text-info"> View <i class="ri-arrow-right-fill"></i></a></b></span>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="col-lg-12">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title"> Recent Purchase </h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <div class="table-responsive">
                               <table class="table mb-0 table-borderless">
                                  <thead>
                                     <tr>

                                        <th scope="col">Agent ID</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">TransID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Date</th>
                                     </tr>
                                  </thead>
                                  <tbody>
                                     <tr>
                                        <td>
                                            <div class="badge badge-pill badge-primary">1234</div>
                                        </td>
                                        <td>KES 50</td>
                                        <td>CHAMR41UNYW9X</td>
                                        <td>Amos Ngisa</td>
                                        <td>254707772715</td>
                                        <td>2022-04-19 14:09:23</td>
                                     </tr>

                                  </tbody>
                               </table>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {!! $chart->script() !!}

@endsection
