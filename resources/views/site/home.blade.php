<x-front-layout>
    <div class="container"
        x-data
        x-init="collectionSliders">
        <div class="hero-slider relative"
            x-data
            x-init="new Glide('.hero-slider', { autoplay: 3000, type: 'carousel' }).mount()">
            <div class="glide__track"
                data-glide-el="track">
                <div class="glide__slides">
                    @foreach($sliders as $slider)
                    <div class="glide__slide">
                        <div class="bg-left sm:bg-center bg-no-repeat bg-cover"
                            style="background-image:url({{$slider->coverImagePath()}})">
                            <div class="py-48 px-5 sm:px-10 md:px-12 xl:px-24 text-center sm:text-left sm:w-5/6 lg:w-3/4 xl:w-2/3">
                                <h3 class=" font-butler font-medium text-secondary text-3xl sm:text-4xl md:text-5xl lg:text-6xl">{{$slider->title}}</h3>
                                <a href="{{$slider->link}}"
                                    class="btn btn-primary btn-lg mt-8">Know more</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="absolute bottom-0 inset-x-0 mb-6 z-30 text-center"
                data-glide-el="controls[nav]">
                @for ($i = 0; $i < $sliders->count(); $i++)
                    <span class="inline-block border border-primary transition-colors hover:bg-secondary-lighter p-1 rounded-full mr-1 focus:outline-none cursor-pointer"
                    data-glide-dir="={{$i}}"></span>
                @endfor
                
               
           
            </div>
        </div>
       

    
       
        <div class="flex flex-col md:flex-row py-20 md:py-24">
            <div
                class="w-4/5 sm:w-1/2 md:w-2/5 lg:w-1/3 mx-auto lg:mx-0 flex md:flex-col lg:flex-row items-start md:items-center justify-start md:justify-center md:text-center lg:text-left md:border-r-2 last:border-r-0 md:border-primary-lighter pb-3 md:pb-0">
                <div>
                    <img src="/assets/img/icons/icon-shipping.svg"
                        class="w-12 h-12 object-contain object-center"
                        alt="icon" />
                </div>
                <div class="ml-6 md:mt-3 lg:mt-0">
                    <h3 class="font-hk font-semibold text-primary text-xl tracking-wide">
                        Free shipping
                    </h3>
                    <p class="font-hk text-secondary-lighter text-base tracking-wide">
                        On all orders over $30
                    </p>
                </div>
            </div>

            <div
                class="w-4/5 sm:w-1/2 md:w-2/5 lg:w-1/3 mx-auto lg:mx-0 flex md:flex-col lg:flex-row items-start md:items-center justify-start md:justify-center md:text-center lg:text-left md:border-r-2 last:border-r-0 md:border-primary-lighter pb-3 md:pb-0">
                <div>
                    <img src="/assets/img/icons/icon-support.svg"
                        class="w-12 h-12 object-contain object-center"
                        alt="icon" />
                </div>
                <div class="ml-6 md:mt-3 lg:mt-0">
                    <h3 class="font-hk font-semibold text-primary text-xl tracking-wide">
                        Always available
                    </h3>
                    <p class="font-hk text-secondary-lighter text-base tracking-wide">
                        24/7 call center available
                    </p>
                </div>
            </div>
            <div
                class="w-4/5 sm:w-1/2 md:w-2/5 lg:w-1/3 mx-auto lg:mx-0 flex md:flex-col lg:flex-row items-start md:items-center justify-start md:justify-center md:text-center lg:text-left md:border-r-2 last:border-r-0 md:border-primary-lighter pb-3 md:pb-0">
                <div>
                    <img src="/assets/img/icons/icon-return.svg"
                        class="w-12 h-12 object-contain object-center"
                        alt="icon" />
                </div>
                <div class="ml-6 md:mt-3 lg:mt-0">
                    <h3 class="font-hk font-semibold text-primary text-xl tracking-wide">
                        Free returns
                    </h3>
                    <p class="font-hk text-secondary-lighter text-base tracking-wide">
                        30 days free return policy
                    </p>
                </div>
            </div>
        </div>
        
        <div class="pb-20 md:pb-24 lg:pb-32">
            <div class="flex flex-col sm:flex-row justify-between items-center sm:pb-4 lg:pb-0 mb-12 sm:mb-10">
                <div class="text-center sm:text-left">
                    <h2 class=" font-butler  text-secondary text-3xl md:text-4xl lg:text-4.5xl">Featured Products</h2>
                    <p class="font-hk text-secondary-lighter text-lg md:text-xl pt-2">Be styling, no matter the season!</p>
                </div>
                 @if(Session::has('message'))
                <div class="inline-block justify-center mr-8 text-primary">
                <b class="capitalize">{{Session::get('message')}}
                </div>
                @endif
       
                <a href="/collection-grid"
                    class="flex items-center group pt-8 sm:pt-0 border-b border-primary transition-colors hover:border-primary-light font-hk text-xl text-primary">
                Show more
                <i class="bx bx-chevron-right text-primary transition-colors group-hover:text-primary-light pl-3 pt-2 text-xl"></i>
                </a>
            </div>
            <div class="product-slider relative"
                x-data
                x-init="productSlider">
                <div class="glide__track"
                    data-glide-el="track">
                    <div class="pt-12 relative glide__slides">
                        @foreach($featuredProducts as $product)
                        @include('site.partials.product-thumb')
                        @endforeach
                        
                    </div>
                </div>
                <div data-glide-el="controls">
                    <div class="transition-all shadow-md rounded-full absolute left-25 sm:left-35 md:left-0 top-0 md:top-50 transform -translate-y-1/2 bg-grey hover:bg-primary border border-grey-dark z-30 cursor-pointer group"
                        data-glide-dir="<">
                        <div class="h-12 w-12 flex items-center justify-center">
                            <i class="bx bx-chevron-left text-primary transition-colors group-hover:text-white text-3xl leading-none"></i>
                        </div>
                    </div>
                    <div class="transition-all shadow-md rounded-full absolute right-25 sm:right-35 md:right-0 top-0 md:top-50 transform -translate-y-1/2 bg-grey hover:bg-primary border border-grey-dark z-30 cursor-pointer group"
                        data-glide-dir=">">
                        <div class="h-12 w-12 flex items-center justify-center">
                            <i class="bx bx-chevron-right text-primary transition-colors group-hover:text-white text-3xl leading-none"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full relative">
        <div class="absolute inset-y-0 right-0 w-13/14 bg-center bg-no-repeat bg-cover"
            style="background-image:url(/assets/img/bg-products.png)"></div>
        <div class="w-2/3 md:max-w-screen-sm lg:w-5/6 lg:max-w-full xl:w-5/6  2xl:max-w-screen-xxl mx-auto lg:ml-auto lg:mr-10 xl:mr-16  2xl:mx-auto relative z-10">
            @foreach($featuredCategories as $fc)
                @if($loop->odd)
                <div class="py-16 flex">
                    <div class="hidden lg:inline-block w-3/5 2xl:w-3/4 bg-white py-12 px-4 relative">
                        <div class="collection-slider">
                            <div class="glide__track"
                                data-glide-el="track">
                                <div class="glide__slides">
                                    @foreach($fc->products as $product)
                                    @include('site.partials.product-slider')
                                    @endforeach
                                    
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/3 2xl:w-1/4 lg:pl-6 xl:pl-8">
                        <div class="text-right">
                            <h2 class="font-hkbold text-white text-2xl lg:text-xl xl:text-2xl  2xl:text-3xl tracking-wide">{{$fc->description}}</h2>
                            <p class="font-hk text-secondary-lighter text-lg pt-1">Featured Collection</p>
                        </div>
                        <div class="relative group">
                            <div class="h-88 sm:h-120 lg:h-80 ml-auto mb-auto bg-center bg-no-repeat bg-cover mt-14"
                                style="background-image:url({{ $fc->coverImagePath()}})">
                            </div>
                            <div
                                class="absolute inset-0 bg-secondary opacity-0 group-hover:opacity-75 pointer-events-none group-hover:pointer-events-auto   transition-all overflow-hidden">
                            </div>
                            <div class="absolute opacity-0 group-hover:opacity-100 flex justify-center items-center inset-0 mx-auto group transition-opacity">
                                <a href="{{$fc->path()}}"
                                    class="bg-primary hover:bg-primary-light font-hk font-semibold transition-colors text-sm text-white px-5 md:px-8 py-4 md:py-5 rounded uppercase focus:outline-none inline-block tracking-wide">View
                                All Product</a>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="pb-16">
                    <div class="ml-auto flex justify-between">
                        <div class="w-full lg:w-1/3 2xl:w-1/4 lg:pr-6 xl:pr-8">
                            <div class="text-left">
                                <h2 class="font-hkbold text-white text-2xl lg:text-xl xl:text-2xl  2xl:text-3xl tracking-wide">{{$fc->description}}</h2>
                                <p class="font-hk text-secondary-lighter text-lg pt-1">Featured Collection</p>
                            </div>
                            <div class="relative group">
                                <div class="h-88 sm:h-120 lg:h-80 ml-auto mb-auto bg-center bg-no-repeat bg-cover mt-14 relative"
                                    style="background-image:url({{ $fc->coverImagePath()}})">
                                </div>
                                <div
                                    class="absolute inset-0 bg-secondary opacity-0 group-hover:opacity-75 pointer-events-none group-hover:pointer-events-auto transition-all overflow-hidden">
                                </div>
                                <div class="absolute opacity-0 group-hover:opacity-100 flex justify-center items-center inset-0 mx-auto group">
                                    <a href="/"
                                        class="bg-primary hover:bg-primary-light font-hk font-semibold transition-colors text-sm text-white px-5 md:px-8 py-4 md:py-5 rounded uppercase focus:outline-none inline-block tracking-wide">View
                                    All Product</a>
                                </div>
                            </div>
                        </div>
                        <div class="hidden lg:block w-3/5 2xl:w-3/4 bg-white">
                            <div class="py-12 px-4">
                                <div class="collection-slider">
                                    <div class="glide__track"
                                        data-glide-el="track">
                                        <div class="glide__slides">
                                            @foreach($fc->products as $product)
                                            @include('site.partials.product-slider')
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
    <div class="container">
        <div class="py-5 sm:py-16 mt-10 md:mt-16 mb-12 sm:mb-6 md:mb-12 lg:mb-28 relative w-full">
            <div class="bg-left bg-no-repeat bg-cover lg:w-6/11 xl:w-3/5 h-80 sm:h-100 md:h-108 lg:h-120 z-20 relative"
                style="background-image:url({{$newArrivalCategory->coverImagePath() }}">
            </div>
            <div class="lg:absolute right-0 bottom-0 bg-right bg-no-repeat bg-cover lg:w-6/11 xl:w-3/5 ml-auto h-80 sm:h-100 md:h-108 lg:h-120"
                style="background-image:url(/assets/img/bg-coupon.png)">
                <div class="py-14 sm:py-20 xl:py-24 lg:pr-8 lg:pl-40 xl:pl-80 w-5/6 sm:w-3/5 lg:w-full mx-auto text-center lg:text-left">
                    <span class="font-hk font-medium text-white text-lg md:text-xl uppercase">New Arrivals</span>
                    <h2 class=" font-butler font-medium text-white text-3xl sm:text-4xl md:text-4.5xl xl:text-5xl pt-5 leading-tight">{{$newArrivalCategory->description}}</h2>
                    <a href="{{ $newArrivalCategory->path()}}"
                        class="btn btn-primary btn-lg mt-8 md:mt-10">Get it now</a>
                </div>
            </div>
        </div>
        <div class="pb-20 md:pb-32">
            <div class="text-center pb-12">
                <h2 class=" font-butler  text-secondary text-3xl md:text-4xl lg:text-4.5xl">On Sale For Today</h2>
                <p class="font-hk text-secondary-lighter text-lg md:text-xl">Checkout our latest collection!</p>
            </div>
            <div class="product-slider relative"
                x-data
                x-init="productSlider">
                <div class="glide__track"
                    data-glide-el="track">
                    <div class="pt-12 relative glide__slides">
                        @foreach($onsaleTodayProducts as $product)
                        @include('site.partials.product-thumb')
                        @endforeach
                        
                    </div>
                </div>
                <div data-glide-el="controls">
                    <div class="transition-all shadow-md rounded-full absolute left-25 sm:left-35 md:left-0 top-0 md:top-50 transform -translate-y-1/2 bg-grey hover:bg-primary border border-grey-dark z-30 cursor-pointer group"
                        data-glide-dir="<">
                        <div class="h-12 w-12 flex items-center justify-center">
                            <i class="bx bx-chevron-left text-primary transition-colors group-hover:text-white text-3xl leading-none"></i>
                        </div>
                    </div>
                    <div class="transition-all shadow-md rounded-full absolute right-25 sm:right-35 md:right-0 top-0 md:top-50 transform -translate-y-1/2 bg-grey hover:bg-primary border border-grey-dark z-30 cursor-pointer group"
                        data-glide-dir=">">
                        <div class="h-12 w-12 flex items-center justify-center">
                            <i class="bx bx-chevron-right text-primary transition-colors group-hover:text-white text-3xl leading-none"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-20">
        <div class="bg-center bg-no-repeat bg-cover"
            style="background-image:url(/assets/img/bg-cta.png)">
            <div class="py-16 md:py-20 text-center">
                <h3 class="font-butler text-white text-3xl sm:text-4xl tracking-wide">Let's keep in touch</h3>
                <p class="font-hk text-white text-lg sm:text-xl pt-3 px-6">Join our list and save 15% off your first order.</p>
                <form class="pt-10 sm:pt-12">
                    <div class="w-5/6 sm:w-3/4 lg:w-3/5 xl:w-1/2 mx-auto flex flex-col sm:flex-row justify-center items-center">
                        <label for="cta_email"
                            class="block relative h-0 w-0 overflow-hidden">Email</label>
                        <input type="email"
                            name="cta_email"
                            id="cta_email"
                            placeholder="ENTER YOUR EMAIL"
                            class="form-input bg-transparent text-sm text-white border-white uppercase placeholder-grey-dark" />
                        <button type="button"
                            class="btn btn-primary sm:ml-5 mt-4 sm:mt-0 w-full sm:w-auto"
                            aria-label="Subscribe button">SUBSCRIBE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide@3.4.1/dist/glide.min.js"
            integrity="sha256-CnNQJd80jPuIDyeQRRq7+Wgt+++Kl0dZLt4ETNmxMIw="
            crossorigin="anonymous"
            defer></script>

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/@glidejs/glide@3.4.1/dist/css/glide.core.min.css"
          integrity="sha256-Ev8y2mML/gGa4LFVZgNpMTjKwj34q4pC4DcseWeRb9w="
          crossorigin="anonymous" />

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/@glidejs/glide@3.4.1/dist/css/glide.theme.min.css"
          integrity="sha256-sw/JiPOV1ZfcXjqBJT1vqaA4vBGeiqn+b7PDhVv4OA4="
          crossorigin="anonymous" />
    

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.min.js"
            defer></script>
</x-front-layout>