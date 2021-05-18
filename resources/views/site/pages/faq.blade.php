<x-front-layout>

<div class="container">
   <div class="flex relative">
      <div class="bg-no-repeat bg-cover bg-center w-3/4 ml-auto h-56 lg:h-68"
         style="background-image:url({{asset('assets/img/about-hero.png')}})"
         >
      </div>
      <div class="w-full h-56 lg:h-68 bg-no-repeat bg-cover absolute top-0 left-0 c-hero-gradient-bg">
         <div class="py-20 px-6 sm:px-12 lg:px-20">
            <h1 class=" font-butler text-white text-2xl sm:text-3xl md:text-4.5xl lg:text-5xl">
               Contact Us
            </h1>
            <div class="flex pt-2">
               <a href="/"
                  class="font-hk text-white text-base hover:text-primary transition-colors">Home</a>
               <span class="font-hk text-white text-base px-2">.</span>
               <span class="font-hk text-white text-base">FAQ</span>
            </div>
         </div>
      </div>
   </div>
   <div class="flex flex-col md:flex-row py-20 md:py-24">
      <div
         class="w-4/5 sm:w-1/2 md:w-2/5 lg:w-1/3 mx-auto lg:mx-0 flex md:flex-col lg:flex-row items-start md:items-center justify-start md:justify-center md:text-center lg:text-left md:border-r-2 last:border-r-0 md:border-primary-lighter pb-3 md:pb-0">
         <div>
            <img src="/assets/img/icons/icon-shipping.svg"
               class="w-12 h-12 object-contain object-center"
               alt="icon" />
         </div>
         <div class="ml-6 md:mt-3 lg:mt-0">
            <h3 class="font-hk font-semibold text-primary text-xl tracking-wide">
               Free shipping
            </h3>
            <p class="font-hk text-secondary-lighter text-base tracking-wide">
               On all orders over $30
            </p>
         </div>
      </div>
      <div
         class="w-4/5 sm:w-1/2 md:w-2/5 lg:w-1/3 mx-auto lg:mx-0 flex md:flex-col lg:flex-row items-start md:items-center justify-start md:justify-center md:text-center lg:text-left md:border-r-2 last:border-r-0 md:border-primary-lighter pb-3 md:pb-0">
         <div>
            <img src="/assets/img/icons/icon-support.svg"
               class="w-12 h-12 object-contain object-center"
               alt="icon" />
         </div>
         <div class="ml-6 md:mt-3 lg:mt-0">
            <h3 class="font-hk font-semibold text-primary text-xl tracking-wide">
               Always available
            </h3>
            <p class="font-hk text-secondary-lighter text-base tracking-wide">
               24/7 call center available
            </p>
         </div>
      </div>
      <div
         class="w-4/5 sm:w-1/2 md:w-2/5 lg:w-1/3 mx-auto lg:mx-0 flex md:flex-col lg:flex-row items-start md:items-center justify-start md:justify-center md:text-center lg:text-left md:border-r-2 last:border-r-0 md:border-primary-lighter pb-3 md:pb-0">
         <div>
            <img src="/assets/img/icons/icon-return.svg"
               class="w-12 h-12 object-contain object-center"
               alt="icon" />
         </div>
         <div class="ml-6 md:mt-3 lg:mt-0">
            <h3 class="font-hk font-semibold text-primary text-xl tracking-wide">
               Free returns
            </h3>
            <p class="font-hk text-secondary-lighter text-base tracking-wide">
               30 days free return policy
            </p>
         </div>
      </div>
   </div>
   <div class="pb-16 md:pb-20 lg:pb-24"
      id="faq">
      <div class="text-center sm:w-5/6 md:w-full mx-auto md:mx-0">
         <h2 class="font-butler text-secondary text-2xl sm:text-3xl md:text-4.5xl  lg:text-5xl">Frequently Asked Questions</h2>
         <p class="font-hk text-secondary-lighter text-lg md:text-xl pt-2">Get the latest news & updates from Elyssi</p>
         <div class="pt-12"
            x-data="{ faqIndex: null }">
            <div class="faq-wrapper border-t border-l border-r border-primary last:border-b cursor-pointer">
               <div class="faq-question transition-all bg-primary-lightest flex justify-between items-center px-5 md:px-8 py-5 border-primary"
                  @click="faqIndex === 1 ? faqIndex = null : faqIndex = 1"
                  :class="{ 'border-b': faqIndex === 1 }">
                  <div class="w-5/6 text-left"><span class="font-hk font-medium text-secondary md:text-lg uppercase">How many days does the product takes to arrive?</span>
                  </div>
                  <div class="w-1/6 text-right">
                     <i class="bx text-primary text-2xl"
                        :class="faqIndex === 1 ? 'bx-minus' : 'bx-plus'"></i>
                  </div>
               </div>
               <div class="transition-all cursor-text"
                  :class="faqIndex === 1 ? 'max-h-infinite' : 'max-h-0 overflow-hidden'">
                  <div class="px-5 md:px-8 py-5">
                     <p class="font-hk text-secondary text-sm leading-loose text-left">
                        It depends on the product, but it can take 3-5 days max.
                     </p>
                  </div>
               </div>
            </div>
            <div class="faq-wrapper border-t border-l border-r border-primary last:border-b cursor-pointer">
               <div class="faq-question transition-all bg-primary-lightest flex justify-between items-center px-5 md:px-8 py-5 border-primary"
                  @click="faqIndex === 2 ? faqIndex = null : faqIndex = 2"
                  :class="{ 'border-b': faqIndex === 2 }">
                  <div class="w-5/6 text-left"><span class="font-hk font-medium text-secondary md:text-lg uppercase">How much is shipping?</span>
                  </div>
                  <div class="w-1/6 text-right">
                     <i class="bx text-primary text-2xl"
                        :class="faqIndex === 2 ? 'bx-minus' : 'bx-plus'"></i>
                  </div>
               </div>
               <div class="transition-all cursor-text"
                  :class="faqIndex === 2 ? 'max-h-infinite' : 'max-h-0 overflow-hidden'">
                  <div class="px-5 md:px-8 py-5">
                     <p class="font-hk text-secondary text-sm leading-loose text-left">
                        It depends on a lot of factors like where you're located and how many things you buy. We do have a free shipping special if you buy more than $50.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

</x-front-layout>