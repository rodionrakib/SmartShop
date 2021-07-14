<x-front-layout>
    <div class="container">
        <div class="flex relative">
            <div class="bg-no-repeat bg-cover bg-center w-3/4 ml-auto h-64 md:h-68"
                style="background-image:url(https://source.unsplash.com/1000x640/?-hero)">
            </div>
            <div class="w-full h-64 md:h-68 bg-no-repeat bg-cover absolute top-0 left-0 c-hero-gradient-bg">
                <div class="py-16 md:py-20 px-6 sm:px-12 lg:px-20 text-center">
                    <h1 class=" font-butler text-white text-2xl sm:text-3xl md:text-4.5xl lg:text-5xl">
                        Search
                    </h1>
                    <form class="flex justify-center pt-6 md:pt-8" method="get" action="/search">
                        <input type="text" name="search" placeholder="Search our store" value="{{ request('search') }}"
                            class="px-6 w-3/5 md:w-2/5 lg:w-1/3 xl:w-1/4 border-none rounded-l">
                        <button
                            class="bg-primary hover:bg-primary-light px-8 hover:px-5 py-3 rounded-r focus:outline-none border-2 transition-all border-transparent hover:border-white coursor-pointer">
                            <img src="/assets/img/icons/icon-search-white.svg"
                                class="w-5 sm:w-6 md:w-8 h-5 sm:h-6 md:h-8" alt="icon search" />
                        </button>
                    </form>
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

            <div class="flex items-center justify-start sm:justify-end mt-6 sm:mt-0 w-80">
               <span class="font-hk text-secondary md:text-lg mr-2 -mt-2 inline-block">Sort by:</span>
               <select class="w-2/3 form-select">
                  <option value="0">Best Match</option>
                  <option value="1">Price: Low - High</option>
                  <option value="2">Price: High - Low</option>
               </select>
            </div>
         </div>

        <div class="py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10">

                <div class="w-full relative group lg:last:hidden xl:last:block">
                    <div class="relative rounded flex justify-center items-center">
                        <div class="w-full h-68 bg-center bg-no-repeat bg-cover"
                            style="background-image:url(https://source.unsplash.com/1000x640/?ass-1)">
                        </div>
                        <span
                            class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-v-green text-sm uppercase tracking-wide">New</span>

                        <div
                            class="absolute opacity-0 transition-opacity group-hover:opacity-100 flex justify-center items-center py-28 inset-0 group bg-secondary bg-opacity-85">
                            <a href="/cart"
                                class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
                                <img src="/assets/img/icons/icon-cart.svg " class="h-6 w-6" alt="icon cart" />
                            </a>
                            <a href="/product"
                                class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
                                <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6"
                                    alt="icon search" />
                            </a>
                            <a href="/account/wishlist/"
                                class="bg-white hover:bg-primary-light  rounded-full px-3 py-3 flex items-center transition-all ">
                                <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                            </a>
                        </div>
                    </div>
                    <div class="flex justify-between items-center pt-6">
                        <div>
                            <h3 class="font-hk text-base text-secondary">Cat eye</h3>
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
                        <span class="font-hk font-bold text-primary text-xl">$75.0</span>
                    </div>
                </div>

                @foreach ($products as $product)
                @include('site.partials.product-card')   
                @endforeach
                

               


            </div>
            <div class="py-16 flex justify-center mx-auto">
                <span
                    class="font-hk font-semibold text-grey-darkest transition-colors hover:text-black pr-5 cursor-pointer">Previous</span>
                <span
                    class="font-hk font-semibold text-black transition-colors hover:text-white text-sm hover:bg-primary h-6 w-6 rounded-full flex items-center justify-center mr-3 cursor-pointer">1</span>
                <span
                    class="font-hk font-semibold text-black transition-colors hover:text-white text-sm hover:bg-primary h-6 w-6 rounded-full flex items-center justify-center mr-3 cursor-pointer">2</span>
                <span
                    class="font-hk font-semibold text-black transition-colors hover:text-white text-sm hover:bg-primary h-6 w-6 rounded-full flex items-center justify-center mr-3 cursor-pointer">3</span>
                <span
                    class="font-hk font-semibold text-grey-darkest transition-colors hover:text-black pl-2 cursor-pointer">Next</span>

            </div>
        </div>
    </div>
</x-front-layout>