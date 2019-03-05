@extends('layouts.master')
@section('content')
    @include('layouts.front.nav')
    <div class="chat-container">
        @include('layouts.front.sidebar')
        <section id="right-area">
            <div class="form-section">
                <div class="form-grid">
                    <form method="POST" action="{{ route('register') }}">

                        <div class="group">
                            <h2 class="form-heading">Change Password</h2>
                        </div> <!--close group -->
                        <div class="group">
                            <input type="password" name="current_password" class="control"
                                   placeholder="Enter Current Password">
                        </div> <!--close group -->
                        <div class="group">
                            <input type="password" name="new_password" class="control" placeholder="Enter New Password">
                        </div> <!--close group -->
                        <div class="group">
                            <input type="password" name="retype_password" class="control"
                                   placeholder="Confirm New Password">
                        </div> <!--close group -->

                        <div class="group">
                            <input type="submit" name="change_password" value="Save Changes" class="btn account-btn">
                        </div> <!--close group -->
                    </form>

                </div>
            </div>

        </section> <!-- close right-area -->
    </div><!-- close chat-container-->
@endsection
