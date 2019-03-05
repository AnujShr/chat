@extends('layouts.master')
@section('content')
    <nav id="nav">
        nav area
    </nav>
    <div class="chat-container">
        <section id="sidebar">
            <ul class="left-ul">
                <li><a href="#">
                        <span class="profile-img-span">
                            <img src="{{asset('images/profile-img-1.jpg')}}" alt="Profile Image"
                                 class="profile-img"></span></a></li>
                <li><a href="#">Jennifer Donohue<span class="cool-hover"></span></a></li>
                <li><a href="#">Change Name<span class="cool-hover"></span></a></li>
                <li><a href="#">Change Password<span class="cool-hover"></span></a></li>
                <li><a href="#">110 Users Online<span class="cool-hover"></span></a></li>
            </ul>
        </section><!-- close sidebar -->
        <section id=" right-area">
            <div class="from-grid"></div><!-- close form-grid -->
        </section> <!-- close right-area -->
    </div><!-- close chat-container-->
@endsection
