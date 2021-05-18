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
               <span class="font-hk text-white text-base">Contact Us</span>
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
   <div class="pb-16 md:pb-20 lg:pb-24 flex flex-col lg:flex-row justify-between">
      <div class="w-full lg:w-3/8 xl:w-1/3 mx-auto lg:mx-0 border border-grey-darker shadow px-6 xl:px-8 py-10 lg:py-8 text-center lg:text-left">
         <h2 class="font-butler border-b border-grey-dark pb-6 text-secondary text-2xl sm:text-3xl md:text-4xl">Quick contact</h2>
         <h4 class="font-hk font-bold text-secondary text-lg sm:text-xl uppercase pt-8">Email</h4>
         <p class="font-hk text-secondary">admin@smartstudentshop.com</p>
         <h4 class="font-hk font-bold text-secondary text-lg sm:text-xl uppercase pt-8">Phone</h4>
         <p class="font-hk text-secondary">+0 321-654-0987</p>
          <h4 class="font-hk font-bold text-secondary text-lg sm:text-xl uppercase pt-8">Whatsapp Number</h4>
         <p class="font-hk text-secondary">+0 321-654-0987</p>
         <div class="pt-8">
            <h4 class="font-hk font-bold text-secondary text-lg sm:text-xl uppercase">Follow Us</h4>
            <div class="flex justify-center lg:justify-start pt-3">
               <a href="/"
                  class="bg-secondary-lighter transition-colors hover:bg-primary p-3 rounded-full mr-2 flex items-center text-xl">
               <i class="bx bxl-facebook text-white"></i>
               </a>
               <a href="/"
                  class="bg-secondary-lighter transition-colors hover:bg-primary p-3 rounded-full mr-2 flex items-center text-xl"><i class="bx bxl-twitter text-white"></i></a>
               <a href="/"
                  class="bg-secondary-lighter transition-colors hover:bg-primary p-3 rounded-full mr-2 flex items-center text-xl"><i class="bx bxl-google text-white"></i></a>
               <a href="/"
                  class="bg-secondary-lighter hover:bg-primary transition-colors p-3 rounded-full flex items-center text-xl"><i class="bx bxl-linkedin text-white"></i></a>
            </div>
         </div>
      </div>
      <div class="lg:w-3/5 border border-grey-darker shadow px-8 py-10 lg:py-8 mt-10 md:mt-12 lg:mt-0">
         <form method="POST" action="{{route('contact')}}">
            @csrf
            <p class="font-hk text-secondary text-lg pb-8">Any questions? Contact us through Whatsapp or on our contact from below.</p>
            <div class="grid grid-cols-1 md:grid-cols-2 md:gap-10 justify-between mb-5">
               <div class="mb-5 sm:mb-0">
                  <label for="name"
                     class="font-hk text-secondary block mb-2">Name</label>
                  <input type="text"
                     placeholder="Enter your name"
                     class="form-input"
                     name="name" 
                     id="name" />
               </div>
               <div class="">
                  <label for="email"
                     class="font-hk text-secondary block mb-2">Email address</label>
                  <input type="text"
                     placeholder="Enter your email"
                     class="form-input"
                     name="email" 
                     id="email" />
               </div>
            </div>
            <div class="w-full mb-8">
               <label for="subject"
                  class="font-hk text-secondary block mb-2">Subject</label>
               <input type="text"
                  placeholder="Enter your subject"
                  name="subject" 
                  class="form-input"
                  id="subject" />
            </div>
            <div class="w-full mb-8">
               <label for="message"
                  class="font-hk text-secondary block mb-2">Message</label>
               <textarea rows="5"
                  name="message" 
                  placeholder="Enter your message"
                  class="form-textarea"
                  id="message"></textarea>
            </div>
            <button class="btn btn-primary"
               aria-label="Submit button">SUBMIT</button>
         </form>
      </div>
   </div>
   
</div>

</x-front-layout>