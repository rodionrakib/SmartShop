<x-front-layout>
 <div class="container">

   <div class="flex relative">
   		
   		@if($category->hasMedia('cover'))	
      	<div class="bg-no-repeat bg-cover bg-center w-3/4 ml-auto h-56 lg:h-68"
            style="background-image:url({{asset('assets/img/about-hero.png')}})">
         </div>
         @else
         <div class="bg-no-repeat bg-cover bg-center w-3/4 ml-auto h-56 lg:h-68"
         style="background-image:url(https://source.unsplash.com/1000x640/?ge-04)">
         </div>
      	
      	@endif
      <div class="w-full h-56 lg:h-68 bg-no-repeat bg-cover absolute top-0 left-0 c-hero-gradient-bg">
         <div class="py-20 px-6 sm:px-12 lg:px-20">
            <h1 class=" font-butler text-white text-2xl sm:text-3xl md:text-4.5xl lg:text-5xl">
               {{$category->name}}
            </h1>
            <div class="flex pt-2">
               <a href="/"
                  class="font-hk text-white text-base hover:text-primary transition-colors">Home</a>

               <span class="font-hk text-white text-base px-2">.</span>

               {!! $breadCrumb !!}
                
              <!--  <span class="font-hk text-white text-base">{{$category->name}}</span> -->
            </div>
         </div>
      </div>
   </div>

   <div class="py-10 flex flex-col sm:flex-row justify-between">
      <div class="flex items-center justify-start">
         <i class="bx bxs-filter-alt text-primary text-xl"></i>
         <p class="font-hk text-secondary md:text-lg px-2 leading-none block">Filter</p>
         <div class="flex items-center border border-grey-darker p-2 rounded">
            <a href="/collection-list"><i class="bx bx-menu text-grey-darker hover:text-secondary-light text-xl leading-none block transition-colors"></i></a>
            <div class="w-px h-4 mx-2 bg-grey-darker"></div>
            <a href="/collection-grid"><i class="bx bxs-grid text-grey-darker hover:text-secondary-light text-xl leading-none block transition-colors"></i></a>
         </div>
      </div>
      @if(Session::has('message'))
      <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-green-500">
        <span class="text-xl inline-block mr-5 align-middle">
          <i class="fas fa-bell" />
        </span>
        <span class="inline-block align-middle mr-8 text-primary">
          <b class="capitalize">{{Session::get('message')}}
        </span>
        <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none">
          <span>×</span>
        </button>
      </div>
      @endif
      <div class="flex items-center justify-start sm:justify-end mt-6 sm:mt-0 w-80">
         <span class="font-hk text-secondary md:text-lg mr-2 -mt-2 inline-block">Sort by:</span>
         <select class="w-2/3 form-select">
            <option value="0">Best Match</option>
            <option value="1">Price: Low - High</option>
            <option value="2">Price: High - Low</option>
         </select>
      </div>
   </div>

   <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10">

      @foreach($category->products as $product)
      <div class="w-full relative group lg:last:hidden xl:last:block">

         <div class="relative rounded flex justify-center items-center">
            @if($product->hasMedia())
            <div class="w-full h-68 bg-center bg-no-repeat bg-cover"
               style="background-image:url({{ $product->getMedia()->first()->getFullUrl()  }})">
            </div>
            @else
            <div class="w-full h-68 bg-center bg-no-repeat bg-cover"
               style="background-image:url(https://source.unsplash.com/1000x640/?ass-3)">
            </div>
            @endif
            <span
               class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-v-green text-sm uppercase tracking-wide">{{$product->tag ? $product->tag->name : 'Hot'  }}</span>
            <div class="absolute opacity-0 transition-opacity group-hover:opacity-100 flex justify-center items-center py-28 inset-0 group bg-secondary bg-opacity-85">
               <form method="POST" action="{{route('cart.store')}}">
               @csrf   
               <input type="hidden" name="id" value="{{$product->id}}">
               <button type="submit" 
                  class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
               <img src="/assets/img/icons/icon-cart.svg "
                  class="h-6 w-6"
                  alt="icon cart" />
               </button>
               </form>
               <a href="{{route('product.show',['slug' => $product->slug])}}"
                  class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
               <img src="/assets/img/icons/icon-search.svg"
                  class="h-6 w-6"
                  alt="icon search" />
               </a>

               <form method="POST" action="{{route('wishlists.store')}}">
               <input type="hidden" name="product_id" value="{{$product->id}}">
               @csrf  
               <button type="submit" 
                  class="bg-white hover:bg-primary-light  rounded-full px-3 py-3 flex items-center transition-all ">
               <img src="/assets/img/icons/icon-heart.svg"
                  class="h-6 w-6"
                  alt="icon heart" />
               </button>
               </form>


            </div>
         </div>
         <div class="flex justify-between items-center pt-6">
            <div>
               <h3 class="font-hk text-base text-secondary">{{$product->name}}</h3>
               <div class="flex items-center">
                  <div class="flex items-center">
                     <i class="bx bxs-star text-primary"></i>
                     <i class="bx bxs-star text-primary"></i>
                     <i class="bx bxs-star text-primary"></i>
                     <i class="bx bxs-star text-primary"></i>
                     <i class="bx bxs-star text-primary"></i>
                  </div>
                  <p class="font-hk text-sm text-secondary ml-2">({{$product->ratings()->count()}})</p>
               </div>
            </div>
            <span class="font-hk font-bold text-primary text-xl">৳{{$product->special_price}}</span>
         </div>
      </div>
      @endforeach
      
      <!-- <div class="w-full relative group lg:last:hidden xl:last:block">
         <div class="relative rounded flex justify-center items-center">
            <div class="w-full h-68 bg-center bg-no-repeat bg-cover"
               style="background-image:url(https://source.unsplash.com/1000x640/?tch-3)">
            </div>
            <span
               class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-v-blue text-sm uppercase tracking-wide">Trend</span>
            <div class="absolute opacity-0 transition-opacity group-hover:opacity-100 flex justify-center items-center py-28 inset-0 group bg-secondary bg-opacity-85">
               <a href="/cart"
                  class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
               <img src="/assets/img/icons/icon-cart.svg "
                  class="h-6 w-6"
                  alt="icon cart" />
               </a>
               <a href="/product"
                  class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
               <img src="/assets/img/icons/icon-search.svg"
                  class="h-6 w-6"
                  alt="icon search" />
               </a>
               <a href="/account/wishlist/"
                  class="bg-white hover:bg-primary-light  rounded-full px-3 py-3 flex items-center transition-all ">
               <img src="/assets/img/icons/icon-heart.svg"
                  class="h-6 w-6"
                  alt="icon heart" />
               </a>
            </div>
         </div>
         <div class="flex justify-between items-center pt-6">
            <div>
               <h3 class="font-hk text-base text-secondary">Silver One Watch</h3>
               <div class="flex items-center">
                  <div class="flex items-center">
                     <i class="bx bxs-star text-primary"></i>
                     <i class="bx bxs-star text-primary"></i>
                     <i class="bx bxs-star text-primary"></i>
                     <i class="bx bxs-star text-primary"></i>
                     <i class="bx bxs-star text-primary"></i>
                  </div>
                  <p class="font-hk text-sm text-secondary ml-2">(45)</p>
               </div>
            </div>
            <span class="font-hk font-bold text-primary text-xl">$137.0</span>
         </div>
      </div>
      <div class="w-full relative group lg:last:hidden xl:last:block">
         <div class="relative rounded flex justify-center items-center">
            <div class="w-full h-68 bg-center bg-no-repeat bg-cover"
               style="background-image:url(https://source.unsplash.com/1000x640/?tch-4)">
            </div>
            <span
               class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-primary-light text-sm uppercase tracking-wide">25%</span>
            <div class="absolute opacity-0 transition-opacity group-hover:opacity-100 flex justify-center items-center py-28 inset-0 group bg-secondary bg-opacity-85">
               <a href="/cart"
                  class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
               <img src="/assets/img/icons/icon-cart.svg "
                  class="h-6 w-6"
                  alt="icon cart" />
               </a>
               <a href="/product"
                  class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
               <img src="/assets/img/icons/icon-search.svg"
                  class="h-6 w-6"
                  alt="icon search" />
               </a>
               <a href="/account/wishlist/"
                  class="bg-white hover:bg-primary-light  rounded-full px-3 py-3 flex items-center transition-all ">
               <img src="/assets/img/icons/icon-heart.svg"
                  class="h-6 w-6"
                  alt="icon heart" />
               </a>
            </div>
         </div>
         <div class="flex justify-between items-center pt-6">
            <div>
               <h3 class="font-hk text-base text-secondary">Princess</h3>
               <div class="flex items-center">
                  <div class="flex items-center">
                     <i class="bx bxs-star text-primary"></i>
                     <i class="bx bxs-star text-primary"></i>
                     <i class="bx bxs-star text-primary"></i>
                     <i class="bx bxs-star text-primary"></i>
                     <i class="bx bxs-star text-primary"></i>
                  </div>
                  <p class="font-hk text-sm text-secondary ml-2">(45)</p>
               </div>
            </div>
            <span class="font-hk font-bold text-primary text-xl">$145.0</span>
         </div>
      </div>
      <div class="w-full relative group lg:last:hidden xl:last:block">
         <div class="relative rounded flex justify-center items-center">
            <div class="w-full h-68 bg-center bg-no-repeat bg-cover"
               style="background-image:url(https://source.unsplash.com/1000x640/?tch-5)">
            </div>
            <span
               class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-v-red text-sm uppercase tracking-wide">Hot</span>
            <div class="absolute opacity-0 transition-opacity group-hover:opacity-100 flex justify-center items-center py-28 inset-0 group bg-secondary bg-opacity-85">
               <a href="/cart"
                  class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
               <img src="/assets/img/icons/icon-cart.svg "
                  class="h-6 w-6"
                  alt="icon cart" />
               </a>
               <a href="/product"
                  class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
               <img src="/assets/img/icons/icon-search.svg"
                  class="h-6 w-6"
                  alt="icon search" />
               </a>
               <a href="/account/wishlist/"
                  class="bg-white hover:bg-primary-light  rounded-full px-3 py-3 flex items-center transition-all ">
               <img src="/assets/img/icons/icon-heart.svg"
                  class="h-6 w-6"
                  alt="icon heart" />
               </a>
            </div>
         </div>
         <div class="flex justify-between items-center pt-6">
            <div>
               <h3 class="font-hk text-base text-secondary">Silver One for Men</h3>
               <div class="flex items-center">
                  <div class="flex items-center">
                     <i class="bx bxs-star text-primary"></i>
                     <i class="bx bxs-star text-primary"></i>
                     <i class="bx bxs-star text-primary"></i>
                     <i class="bx bxs-star text-primary"></i>
                     <i class="bx bxs-star text-primary"></i>
                  </div>
                  <p class="font-hk text-sm text-secondary ml-2">(45)</p>
               </div>
            </div>
            <span class="font-hk font-bold text-primary text-xl">$140.0</span>
         </div>
      </div> -->
   </div>
   <div class="py-16 flex justify-center mx-auto">
      <span class="font-hk font-semibold text-grey-darkest transition-colors hover:text-black pr-5 cursor-pointer">Previous</span>
      <span
         class="font-hk font-semibold text-black transition-colors hover:text-white text-sm hover:bg-primary h-6 w-6 rounded-full flex items-center justify-center mr-3 cursor-pointer">1</span>
      <span
         class="font-hk font-semibold text-black transition-colors hover:text-white text-sm hover:bg-primary h-6 w-6 rounded-full flex items-center justify-center mr-3 cursor-pointer">2</span>
      <span
         class="font-hk font-semibold text-black transition-colors hover:text-white text-sm hover:bg-primary h-6 w-6 rounded-full flex items-center justify-center mr-3 cursor-pointer">3</span>
      <span class="font-hk font-semibold text-grey-darkest transition-colors hover:text-black pl-2 cursor-pointer">Next</span>
   </div>
</div>
</x-front-layout>