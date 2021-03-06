   <div class="pb-20 md:pb-32">
      <div class="text-center mb-12">
         <h2 class="font-butler text-secondary text-3xl md:text-4xl lg:text-4.5xl">Related Products</h2>
         <p class="font-hk text-secondary-lighter text-lg md:text-xl pt-2 pb-6 sm:pb-8 lg:pb-0">Get the latest news & updates from Elyssi</p>
      </div>
      <div class="product-slider relative"
      x-data
      x-init="
         new Glide($el, {
             type: 'carousel',
             startAt: 1,
             perView: 4,
             gap: 0,
             peek: {
                 before: 50,
                 after: 50,
             },
             breakpoints: {
                 1024: {
                     perView: 3,
                     peek: {
                         before: 20,
                         after: 20,
                     },
                 },
                 768: {
                     perView: 2,
                     peek: {
                         before: 10,
                         after: 10,
                     },
                 },
                 600: {
                     perView: 1,
                     peek: {
                         before: 0,
                         after: 0,
                     },
                 },
             },
         })
         .mount();
      ">
         <div class="glide__track"
            data-glide-el="track">
            <div class="pt-12 relative glide__slides">
               @foreach($related as $relatedproduct)
               <div class="relative group glide__slide">
                  <div class="sm:px-5 lg:px-4">
                     <div class="relative rounded flex justify-center items-center">
                        <div class="aspect-w-1 aspect-h-1 w-full">
                           <img src="{{$relatedproduct->getThumbPath()}}"
                              alt="product image"
                              class="object-cover" />
                        </div>
                        <div class="absolute top-0 right-0 bg-white px-5 py-1 m-4 rounded-full">
                           <p class="text-v-blue font-hk font-bold text-sm uppercase tracking-wide">
                              trend
                           </p>
                        </div>
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 flex justify-center items-center bg-secondary bg-opacity-85 transition-opacity">
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
                            <a href="{{$relatedproduct->path()}}"
                                class="bg-white hover:bg-primary-light rounded-full p-3 flex items-center transition-all mr-3">
                            <img src="/assets/img/icons/icon-search.svg"
                                class="h-6 w-6"
                                alt="icon search" />
                            </a>
                            <form method="POST" action="{{route('wishlists.store')}}">
                            @csrf  
                            <input type="hidden" name="product_id" value="{{$relatedproduct->id}}">  
                            <button type="submit" 
                                class="bg-white hover:bg-primary-light rounded-full p-3 flex items-center transition-all">
                            <img src="/assets/img/icons/icon-heart.svg"
                                class="h-6 w-6"
                                alt="icon heart" />
                            </button>
                            </form>
                        </div>
                     </div>
                     <a href="/product"
                        class="flex justify-between items-center pt-6">
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
                              <span class="font-hk text-sm text-secondary ml-2">45</span>
                           </div>
                        </div>
                        <span class="font-hkbold text-primary text-xl">${{$product->special_price}}</span>
                     </a>
                  </div>
               </div>
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