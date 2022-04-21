@extends('navigation.master')

@section('kredo','active')
@section('nunua','active')

@section('content')
    <!-- Page Content  -->

     <!-- Page Content -->
     <div id="content-page" class="content-page ">
        <div class="container-fluid ">
            <div class="row iq-header-title">

                {{-- <div class="col-sm-12 col-lg-1"></div> --}}
                <div class="col-lg-4">
                    <div class="card iq-mb-3">
                       <div class="card-header">
                        <b>Direct Airtime Purchase</b>
                       </div>
                       <div class="card-body">
                          {{-- <h4 class="card-title">Special title treatment</h4> --}}
                          <p class="card-text">Buy airtime for a customer after a failed transaction. This does not trigger STK push to customer.</p>

                          @if(session()->get('message') != '')

                          <div class="text-{{ session()->get('status') }}">

                              {{ session()->get('message') }}

                          </div>
                          @endif

                          <form class="form-horizontal" method="POST" action="{{ route('buy')}}">
                            @csrf
                           <div class="form-group">
                             <label for="furl"><b>MPESA Code:</b></label>
                             <input type="text" class="form-control" name="Transaction Code" id="furl" placeholder="MSISDN">

                             <div class="text-danger">
                                 @error('phone')
                                 {{ $message }}
                                 @enderror
                             </div>
                          </div>

                          <div class="form-group">
                             <label for="furl"><b>Phone Number:</b></label>
                             <input type="number" class="form-control" name="Phone Number"  placeholder="Amount">

                             <div class="text-danger">
                                 @error('amount')
                                 {{ $message }}
                                 @enderror
                             </div>
                          </div>


                           <div class="form-group">
                              <button type="submit" class="btn btn-primary">Submit</button>
                              <button type="reset" class="btn iq-bg-danger">Reset</button>
                           </div>
                        </form>
                       </div>
                    </div>
                 </div>

                 <div class="col-lg-4">
                    <div class="card iq-mb-3">
                       <div class="card-header">
                        <b>Customer To Pay Airtime Purchase (STK Push)</b>
                       </div>
                       <div class="card-body">
                          <p class="card-text">Initiate airtime purchase through STK push to customer.</p>

                          @if(session()->get('msg') != '')

                          <div class="text-{{ session()->get('state') }}">

                              {{ session()->get('msg') }}

                          </div>
                          @endif

                          <form class="form-horizontal" method="POST" action="{{ route('stk')}}">
                            @csrf
                           <div class="form-group">
                             <label for="furl"><b>Phone Number:</b></label>
                             <input type="text" class="form-control" name="number" id="furl" placeholder="MSISDN">

                             <div class="text-danger">
                                 @error('number')
                                 {{ $message }}
                                 @enderror
                             </div>
                          </div>

                          <div class="form-group">
                             <label for="furl"><b>Amount:</b></label>
                             <input type="number" class="form-control" name="pesa"  placeholder="Amount">

                             <div class="text-danger">
                                 @error('pesa')
                                 {{ $message }}
                                 @enderror
                             </div>
                          </div>


                           <div class="form-group">
                              <button type="submit" class="btn btn-primary">Submit</button>
                              <button type="reset" class="btn iq-bg-danger">Reset</button>
                           </div>
                        </form>
                       </div>
                    </div>
                 </div>

        </div>
    </div>



@endsection
