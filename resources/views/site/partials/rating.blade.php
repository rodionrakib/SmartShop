<div class="w-5/6 mx-auto border-b border-grey-darker pb-8 text-center sm:text-left">
<div class="flex justify-center sm:justify-start items-center pt-3 xl:pt-5">
      {!!$review->stars()!!}
   </div>
   <p class="font-hk text-secondary pt-4 lg:w-5/6 xl:w-2/3">{{$review->message}}</p>
   <div class="flex justify-center sm:justify-start items-center pt-3">
      <p class="font-hk text-grey-darkest text-sm"><span>By</span>{{$review->name}}</p>
      <span class="font-hk text-grey-darkest text-sm block px-4">.</span>
      <p class="font-hk text-grey-darkest text-sm">{{$review->created_at->diffForHumans()}}</p>
   </div>
</div>
</div>