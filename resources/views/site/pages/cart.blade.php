<x-front-layout>
   <div class="container border-t border-grey-dark pt-10 sm:pt-12">
      <div class="flex flex-wrap items-center">
         <a href="{{route('cart.index')}}"
            class="transition-all border-b border-transparent hover:border-primary text-sm text-secondary hover:text-primary font-hk
            font-bold ">
         Cart
         </a>
         <i class="bx bx-chevron-right text-sm text-secondary px-2"></i>
         <a href="{{route('checkout.show')}}"
            class="transition-all border-b border-transparent hover:border-primary text-sm text-secondary hover:text-primary font-hk
            ">
         Checkout
         </a>

      </div>
      <form method="POST" action="{{route('cart.update')}}">
      @csrf
      @method('PATCH')   
      <div class="flex flex-col-reverse lg:flex-row justify-between pb-16 sm:pb-20 lg:pb-24">
         <div class="lg:w-3/5">
            @if(Cart::countItems() > 0 )
            <div class="pt-10">
               <h1 class="font-hkbold text-secondary text-2xl pb-3 text-center sm:text-left">Cart Items</h1>
               <div class="pt-8">
                  <div class="hidden sm:block">
                     <div class="flex justify-between border-b border-grey-darker">
                        <div class="w-1/2 lg:w-3/5 xl:w-1/2 pl-8 sm:pl-12 pb-2">
                           <span class="font-hkbold text-secondary text-sm uppercase">Product Name</span>
                        </div>
                        <div class="w-1/4 sm:w-1/6 lg:w-1/5 xl:w-1/4 pb-2 text-right sm:mr-2 md:mr-18 lg:mr-12 xl:mr-18">
                           <span class="font-hkbold text-secondary text-sm uppercase">Quantity</span>
                        </div>
                        <div class="w-1/4 lg:w-1/5 xl:w-1/4 pb-2 text-right md:pr-10">
                           <span class="font-hkbold text-secondary text-sm uppercase">Price</span>
                        </div>
                     </div>
                  </div>
                  
                  @foreach(Cart::content() as $item)
                  
                  <div class="py-3 border-b border-grey-dark flex-row justify-between items-center mb-0 hidden md:flex">
                    <a  href="{{route('cart.destroy',['rowId' => $item->rowId])}}" class="bx bx-x text-grey-darkest text-2xl sm:text-3xl mr-6 cursor-pointer"></a>
                    	<!-- <form method="POST" action="{{route('cart.destroy',['rowId' => $item->rowId])}}">
                    		@csrf
                    		@method('DELETE')
                    		<button type="submit" class="bx bx-x text-grey-darkest text-2xl sm:text-3xl mr-6 cursor-pointer"></button>
   				             </form> -->

                     <div class="w-1/2 lg:w-3/5 xl:w-1/2 flex flex-row items-center border-b-0 border-grey-dark pt-0 pb-0 text-left">
                        <div class="w-20 mx-0 relative pr-0">
                           <div class="h-20 rounded flex items-center justify-center">
                              <div class="aspect-w-1 aspect-h-1 w-full">
                                  
                                  <img src="{{$item->model->getMedia()->first()->getFullUrl()}}"
                                    alt="product image"
                                    class="object-cover" />
                                  
                              </div>
                           </div>
                        </div>
                        <a href="{{$item->model->path()}}">
                        <span class="font-hk text-secondary text-base mt-2 ml-4">{{$item->name}}</span></a>
                        
                        @if($item->model->attributes()->count() > 0)

                        	@foreach($item->options as $attribute)
                        		<span class="font-hk text-base mt-2 ml-4 text-primary">{{$attribute}}</span>	
                        	@endforeach
                        @endif
                        
                     </div>
                     <div class="w-full sm:w-1/5 xl:w-1/4 text-center border-b-0 border-grey-dark pb-0">
                        <div class="mx-auto mr-8 xl:mr-4">
                           <div class="flex justify-center"

                              x-data="{ productQuantity: <?php echo $item->qty ?> }">
                              <input type="number"
                                 name="products[{{$item->rowId}}]" 
                                 id="{{$item->rowId}}"
                                 class="form-input form-quantity rounded-r-none w-16 py-0 px-2 text-center"
                                 x-model="productQuantity"
                                 min="1" />
                              <div class="flex flex-col">
                                 <span class="px-1 bg-white border border-l-0 border-grey-darker flex-1 rounded-tr cursor-pointer"
                                    @click="productQuantity++"><i class="bx bxs-up-arrow text-xs text-primary pointer-events-none"></i></span>
                                 <span class="px-1 bg-white flex-1 border border-t-0 border-l-0 rounded-br border-grey-darker cursor-pointer"
                                    @click="productQuantity > 1 ? productQuantity-- : productQuanity = 1"><i
                                    class="bx bxs-down-arrow text-xs text-primary pointer-events-none"></i></span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="w-1/4 lg:w-1/5 xl:w-1/4 text-right pr-10 xl:pr-10 pb-4">
                        <span class="font-hk text-secondary">৳ {{$item->price}}</span>
                     </div>
                  </div>
                  <div class="flex md:hidden mb-5 pb-5 border-b border-grey-dark items-center justify-center">
                     <div class="relative w-1/3">
                        <div class="aspect-w-1 aspect-h-1 w-full">
                           <img src="{{$item->model->getMedia()->first()->getFullUrl()}}"
                              alt="product image"
                              class="object-cover" />
                        </div>
                        <div
                           class="cursor-pointer absolute top-0 right-0 -mt-2 -mr-2 bg-white border border-grey-dark rounded-full shadow h-8 w-8 flex items-center justify-center">
                           <i class="bx bx-x text-grey-darkest text-xl "></i>
                        </div>
                     </div>
                     <div class="pl-4">
                        <span class="font-hk text-secondary text-base mt-2 font-bold">{{$item->name}}</span>
                        <span class="font-hk text-secondary block">{{$item->price}}</span>
                        <div class="w-2/3 sm:w-5/6 flex mt-2"
                           x-data="{ productQuantity: 1 }">
                           <input type="number"
                              id="quantity-form-mobile"
                              class="form-input form-quantity rounded-r-none w-12 py-1 px-2 text-center"
                              x-model="productQuantity"
                              min="1" />
                           <div class="flex flex-row">
                              <span class="px-2 bg-white flex-1 border  border-l-0 border-grey-darker cursor-pointer flex items-center justify-center"
                                 @click="productQuantity > 1 ? productQuantity-- : productQuanity = 1"><i
                                 class="bx bxs-down-arrow text-xs text-primary pointer-events-none"></i></span>
                              <span class="px-2 bg-white border border-l-0 border-grey-darker flex-1 rounded-r cursor-pointer flex items-center justify-center"
                                 @click="productQuantity++">
                              <i class="bx bxs-up-arrow text-xs text-primary pointer-events-none"></i></span>
                           </div>
                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>
            </div>
            <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center pt-8 sm:pt-12">
               <a href="{{route('home')}}"
                  class="btn btn-outline">Continue Shopping</a>
               <button type="submit" 
                  class="btn btn-primary mt-5 sm:mt-0">Update Cart
               </button>
            </div>
            @else
            <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center pt-8 sm:pt-12">
               <a href="{{route('home')}}"
                  class="btn btn-outline">Continue Shopping</a>
               <span  
                  class="mt-5 sm:mt-0 text-primary">Cart is empty
               </span>
            </div>
            @endif
         </div>
          @if(Cart::countItems() > 0 )
         <div class="sm:w-2/3 md:w-full lg:w-1/3 mx-auto lg:mx-0 mt-16 lg:mt-0">
            <div class="bg-grey-light py-8 px-8">
               <h4 class="font-hkbold text-secondary text-2xl pb-3 text-center sm:text-left">Cart Totals</h4>
              
               <!-- <div class="pt-4">
                  <p class="font-hkbold text-secondary pt-1 pb-4">Add Coupon</p>
                  <div class="flex justify-between">
                     <label for="discount_code"
                        class="block relative h-0 w-0 overflow-hidden">Discount Code</label>
                     <input type="text"
                        placeholder="Discount code"
                        class="w-3/5 xl:w-2/3 form-input"
                        id="discount_code" />
                     <button class="w-2/5 xl:w-1/3 ml-4 lg:ml-2 xl:ml-4 btn btn-outline btn-sm"
                        aria-label="Apply button">Apply</button>
                  </div>
               </div> -->
               <div class="mb-12 pt-4">
                  <p class="font-hkbold text-secondary pt-1 pb-2">Cart Total</p>
                  <div class="border-b border-grey-darker pb-1 flex justify-between">
                     <span class="font-hk text-secondary">Subtotal</span>
                     <span class="font-hk text-secondary">৳{{$subtotal}}</span>
                  </div>
                 <!--  <div class="border-b border-grey-darker pt-2 pb-1 flex justify-between">
                     <span class="font-hk text-secondary">Coupon applied</span>
                     <span class="font-hk text-secondary">-$36</span>
                  </div> -->
                  <div class="pt-3 flex justify-between">
                     <span class="font-hkbold text-secondary">Total</span> 
                     <span class="font-hkbold text-secondary">৳{{$total}}</span>
                  </div>
               </div>
               <a href="{{route('checkout.show')}}"
                  class="btn btn-primary w-full">Proceed to checkout</a>
            </div>
         </div>
         @endif
      </div>
      </form>
   </div>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

       <script type="text/javascript">
        
        // Cart Update 

        //  $(".cart-update").click(function (e) {
        //     e.preventDefault();

        //     var ele = $(this);
        //     ele.siblings('.btn-loading').show();
        //     quantity = ele.closest('tr').find('.vertical-quantity').first().val()

        //     $.ajax({
        //         url: '/cart/'+ ele.data('rowid'),
        //         method: "patch",
        //         data: {
        //             _token: '{{ csrf_token() }}',
        //             quantity: quantity
        //         },
        //         dataType: "json",
        //         success: function (response) {

        //             ele.siblings('.btn-loading').hide();

        //             $("span#status").html('<div class="alert alert-success">'+response.msg+'</div>');
        //             $("#header-bar").html(response.cartdata);
        //             $("#cart_summary").html(response.cartsummary);
        //             td  = ele.closest('td').siblings('.subtitla');
        //             console.log(response);
        //             td.text('TK '+response.subtotal);
        //             // alert(response.subtotal);
        //         }
        //     });
        // });
    </script>
</x-front-layout>

