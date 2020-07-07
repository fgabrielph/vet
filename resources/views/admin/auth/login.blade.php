<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{config('app.name')}} | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
{{--        <img src="/assets/images/Dz5gMSnB2dt7wZHjluX6nGrgj.png" width="90%">--}}
        <b>Admin</b>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Admin Login</p>

            <form action="{{ route('admin.login.post') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Username / Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            {{--                            <span class="fa-envelope"></span>--}}
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            {{--                            <span class="fa-lock"></span>--}}
                        </div>
                    </div>
                </div>
                <div class="row">
                {{--                    <div class="col-8">--}}
                {{--                        <div class="icheck-primary">--}}
                {{--                            <input type="checkbox" id="remember">--}}
                {{--                            <label for="remember">--}}
                {{--                                Remember Me--}}
                {{--                            </label>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                <!-- /.col -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
    </div>
</div>
<script src="{{asset('js/app.js')}}"></script>

</body>
</html>
