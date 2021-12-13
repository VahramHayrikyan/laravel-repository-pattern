@extends('layouts.app')
@section('content')
    <main class="main" style="margin-top: 130px;">

        <div class="container">
            <div class="col-xs-6"
                 style="display: flex;flex-direction: column;justify-content: center;align-items: flex-end;height: 650px;">
                <img style="max-width: 100%;height: auto;max-height: 100%;width: 750px;margin-right: -5%;"
                     src="{{ asset('assets/v2/img/account/register.png') }}">
            </div>
            <div class="col-xs-6">
                <form style="max-width: 400px;" id="login-form" action="" method="post">
                    <div class="contact-title title-block" style="margin-top: 30px;">
                        REGISTER
                    </div>
                    @csrf
                    <div class="form-input error">
                        <input class="form-control" placeholder="USERNAME *" tabindex="1"
                               style="border-radius: 0;border-left-color: white;padding-bottom: 20px; padding-top: 20px;;height: 57px;"
                               name="username" id="User_username" type="text" maxlength="32">
                        @error('username')
                        <div style="color: rgb(220, 41, 30); margin: 5px;" class="errorMessage" id="User_username_em_">
                            {{ $message }}
                        </div>
                        @enderror

                    </div>
                    <div class="form-input">
                        <input class="form-control" placeholder="email *" tabindex="1"
                               style="border-radius: 0;border-left-color: white;padding-bottom: 20px; padding-top: 20px;;height: 57px;"
                               name="email" id="User_email" type="text" maxlength="128">
                        @error('email')
                        <div style="color: #dc291e;margin: 5px" class="errorMessage"
                             id="User_email_em_">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="form-input">
                        <input class="form-control" placeholder="repeat email *" tabindex="1"
                               style="border-radius: 0;border-left-color: white;padding-bottom: 20px; padding-top: 20px;;height: 57px;"
                               name="email_confirmation" id="User_repeat_email" type="text">
                        @error('email_confirmation')
                        <div style="color: #dc291e;margin: 5px" class="errorMessage"
                             id="User_repeat_email_em_">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-input">
                        <input class="form-control" placeholder="Password *" tabindex="2"
                               style="border-radius: 0;border-left-color: white;padding-bottom: 20px; padding-top: 20px;;height: 57px;"
                               name="password" id="User_password" type="password" maxlength="128">
                        @error('password')
                        <div style="color: #dc291e;margin: 5px" class="errorMessage"
                             id="User_password_em_">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="form-input">
                        <input class="form-control" placeholder="repeat Password *" tabindex="2"
                               style="border-radius: 0;border-left-color: white;padding-bottom: 20px; padding-top: 20px;;height: 57px;"
                               name="password_confirmation" id="User_repeat_password" type="password">
                        @error('password_confirmation')
                        <div style="color: #dc291e;margin: 5px" class="errorMessage"
                             id="User_repeat_password_em_">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-input recruiter-input">
                        <input class="form-control" placeholder="REFERRER (Your friend's username)" tabindex="2"
                               style="border-radius: 0;border-left-color: white;padding-bottom: 20px; padding-top: 20px;;height: 57px;"
                               name="recruiter" id="User_recruiter" type="text">
                        @error('recruiter')
                        <div style="color: #dc291e;margin: 5px" class="errorMessage"
                             id="User_recruiter_em_">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="form-captcha" style="margin-top: 20px;">
                        <div class="g-recaptcha" data-sitekey="6LeAdhgTAAAAACg48oGKkt8H1_4QogUFXjgGu2Jl"
                             data-theme="dark" data-size="normal" data-type="image" tabindex="3">
                            <div style="width: 304px; height: 78px;">
                                <div>
                                    <iframe
                                        src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LeAdhgTAAAAACg48oGKkt8H1_4QogUFXjgGu2Jl&amp;co=aHR0cHM6Ly93d3cub3BpdW1wdWxzZXMuY29tOjQ0Mw..&amp;hl=en-GB&amp;type=image&amp;v=qc5B-qjP0QEimFYUxcpWJy5B&amp;theme=dark&amp;size=normal&amp;cb=towdauwapz4g"
                                        width="304" height="78" role="presentation" name="a-wc6xo4dfrpgs"
                                        frameborder="0" scrolling="no"
                                        sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                </div>
                                <textarea id="g-recaptcha-response" name="g-recaptcha-response"
                                          class="g-recaptcha-response"
                                          style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                            </div>
                            <iframe style="display: none;"></iframe>
                        </div>
                        <div style="color: #dc291e;margin: 5px" class="errorMessage"
                             id="User_verifyCode_em_"></div>
                    </div>

                    <div class="form-btn">
                        <input class="btn" type="submit" name="yt0" value="Register">
                    </div>

                </form>
            </div>
        </div>
    </main>
@endsection
