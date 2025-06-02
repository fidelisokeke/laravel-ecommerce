 <!-- Header -->
 <header class="header">
     <!-- Top Bar -->
     <div class="top-bar">
         <div class="container">
             Free shipping on orders over $50! | Call us: (555) 123-4567
         </div>
     </div>

     <!-- Main Header -->
     <div class="main-header">
         <div class="container">
             <div class="header-content">
                 <!-- Logo -->
                 <div class="logo">
                     <h1>Omart</h1>
                 </div>

                 <!-- Desktop Navigation -->
                 <nav class="desktop-nav">
                     <a href="{{url('/')}}" class="nav-link">Home</a>
                     <a href="#" class="nav-link">Categories</a>


                 </nav>

                 <!-- Search Bar -->
                 <div class="search-container">
                     <div class="search-bar">
                         <input type="text" placeholder="Search products..." class="search-input">
                         <svg class="search-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                             <circle cx="11" cy="11" r="8"></circle>
                             <path d="m21 21-4.35-4.35"></path>
                         </svg>
                     </div>
                 </div>

                 <!-- Right Icons -->
                 <div class="header-icons">

                     @if (Route::has('login'))
                     @auth

                     <form style="padding-bottom: 2px;" method="POST" action="{{ route('logout') }}">
                         @csrf
                         <input class="btn btn-success" type="submit" value="logout">

                     </form>
                     @else






                     <a href="{{url('/login')}}" class="nav-link">login</a>
                     <a href="{{url('/register')}}" class="nav-link">register</a>
                     @endauth
                     @endif

                     <button class="icon-btn">
                         <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                             <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                             <circle cx="12" cy="7" r="4"></circle>
                         </svg>
                     </button>
                     <button class="icon-btn">
                         <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                             <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                         </svg>
                     </button>

                     @if (Route::has('login'))
                     @auth

                      <button class="icon-btn cart-btn">
                         <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                             <path d="M9 22C9.55228 22 10 21.5523 10 21C10 20.4477 9.55228 20 9 20C8.44772 20 8 20.4477 8 21C8 21.5523 8.44772 22 9 22Z"></path>
                             <path d="M20 22C20.5523 22 21 21.5523 21 21C21 20.4477 20.5523 20 20 20C19.4477 20 19 20.4477 19 21C19 21.5523 19.4477 22 20 22Z"></path>
                             <path d="M1 1H5L7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6"></path>
                         </svg>
                         <a href="{{url('myorders')}}">
                         <span class="cart-count">My Orders</span></a>
                     </button>



                     <button class="icon-btn cart-btn">
                         <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                             <path d="M9 22C9.55228 22 10 21.5523 10 21C10 20.4477 9.55228 20 9 20C8.44772 20 8 20.4477 8 21C8 21.5523 8.44772 22 9 22Z"></path>
                             <path d="M20 22C20.5523 22 21 21.5523 21 21C21 20.4477 20.5523 20 20 20C19.4477 20 19 20.4477 19 21C19 21.5523 19.4477 22 20 22Z"></path>
                             <path d="M1 1H5L7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6"></path>
                         </svg>
                         <a href="{{url('mycart')}}">
                         <span class="cart-count">{{$count}}</span></a>
                     </button>
                     @else

                     @endauth
                     @endif

                     <button class="mobile-menu-btn" id="mobileMenuBtn">
                         <svg class="menu-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                             <line x1="3" y1="6" x2="21" y2="6"></line>
                             <line x1="3" y1="12" x2="21" y2="12"></line>
                             <line x1="3" y1="18" x2="21" y2="18"></line>
                         </svg>
                         <svg class="close-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display: none;">
                             <line x1="18" y1="6" x2="6" y2="18"></line>
                             <line x1="6" y1="6" x2="18" y2="18"></line>
                         </svg>
                     </button>
                 </div>
             </div>

             <!-- Mobile Search -->
             <div class="mobile-search">
                 <div class="search-bar">
                     <input type="text" placeholder="Search products..." class="search-input">
                     <svg class="search-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                         <circle cx="11" cy="11" r="8"></circle>
                         <path d="m21 21-4.35-4.35"></path>
                     </svg>
                 </div>
             </div>

             <!-- Mobile Menu -->
             <nav class="mobile-menu" id="mobileMenu">
                 <a href="#" class="mobile-nav-link">Home</a>
                 <a href="#" class="mobile-nav-link">Shop</a>
                 <a href="#" class="mobile-nav-link">Categories</a>
                 <a href="#" class="mobile-nav-link">About</a>
                 <a href="#" class="mobile-nav-link">Contact</a>
             </nav>
         </div>
     </div>
 </header>