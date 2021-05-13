<div class="lg:w-1/4">
   <p class="font-butler text-secondary text-2xl sm:text-3xl lg:text-4xl pb-6">My Account</p>
   <div class="pl-3 flex flex-col">
      <a href="/account/dashboard"
         class="transition-all hover:font-bold hover:text-primary px-4 py-3 border-l-2 border-primary-lighter hover:border-primary  font-hk 
         {{ Route::currentRouteName() == 'dashboard'  ? 'text-primary' : 'text-grey-darkest' }} 

         ">Dashboard</a>
      <a href="/account/orders"
         class="transition-all hover:font-bold hover:text-primary px-4 py-3 border-l-2 border-primary-lighter hover:border-primary  font-hk text-grey-darkest ">Orders</a>
      <a href="/account/wishlist"
         class="transition-all hover:font-bold hover:text-primary px-4 py-3 border-l-2 border-primary-lighter hover:border-primary  font-hk
          {{ Route::currentRouteName() == 'wishlist'  ? 'text-primary' : 'text-grey-darkest' }} 
           ">Wishlist</a>
      <a href="/account/account-details"
         class="transition-all hover:font-bold hover:text-primary px-4 py-3 border-l-2 border-primary-lighter hover:border-primary  font-hk text-grey-darkest ">Account Details</a>
   </div>
   <form method="POST" action="{{route('logout')}}">
   @csrf
   <button type="submit" 
      class="transition-all border hover:bg-primary hover:text-white border-primary rounded px-8 py-3 mt-8 inline-block font-hk font-bold text-primary">Log Out</button>   
   </form>
   
</div>