@extends('layouts.master')
@section('content')
    @include('layouts.front.nav')
    <div class="chat-container">
        @include('layouts.front.sidebar')
        <section id="right-area">
            @include('front.chat.partials.message')
            @include('front.chat.partials.chat');
            @include('front.chat.partials.emoji')
        </section> <!-- close right-area -->
    </div><!-- close chat-container-->
@endsection
