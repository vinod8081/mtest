@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">User Details</div>
                        <div class="panel-body">
                        <b>Name:</b> {{$data->name}}<br/>
                        <b>Email:</b> {{$data->email}}
                        </div>
                    <div class="panel-heading">Account Details</div>
                    <div class="panel-body">
                        <b>Account Number:</b> {{$account->account_number}}<br/>
                        <b>Bank Name:</b> {{$account->bank_name}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
