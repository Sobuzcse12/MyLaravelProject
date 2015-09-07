
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
    <title>User Registration</title>
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
    background-image: url('dist/img/looping-bg.jpg');
  }
  
  .form-signin input[type="text"] {
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
  }

  .form-signin .middle {
    margin-bottom: -1px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
  }

  .form-signin .bottom {
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
  <div class="row" style="margin-top:40px;">
    <div class="col-md-4 col-md-offset-4">
      <h3 style="color:dimgray; text-align: center">Register now to create and fork snippets</h3>

      
            
      <hr class="colorgraph">
      <form method="POST" action="/auth/register" accept-charset="UTF-8" role="form" class="form-signin"><input name="_token" type="hidden" value="ZyZKDpZI3xu8LTzEIluHGPT4004aP43EUvP8rDlS">
        {!! csrf_field() !!}
        <fieldset>
          
          <input class="form-control" placeholder="Username"type="text" name="name" value="{{ old('name') }}">
            
            <input class="form-control middle" placeholder="E-mail"type="email" name="email" value="{{ old('email') }}">
            
            <input class="form-control middle" placeholder="Password"type="password" name="password">
            
            <input class="form-control bottom" placeholder="Confirm Password" type="password" name="password_confirmation">

            <div style="padding-left: 30px; padding-bottom: 10px;">
              <script type="text/javascript">
  var RecaptchaOptions = {"curl_timeout":1};
</script>
<script src='https://www.google.com/recaptcha/api.js?render=onload'></script>
<div class="g-recaptcha" data-sitekey="6LdH39USAAAAAA5SlkkWq2heLWEXB0iC5OLQQ7_W"></div>
<noscript>
  <div style="width: 302px; height: 352px;">
    <div style="width: 302px; height: 352px; position: relative;">
      <div style="width: 302px; height: 352px; position: absolute;">
        <iframe src="https://www.google.com/recaptcha/api/fallback?k=6LdH39USAAAAAA5SlkkWq2heLWEXB0iC5OLQQ7_W"
                frameborder="0" scrolling="no"
                style="width: 302px; height:352px; border-style: none;">
        </iframe>
      </div>
      <div style="width: 250px; height: 80px; position: absolute; border-style: none;
                  bottom: 21px; left: 25px; margin: 0px; padding: 0px; right: 25px;">
        <textarea id="g-recaptcha-response" name="g-recaptcha-response"
                  class="g-recaptcha-response"
                  style="width: 250px; height: 80px; border: 1px solid #c1c1c1;
                         margin: 0px; padding: 0px; resize: none;" value="">
        </textarea>
      </div>
    </div>
  </div>
</noscript>
            </div>
            <input class="btn btn-lg btn-primary btn-block" type="submit" value="Register">
            <p class="text-center" style="margin-top:10px;">OR</p>
            <a class="btn btn-lg btn-default btn-block" href="/auth/login"><i class="icon-github"></i>Already have an account?</a>
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
