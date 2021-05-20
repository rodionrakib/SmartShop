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
               Login
            </h1>
            <div class="flex pt-2">
               <a href="/"
                  class="font-hk text-white text-base hover:text-primary transition-colors">Home</a>
               <span class="font-hk text-white text-base px-2">.</span>
               <span class="font-hk text-white text-base">Login</span>
            </div>
         </div>
      </div>
   </div>
   <div class="py-16 md:py-20 lg:py-24 sm:w-2/3 md:w-3/5 lg:w-1/2 xl:w-2/5 mx-auto">
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
      <form 
         method="POST" action="{{ route('login') }}"
         class="border border-grey-dark rounded shadow py-8 px-10">
         @csrf
         <label class="font-hk text-secondary block pb-3"
            for="email">Email</label>
         <input type="email"
            placeholder="Enter your email"
            name="email"
            value="{{old('email')}}" 
            class="form-input mb-6"
            id="email" />
         <label class="font-hk text-secondary block pb-3"
            for="password">Password</label>
         <input type="password"
            placeholder="Enter your password"
            name="password"
            class="form-input mb-6"
            id="password" />
         <a href="{{ route('password.request') }}"
            class="font-hk text-primary hover:text-primary-light md:text-lg pb-4 block transition-colors">Forgot your password?</a>
         <button type="submit"
            class="btn btn-primary w-full mb-4"
            aria-label="Login button">Login</button>
         <a href="{{route('register')}}"
            class="font-hk text-secondary hover:text-primary md:text-lg pl-3 underline text-center block transition-colors">Create your account</a>
      </form>
   </div>
</div>
</x-front-layout>