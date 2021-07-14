 <div class="glide__slide">
    <div class="group flex flex-col 2xl:w-88 mx-auto">
        <div class="relative rounded">
            <div class="aspect-w-4 aspect-h-3">
                <img src="{{$product->getThumbPath()}}"
                    alt=""
                    class=" object-cover" />
            </div>
            <span
                class="text-v-green absolute top-0 right-0 bg-white px-5 py-1 my-4 mx-4 rounded-full font-hk font-bold  text-sm uppercase tracking-wide">{{$product->tag ? $product->tag->name : 'Treandy' }}</span>
            <div
                class="absolute inset-0 opacity-0 group-hover:opacity-100 flex justify-center items-center bg-secondary bg-opacity-85 transition-opacity">
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
                <a href="{{$product->path()}}"
                    class="bg-white hover:bg-primary-light rounded-full p-3 flex items-center transition-all   mr-3">
                <img src="/assets/img/icons/icon-search.svg"
                    class="h-6 w-6"
                    alt="icon search" />
                </a>
                <form method="POST" action="{{route('wishlists.store')}}">
                @csrf  
                <input type="hidden" name="product_id" value="{{$product->id}}">
                <button type="submit" 
                    class="bg-white hover:bg-primary-light  rounded-full p-3 flex items-center transition-all  ">
                <img src="/assets/img/icons/icon-heart.svg"
                    class="h-6 w-6"
                    alt="icon heart" />
                </button>
                </form>
            </div>
        </div>
        <div class="flex justify-between items-center pt-6">
            <div>
                <p class="font-hk text-base text-secondary">{{$product->name}}</p>
                <div class="flex items-center">
                    <div class="flex items-center">
                        <i class="bx bxs-star text-primary"></i>
                        <i class="bx bxs-star text-primary"></i>
                        <i class="bx bxs-star text-primary"></i>
                        <i class="bx bxs-star text-primary"></i>
                        <i class="bx bxs-star text-primary"></i>
                    </div>
                    <p class="font-hk text-sm text-secondary ml-2">{{$product->ratings_count}}</p>
                </div>
            </div>
            <span class="font-hkbold text-primary text-xl">৳{{$product->special_price}}</span>
        </div>
    </div>
</div>