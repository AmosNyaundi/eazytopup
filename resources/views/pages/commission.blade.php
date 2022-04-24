@extends('navigation.master')

@section('agents','active')
@section('commission','active')

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
                                <h4 class="card-title"> Monthly Commission </h4>
                            </div>

                        </div>
                        <div class="iq-card-body">
                            <div class="table-responsive">
                                <table class="table mb-0  display table table-responsive-sm table-bordered table-sm" id="dataTable">
                                    <thead>
                                    <tr>
                                        <th scope="col">Agent ID</th>
                                        <th scope="col">Agent Name</th>
                                        <th scope="col">Transactions</th>
                                        <th scope="col">Airtime Purchased</th>
                                        <th scope="col">Commission (4%)</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($commission as $key => $data)
                                        <tr>
                                            <td style="text-decoration: underline;"><a href="{{ route('agent.show',$data->uniqueId) }}">{{$data->uniqueId}}</a></td>
                                            <td>{{$data->name}}</td>
                                            <td>{{$data->cnt}}</td>
                                            <td>{{number_format($data->total)}}</td>
                                            <td>{{number_format($data->total * 0.04)}}</td>

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
