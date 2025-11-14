  @if (session('success'))
  <div class="flash-message bg-yellow-500 text-white px-4 py-2 rounded mb-3 ">
    {{ session('success') }}
  </div>
  @endif
  <header class="navbar">
    <div class="container navbar-content">
      <a href="/" class="logo-wrapper">
        <img src="/img/logoipsum-265.svg" alt="Logo" />
      </a>
      <button class="btn btn-default btn-navbar-toggle">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          style="width: 24px">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>
      <div class="navbar-auth">
        <a href="{{ route('bike.create') }}" class="btn btn-add-new-bike">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            style="width: 18px; margin-right: 4px">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
          </svg>

          Add new Bike
        </a>
        <div class="navbar-menu" tabindex="-1">
          <a href="javascript:void(0)" class="navbar-menu-handler">
            My Account
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              style="width: 20px">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="m19.5 8.25-7.5 7.5-7.5-7.5" />
            </svg>
          </a>
          <ul class="submenu">
            <li>
              <a href="my_cars.html">My Cars</a>
            </li>
            <li>
              <a href="watchlist.html">My Favourite Cars</a>
            </li>
            <li>
              <form action="{{ route('logout') }}" method="post">
                @csrf
                <button>Logout</button>
              </form>
            </li>
          </ul>
        </div>
        @if(!auth()->user())
        <x-signup-login-header-button />
        @endif
      </div>
    </div>
  </header>