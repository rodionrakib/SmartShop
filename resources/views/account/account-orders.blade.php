<x-front-layout>

<div class="container border-t border-grey-dark">
   <div class="pt-10 sm:pt-12 pb-16 sm:pb-20 lg:pb-24 flex flex-col lg:flex-row justify-between">
      @include('site.partials.account-nav')
      <div class="lg:w-3/4 mt-12 lg:mt-0">
          <div class="bg-grey-light py-8 px-5 md:px-8">
               @if(auth()->user()->orders()->count() > 0  )
              <h1 class="font-hkbold text-secondary text-2xl pb-6 text-center sm:text-left">Order List</h1>
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
                          <span class="font-hkbold text-secondary text-sm uppercase pr-8 md:pr-16 xl:pr-8">Status</span>
                      </div>
                  </div>
              </div>
              @foreach($orders as $order)

              @foreach($order->items as $item)
              <div class="bg-white shadow px-4 py-5 sm:py-4 rounded mb-3 flex flex-col sm:flex-row justify-between items-center">
                  <div class="w-full sm:w-1/3 md:w-2/5 flex flex-col md:flex-row md:items-center border-b sm:border-b-0 border-grey-dark pb-4 sm:pb-0 text-center sm:text-left">
                      <span class="font-hkbold text-secondary text-sm uppercase text-center pb-2 block sm:hidden">Product Name</span>
                      <div class="w-20 mx-auto sm:mx-0 relative sm:mr-3 sm:pr-0">
                          <div class="aspect-w-1 aspect-h-1 w-full">
                              <img src="https://source.unsplash.com/1000x640/?oes-3"
                                  alt="product image"
                                  class="object-cover" />
                          </div>
                      </div>
                      <span class="font-hk text-secondary text-base mt-2">{{$item->product->name}}</span>
                  </div>
                  <div class="w-full sm:w-1/5 text-center border-b sm:border-b-0 border-grey-dark pb-4 sm:pb-0">
                      <span class="font-hkbold text-secondary text-sm uppercase text-center pt-3 pb-2 block sm:hidden">Quantity</span>
                      <span class="font-hk text-secondary">{{$item->quantity}}</span>
                  </div>
                  <div class="w-full sm:w-1/6 xl:w-1/5 text-center sm:text-right sm:pr-6 xl:pr-16 border-b sm:border-b-0 border-grey-dark pb-4 sm:pb-0">
                      <span class="font-hkbold text-secondary text-sm uppercase text-center pt-3 pb-2 block sm:hidden">Price</span>
                      <span class="font-hk text-secondary">{{  number_format($item->price * $item->quantity,2)}}</span>
                  </div>
                  <div class="w-full sm:w-3/10 md:w-1/4 xl:w-1/5 text-center sm:text-right ">
                      <div class="pt-3 sm:pt-0">
                          <p class="font-hkbold text-secondary text-sm uppercase text-center pb-2 block sm:hidden">Status</p>
                          @if ($order->status == 'pending')
                          <span
                              class="bg-primary-lightest border border-primary-light px-4 py-3 inline-block rounded font-hk text-primary">In Progress</span>
                              
                          @elseif ($order->status == 'processing')
                              <span
                                class="bg-v-blue-light border border-v-blue px-4 py-3 inline-block rounded font-hk text-v-blue">On the way</span>
                          @elseif($order->status == 'completed')
                          <span
                              class="bg-v-green-light border border-v-green px-4 py-3 inline-block rounded font-hk text-v-green">Order received</span>

                           @elseif($order->status == 'decline')
                           <span
                              class="bg-v-pink border border-v-red px-4 py-3 inline-block rounded font-hk text-v-red">Delivery Failed</span>
                              
                          @endif
                          
                      </div>
                  </div>
              </div>
              @endforeach
              @endforeach
             
              {{ $orders->links('vendor.pagination.simple-tailwind') }}
              @else
              <div>No Orders Yet!</div>
              @endif
          </div>
      </div>
   </div>
</div>

</x-front-layout>