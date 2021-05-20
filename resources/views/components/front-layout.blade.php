<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta content="IE=edge,chrome=1"
         http-equiv="X-UA-Compatible" />
      <meta content="width=device-width, initial-scale=1, shrink-to-fit=no"
         name="viewport" />
      <title>{{$title ?? 'Smart Student Shop'}}</title>
      <meta property="og:title"
         content="Login | Elyssi Template" />
      <meta property="og:locale"
         content="en_US" />
      <meta name="theme-color"
         content="#f35627" />
      <link rel="canonical"
         href="https://elyssi.tailwindmade.com/pages/login" />
      <meta property="og:url"
         content="https://elyssi.tailwindmade.com/pages/login" />
      <meta name="description"
         content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." />
      <meta property="og:site_name"
         content="Elyssi Template" />
      <meta property="og:image"
         content="https://elyssi.tailwindmade.com/assets/img/social.jpg" />
      <link rel="icon"
         type="image/png"
         href="/assets/img/favicon.png" />
      <meta name="twitter:card"
         content="summary_large_image" />
      <meta name="csrf-token" content="{{ csrf_token() }}" />

      <meta name="twitter:site"
         content="@tailwindmade" />
      <link rel="stylesheet"
         href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css"
         integrity="sha256-imWjOiEEAcjWdL1+inhBu1dWYFyXuiO9vpJVEQd3y/c="
         crossorigin="anonymous" />
      <link rel="stylesheet"
         href="{{asset('assets/styles/fonts.css')}}"
         media="screen"
         crossorigin="anonymous" />
      <link rel="stylesheet"
         href="{{asset('/assets/styles/main.min.css')}}"
         media="screen"
         crossorigin="anonymous" />
      <!-- Facebook Pixel Code -->
      <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '458533281916325');
        fbq('track', 'PageView');
      </script>
      <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=458533281916325&ev=PageView&noscript=1"
      /></noscript>
      <!-- End Facebook Pixel Code -->
   </head>
   <body x-data="{
      modal: false,
      mobileMenu: false,
      mobileSearch: false,
      mobileCart: false
      }"
      :class="{ 'overflow-hidden max-h-screen': modal || mobileMenu }"
      @keydown.escape="modal = false">
      <div id="main">
         <div class="container relative">
            <div class="shadow-xs py-6 lg:py-10 z-50 relative">
               <div class="flex justify-between items-center">
                  <div class="flex items-center">
                     <div class="block lg:hidden">
                        <i class="bx bx-menu text-primary text-4xl"
                           @click="mobileMenu = !mobileMenu"></i>
                     </div>
                     <span @click="mobileSearch = !mobileSearch"
                        class="cursor-pointer border-2 transition-all border-transparent hover:border-primary rounded-full p-2 sm:p-4 ml-2 sm:ml-3 md:ml-5 lg:mr-8 group">
                     <img src="/assets/img/icons/icon-search.svg"
                        class="w-5 sm:w-6 md:w-8 h-5 sm:h-6 md:h-8 block group-hover:hidden"
                        alt="icon search" />
                     <img src="/assets/img/icons/icon-search-hover.svg"
                        class="w-5 sm:w-6 md:w-8 h-5 sm:h-6 md:h-8 hidden group-hover:block"
                        alt="icon search hover" />
                     </span>
                     <a href="/account/wishlist"
                        class="border-2 transition-all border-transparent hover:border-primary rounded-full p-2 sm:p-4 group hidden lg:block">
                     <img src="/assets/img/icons/icon-heart.svg"
                        class="w-5 sm:w-6 md:w-8 h-5 sm:h-6 md:h-8 block group-hover:hidden"
                        alt="icon heart" />
                     <img src="/assets/img/icons/icon-heart-hover.svg"
                        class="w-5 sm:w-6 md:w-8 h-5 sm:h-6 md:h-8 hidden group-hover:block"
                        alt="icon heart hover" />
                     </a>
                  </div>
                  <a href="/">
                  <img src="/assets/img/logo.svg"
                     class="w-28 sm:w-48 h-auto"
                     alt="logo" />
                  </a>
                  <div class="flex items-center">
                     <a href="{{route('account-details')}}"
                        class="border-2 transition-all border-transparent hover:border-primary rounded-full p-2 sm:p-4 group">
                     <img src="/assets/img/icons/icon-user.svg"
                        class="w-5 sm:w-6 md:w-8 h-5 sm:h-6 md:h-8 block group-hover:hidden"
                        alt="icon user" />
                     <img src="/assets/img/icons/icon-user-hover.svg"
                        class="w-5 sm:w-6 md:w-8 h-5 sm:h-6 md:h-8 hidden group-hover:block"
                        alt="icon user hover" />
                     </a>
                     <a href="{{route('cart.index')}}"
                        class="hidden lg:block border-2 transition-all border-transparent hover:border-primary rounded-full p-2 sm:p-4 ml-2 sm:ml-3 md:ml-5 lg:ml-8 group">
                     <img src="/assets/img/icons/icon-cart.svg"
                        class="w-5 sm:w-6 md:w-8 h-5 sm:h-6 md:h-8 block group-hover:hidden"
                        alt="icon cart" />
                     <img src="/assets/img/icons/icon-cart-hover.svg"
                        class="w-5 sm:w-6 md:w-8 h-5 sm:h-6 md:h-8 hidden group-hover:block"
                        alt="icon cart hover" />
                     </a>
                     <a  href="{{route('cart.index')}}" 
                        class="block lg:hidden border-2 transition-all border-transparent hover:border-primary rounded-full p-2 sm:p-4 ml-2 sm:ml-3 md:ml-5 lg:ml-8 group">
                     <img src="/assets/img/icons/icon-cart.svg"
                        class="w-5 sm:w-6 md:w-8 h-5 sm:h-6 md:h-8 block group-hover:hidden"
                        alt="icon cart" />
                     <img src="/assets/img/icons/icon-cart-hover.svg"
                        class="w-5 sm:w-6 md:w-8 h-5 sm:h-6 md:h-8 hidden group-hover:block"
                        alt="icon cart hover" />
                     </a>
                     <span class=" font-hk font-bold  text-primary-light tracking-wide">{{ Cart::count() }}</span>
                  </div>
                  <div class="hidden">
                     <i class="bx bx-menu text-primary text-3xl"
                        @click="mobileMenu = true"></i>
                  </div>
               </div>
               <div class="justify-center lg:pt-8 hidden lg:flex">
                  @include('site.partials.nav')
               </div>
            </div>
         </div>
         <div class="fixed inset-x-0 pt-20 md:top-28 z-50 opacity-0 pointer-events-none transition-all "
            :class="{ 'opacity-100 pointer-events-auto': mobileMenu }">
            @include('site.partials.mobile-nav')
         </div>
         <div class="block lg:hidden absolute inset-x-0 opacity-0 pointer-events-none z-50"
            :class="{ 'opacity-100 pointer-events-auto': mobileSearch }">
            <div class="w-full sm:w-1/2 absolute left-0 top-0 px-6 py-6 z-10 bg-white shadow-sm rounded">
               <form class="border border-grey-dark px-4 py-3 rounded-md flex items-center">
                  <button class="flex items-center"><i class="bx bx-search text-grey-darker text-xl pr-4 focus:outline-none"></i></button>
                  <input type="text"
                     name="search"
                     class="font-hk font-medium text-secondary outline-none border-grey-dark w-full placeholder-grey-darkest"
                     placeholder="Search for Products" />
               </form>
            </div>
         </div>
         <!-- <div class="absolute inset-x-0 opacity-0 pointer-events-none z-50"
            :class="{ 'opacity-100 pointer-events-auto': mobileCart }">
            <div class="w-full sm:w-1/2 absolute right-0 top-0 px-6 py-6 z-10 bg-white shadow-sm rounded">
               <div class="flex justify-between items-center border-b border-grey-dark pb-2">
                  <div class="flex items-center">
                     <i class="bx bx-x text-grey-darkest text-2xl sm:text-3xl mr-2 cursor-pointer"></i>
                     <div class="w-20 mx-0 h-20 rounded flex items-center justify-center">
                        <div class="w-16 h-16 mx-auto bg-center bg-no-repeat bg-cover"
                           style="background-image: url(/assets/img/unlicensed/backpack-1.png);">
                        </div>
                     </div>
                     <div class="pl-2">
                        <span class="font-hk text-grey-darkest text-base block">Winter Bag</span>
                        <span class="font-hk text-secondary text-base mt-2">$19</span>
                     </div>
                  </div>
                  <div class="flex pl-3 items-center">
                     <span class="border border-primary rounded-full h-6 w-6 flex items-center justify-center"><i class="bx bx-minus text-primary"></i></span>
                     <span class="font-hkbold text-primary text-lg block px-2">1</span>
                     <span class="border border-primary rounded-full h-6 w-6 flex items-center justify-center"><i class="bx bx-plus text-primary"></i></span>
                  </div>
               </div>
  
               <div class="flex justify-between pt-4">
                  <span class="font-hkbold text-secondary text-lg">Total</span>
                  <span class="font-hkbold text-secondary text-lg">$38</span>
               </div>
               <button type="submit"
                  class="btn btn-primary w-full mt-5"
                  aria-label="Login button">Checkout</button>
               <a href="/cart"
                  class="font-hk text-secondary md:text-lg pl-3 underline text-center block mt-4">Go to cart page</a>
            </div>
         </div> -->
         <div>
            <!-- unibeautify:enable -->
            {{ $slot }}
         </div>
         <div class="bg-center bg-no-repeat bg-cover"
            style="background-image:url(/assets/img/bg-footer.png)">
            <div class="container py-16 sm:py-20 md:py-24">
               <div class="w-5/6 mx-auto flex flex-col lg:flex-row items-center justify-between">
                  <div class="text-center lg:text-left">
                     <h4 class="font-hk font-bold text-white text-xl pb-8">Contact</h4>
                     <ul class="list-reset">
                        <li class="pb-2 block">
                           <a href="mailto:test.email0123@elyssi.com"
                              class="font-hk text-white transition-colors hover:text-primary text-base tracking-wide">admin@smartstudentshop.com</a>
                        </li>
                        <li class="pb-2 block">
                           <a href="tel:0123234222"
                              class="font-hk text-white transition-colors hover:text-primary text-base tracking-wide">01539542041</a>
                        </li>
                        <li class="pb-2 block">
                           <a href="https://elyssi.tailwindmade.com"
                              class="font-hk text-white transition-colors hover:text-primary text-base tracking-wide">Smart Student Shop</a>
                        </li>
                     </ul>
                  </div>
                  <div class="text-center py-16 lg:py-0">
                     <a href="/"
                        class="font-butler text-white text-4xl uppercase tracking-wider">Smart Student Shop.</a>
                     <div class="flex items-center justify-center pt-5">
                        <a href="https://www.google.com"
                           class="group">
                           <div class="bg-white group-hover:bg-primary rounded-full px-2 py-2 flex items-center mr-5 transition-colors">
                              <i class="bx bxl-facebook text-secondary transition-colors group-hover:text-white"></i>
                           </div>
                        </a>
                        <a href="https://www.google.com"
                           class="group">
                           <div class="bg-white group-hover:bg-primary rounded-full px-2 py-2 flex items-center mr-5 transition-colors">
                              <i class="bx bxl-twitter text-secondary transition-colors group-hover:text-white"></i>
                           </div>
                        </a>
                        <a href="https://www.google.com"
                           class="group">
                           <div class="bg-white group-hover:bg-primary rounded-full px-2 py-2 flex items-center mr-5 transition-colors">
                              <i class="bx bxl-instagram text-secondary transition-colors group-hover:text-white"></i>
                           </div>
                        </a>
                        <a href="https://www.google.com"
                           class="group">
                           <div class="bg-white group-hover:bg-primary rounded-full px-2 py-2 flex items-center mr-5 transition-colors">
                              <i class="bx bxl-pinterest text-secondary transition-colors group-hover:text-white"></i>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="text-center lg:text-left">
                     <h4 class="font-hk font-bold text-white text-xl pb-8">Link</h4>
                     <ul class="list-reset">
                        <li class="pb-2 block">
                           <a href="{{route('home')}}"
                              class="font-hk transition-colors text-white hover:text-primary text-base tracking-wide">Shop</a>
                        </li>
                        <li class="pb-2 block">
                           <a href="{{route('contact')}}"
                              class="font-hk transition-colors text-white hover:text-primary text-base tracking-wide">Contact Us</a>
                        </li>
                        <li class="pb-2 block">
                           <a href="/single"
                              class="font-hk transition-colors text-white hover:text-primary text-base tracking-wide">Terms & Conditions</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="container py-8">
            <p class="font-hk text-secondary text-base text-center">
               All rights reserved © 2021. Made with ❤️ by
               <a href="https://tailwindmade.com"
                  target="_blank"
                  class="text-primary">Tailwind Made</a>.
            </p>
         </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.min.js"
         defer></script>
      <script src="{{asset('/assets/js/main.js')}}"></script>
      @yield('js')
   </body>
</html>

