<x-front-layout>
<style type="text/css">
@import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

fieldset, label { margin: 0; padding: 0; }

/****** Style Star Rating Widget *****/

.rating { 
  border: none;
  float: left;
}

.rating > input { display: none; } 
.rating > label:before { 
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before { 
  content: "\f089";
  position: absolute;
}

.rating > label { 
  color: #ddd; 
 float: right; 
}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #f35627;  } /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #f35627;  }
</style>
<div class="container">
   
   <!-- {!! $breadCrumb !!} -->
   <div class="flex relative">
      <div class="bg-no-repeat bg-cover bg-center w-3/4 ml-auto h-56 lg:h-68"
           
           style="background-image:url({{asset('assets/img/about-hero.png')}})"
           >
      </div>
      <div class="w-full h-56 lg:h-68 bg-no-repeat bg-cover absolute top-0 left-0 c-hero-gradient-bg">
        <div class="py-20 px-6 sm:px-12 lg:px-20">
            <h1 class=" font-butler text-white text-2xl sm:text-3xl md:text-4.5xl lg:text-5xl">
                {{$product->name}}</h1>
            <div class="flex pt-2">
                <a href="/"
                   class="font-hk text-white text-base hover:text-primary transition-colors">Home</a>
                <span class="font-hk text-white text-base px-2">.</span>
                 {!! $breadCrumb !!}
            </div>
        </div>
      </div>
   </div>
   <div class="pt-16 pb-24 flex flex-col lg:flex-row justify-between -mx-5">
      <div class="lg:w-1/2 flex flex-col-reverse sm:flex-row-reverse lg:flex-row justify-between px-5"
         x-data="{ selectedImage: '{{$images->first()->getFullUrl()}}' }">
         <div class="sm:pl-5 md:pl-4 lg:pl-0 lg:pr-2 xl:pr-3 flex flex-row sm:flex-col">
            @foreach($images as $image)
            <div class="w-28 sm:w-32 lg:w-24 xl:w-28 relative pb-5 mr-3 sm:pr-0">
               <div class="bg-v-pink border border-grey relative rounded flex items-center justify-center w-full">
                  <img class="cursor-pointer object-cover"
                     @click="selectedImage = $event.target.src"
                     alt="product image"
                     src="{{$image->getFullUrl()}}" />
               </div>
            </div>
            @endforeach
         </div>
         <div class="w-full relative pb-5 sm:pb-0">
            <div class="bg-v-pink border border-grey relative rounded flex items-center justify-center aspect-w-1 aspect-h-1">
               <img class="object-cover"
                  alt="product image"
                  :src="selectedImage" />
            </div>
         </div>
      </div>
      <div class="lg:w-1/2 pt-8 lg:pt-0 px-5">
         <div class="border-b border-grey-dark mb-8">
            <div class="flex items-center">
               <h2 class=" font-butler text-3xl md:text-4xl lg:text-4.5xl">{{$product->name}}</h2>
               <p class="bg-primary rounded-full ml-8 px-5 py-2 leading-none font-hk font-bold text-white uppercase text-sm">{{$product->percent_discount}}% off</p>
            </div>
            <div class="flex items-center pt-3">
               <span class="font-hk text-secondary text-2xl">৳ {{$product->special_price}}</span>
               <span class="font-hk text-grey-darker text-xl line-through pl-5">৳ {{$product->price}}</span>
            </div>
            <div class="flex items-center pt-3 pb-8">

           
               {!! $product->starsAvg() !!}
               <span class="font-hk text-sm text-secondary ml-2">({{$product->ratings()->count()}})</span>
            </div>
         </div>
         <div class="flex pb-5">
            <p class="font-hk text-secondary">Availability:</p>
            @if($product->quantity > 0 )
            <p class="font-hkbold text-v-green pl-3">In Stock</p>
            @else
            <p class="font-hkbold text-v-red pl-3">Out of Stock</p>
            @endif
         </div>
         <p class="font-hk text-secondary pb-5">{{$product->short_description}}</p>
         <form method="post" action="{{route('cart.store')}}" >
            @csrf
            <input type="hidden" name="id" value="{{$product->id}}">
            @foreach($attributes as $attribute)
                    @php
                        if ($product->attributes->count() > 0) {
                            $attributeCheck = in_array($attribute->id, $product->attributes->pluck('attribute_id')->toArray());
                        } else {
                            $attributeCheck = [];
                        }
                    @endphp
                    @if ($attributeCheck)

                     <div class="flex items-center justify-between pb-4">
                        <div class="w-1/3 sm:w-1/5">
                           <p class="font-hk text-secondary">{{ $attribute->name }}</p>
                        </div>
                        <div class="w-2/3 sm:w-5/6">
                           <select class="w-2/3 form-select" 
                              name="{{$attribute->name}}" 
                              required>
                              <option data-price="0" value=""> Select a {{ $attribute->name }}</option>
                                @foreach($product->attributes as $attributeValue)
                                    @if ($attributeValue->attribute_id == $attribute->id)
                                        <option
                                            data-price="{{ $attributeValue->price }}"
                                            value="{{ $attributeValue->value }}"> {{ ucwords($attributeValue->value ) }}
                                        </option>
                                    @endif
                                @endforeach

                           </select>
                        </div>
                     </div>
                       
                    @endif
                    
            @endforeach 
            <div class="flex items-center justify-between pb-8">
               <div class="w-1/3 sm:w-1/5">
                  <p class="font-hk text-secondary">Quantity</p>
               </div>
               <div class="w-2/3 sm:w-5/6 flex"
                  x-data="{ productQuantity: 1 }">
                  <label for="quantity-form"
                     class="block relative h-0 w-0 overflow-hidden">Quantity form</label>
                  <input type="number"
                     id="quantity-form"
                     name="quantity" 
                     class="form-input form-quantity rounded-r-none w-16 py-0 px-2 text-center"
                     x-model="productQuantity"
                     min="1" />
                  <div class="flex flex-col">
                     <span class="px-1 bg-white border border-l-0 border-grey-darker flex-1 rounded-tr cursor-pointer"
                        @click="productQuantity++">
                     <i class="bx bxs-up-arrow text-xs text-primary pointer-events-none"></i>
                     </span>
                     <span class="px-1 bg-white flex-1 border border-t-0 border-l-0 rounded-br border-grey-darker cursor-pointer"
                        @click="productQuantity > 1 ? productQuantity-- : productQuantity = 1">
                     <i class="bx bxs-down-arrow text-xs text-primary pointer-events-none"></i>
                     </span>
                  </div>
               </div>
            </div>
            <div class="flex pb-8 group">
               <button name="action" type="submit"  value="add_to_cart" 
                  class="btn btn-outline mr-4 md:mr-6">Add to cart</button>
               <button name="action" type="submit" value="buy_now" 
                  class="btn btn-primary">ORDER NOW</button>
            </div>
            <div class="flex pb-2">
               <p class="font-hk text-secondary">SKU:</p>
               <p class="font-hkbold text-secondary pl-3">{{$product->sku}}</p>
            </div>
         </form>
         <p class="font-hk text-secondary">
            <span class="pr-2">Categories:</span>
            
            @foreach($product->categories as $category)
               {{ $category->name}} 
               @if(!$loop->last)
               {{ ',' }}
               @endif

            @endforeach
            <!-- Bag, Hand bag, Travel bag, Black -->
         </p>
      </div>
   </div>

   <div class="pb-16 sm:pb-20 md:pb-24"
      x-data="{ activeTab: 'description' }">
      <div class="tabs flex flex-col sm:flex-row"
         role="tablist">
         <span @click="activeTab = 'description'"
            class="tab-item bg-white hover:bg-grey-light px-10 py-5 text-center sm:text-left border-t-2 border-transparent font-hk font-bold  text-secondary cursor-pointer transition-colors"
            :class="{ 'active': activeTab === 'description' }">
         Description
         </span>
         
         <span @click="activeTab = 'reviews'"
            class="tab-item bg-white hover:bg-grey-light px-10 py-5 text-center sm:text-left border-t-2 border-transparent font-hk font-bold  text-secondary cursor-pointer transition-colors"
            :class="{ 'active': activeTab === 'reviews' }">
         Reviews
         </span>
      </div>
      <div class="tab-content relative">
         <div :class="{ 'active': activeTab === 'description' }"
            class="tab-pane bg-grey-light py-10 md:py-16 transition-opacity"
            role="tabpanel">
            <div class="w-5/6 mx-auto text-center sm:text-left">
               <div class="font-hk text-secondary text-base">
                 {!! $product->description !!}
               </div>
            </div>
         </div>
         
         <div :class="{ 'active': activeTab === 'reviews' }"
            class="tab-pane bg-grey-light py-10 md:py-16 transition-opacity"
            role="tabpanel" id="review-tab">
            @forelse($product->ratings as $review)
            <div class="w-5/6 mx-auto border-b border-grey-darker pb-8 text-center sm:text-left">
               <div class="flex justify-center sm:justify-start items-center pt-3 xl:pt-5">
                  {!! $review->stars() !!}
                  <!-- <i class="bx bxs-star text-primary"></i>
                  <i class="bx bxs-star text-primary"></i>
                  <i class="bx bxs-star text-primary"></i>
                  <i class="bx bxs-star text-primary"></i>
                  <i class="bx bxs-star text-primary"></i> -->
               </div>
               <p class="font-hk text-secondary pt-4 lg:w-5/6 xl:w-2/3">{{$review->message}}</p>
               <div class="flex justify-center sm:justify-start items-center pt-3">
                  <p class="font-hk text-grey-darkest text-sm"><span>By</span> {{$review->name}}</p>
                  <span class="font-hk text-grey-darkest text-sm block px-4">.</span>
                  <p class="font-hk text-grey-darkest text-sm">{{$review->created_at->diffForHumans()}}</p>
               </div>
            </div>
            @empty
            <div class="w-5/6 mx-auto border-b border-grey-darker pb-8 text-center sm:text-left">
               <p class="font-hk text-secondary pt-4 lg:w-5/6 xl:w-2/3">Be the first one to review</p>
            </div>
            @endforelse

            @auth  
            <form id="review" method="post" class="w-5/6 mx-auto">
               
               <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-10 gap-y-5 pt-10">
                  <div class="w-full">
                     <label class="font-hk text-secondary text-sm block mb-2"
                        for="review_title">Name</label>
                     <input type="text"
                        name="full_name" 
                        value="{{ auth()->check() ? auth()->user()->name : '' }}" 
                        placeholder="Enter your review title"
                        class="form-input "
                        id="review_title" />
                  </div>
                
                  <div class="w-full pt-10 sm:pt-0">
                     <label class="font-hk text-secondary text-sm block mb-2">Rating</label>
                     <fieldset class="rating" >
                         <input type="radio" id="star5" value="5" name="rating" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>

                        

                         <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>

                         

                         <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>

                        
                         <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>

                         <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                         <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                     </fieldset>
                  </div>
               </div>
               <div class="sm:w-12/25 pt-10">
                  <label for="message"
                     class="font-hk text-secondary text-sm block mb-2">Review Message</label>
                  <textarea placeholder="Write your review here"
                     name="message" 
                     class="form-textarea h-28"
                     id="message"></textarea>
               </div>
               <button type="submit" 
                  class="btn btn-primary mt-4">Submit Review</button>
            
            </form>
            
            @endauth
            @guest
            <div class="w-5/6 mx-auto mt-3" >
             <p class="font-hk text-secondary">
                        
                        <a href="/login"
                            class="font-hk text-primary">Log in  to leave a review</a>
                    </p>
                 </div>
            @endguest
         </div>
      </div>
   </div>
   <!-- Rlated Products  -->
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


</script>

@section('js')
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <!-- <script src="{{asset('/assets/js/main.js')}}"></script> -->
        <script type="text/javascript">

         $.ajaxSetup({
             headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             }
         });
           // Variable to hold request
      var request;

      // Bind to the submit event of our form
      $("#review").submit(function(event){

          // Prevent default posting of form - put here to work in case of errors
          event.preventDefault();

          // Abort any pending request
          if (request) {
              request.abort();
          }
          // setup some local variables
          var $form = $(this);

          // Let's select and cache all the fields
          var $inputs = $form.find("input, select, button, textarea");

          // Serialize the data in the form
          var serializedData = $form.serialize();

          // Let's disable the inputs for the duration of the Ajax request.
          // Note: we disable elements AFTER the form data has been serialized.
          // Disabled form elements will not be serialized.
          $inputs.prop("disabled", true);

          // Fire off the request to /form.php
          request = $.ajax({
              url: "{{route('products.ratings.store',['product' => $product->id])}}",
              type: "post",
              data: serializedData
          });

          // Callback handler that will be called on success
          request.done(function (response, textStatus, jqXHR){
              // Log a message to the console

              $("#review")[0].reset();
               $("#review-tab").prepend(response.review);

          });

          // Callback handler that will be called on failure
          request.fail(function (jqXHR, textStatus, errorThrown){
              // Log the error to the console
              console.error(
                  "The following error occurred: "+
                  textStatus, errorThrown
              );
          });

          // Callback handler that will be called regardless
          // if the request failed or succeeded
          request.always(function () {
              // Reenable the inputs
              $inputs.prop("disabled", false);
          });

      });
   </script>
@endsection
</x-front-layout>








