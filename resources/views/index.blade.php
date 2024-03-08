<!DOCTYPE html>
<html>

<head>
    <title>Login page</title>
    <link href="asset/images/favicon.png" rel="shortcut icon" type="image/png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="utf-8" http-equiv="encoding">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <link href="asset/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="asset/vendor/bootstrap-icons/bootstrap-icons.css">
    <link href="asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="asset/ckeditor/ckeditor.js"></script>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body class="login-body">
    <section>
        <div class="dashboard-login-page-sec">
            <div class="container">
                <div class="row justify-content-center align-items-center ">
                    <div class="col-lg-5 align-items-center">
                        <div class="dashboard-login-page">
                            <div class="d-flex align-items-center justify-content-between login-logo-img mb-4 ">
                                <h1>Login</h1>
                            </div>
                            <div class="alert-msg " style="color:red;"> @if(Session::has('msg'))
					{{Session::get('msg') }}
					@endif
				</div>
                            <form class="form-horizontal login" method="post" action="/loginpost">
                            {{csrf_field()}}
                                <div class="form-group">
                                    <div class="icon-addon">
                                        <label for="username" class="login-user-label pb-2"><i class="bi bi-people-fill"></i> Username</label>
                                        <input type="email" name="uname" class="form-control" required="" placeholder="Email">

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="icon-addon">
                                        <label for="password" class="login-user-labelv pb-2 pt-2"><i class="bi bi-key-fill"></i> Password</label>
                                        <input type="password" name="password" class="form-control" required="">

                                    </div>
                                </div>
                                <button type="submit" name="submit" class="btn login-btnn mt-4 mb-3 text-center" style="color:Black">
                                    <i class="bi bi-box-arrow-in-right"></i> Login
                                </button>
                                 <p>Do you have an account ?<a href="/register" >Register</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script>
    CKEDITOR.replace('content');
    CKEDITOR.replace('description');
</script>
<script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="asset/js/dashboard.js"></script>

</html>