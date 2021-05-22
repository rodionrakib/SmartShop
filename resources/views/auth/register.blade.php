<x-front-layout>
<!-- unibeautify:enable -->
            <div class="container">
               <div class="flex relative">
                  <div class="bg-no-repeat bg-cover bg-center w-3/4 ml-auto h-56 lg:h-68"
                     style="background-image:url({{asset('assets/img/about-hero.png')}})"
                     >
                  </div>
                  <div class="w-full h-56 lg:h-68 bg-no-repeat bg-cover absolute top-0 left-0 c-hero-gradient-bg">
                     <div class="py-20 px-6 sm:px-12 lg:px-20">
                        <h1 class=" font-butler text-white text-2xl sm:text-3xl md:text-4.5xl lg:text-5xl">
                           Register
                        </h1>
                        <div class="flex pt-2">
                           <a href="/"
                              class="font-hk text-white text-base hover:text-primary transition-colors">Home</a>
                           <span class="font-hk text-white text-base px-2">.</span>
                           <span class="font-hk text-white text-base">Register</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="py-16 md:py-20 lg:py-24 sm:w-2/3 md:w-3/5 lg:w-1/2 xl:w-2/5 mx-auto">
                  <x-auth-validation-errors class="mb-4" :errors="$errors" />

                  <form method="POST" action="{{ route('register') }}" 

                     class="border border-grey-dark rounded shadow py-8 px-10">
                     @csrf
                     
                     <label class="font-hk text-secondary block pb-3"
                        for="name">Full Name</label>
                     <input type="text"
                        placeholder="Enter your last name"
                        name="name",
                        value="{{old('name')}}" 
                        id="name"
                        class="form-input mb-6" />
                     <label class="font-hk text-secondary block pb-3"
                        for="email">Email</label>
                     <input type="email"
                        placeholder="Enter your email"
                        name="email"
                        value="{{old('email')}}"
                        id="email"
                        class="form-input mb-6" />
                     <label class="font-hk text-secondary block pb-3"
                        for="password">Password</label>
                     <input type="password"
                        placeholder="Enter your password"
                        name="password"
                        class="form-input mb-6"
                        id="password" />
                     <label class="font-hk text-secondary block pb-3"
                        for="password_confirmation">Password Confirmation</label>
                     <input type="password"
                        placeholder="Confirm your password"
                        name="password_confirmation"
                        class="form-input mb-6"
                        id="password_confirmation" />
                     <button type="submit"
                        class="btn btn-primary w-full mb-4"
                        aria-label="Create account button">Create Account</button>
                     <a href="{{route('login')}}"
                        class="flex items-center justify-center mt-2">
                     <i class="bx bx-chevron-left text-secondary leading-none text-2xl -mb-1"></i>
                     <span class="font-hk text-secondary ml-1 leading-none">Login instead</span>
                     </a>
                  </form>
               </div>
            </div>
</x-front-layout>