@extends('layouts.master')

@section('content')
    <div class="signup-container">

        <div class="account-left">
            <div class="account-text">
                <h1>Let's Chat</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, ducimus esse expedita explicabo
                    fugit illum itaque labore nam, natus nostrum officiis, perspiciatis porro provident quas quis quod
                    tempore totam veniam.</p>
            </div><!-- close account text-->
        </div><!-- close account left -->

        <div class="account-right">
            <div class="form-area">
                @if(Session::has('success'))
                    <div class="alert alert-error">
                        {{Session::get('success')}}
                    </div>
                @endif
                <form method="post" action="{{ route('login') }}">
                    @csrf
                    @include('auth.partials.login.form');
                </form>
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </div><!-- close account right -->
    </div><!--  Close signup-container -->
@endsection
