@extends('navigation.master')

@section('agents','active')
@section('view','active')

@section('content')
    <!-- Page Content  -->

    <div id="content-page" class="content-page">
        <div class="container-fluid">

            {{-- @if(session()->get('success') != '')
                <div class="alert text-white bg-primary" role="alert">
                    <div class="iq-alert-text">
                        <p>{{ session()->get($message) }}</p>
                    </div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="ri-close-line"></i>
                    </button>
                </div>
            @endif --}}

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <div class="row">

                <div class="col-sm-12">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title"> Sales Agents </h4>
                            </div>

                        </div>
                        <div class="iq-card-body">
                            <div class="table-responsive">
                                <table class="table mb-0  display table table-responsive-sm table-bordered table-sm" id="dataTable">
                                    <thead>
                                    <tr>
                                        <th scope="col">Agent ID</th>
                                        <th scope="col">Names</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Region</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Clients</th>
                                        {{-- <th scope="col">Transactions</th> --}}
                                        <th scope="col">Date Created</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($agents as $key => $data)
                                        <tr>
                                           <td style="text-decoration: underline;"><a href="{{ route('agent.show',$data->uniqueId) }}">{{$data->uniqueId}}</a></td>
                                            <td>{{$data->name}}</td>
                                            <td>{{$data->phone}}</td>
                                            <td>{{$data->region}}</td>
                                            <td>
                                                @if($data->status == '0')
                                                <div class="badge badge-pill badge-primary">Active</div>
                                                @elseif ($data->status !='0')
                                                <div class="badge badge-pill badge-danger">Disabled</div>
                                                @endif

                                            </td>
                                            <td>{{ number_format($data->cnt)}}</td>
                                            {{-- <td>{{ number_format($data->tx)}}</td> --}}
                                            <td>{{$data->created_at}}</td>
                                            <td>
                                                <form  role="form" method="POST" action="{{ url('agent/'.$data->uniqueId) }}"
                                                    onsubmit="return confirm('Are you sure you wish to delete agent ID {{$data->uniqueId}}?');">

                                                        <div class="flex align-items-center list-user-action">
                                                        <a class="iq-bg-primary" href="{{ route('agent.show',$data->uniqueId) }}"><i class="ri-eye-line"></i></a>
                                                        <a class="iq-bg-warning" href="{{ route('agent.edit',$data->uniqueId) }}"><i class="ri-pencil-line"></i></a>


                                                        @if ($data->uniqueId) {{ method_field('DELETE') }} @endif
                                                        {!! csrf_field() !!}
                                                        <button type="submit" class=" btn "><i class="ri-delete-bin-line iq-bg-danger"></i></button>

                                                        </div>
                                                </form>
                                            </td>
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
