@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                          View Your Profile
                        </button>


                        <div class="modal" id="myModal">
                          <div class="modal-dialog">
                            <div class="modal-content">


                              <div class="modal-header">
                                <h4 class="modal-title">{{ $user->name }}</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>


                              <div class="modal-body">
                                  @if($user->address !=null)
                                  <h4>Your Address:<b><i>{{ $user->address }}</i></b></h4>
                                  @endif
                               <h4> Email Address:<b><i>{{ $user->email }}</i></b></h4>
                              </div>


                              <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div>

                            </div>
                          </div>
                        </div>

                      </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
