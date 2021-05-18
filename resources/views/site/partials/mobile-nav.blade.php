
<div class="w-full sm:w-1/2 absolute left-0 top-0 px-6 z-40 bg-white shadow-sm">
   <a href="/"
      class="w-full py-3 cursor-pointer font-hk font-medium text-secondary border-b border-grey-dark block ">Home
   </a>
  
   <div class="w-full py-3 border-b border-grey-dark block"
      x-data="{
      isParentAccordionOpen: false
      }">
      <div class="flex items-center justify-between"
         @click="isParentAccordionOpen = !isParentAccordionOpen">
         <span class="font-hk font-medium block transition-colors"
            :class="isParentAccordionOpen ? 'text-primary' : 'text-secondary'">Shop</span>
         <i class="bx text-secondary text-xl"
            :class="isParentAccordionOpen ? 'bx-chevron-down' : 'bx-chevron-left'"></i>
      </div>
      <div class="transition-all"
         :class="isParentAccordionOpen ? 'max-h-infinite' : 'max-h-0 overflow-hidden'">
         @foreach($categories as $category)
         @if($category->menu == 1)
         <div x-data="{
            isAccordionOpen: false
            }">
            <div class="flex items-center pt-3"
               @click="isAccordionOpen = !isAccordionOpen">
               <i class="bx text-xl pr-3 transition-colors"
                  :class="isAccordionOpen ? 'bx-chevron-down text-secondary' : 'bx-chevron-right text-grey-darkest'"></i>
               <a href="{{$category->path()}}"
                  class="font-hk font-medium transition-colors"
                  :class="isAccordionOpen ? 'text-primary' : 'text-grey-darkest'">{{$category->name}}</a>
            </div>
            @if($category->children()->count() > 0 )
            <div class="pl-12 transition-all"
               :class="isAccordionOpen ? 'max-h-infinite' : 'max-h-0 overflow-hidden'">
               @foreach($category->children as $cat)
               <a href="{{$cat->path()}}"
                  class="font-hk font-medium text-secondary block mt-2">{{$cat->name}}</a>
               @endforeach
               
            </div>
            @endif
         </div>
         @endif
         @endforeach
       
         
        
      </div>
   </div>
   <a href="/about.html"
      class="w-full py-3 cursor-pointer font-hk font-medium text-secondary border-b border-grey-dark block">About
   </a>
   <a href="{{route('faq')}}"
      class="w-full py-3 cursor-pointer font-hk font-medium text-secondary border-b border-grey-dark block">FAQ
   </a>
   <a href="{{route('contact')}}"
      class="w-full py-3 cursor-pointer font-hk font-medium text-secondary border-b border-grey-dark block">Contact
   </a>
   <div class="my-8">
      <a href="/login"
         class="btn btn-primary w-full mb-4"
         aria-label="Login button">Login Account</a>
      <a href="/register"
         class="font-hk text-secondary md:text-lg pl-3 underline text-center block">Create your account</a>
   </div>
</div>