<div class="group">
    <h2 class="form-heading">Create new account</h2>
</div> <!--close group -->
<div class="group">
    <input type="text" name="name" class="control" placeholder="Enter Full Name...">
</div> <!--close group -->
<div class="group">
    <input type="email" name="email" class="control" placeholder="Enter Email Address...">
</div> <!--close group -->
<div class="group">
    <input type="password" name="password" class="control" placeholder="Enter Password...">
</div> <!--close group -->
<div class="group">
    <input type="password" name="password_confirmation" class="control" placeholder="Confirm Password...">
</div> <!--close group -->

<div class="group">
    <label for="file" id="file-label"><i class="fas fa-cloud-upload-alt upload-icon"></i>Choose
        Image</label>
    <input type="file" id="file" name="profile_pic" class="file">
</div> <!--close group -->
<div class="group">
    <input type="submit" value="Create Account" class="btn account-btn">
</div> <!--close group -->
<div class="group">
    <a href="{{route('login')}}" class="link">Already have an account?</a>
</div><!--close group -->
