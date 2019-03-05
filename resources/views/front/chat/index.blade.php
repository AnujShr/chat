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
            <div class="messages">
                <div class="left-message cmr">
                    <div class="sender-img-block">
                        <img src="{{asset('images/profile-img-1.jpg')}}" class="sender-img" alt="">
                        <span class="online-icon"></span>
                    </div><!-- close sender-img-block -->
                    <div class="left-msg-area">
                        <div class="user-name-date">
                            <span class="sender-name">
Jennifer Donohue
                            </span><!-- close sender-name -->
                            <span class="date-time">
                                1 day ago
                            </span><!-- close close date-time-->
                        </div><!-- close user-name-date -->

                        <div class="left-msg">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At eligendi illo iusto nihil
                                repellendus sint tempore? Corporis et fuga impedit inventore minus nostrum odit qui
                                quibusdam sed, tenetur veniam vitae.</p>
                        </div> <!--close left-msg -->
                    </div><!-- close left-msg-area -->
                </div><!-- close left-message -->
                <div class="left-message cmr">
                    <div class="sender-img-block">
                        <img src="{{asset('images/profile-img-1.jpg')}}" class="sender-img" alt="">
                        <span class="offline-icon"></span>
                    </div><!-- close sender-img-block -->
                    <div class="left-msg-area">
                        <div class="user-name-date">
                            <span class="sender-name">
Jennifer Donohue
                            </span><!-- close sender-name -->
                            <span class="date-time">
                                1 day ago
                            </span><!-- close close date-time-->
                        </div><!-- close user-name-date -->

                        <div class="left-msg">
                            <p>Lorem ipsum dolor sit a veniam vitae.</p>
                        </div> <!--close left-msg -->
                    </div><!-- close left-msg-area -->
                </div><!-- close left-message -->
                <div class="right-message cmr">
                    <div class="right-msg-area">
                            <span class="date-time right-time">
                                1 day ago
                            </span><!-- close close date-time-->
                        <div class="right-msg">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto blanditiis deleniti ea
                            est expedita fuga ipsum minima nam neque nulla, perferendis quidem repellat saepe sit
                            suscipit totam ut voluptate voluptatibus!
                        </div><!-- close right-msg -->
                    </div><!--right-msg-area-->
                </div> <!-- close right-message -->
                <div class="right-message cmr">
                    <div class="right-msg-area">
                            <span class="date-time right-time">
                                1 day ago
                            </span><!-- close close date-time-->
                        <div class="right-msg">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto blanditiis deleniti ea
                            est expedita fuga ipsum minima nam neque nulla, perferendis quidem repellat saepe sit
                            suscipit totam ut voluptate voluptatibus!
                        </div><!-- close right-msg -->
                    </div><!--right-msg-area-->
                </div> <!-- close right-message -->
                <div class="right-message cmr">
                    <div class="right-msg-area">
                            <span class="date-time right-time">
                                1 day ago
                            </span><!-- close close date-time-->
                        <div class="right-msg">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto blanditiis deleniti ea
                            est expedita fuga ipsum minima nam neque nulla, perferendis quidem repellat saepe sit
                            suscipit totam ut voluptate voluptatibus!
                        </div><!-- close right-msg -->
                    </div><!--right-msg-area-->
                </div> <!-- close right-message -->
                <div class="right-message cmr">
                    <div class="right-msg-area">
                            <span class="date-time right-time">
                                1 day ago
                            </span><!-- close close date-time-->
                        <div class="right-msg">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto blanditiis deleniti ea
                            est expedita fuga ipsum minima nam neque nulla, perferendis quidem repellat saepe sit
                            suscipit totam ut voluptate voluptatibus!
                        </div><!-- close right-msg -->
                    </div><!--right-msg-area-->
                </div> <!-- close right-message -->
                <div class="right-message cmr">
                    <div class="right-msg-area">
                            <span class="date-time right-time">
                                1 day ago
                            </span><!-- close close date-time-->
                        <div class="right-msg">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto blanditiis deleniti ea
                            est expedita fuga ipsum minima nam neque nulla, perferendis quidem repellat saepe sit
                            suscipit totam ut voluptate voluptatibus!
                        </div><!-- close right-msg -->
                    </div><!--right-msg-area-->
                </div> <!-- close right-message -->
            </div> <!-- close messages -->

            <div class="chat-form">
                <div class="chat-container">
                    <div class="form-input">
                        <textarea placeholder="Type your message..." class="textarea-control"></textarea>
                    </div><!-- close form-input-->
                    <div class="form-input">
                        <label for="upload-files" id="upload-label"><i class="fas fa-paperclip fa_uploads"></i>
                            <i class="fas fa-file-image fa_uploads"></i> </label>
                        <input type="file" id="upload-files" class="upload-files">
                    </div><!-- close form-input-->
                </div><!-- close chat-container-->
            </div> <!-- close chat-form -->
            <div class="emoji">
                <img src="{{asset('images/emoji/thumbs-up.png')}}" alt="" class="emoji-same">
                <img src="{{asset('images/emoji/heart-suit.png')}}" alt="" class="emoji-same">
                <img src="{{asset('images/emoji/grinning-face-with-big-eyes.png')}}" alt="" class="emoji-same">
                <img src="{{asset('images/emoji/grinning-face-with-smiling-eyes.png')}}" alt="" class="emoji-same">
                <img src="{{asset('images/emoji/beaming-face-with-smiling-eyes.png')}}" alt="" class="emoji-same">
                <img src="{{asset('images/emoji/grinning-squinting-face.png')}}" alt="" class="emoji-same">
                <img src="{{asset('images/emoji/grinning-face-with-sweat.png')}}" alt="" class="emoji-same">
                <img src="{{asset('images/emoji/rolling-on-the-floor-laughing.png')}}" alt="" class="emoji-same">
                <img src="{{asset('images/emoji/face-with-tears-of-joy.png')}}" alt="" class="emoji-same">
                <img src="{{asset('images/emoji/slightly-smiling-face.png')}}" alt="" class="emoji-same">
                <img src="{{asset('images/emoji/upside-down-face.png')}}" alt="" class="emoji-same">
                <img src="{{asset('images/emoji/winking-face.png')}}" alt="" class="emoji-same">
                <img src="{{asset('images/emoji/smiling-face-with-smiling-eyes.png')}}" alt="" class="emoji-same">
                <img src="{{asset('images/emoji/smiling-face-with-halo.png')}}" alt="" class="emoji-same">
                <img src="{{asset('images/emoji/smiling-face-with-heart-eyes.png')}}" alt="" class="emoji-same">
                <img src="{{asset('images/emoji/star-struck.png')}}" alt="" class="emoji-same">
                <img src="{{asset('images/emoji/face-blowing-a-kiss.png')}}" alt="" class="emoji-same">
                <img src="{{asset('images/emoji/kiss.png')}}" alt="" class="emoji-same">
                <img src="{{asset('images/emoji/smiling-face.png')}}" alt="" class="emoji-same">
                <img src="{{asset('images/emoji/face-savoring-food.png')}}" alt="" class="emoji-same">
                <img src="{{asset('images/emoji/face-with-tongue.png')}}" alt="" class="emoji-same">
                <img src="{{asset('images/emoji/adult.png')}}" alt="" class="emoji-same">
                <img src="{{asset('images/emoji/basketball.png')}}" alt="" class="emoji-same">
            </div><!-- close emoji -->
        </section> <!-- close right-area -->
    </div><!-- close chat-container-->
@endsection
