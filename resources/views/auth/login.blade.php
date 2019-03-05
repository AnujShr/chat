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
                <form action="">
                    @include('auth.partials.login.form');
                </form>
            </div>
        </div><!-- close account right -->
    </div><!--  Close register containter -->
@endsection
