<div class="jumbotron hero-banner">
  <div class="container vertical-center">
  <h2 class="share-story">
      Feeling a little down{{ Auth::check() ? ', '.Auth::user()->name : '' }}?
    <h1 class="display-3 nice-phrase">
      Let's <span>cheer you up.</span>
    </h1>
    <h2 class="share-story">
    Share your story with us. Read other stories.</h2>
    @if(!Auth::check())
    <p><a class="btn btn-primary btn-lg" href="{{ route('facebook.login') }}" role="button"><i class="fa fa-facebook"></i> Login with Facebook</a></p>
    <p><a href="#" class="login_conventionally--link">or login conventionally</a>
    @endif

    <p>
      <a href="#" class="btn btn-info-outline btn-lg" role="button">Share an awesome story</a>
      <a href="#" class="btn btn-lg btn-success-outline" role="button">Read awesome stories</a>
      <a href="#" class="btn btn-lg btn-danger-outline" role="button">Get it off your chest</a>
    </p>

  </div>
</div>
