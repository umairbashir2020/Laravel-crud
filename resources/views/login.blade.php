@extends('templete.public')
@section('content')
 <!-- login Starts -->
 <section class="login">
    <div class="container my-2">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-xs-12">
                <div class="login-content border p-4">
                    <h4 class="text-center">Hello! Sign into your account</h4>
                    <form class="text-center"  method="post" action="{{ URL::to('/') }}">
                        <div class="form-group">
                            <label class="">Email Address/Username</label>
                            <input type="text" id="name">
                        </div>
                        <div class="form-group">
                            <label class="">Password</label>
                            <input type="password" id="password">
                        </div>
                        {{-- <div class="form-group form-checkbox text-center mb-1">
                            <input type="checkbox" class=""> Remember Me
                            | <a href="#" class="yellow">Forgot password?</a>
                        </div> --}}

                        <input type="submit" value="Login">
                    </form>
                    {{-- <div class="login-social mb-2 text-center">
                        <p class=""><strong>- or -</strong></p>
                        <a href="#" class="btn-facebook"><i class="fab fa-facebook" aria-hidden="true"></i> Facebook</a>
                        <a href="#" class="btn-twitter"><i class="fab fa-twitter" aria-hidden="true"></i> Twitter</a>
                    </div> --}}
                    {{-- <div class="form-btn text-center">
                        <a href="" class="nir-btn mb-2">LOGIN</a>
                        <p class="">Need an Account? Create your Yatriiworld account</p>
                    </div> --}}
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Login Ends -->
</form>
@endsection

















{{-- <div class="col-lg-6 col-md-12 col-xs-12">
                <div class="login-content border p-4">
                    <h4 class="">Create a Yatriiworld Account</h4> --}}
                    {{-- <form>
                        <div class="form-group">
                            <label class="">Username</label>
                            <input type="text">
                        </div>
                        <div class="form-group">
                            <label class="">Email Address</label>
                            <input type="email">
                        </div>
                        <div class="form-group">
                            <label class="">Password</label>
                            <input type="password">
                        </div>
                        <div class="form-group">
                            <label class="">Confirm Password</label>
                            <input type="password">
                        </div>
                    </form> --}}
                    {{-- <div class="login-social text-center mb-2">
                        <p class=""><strong>- or -</strong></p>
                        <a href="#" class="btn-facebook"><i class="fab fa-facebook" aria-hidden="true"></i> Facebook</a>
                        <a href="#" class="btn-twitter"><i class="fab fa-twitter" aria-hidden="true"></i> Twitter</a>
                    </div>
                    <div class="form-btn text-center">
                        <a href="#" class="nir-btn">SIGN UP</a>
                    </div> --}}
                {{-- </div>
            </div> --}}
