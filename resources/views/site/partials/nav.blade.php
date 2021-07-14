

<ul class="list-reset flex items-center">
   <li class="mr-10">
      <a href="/"
         class="block text-lg font-hk hover:font-bold transition-all text-secondary hover:text-primary border-b-2 border-white hover:border-primary px-2">Home</a>
   </li>
   <li class="mr-10">
      <a href="/about"
         class="block text-lg font-hk hover:font-bold transition-all text-secondary hover:text-primary border-b-2 border-white hover:border-primary px-2">About</a>
   </li>

   <li class="mr-10 hidden lg:block group">
      <div class="border-b-2 border-white transition-colors group-hover:border-primary flex items-center">
         <a href="/shop" class="  cursor-pointer text-lg font-hk group-hover:font-bold text-secondary group-hover:text-primary px-2 transition-all">Collections</a>
         <i class="bx bx-chevron-down text-secondary group-hover:text-primary pl-2 px-2 transition-colors"></i>
      </div>
      <div
         class="pt-10 absolute mt-40 top-0 left-0 right-0 z-50 w-2/3 mx-auto opacity-0 pointer-events-none group-hover:opacity-100 group-hover:pointer-events-auto ">
         <div class="transition-all flex bg-white shadow-lg p-8 rounded-b relative ">
            @foreach($categories as $category)
               <div class="flex-1 relative z-20">
                  
                  @if( $category->menu == 1)
                     <h4 class="font-hkbold text-base text-secondary mb-2"><a href="{{$category->path()}}">{{$category->name}} </a></h4>
                     @if($category->children->count() > 0  )
                     <ul>
                        @foreach($category->children as $child)
                           @if($child->menu == 1)
                           <li>
                              <a href="{{$category->path()."/".$child->slug}}"
                                 class="text-sm font-hk text-secondary-lighter leading-loose border-b border-transparent hover:border-secondary-lighter">{{$child->name}}</a>
                           </li>
                           @endif
                        @endforeach
                     </ul>
                     @endif
                  @endif  
               </div>
            @endforeach
            
            <div class="flex-1">
               {{-- <div class="z-0 bg-contain bg-right-bottom bg-no-repeat absolute inset-0"
                  style="background-image: url({{asset('assets/img/ban.png')}})">
               </div> --}}
            </div>
         </div>
      </div>
   </li>
   
   <li class="mr-10">
      <a href="{{route('faq')}}"
         class="block text-lg font-hk hover:font-bold transition-all text-secondary hover:text-primary border-b-2 border-white hover:border-primary px-2">FAQ</a>
   </li>
   <li class="mr-10">
      <a href="{{route('contact')}}"
         class="block text-lg font-hk hover:font-bold transition-all text-secondary hover:text-primary border-b-2 border-white hover:border-primary px-2">Contact</a>
   </li>
</ul>