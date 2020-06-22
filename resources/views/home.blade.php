@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! as <strong>{{ strtoupper(Auth::user()->type) }}</strong>
                <br>
                <a href="/admin/dashboard"><buttom>Admin</buttom></a>
                <a href="/user/interface"><buttom>User</buttom></a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
