@extends('navigation.master')

@section('agents','active')
@section('agents','active')

@section('content')
    <!-- Page Content  -->

    <div id="content-page" class="content-page">
        <div class="container-fluid">

            @if(session()->get('message') != '')
                <div class="alert text-white bg-{{ session()->get('status') }}" role="alert">
                    <div class="iq-alert-text">
                        <p>{{ session()->get('message') }}</p>
                    </div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="ri-close-line"></i>
                    </button>
                </div>
            @endif

            <div class="row">

                <div class="col-sm-12">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title"> M-PESA Transactions </h4>
                            </div>

                        </div>
                        <div class="iq-card-body">
                            <div class="table-responsive">
                                <table class="table mb-0  display table table-responsive-sm table-bordered table-sm" id="dataTable">
                                    <thead>
                                    <tr>
                                        <th scope="col">MerchantID</th>
                                        <th scope="col">CheckoutID</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Result</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">MpesaReceipt</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($table as $key => $data)
                                        <tr>
                                            <td>{{$data->MerchantRequestID}}</td>
                                            <td>{{$data->CheckoutRequestID}}</td>
                                            <td>
                                                @if($data->ResultCode == '0')
                                                <div class="badge badge-pill badge-success">Success</div>
<<<<<<< HEAD
                                                @elseif($data->ResultCode != '0')
=======
                                                @elseif ($data->ResultCode !='0')
>>>>>>> 98562813e27fc9ce56d873d4e4c764263408165d
                                                <div class="badge badge-pill badge-danger">Failed</div>
                                                @endif

                                            </td>
                                            {{-- <td>{{$data->ResponseDescription}}</td> --}}
                                            <td>{{$data->ResultDesc}}</td>
                                            <td>{{ number_format($data->Amount)}}</td>
                                            <td>{{$data->MpesaReceiptNumber}}</td>
                                            <td>{{$data->PhoneNumber}}</td>
                                            <td>{{$data->created_at}}</td>


                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



@endsection
