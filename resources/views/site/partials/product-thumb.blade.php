<div class="relative group glide__slide">
    <div class="sm:px-5 lg:px-4">
        <div class="relative rounded flex justify-center items-center">
            <div class="aspect-w-1 aspect-h-1 w-full">
                <img src="{{$product->getThumbPath()}}"
                    alt="product image"
                    class="object-cover" />
            </div>
            <div class="absolute top-0 right-0 bg-white px-5 py-1 m-4 rounded-full">
                <p class="text-v-green font-hk font-bold text-sm uppercase tracking-wide">
                    {{$product->tag ? $product->tag->name : 'Treandy' }}
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
                <a href="{{route('product.show',['slug' => $product->slug])}}"
                    class="bg-white hover:bg-primary-light rounded-full p-3 flex items-center transition-all mr-3">
                <img src="/assets/img/icons/icon-search.svg"
                    class="h-6 w-6"
                    alt="icon search" />
                </a>
                <form method="POST" action="{{route('wishlists.store')}}">
                @csrf  
                <input type="hidden" name="product_id" value="{{$product->id}}">  
                <button type="submit" 
                    class="bg-white hover:bg-primary-light rounded-full p-3 flex items-center transition-all">
                <img src="/assets/img/icons/icon-heart.svg"
                    class="h-6 w-6"
                    alt="icon heart" />
                </button>
                </form>
            </div>
        </div>
        <a href="{{$product->path()}}"
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
                    <span class="font-hk text-sm text-secondary ml-2">{{$product->ratings()->count()}}</span>
                </div>
            </div>
            <span class="font-hkbold text-primary text-xl">৳{{$product->special_price}}</span>
        </a>
    </div>
</div>