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
                    <div class="group">
                        <h2 class="form-heading">Create new account</h2>
                    </div> <!--close group -->
                    <div class="group">
                        <input type="text" name="full_name" class="control" placeholder="Enter Full Name...">
                    </div> <!--close group -->
                    <div class="group">
                        <input type="email" name="email" class="control" placeholder="Enter Email Address...">
                    </div> <!--close group -->
                    <div class="group">
                        <input type="password" name="password" class="control" placeholder="Enter Password...">
                    </div> <!--close group -->

                    <div class="group">
                        <label for="file" id="file-label"><i class="fas fa-cloud-upload-alt upload-icon"></i>Choose
                            Image</label>
                        <input type="file" id="file" name="img" class="file">
                    </div> <!--close group -->
                    <div class="group">
                        <input type="submit" name="signup" value="Create Account" class="btn account-btn">
                    </div> <!--close group -->
                    <div class="group">
                        <a href="{{route('login')}}" class="link">Already have an account?</a>
                    </div><!--close group -->
                </form>
            </div>
        </div><!-- close account right -->
    </div><!--  Close signup containter -->
@endsection
