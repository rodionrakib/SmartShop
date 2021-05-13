<x-front-layout>

<div class="container border-t border-grey-dark">
   <div class="pt-10 sm:pt-12 pb-16 sm:pb-20 lg:pb-24 flex flex-col lg:flex-row justify-between">
      @include('site.partials.account-nav')
      <div class="lg:w-3/4 mt-12 lg:mt-0">
         <div class="bg-grey-light py-10 px-6 sm:px-10">
            <h1 class="font-hkbold text-secondary text-2xl sm:text-left mb-12">Account Details</h1>
            <div class="mb-12 ">
               <img src="https://source.unsplash.com/1000x640/?uthor"
                  alt="user image"
                  class="object-cover h-40 w-40 rounded-full overflow-hidden" />
            </div>
            <form method="POST" action="{{ route('account-details') }}">
               @method("PATCH")
               @csrf
               <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                  <div class="">
                     <label for="name"
                        class="font-hk text-secondary block mb-2">Full Name</label>
                     <input type="text"
                        name="name" 
                        class="form-input"
                        value="{{ auth()->user()->name }}"
                        id="name" />
                  </div>
                  <div class="">
                     <label for="email"
                        class="font-hk text-secondary block mb-2">Email</label>
                     <input type="text"
                        name="email" 
                        class="form-input"
                        value="{{ auth()->user()->email }}"
                        id="email" />
                  </div>
               </div>
               <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5 md:mt-8">
                  <div class="">
                     <label for="phone_number"
                        class="font-hk text-secondary block mb-2">Phone</label>
                     <input type="text"
                        name="phone_number" 
                        class="form-input"
                        value="{{ auth()->user()->phone_number }}"
                        id="phone_number" />
                  </div>
                  <div class="">
                     <label for="password"
                        class="font-hk text-secondary block mb-2">Password</label>
                     <input type="password"
                        class="form-input"
                        value=""
                        id="password" />
                  </div>
               </div>
              
               <div class="my-8">
                  <div>
                     <div class="w-full mb-8">
                    <label for="subject"
                           class="font-hk text-secondary block mb-2">Shipping Address</label>
                    <input type="text"
                           name="address" 
                           value="{{ auth()->user()->address}}" 
                           placeholder="address"
                           class="form-input"
                           id="subject" />
                     </div>
                    
                    
                  </div>
                  
               </div>
               <div>
                  <button class="btn btn-primary"
                     aria-label="Save button">Save</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

</x-front-layout>