<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name','日常教学') }}</title>
        <style>
            html, body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, code, form, fieldset, legend, input, button, textarea, p, blockquote, th, td, header, section {
                margin: 0;
                padding: 0;
            }
            body { font:14px Microsoft Yahei,SimSun,Arial; color: #000;}
            :focus { outline: none;}
            input, button, textarea { font: inherit;  vertical-align: middle;}
            ul { list-style: none;}
            :link, :visited, ins { text-decoration: none;}
            h1,h2,h3,h4,h5,h6 { font-size: 100%; font-weight: normal;}

            .header { padding: 10px 50px;}
            .logo { background: url({{ asset('images/logo.jpg') }}) no-repeat; padding-left: 80px; height: 70px; line-height: 70px; font-size: 36px; color: #41b351;}
            .body { background-color: #f1f1f1; width: 100%; padding: 30px 0;}
            .login-box { background-color: #fff; width: 360px; margin: 0 auto; position: relative; box-shadow: 0px 0px 5px #999; -webkit-box-shadow: 0px 0px 5px #999; -moz-box-shadow: 0px 0px 5px #999;}
            h1 { font-size: 24px; line-height: 60px; padding: 0 20px; border-bottom: 1px solid #d0d0d0;}
            .login-form { padding: 30px 20px;}
            .login-form ul { border: 1px solid #bebebe; padding: 0 20px;}
            .login-form ul li { height: 25px; padding: 20px 0; border-top: 1px solid #ddd}
            .login-form ul li:first-of-type { border-top: 0;}
            .ui-icon { background-image: url({{ asset('images/s-icon.png') }}); background-repeat: no-repeat; float: left; height: 25px; width: 25px;}
            .ui-icon-psd { background-position: 0 -25px;}
            .ui-icon-vcode { background-position: 0 -50px;}
            .ui-input { width: 240px; height: 25px; border: none; float: left; margin-left: 10px;}
            .ui-form-other {margin-top: 5px; position: relative;}
            .ui-form-other label input { margin-right: 2px;}
            .ui-form-other .textlink { position: absolute; right: 0; top: 0; color: #000;}
            .ui-form-btn a { display: block; width: 100%; height: 40px; line-height: 40px; text-align: center; margin-top: 20px; color: #fff; font-size: 18px;}
            .login-btn { background-color: #41b351;}
            .register-btn { background-color: #aaa;}
            .footer {text-align: center; margin-top: 50px; color: #999}
            .help-block {color: red}
        </style>
    </head>

    <body>
    <header class="header">
        <div class="logo">实验日常教学管理中心</div>
    </header>
    <section class="body">
        <div class="login-box">
            <h1>用户登录</h1>
            <div class="login-form">
                <form id="login_form" method="post" action="{{ Route('login') }}">
                    {{ csrf_field() }}
                    <ul>
                        <li>
                            <span class="ui-icon ui-icon-user"></span>
                            <input name="username" type="text" id="username" class="ui-input" placeholder="用户名" value="{{ old('username') }}" />
                            @if ($errors->has('username'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif
                        </li>
                        <li>
                            <span class="ui-icon ui-icon-psd"></span>
                            <input name="password" type="password" id="password" class="ui-input" placeholder="密码" />
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </li>
                        <li>
                            <span class="ui-icon ui-icon-vcode"></span>
                            <input name="captcha" type="text" id="verifycode" class="ui-input" style="width: 130px" placeholder="验证码" />
                            <img id="verify_img" alt="点击刷新" title="点击刷新" src="{{ \Mews\Captcha\Facades\Captcha::src() }}" width="110" height="100%"
                                 onclick="this.src=this.src+1"
                            >
                            @if ($errors->has('captcha'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('captcha') }}</strong>
                                </span>
                            @endif
                        </li>
                    </ul>
                </form>
                <div class="ui-form-btn">
                    <a href="javascript:void(0)" class="login-btn" onClick="userlogin();">登录</a>
                </div>
            </div>
        </div>
    </section>
    <div class="footer">Copyright © 2017 smarcloud. All Rights Reserved</div>

    {{-- js --}}
    <script src="{{ asset('js/jquery-1.8.3.js') }}"></script>
    <script src="{{ asset('js/layer/layer.js') }}"></script>
    <script>
        {{-- 用户登录 --}}
        function userlogin()
        {
            $('#login_form').submit();
        }
    </script>

    </body>
</html>
