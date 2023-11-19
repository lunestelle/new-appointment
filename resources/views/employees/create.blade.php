@extends('layouts.app')
@section('head')
  @include('includes.head',['title'=>'Create new employee'])
  <!-- Bootstrap -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Datepicker -->
  <link rel="stylesheet" href="/css/bootstrap-datetimepicker.min.css">
  <!-- Font -->
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  <!-- Style -->
  <link rel="stylesheet" href="/css/sidebar.css">
  <link rel="stylesheet" href="/css/dashboard.css">
  <link rel="stylesheet" href="/css/header.css">
  <link rel="stylesheet" href="/css/base.css">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
@endsection
<!-- monitor -->
@section('content')
  <a href="{{ \Illuminate\Support\Facades\URL::previous() }}"><h4>◀ Back</h4></a>

  <div class="form-group padding-space">
    <div class="container-fluid">
      <div class="row col-md-offset-3 col-md-6">
        @include('includes.message-block')
        <div class="panel panel-default panel-custom">
          <div class="panel-heading panel-custom-heading">
            <h3 class="panel-title">Create new employee</h3>
          </div>
          <div class="panel-body">
            <form action="{{ route('employees.store') }}" method="post">
              {{ csrf_field() }}
              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="user_id">Select User to Become Employee: </label>
                      <select class="form-control" id="user_id" name="user_id" required>
                        <option value="" disabled selected>Please Select</option>
                        @foreach($users as $user)
                          <option value="{{ $user->id }}">{{ $user->first_name }} {{ $user->last_name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="status">Employee Status: </label>
                      <select class="form-control" id="status" name="status" required>
                        <option value="" disabled selected>Please Select</option>
                        <option value="Active">Active</option>
                        <option value="On Leave">On Leave</option>
                        <option value="Sick Leave">Sick Leave</option>
                        <option value="Vacation">Vacation</option>
                        <option value="Terminated">Terminated</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label>Services</label>
                      @foreach($services as $service)
                        <li class="list-group-item">
                          {{ $service->name }}
                          <div class="material-switch pull-right">
                            <input id="{{ $service->id }}" name="" type="checkbox"/>
                            <label for="{{ $service->id }}" class="label-success"></label>
                          </div>
                        </li>
                      @endforeach
                      <input type="hidden" id="checkedValues" name="checked_values">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="date" data-toggle="tooltip" data-placement="top" title="Please select the date for the employee's working hours.">Employee's Working Date:</label>
                      <input type="date" class="form-control custom-control" id="date" value="{{old('date')}}" name="date" required>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="start_time" data-toggle="tooltip" data-placement="top" title="Please specify the start time of the employee's working hours.">Employee's Working Start Time:</label>
                      <input type="time" class="form-control custom-control" id="start_time" value="{{old('start_time')}}" name="start_time" required>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="finish_time" data-toggle="tooltip" data-placement="top" title="Please specify the finish time of the employee's working hours.">Employee's Working Finish Time:</label>
                      <input type="time" class="form-control custom-control" id="finish_time" value="{{old('finish_time')}}" name="finish_time" required>
                    </div>
                  </div>
                </div>

                <hr>

                <div class="row">
                  <div class="col-sm-offset-4 col-sm-4 col-xs-offset-2 col-xs-8">
                    <button type="submit" class="btn btn-default custom-btn btn-block">Submit</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script>
    var today = new Date().toISOString().split('T')[0];
    document.getElementsByName("date")[0].setAttribute('min', today);

    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
  </script>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="/js/jquery-3.2.1.min.js"></script>
  <script src="/js/checked.js"></script>

  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="/js/bootstrap.min.js"></script>
  <!-- Moment -->
  <script src="/js/moment.min.js"></script>
  <!-- Bootstrap Datepicker -->
  <script src="/js/bootstrap-datetimepicker.min.js"></script>
  <!-- Main -->
  <script src="/js/main.js"></script>
@endsection