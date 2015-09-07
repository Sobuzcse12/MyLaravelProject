
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://ogp.me/ns#"
      xmlns:fb="https://www.facebook.com/2008/fbml">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="msvalidate.01" content="36A28D9109C077BA3E623651FC1656F4" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="fb:admins" content="19908503" />
    <meta property="fb:app_id" content="112989545392380" /> 
    <meta property="og:title" content="HTML Snippets for Twitter Boostrap framework : Bootsnipp.com" />
    <meta property="og:type" content="website" />
    <meta property="twitter:account_id" content="786331568" />
      <meta itemprop="name" content="Bootsnipp">
    <meta itemprop="description" content="Free HTML snippets for Bootstrap HTML CSS JS Framework">
    <meta property="og:url" content="http://bootsnipp.com" />
      <meta property="og:image" content="http://bootsnipp.com/img/logo.jpg" />
    <meta property="og:site_name" content="Bootsnipp.com" />
      <meta property="og:description" content="Bootsnipp is an element gallery for web designers and web developers, anybody who is using Bootstrap will find this website essential in their craft." />
    <meta name="description" content="Bootsnipp is an element gallery for web designers and web developers, anybody who is using Bootstrap will find this website essential in their craft.">
      <meta name="author" content="Maks Surguy, @msurguy">
    <title>Login to free code playground for Bootstrap | Bootsnipp.com</title>
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-144x144-precomposed.png">
    <link rel="alternate" type="application/rss+xml" title="Latest snippets from Bootsnipp.com" href="http://bootsnipp.com/feed.rss" />

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://bootsnipp.com/dist/bootsnipp.min.css?ver=70eabcd8097cd299e1ba8efe436992b7">
    <style type="text/css">
    
    body{
        background-image: url('a.jpg');
    }
    .form-signin input[type="text"] {
      margin-bottom: -1px;
      border-bottom-left-radius: 0;
      border-bottom-right-radius: 0;
    }
    .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
    .form-signin .form-control {
      position: relative;
      font-size: 16px;
      height: auto;
      padding: 10px;
      -webkit-box-sizing: border-box;
         -moz-box-sizing: border-box;
              box-sizing: border-box;
    }

</style>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.2.0/respond.js"></script>
    <![endif]-->
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-34731274-1']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    <script type="text/javascript">
    var fb_param = {};
    fb_param.pixel_id = '6007046190250';
    fb_param.value = '0.00';
    (function(){
      var fpw = document.createElement('script');
      fpw.async = true;
      fpw.src = '//connect.facebook.net/en_US/fp.js';
      var ref = document.getElementsByTagName('script')[0];
      ref.parentNode.insertBefore(fpw, ref);
    })();
    </script>
    <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/offsite_event.php?id=6007046190250&amp;value=0" /></noscript>
  </head>
  <body>
  <div class="container">
    <div class="row" style="margin-top:60px;">
        <div class="col-md-4 col-md-offset-4">
            <form method="POST" action="/auth/login" accept-charset="UTF-8" role="form" id="loginform" class="form-signin"><input name="_token" type="hidden" value="YPzp0VsLXaxt9buYiYnlpywfeyQTPEWp">
                {!! csrf_field() !!}
                <fieldset>
                    <h3 class="sign-up-title" style="color:dimgray; text-align: center">Welcome back! Please sign in</h3>
                        
                    <hr class="colorgraph">
                    <input for="amount" class="form-control email-title" placeholder="E-mail" name="email" type="email" value="{{ old('email') }}">
                    <input class="form-control" placeholder="Password" name="password" type="password" id="password" value="">
                    <a class="pull-right" href="#">Forgot password?</a>
                    <div class="checkbox" style="width:140px;">
                        <label><input name="remember" type="checkbox" value="Remember Me"> Remember Me</label>
                    </div>
                    <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                    <p class="text-center" style="margin-top:10px;">OR</p>
                    <a class="btn btn-default btn-block" href="/auth/register"><i class="icon-login"></i>Register for an account?</a>
                </fieldset>
            </form>
        </div>
    </div>
</div>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="http://bootsnipp.com/dist/scripts.min.js"></script>
        <script type="text/javascript" src="http://cdn.buysellads.com/ac/audience.js"></script>
  </body>
</html>
