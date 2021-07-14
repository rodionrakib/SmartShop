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
          <a href="{{route('products.show',['product' => $product->slug])}}"
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
             <p class="font-hk text-sm text-secondary ml-2">({{$product->ratings_count}})</p>
          </div>
       </div>
       <span class="font-hk font-bold text-primary text-xl">৳{{$product->special_price}}</span>
    </div>
 </div>