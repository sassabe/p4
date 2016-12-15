<!doctype html>
<html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Bungee+Shade" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <link href="/css/styles.css" type='text/css' rel='stylesheet'>
    @yield('head')
    <title>
      @yield('title','p4')
    </title>
    <link rel="icon" type="image/jpeg" href="{{ asset('/images/favicon.jpg') }}" >
  </head>
  <body>
    @if(Session::get('flash_message') != null)
      <div class='flash_message'>{{ Session::get('flash_message') }}</div>
    @endif
    <section class="menu">
        <nav>
          <ul>
            <li><a href="http://p1.sassabe.me">Sassabe's Portfolio |</a></li>
            <li><a href="http://p2.sassabe.me">P2 |</a></li>
            <li><a href="http://p3.sassabe.me">P3 |</a></li>
          </ul>
        </nav>
        <nav>
          <ul>
              @if(Auth::check())
                  <li><a href='/'>Home</a></li>
                  <li><a href='/runs/index'>My runs</a></li>
                  <li><a href='/runs/create'>Log a run</a></li>
                  <li><a href='/logout'>Log out</a></li>
              @else
                  <li><a href='/'>Home</a></li>
                  <li><a href='/login'>Log in</a></li>
                  <li><a href='/register'>Register</a></li>
              @endif
          </ul>
        </nav>

      @yield('navigation')
    </section>
    <section>
      @yield('content')
    </section>
    <section>
      <footer>
        RunTrainer App &copy; Isabella Donadio
        @yield('footer')
      </footer>
    </section>
  </body>
</html>
