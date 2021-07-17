<x-front-layout>
    <div class="container">

        <div class="flex relative">

          
            <div class="bg-no-repeat bg-cover bg-center w-3/4 ml-auto h-56 lg:h-68"
                style="background-image:url(https://source.unsplash.com/1000x640/?ge-04)">
            </div>

           
            <div class="w-full h-56 lg:h-68 bg-no-repeat bg-cover absolute top-0 left-0 c-hero-gradient-bg">
                <div class="py-20 px-6 sm:px-12 lg:px-20">
                    <h1 class=" font-butler text-white text-2xl sm:text-3xl md:text-4.5xl lg:text-5xl">
                        All Collections
                    </h1>
                    <div class="flex pt-2">
                        <a href="/" class="font-hk text-white text-base hover:text-primary transition-colors">Home</a>

                        <span class="font-hk text-white text-base px-2">.</span>

                    

                        <span class="font-hk text-white text-base">Collections</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-10 flex flex-col sm:flex-row justify-between">
            <div class="flex items-center justify-start">
                <i class="bx bxs-filter-alt text-primary text-xl"></i>
                <p class="font-hk text-secondary md:text-lg px-2 leading-none block">Filter</p>
                <div class="flex items-center border border-grey-darker p-2 rounded">
                    <a href="/collection-list"><i
                            class="bx bx-menu text-grey-darker hover:text-secondary-light text-xl leading-none block transition-colors"></i></a>
                    <div class="w-px h-4 mx-2 bg-grey-darker"></div>
                    <a href="/collection-grid"><i
                            class="bx bxs-grid text-grey-darker hover:text-secondary-light text-xl leading-none block transition-colors"></i></a>
                </div>
            </div>
            @if (Session::has('message'))
                <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-green-500">
                    <span class="text-xl inline-block mr-5 align-middle">
                        <i class="fas fa-bell" />
                    </span>
                    <span class="inline-block align-middle mr-8 text-primary">
                        <b class="capitalize">{{ Session::get('message') }}
                    </span>
                    <button
                        class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none">
                        <span>×</span>
                    </button>
                </div>
            @endif
            <div class="flex items-center justify-start sm:justify-end mt-6 sm:mt-0 w-80">
                <span class="font-hk text-secondary md:text-lg mr-2 -mt-2 inline-block">Sort by:</span>
                <select class="w-2/3 form-select">
                    <option value="0">Best Match</option>
                    <option value="1">Price: Low - High</option>
                    <option value="2">Price: High - Low</option>
                </select>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10">

            @foreach ($products as $product)
                @include('site.partials.product-card')
            @endforeach


        </div>

        {{ $products->links('vendor.pagination.tailwind') }}
    </div>
    </div>
</x-front-layout>
