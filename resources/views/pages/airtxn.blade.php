@extends('navigation.master')

@section('transactions','active')
@section('airtime','active')

@section('content')

    <!-- Page Content -->
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
                                <h4 class="card-title"> Airtime Transactions  </h4>
                            </div>
                            {{-- <div class="iq-card-header-toolbar d-flex align-items-center">
                                <button class="btn btn-primary" id="uy">Buy airtime</button>
                            </div> --}}
                        </div>
                        <div class="iq-card-body">
                            <div class="table-responsive">

                                <table class="table mb-0  display table table-responsive-sm table-bordered table-sm" id="dataTable">
                                    <thead>
                                    <tr>
                                        <th scope="col">TransactionId</th>
                                        <th scope="col">ResponseId</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Date</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($table as $data)
                                        <tr>
                                            <td>{{$data->transId}}</td>
                                            <td>{{ $data->responseId }}</td>
                                            <td>{{$data->responseDesc}}</td>
                                            <td>
                                                @if($data->responseStatus == '200')
                                                <div class="badge badge-pill badge-success">Success</div>
                                                @elseif ($data->responseStatus !='200')
                                                <div class="badge badge-pill badge-danger">Failed</div>
                                                @endif
                                            </td>
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
