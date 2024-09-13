<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{secure_asset('template/docs/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login - Omah Koding</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Omah Koding</h1>
      </div>
      <div class="login-box">
        <form class="login-form" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
          <div class="form-group">
            <label class="control-label">USERNAME/EMAIL</label>
            <input class="form-control" id="login" type="text" name="login" placeholder="Username" value="{{ old('login') }}" required autofocus>
            @if ($errors->has('login'))
                <span class="help-block">
                <strong>{{ $errors->first('login') }}</strong>
            @endif
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>            
            <input class="form-control" id="password" type="password" placeholder="Password" name="password" required>
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label>
                  <input type="checkbox"><span class="label-text">Stay Signed in</span>
                </label>
              </div>
              {{-- <p class="semibold-text mb-2"><a href="{{route('register')}}">Register</a></p> --}}
            </div>
          </div>
          <div class="form-group btn-container">
            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
          </div>
        </form>        
      </div>
    </section>
    <script src="{{asset('template/docs/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{asset('template/docs/js/popper.min.js') }}"></script>
    <script src="{{asset('template/docs/js/bootstrap.min.js') }}"></script>
    <script src="{{asset('template/docs/js/main.js') }}"></script>
    <script type="text/javascript" src="{{asset('template/docs/js/plugins/chart.js') }}"></script>
    <script type="text/javascript">
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
</html>