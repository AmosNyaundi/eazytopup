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
                                        <th scope="col">Names</th>
                                        <th scope="col">Transactions</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Commission</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($agents as $key => $data)
                                        <tr>
                                           <td style="text-decoration: underline;"><a href="{{ route('agent.show',$data->uniqueId) }}">{{$data->uniqueId}}</a></td>
                                            <td>{{$data->name}}</td>
                                            <td>{{$data->phone}}</td>
                                            <td>{{$data->region}}</td>
                                            <td>{{ number_format(1050)}}</td>

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
