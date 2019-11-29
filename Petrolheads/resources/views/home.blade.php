@extends('layouts.app')
<style type="text/css">
    .avatar{
        border-radius: 100%;
        max-width: 100px;
    }
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(count($errors)>0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            @endif
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(!empty($profile))
                    <div class="col-md-4">
                        <img src="{{$profile->profile_pic}}" class= "avatar" alt="">
                    </div>
                            <div class="col-md-8">
                                <p class="lead"> Name: {{ $profile->name }} </p>
                            </div>

                            <div class="col-md-8">
                                <p>Designation: {{$profile->designation}}</p>
                            </div>
                        @else
                            <div class="col-md-4">
                                <img src="{{url('images/avatar.png')}}" class= "avatar" alt="">
                            </div>
                        <p class="lead"> Empty profile </p>

                    @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
