<x-front-layout>
<div class="container border-t border-grey-dark">
    <div class="flex flex-col lg:flex-row justify-between items-center pt-10 sm:pt-12 pb-16 sm:pb-20 lg:pb-24">
        <div class="lg:w-2/3 lg:pr-16 xl:pr-20">
            <div class="flex flex-wrap items-center">
                <a href="/cart/index"
                    class="transition-all border-b border-transparent hover:border-primary text-sm text-secondary hover:text-primary font-hk
                    ">
                Cart
                </a>
                <i class="bx bx-chevron-right text-sm text-secondary px-2"></i>
                <a href="{{route('checkout.show')}}"
                    class="transition-all border-b border-transparent hover:border-primary text-sm text-secondary hover:text-primary font-hk
                    font-bold ">
                Checkout
                </a>
               
            </div>
            <form method="POST" action="{{route('orders.store')}}" id="place_order_form">
            @csrf
            <div class="pt-10 md:pt-12">
                <div class="flex flex-col-reverse sm:flex-row items-center justify-between">
                    <h1 class="font-hk font-medium text-secondary text-xl md:text-2xl">Contact information</h1>
                    @guest
                    <p class="font-hk text-secondary">
                        Already have an account?
                        <a href="/login"
                            class="font-hk text-primary">Log in</a>
                    </p>
                    @endguest
                </div>
                <div class="pt-4 md:pt-5">
                    <input type="text"
                        placeholder="Enter your phone number"
                        class="form-input"
                        id="phone_number" 
                        name="phone_number" 
                        value="{{ auth()->check() ? auth()->user()->phone_number : '' }}" 
                        />
                    @error('phone_number')
                        <div class="text-primary">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="pt-4 pb-10">
                <h4 class="font-hk font-medium text-secondary text-xl md:text-2xl text-center sm:text-left">Shipping address (Inside Bangladesh)</h4>
                <div class="pt-4 md:pt-5">
                    <div class="flex justify-between">
                        <input type="text"
                            placeholder="Full Name"
                            class="form-input mb-4 sm:mb-5 mr-2"
                            id="full_name"
                            name="full_name" 
                            value="{{ auth()->check() ? auth()->user()->name : '' }}"
                             />
                        
                        <input type="email"
                            placeholder="Email"
                            class="form-input mb-4 sm:mb-5 ml-1"
                            id="last_name" 
                            name="email" 
                            value="{{ auth()->check() ? auth()->user()->email : '' }}"
                            />
                    </div>
                    @error('full_name')
                    <div class="text-primary">{{ $message }}</div>
                    @enderror
                    
                    <div class="mt-5">
                        <input type="text"
                            placeholder="You address"
                            class="form-input mb-4 sm:mb-5"
                            id="address"
                            name="address"
                            value="{{ auth()->check() ? auth()->user()->address : '' }}"
                            
                             />
                    </div>
                    @error('address')
                        <div class="text-primary">{{ $message }}</div>
                    @enderror
                    
                   
                    
                </div>
                <div class="flex flex-col sm:flex-row justify-between items-center pt-8 sm:pt-12">
                    <a href="/cart"
                        class="flex items-center mb-3 sm:mb-0 font-hk group-hover:font-bold  text-sm text-secondary hover:text-primary group transition-all">
                    <i class="bx bx-chevron-left text-secondary group-hover:text-primary pr-2 text-2xl -mb-1 transition-colors"></i>
                    Return to Cart
                    </a>
                    <a id="place_order" href="#" 
                        class="btn btn-primary">Place Order</a>
                </div>
            </div>    
            </form>
            
        </div>
        <div class="sm:w-2/3 md:w-1/2 lg:w-1/3 bg-grey-light mt-8 lg:mt-0">
            <div class="p-8">
                <h3 class="font-hkbold text-secondary text-2xl pb-3 text-center sm:text-left">Your Order</h3>
                 <div>
                  <p class="font-hkbold text-secondary pt-1 pb-2">Order Note</p>
                  <p class="font-hk text-secondary text-sm pb-4">Special instructions for us</p>
                  <label for="cart_note"
                     class="block relative h-0 w-0 overflow-hidden">Cart Note</label>
                  <textarea rows="5"
                     placeholder="Enter your text"
                     class="form-textarea"
                     name="order_note" 
                     id="order_note"></textarea>
               </div>
                <p class="font-hkbold text-secondary uppercase text-center sm:text-left">PRODUCTS</p>
                <div class="mt-5 mb-8">
                	@foreach(Cart::content() as $item)
                    <div class="flex items-center mb-5">
                        <div class="w-20 relative mr-3 sm:pr-0">
                            <div class="h-20 rounded flex items-center justify-center">
                                <img src="{{$item->model->getMedia()->first()->getFullUrl()}}"
                                    alt="Beautiful Brown image"
                                    class="w-12 h-16 object-cover object-center" />
                                <span
                                    class="font-hk text-white text-xs px-2 leading-none absolute top-0 right-0 bg-primary flex items-center justify-center rounded-full -mt-2 -mr-2 h-6 w-6">{{$item->qty}}</span>
                            </div>
                        </div>
                        <p class="font-hk text-secondary text-lg">{{$item->name}}</p>
                    </div>
                    @endforeach
                   
                  
                </div>
                <h4 class="font-hkbold text-secondary pt-1 pb-2">Cart Totals</h4>
                <div class="border-b border-grey-darker py-3 flex justify-between">
                    <span class="font-hk text-secondary leading-none">Subtotal</span>
                    <span class="font-hk text-secondary leading-none">৳{{Cart::subtotal()}}</span>
                </div>
                <!-- <div class="border-b border-grey-darker py-3 flex justify-between">
                    <span class="font-hk text-secondary leading-none">Coupon apply</span>
                    <span class="font-hk text-secondary leading-none">-$36</span>
                </div> -->
                <div class="flex justify-between py-3">
                    <span class="font-hkbold text-secondary leading-none">Total</span>
                    <span class="font-hkbold text-secondary leading-none">৳{{ Cart::total() }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
@section('js')
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script type="text/javascript">
    $('#place_order').click(function(event){

          event.preventDefault();

          notevalue = $('#order_note').val();

           $("<input />").attr("type", "hidden")
          .attr("name", "note")
          .attr("value", notevalue)
          .appendTo("#place_order_form");
            
            // return true;

            // var input = $("#order_note")
            //    // .attr("type", "hidden")
            //    .attr("name", "order_note").val();

            //      console.log(input);
            //      $('#place_order_form').append(input);
            //      console.log($('#place_order_form'));
            $('#place_order_form').submit();
     });



    
</script>
@endsection
</x-front-layout>