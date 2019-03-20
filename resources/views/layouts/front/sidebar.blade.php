<section id="sidebar">
    <ul class="left-ul">
        <li>
            <a href="#"><span class="profile-img-span">
                            <img src="{{asset('images/profile-img-1.jpg')}}" alt="Profile Image"
                                 class="profile-img">
                </span></a>
        </li>
        <li><a href="{{route("user.chat")}}">Jennifer Donohue<span class="cool-hover"></span></a></li>
        <li><a href="{{route('user.profile')}}">Change Name<span class="cool-hover"></span></a></li>
        <li><a href="{{route('user.change_password')}}">Change Password<span class="cool-hover"></span></a></li>
        <li><a href="#">110 Users Online<span class="cool-hover"></span></a></li>
        <li><a href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout <i
                        class="fas fa-sign-out-alt"></i>
                <span class="cool-hover"></span></a></li>
    </ul>
</section><!-- close sidebar -->

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>