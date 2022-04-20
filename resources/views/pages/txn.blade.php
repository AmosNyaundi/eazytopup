@extends('navigation.master')

@section('transactions','active')
@section('all','active')

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
                                <h4 class="card-title">Purchase Transactions </h4>
                            </div>

                        </div>
                        <div class="iq-card-body">
                            <div class="table-responsive">
                                <table class="table mb-0  display table table-responsive-sm table-bordered table-sm" id="dataTable">
                                    <thead>
                                    <tr>
                                        <th scope="col">MpesaReceipt</th>
                                        <th scope="col">Msisdn</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Receiver</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">TransId</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($table as $key => $data)
                                            <tr>
                                                <td>{{$data->mpesaReceipt}}</td>
                                                <td>{{$data->PhoneNumber}}</td>
                                                <td>{{number_format($data->amount)}}</td>
                                                <td>{{$data->msisdn}}</td>
                                                @if($data->astatus == 200)
                                                    <td>
                                                        <div class="badge badge-pill badge-info">Success</div>
                                                    </td>
                                                    @elseif ($data->astatus != 200)
                                                    <td>
                                                    <div class="badge badge-pill badge-warning">Failed</div>
                                                    </td>
                                                    @endif
                                                {{-- <td>{{ $data->astatus}}</td> --}}
                                                <td>{{$data->transId}}</td>
                                                <td>{{$data->created_at}}</td>

                                                    @if($data->astatus == 200)
                                                    <td>
                                                        <div class="badge badge-pill badge-success">Ok</div>
                                                    </td>
                                                    @elseif ($data->astatus != 200)
                                                    <td>
                                                    <a class="badge badge-pill badge-danger" href="{{ route('txn')}}" role="button">Retry </a>
                                                    </td>
                                                    @endif

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
