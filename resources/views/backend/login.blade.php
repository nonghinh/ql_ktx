<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="{!! url('public/assets/css/bootstrap.min.css')!!}" rel="stylesheet">
    <link href="{!! url('public/assets/css/font-awesome.min.css')!!}" rel="stylesheet">
    <link href="{!! url('public/assets/css/app.css')!!}" rel="stylesheet">

  </head>
  <body>
    <div class="login-site">
      <div class="login-box col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="text-center login-title">ĐĂNG NHẬP</h1>
          </div>
          <div class="panel-body">
            <form action="{!! url('login') !!}" method="post" accept-charset="utf-8">
              {!! csrf_field()!!}
              <div class="form-group">
              <label>Email</label>
                <div class="input-group">
                  <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-envelope-o"></i></span>
                  <input type="email" class="form-control" name="email" placeholder="Your email" aria-describedby="sizing-addon2">
                </div>
              </div>
              <div class="form-group">
                <label>Mật khẩu</label>
                <div class="input-group">
                  <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-unlock"></i></span>
                  <input type="password" class="form-control" name="password" placeholder="Your password" aria-describedby="sizing-addon2">
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Đăng nhập</button>
                <a href="" title="" class="pull-right">Quyên mật khẩu</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{!! url('public/assets/js/jquery-1.12.0.min.js') !!}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{!! url('public/assets/css/bootstrap.min.js')!!}"></script>
  </body>
</html>