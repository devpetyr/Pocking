    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <i class="fa-solid fa-arrow-up"></i>
    </button>
    <!-- header strat -->
    <header id="header">
      <div class="menuSec">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6">
              <a href="{{route('home')}}"><img src="{{asset('web/images/logo.png')}}" alt="img" /></a>
            </div>
            <div class="col-md-9 d-none d-md-block">
              <ul id="menu">
                <li class="active"><a href="{{route('home')}}">Home</a></li>
                <li>
                  <a href="{{route('buy_instagram_followers')}}">Buy Instagram Followers
                  </a>
                </li>
                <li>
                  <a href="{{route('buy_instagram_views')}}">Buy Instagram Views </a>
                </li>
                <li>
                  <a href="{{route('buy_instagram_like')}}">Buy Instagram Likes</a>
                </li>
                @if (Auth::check() && Auth::user()->user_role == 2)
                <li class="getquote"><a href="{{route('user_logout')}}">Logout</a></li>
                @else
                <li class="getquote"><a href="{{route('login')}}">Log In</a></li>
                @endif
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- header strat -->