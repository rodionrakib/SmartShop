<x-front-layout>
<!-- unibeautify:enable -->
<div class="container border-t border-grey-dark">
   <div class="pt-10 sm:pt-12 pb-16 sm:pb-20 lg:pb-24 flex flex-col lg:flex-row justify-between">

      @include('site.partials.account-nav')
      
      <div class="lg:w-3/4 mt-12 lg:mt-0">
         @if($products->count() > 0 )
         <div class="bg-grey-light py-8 px-5 md:px-8">
            <h1 class="font-hkbold text-secondary text-2xl pb-6 text-center sm:text-left">My Wishlist</h1>
       
            <div class="hidden sm:block">
               <div class="flex justify-between pb-3">
                  <div class="w-1/3 md:w-2/5 pl-4">
                     <span class="font-hkbold text-secondary text-sm uppercase">Product Name</span>
                  </div>
                  <div class="w-1/4 xl:w-1/5 text-center">
                     <span class="font-hkbold text-secondary text-sm uppercase">Quantity</span>
                  </div>
                  <div class="w-1/6 md:w-1/5 text-center mr-3">
                     <span class="font-hkbold text-secondary text-sm uppercase">Price</span>
                  </div>
                  <div class="w-3/10 md:w-1/5 text-center">
                     <span class="font-hkbold text-secondary text-sm uppercase pr-8 md:pr-16 xl:pr-8">Action</span>
                  </div>
               </div>
            </div>
            @foreach($products as $product)
           
            <div class="bg-white shadow px-4 py-5 sm:py-4 rounded mb-3 flex flex-col sm:flex-row justify-between items-center">
               <form method="POST" action="{{route('wishlists.destroy',$product->id)}}">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="bx bx-x text-grey-darkest text-2xl sm:text-3xl mr-6 cursor-pointer"></button>
               </form>
               <div class="w-full sm:w-1/3 md:w-2/5 flex flex-col md:flex-row md:items-center border-b sm:border-b-0 border-grey-dark pb-4 sm:pb-0 text-center sm:text-left">
                  <span class="font-hkbold text-secondary text-sm uppercase text-center pb-2 block sm:hidden">Product Name</span>
                  <div class="w-20 mx-auto sm:mx-0 relative sm:mr-3 sm:pr-0">
                     <div class="aspect-w-1 aspect-h-1 w-full">
                        <img src="{{$product->getMedia()->first()->getFullUrl()}}"
                           alt="product image"
                           class="object-cover" />
                     </div>
                  </div>
                  <span class="font-hk text-secondary text-base mt-2">{{$product->name}}</span>
               </div>
               <div class="w-full sm:w-1/6 md:w-1/6 xl:w-1/5 text-center border-b sm:border-b-0 border-grey-dark pb-4 sm:pb-0">
                  <span class="font-hkbold text-secondary text-sm uppercase text-center pt-3 pb-2 block sm:hidden">Quantity</span>
                  <span class="font-hk text-secondary">1</span>
               </div>
               <div class="w-full sm:w-1/6 xl:w-1/5 text-center sm:text-right sm:pr-6 xl:pr-16 pb-4 sm:pb-0">
                  <span class="font-hkbold text-secondary text-sm uppercase text-center pt-3 pb-2 block sm:hidden">Price</span>
                  <span class="font-hk text-secondary">${{$product->special_price}}</span>
               </div>
               <form method="POST" action="{{route('order-now')}}">
                  @csrf
                  <input type="hidden" name="id" value="{{$product->id}}" >
               <button type="submit" 
                  class="btn btn-primary whitespace-nowrap">Order Now</button>
               </form>
            </div>
            @endforeach
            <!-- <div class="bg-white shadow px-4 py-5 sm:py-4 rounded mb-3 flex flex-col sm:flex-row justify-between items-center">
               <div class="w-full sm:w-1/3 md:w-2/5 flex flex-col md:flex-row md:items-center border-b sm:border-b-0 border-grey-dark pb-4 sm:pb-0 text-center sm:text-left">
                  <span class="font-hkbold text-secondary text-sm uppercase text-center pb-2 block sm:hidden">Product Name</span>
                  <div class="w-20 mx-auto sm:mx-0 relative sm:mr-3 sm:pr-0">
                     <div class="aspect-w-1 aspect-h-1 w-full">
                        <img src="https://source.unsplash.com/1000x640/?ack-3"
                           alt="product image"
                           class="object-cover" />
                     </div>
                  </div>
                  <span class="font-hk text-secondary text-base mt-2">Party Blake</span>
               </div>
               <div class="w-full sm:w-1/6 md:w-1/6 xl:w-1/5 text-center border-b sm:border-b-0 border-grey-dark pb-4 sm:pb-0">
                  <span class="font-hkbold text-secondary text-sm uppercase text-center pt-3 pb-2 block sm:hidden">Quantity</span>
                  <span class="font-hk text-secondary">10</span>
               </div>
               <div class="w-full sm:w-1/6 xl:w-1/5 text-center sm:text-right sm:pr-6 xl:pr-16 pb-4 sm:pb-0">
                  <span class="font-hkbold text-secondary text-sm uppercase text-center pt-3 pb-2 block sm:hidden">Price</span>
                  <span class="font-hk text-secondary">$1045</span>
               </div>
               <a href="/"
                  class="btn btn-primary whitespace-nowrap">Order Now</a>
            </div> -->
            {{ $products->links('vendor.pagination.simple-tailwind') }}
            
        
         </div>
         @else
         <div class="bg-grey-light py-8 px-5 md:px-8" >Wishlist Empty!</div>
      </div>
   
      
      @endif
   </div>
</div>
</x-front-layout>