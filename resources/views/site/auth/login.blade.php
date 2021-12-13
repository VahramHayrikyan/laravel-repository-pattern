@extends('layouts.app')
@section('content')
    <main class="main" style="margin-top: 130px;">

        <div class="container">
            <div class="col-xs-6"
                 style="display: flex;flex-direction: column;justify-content: center;align-items: flex-end;height: 550px;">
                <img style="max-width: 100%;height: auto;max-height: 100%;width: 750px;margin-right: -20%;"
                     src="{{ asset('assets/v2/img/account/login.png') }}">
            </div>
            <div class="col-xs-6">
                <form style="max-width: 400px;" id="login-form" action="{{ url('login') }}" method="post">
                    @csrf
                    <div class="contact-title title-block" style="margin-top: 60px;">
                        LOGIN
                    </div>
                    <div class="form-input error">
                        <input class="form-control" placeholder="Email *" tabindex="1"
                               style="border-radius: 0;border-left-color: white;padding-bottom: 20px; padding-top: 20px;height: 57px;"
                               name="email" id="LoginForm_email" type="text">
                        @error('email')
                            <div style="color: #dc291e;margin: 5px;" class="errorMessage" id="LoginForm_email_em_">
                                {{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-input">
                        <input class="form-control" placeholder="Password *" tabindex="2"
                               style="border-radius: 0;border-left-color: white;padding-bottom: 20px; padding-top: 20px;height: 57px;"
                               name="password" id="LoginForm_password" type="password">
                        @error('password')
                            <div style="color: #dc291e;margin: 5px;" class="errorMessage" id="LoginForm_password_em_">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-captcha" style="margin-top: 20px;">
                        <div class="g-recaptcha" data-sitekey="6LeAdhgTAAAAACg48oGKkt8H1_4QogUFXjgGu2Jl"
                             data-theme="dark" data-size="normal" data-type="image" tabindex="3">
                            <div style="width: 304px; height: 78px;">
                                <div>
                                    <iframe
                                        src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LeAdhgTAAAAACg48oGKkt8H1_4QogUFXjgGu2Jl&amp;co=aHR0cHM6Ly93d3cub3BpdW1wdWxzZXMuY29tOjQ0Mw..&amp;hl=en-GB&amp;type=image&amp;v=qc5B-qjP0QEimFYUxcpWJy5B&amp;theme=dark&amp;size=normal&amp;cb=hb5l5s46pc3v"
                                        width="304" height="78" role="presentation" name="a-weq964yzin4j"
                                        frameborder="0" scrolling="no"
                                        sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                </div>
                                <textarea id="g-recaptcha-response" name="g-recaptcha-response"
                                          class="g-recaptcha-response"
                                          style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                            </div>
                            <iframe style="display: none;"></iframe>
                        </div>
                        <div style="color: #dc291e;margin: 5px;display:none" class="errorMessage"
                             id="LoginForm_verifyCode_em_"></div>
                    </div>

                    <div class="form-group rememberMe">
                        <a class="pull-right" style="font-size: 12px; color: #eee;margin-top: 2px;"
                           href="/user/resetpassword">Forgot your password?</a>
                        <input id="ytLoginForm_rememberMe" type="hidden" value="0" name="LoginForm[rememberMe]"><input
                            style="margin-top:4px;margin-right:3px;float:left;" tabindex="4" checked="checked"
                            name="LoginForm[rememberMe]" id="LoginForm_rememberMe" value="1" type="checkbox"> <label
                            style="font-size:12px;color:#eee;font-weight:normal;" for="LoginForm_rememberMe">Remember me
                            next time</label></div>

                    <div class="form-btn">
                        <input class="btn" type="submit" name="yt0" value="Login">
                    </div>

                </form>
            </div>
        </div>
    </main>
@endsection
