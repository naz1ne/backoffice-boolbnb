<header id="site_header" class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-2 shadow">
      <div class="container">
            <img src="/img/logoBnBlateral.png" alt="" class="logo">

            <ul class="navbar-nav ml-auto">
                  <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Disconnetti') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                              </form>
                        </div>
                  </li>
            </ul>
      </div>
</header>