<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />

    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />

    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />

    <title>Search | Elyssi Template</title>

    <meta property="og:title" content="Search | Elyssi Template" />

    <meta property="og:locale" content="en_US" />

    <meta name="theme-color" content="#f35627" />

    <link rel="canonical" href="https://elyssi.tailwindmade.com/search" />

    <meta property="og:url" content="https://elyssi.tailwindmade.com/search" />

    <meta name="description"
        content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." />

    <meta property="og:site_name" content="Elyssi Template" />

    <meta property="og:image" content="https://elyssi.tailwindmade.com/assets/img/social.jpg" />

    <link rel="icon" type="image/png" href="/assets/img/favicon.png" />

    <meta name="twitter:card" content="summary_large_image" />

    <meta name="twitter:site" content="@tailwindmade" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css"
        integrity="sha256-imWjOiEEAcjWdL1+inhBu1dWYFyXuiO9vpJVEQd3y/c=" crossorigin="anonymous" />

    <link rel="stylesheet" href="/assets/styles/fonts.css" media="screen" crossorigin="anonymous" />

    <link rel="stylesheet" href="/assets/styles/main.min.css" media="screen" crossorigin="anonymous" />
</head>


<body x-data="{
        modal: false,
        mobileMenu: false,
        mobileSearch: false,
        mobileCart: false
    }" :class="{ 'overflow-hidden max-h-screen': modal || mobileMenu }" @keydown.escape="modal = false">
    <div id="main">
        <div class="container relative">
            <div class="shadow-xs py-6 lg:py-10 z-50 relative">
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <div class="block lg:hidden">
                            <i class="bx bx-menu text-primary text-4xl" @click="mobileMenu = !mobileMenu"></i>
                        </div>

                        <button @click="mobileSearch = !mobileSearch"
                            class="cursor-pointer border-2 transition-colors border-transparent hover:border-primary rounded-full p-2 sm:p-4 ml-2 sm:ml-3 md:ml-5 lg:mr-8 group focus:outline-none">
                            <img src="/assets/img/icons/icon-search.svg"
                                class="w-5 sm:w-6 md:w-8 h-5 sm:h-6 md:h-8 block group-hover:hidden"
                                alt="icon search" />
                            <img src="/assets/img/icons/icon-search-hover.svg"
                                class="w-5 sm:w-6 md:w-8 h-5 sm:h-6 md:h-8 hidden group-hover:block"
                                alt="icon search hover" />
                        </button>

                        <a href="/account/wishlist"
                            class="border-2 transition-all border-transparent hover:border-primary rounded-full p-2 sm:p-4 group hidden lg:block">
                            <img src="/assets/img/icons/icon-heart.svg"
                                class="w-5 sm:w-6 md:w-8 h-5 sm:h-6 md:h-8 block group-hover:hidden" alt="icon heart" />
                            <img src="/assets/img/icons/icon-heart-hover.svg"
                                class="w-5 sm:w-6 md:w-8 h-5 sm:h-6 md:h-8 hidden group-hover:block"
                                alt="icon heart hover" />
                        </a>
                    </div>
                    <a href="/">
                        <img src="/assets/img/logo-elyssi.svg" class="w-28 sm:w-48 h-auto" alt="logo" />
                    </a>
                    <div class="flex items-center">
                        <a href="/account/dashboard"
                            class="border-2 transition-all border-transparent hover:border-primary rounded-full p-2 sm:p-4 group">
                            <img src="/assets/img/icons/icon-user.svg"
                                class="w-5 sm:w-6 md:w-8 h-5 sm:h-6 md:h-8 block group-hover:hidden" alt="icon user" />
                            <img src="/assets/img/icons/icon-user-hover.svg"
                                class="w-5 sm:w-6 md:w-8 h-5 sm:h-6 md:h-8 hidden group-hover:block"
                                alt="icon user hover" />
                        </a>

                        <a href="/cart/index"
                            class="hidden lg:block border-2 transition-all border-transparent hover:border-primary rounded-full p-2 sm:p-4 ml-2 sm:ml-3 md:ml-5 lg:ml-8 group">
                            <img src="/assets/img/icons/icon-cart.svg"
                                class="w-5 sm:w-6 md:w-8 h-5 sm:h-6 md:h-8 block group-hover:hidden" alt="icon cart" />
                            <img src="/assets/img/icons/icon-cart-hover.svg"
                                class="w-5 sm:w-6 md:w-8 h-5 sm:h-6 md:h-8 hidden group-hover:block"
                                alt="icon cart hover" />
                        </a>

                        <span @click="mobileCart = !mobileCart"
                            class="block lg:hidden border-2 transition-all border-transparent hover:border-primary rounded-full p-2 sm:p-4 ml-2 sm:ml-3 md:ml-5 lg:ml-8 group">
                            <img src="/assets/img/icons/icon-cart.svg"
                                class="w-5 sm:w-6 md:w-8 h-5 sm:h-6 md:h-8 block group-hover:hidden" alt="icon cart" />
                            <img src="/assets/img/icons/icon-cart-hover.svg"
                                class="w-5 sm:w-6 md:w-8 h-5 sm:h-6 md:h-8 hidden group-hover:block"
                                alt="icon cart hover" />
                        </span>
                    </div>
                    <div class="hidden">
                        <i class="bx bx-menu text-primary text-3xl" @click="mobileMenu = true"></i>
                    </div>
                </div>
                <div class="justify-center lg:pt-8 hidden lg:flex">
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
                            <div
                                class="border-b-2 border-white transition-colors group-hover:border-primary flex items-center">
                                <span
                                    class="cursor-pointer text-lg font-hk group-hover:font-bold text-secondary group-hover:text-primary px-2 transition-all">Collections</span>
                                <i
                                    class="bx bx-chevron-down text-secondary group-hover:text-primary pl-2 px-2 transition-colors"></i>
                            </div>
                            <div
                                class="pt-10 absolute mt-40 top-0 left-0 right-0 z-50 w-2/3 mx-auto opacity-0 pointer-events-none group-hover:opacity-100 group-hover:pointer-events-auto ">
                                <div class="transition-all flex bg-white shadow-lg p-8 rounded-b relative ">

                                    <div class="flex-1 relative z-20">
                                        <h4 class="font-hkbold text-base text-secondary mb-2">Man</h4>
                                        <ul>

                                            <li>
                                                <a href="/collection-grid"
                                                    class="text-sm font-hk text-secondary-lighter leading-loose border-b border-transparent hover:border-secondary-lighter">Boots</a>
                                            </li>

                                            <li>
                                                <a href="/collection-grid"
                                                    class="text-sm font-hk text-secondary-lighter leading-loose border-b border-transparent hover:border-secondary-lighter">Blutcher
                                                    Boot</a>
                                            </li>

                                            <li>
                                                <a href="/collection-grid"
                                                    class="text-sm font-hk text-secondary-lighter leading-loose border-b border-transparent hover:border-secondary-lighter">Chelsea
                                                    Boot</a>
                                            </li>

                                            <li>
                                                <a href="/collection-grid"
                                                    class="text-sm font-hk text-secondary-lighter leading-loose border-b border-transparent hover:border-secondary-lighter">Chukka
                                                    Boot</a>
                                            </li>

                                            <li>
                                                <a href="/collection-grid"
                                                    class="text-sm font-hk text-secondary-lighter leading-loose border-b border-transparent hover:border-secondary-lighter">Dress
                                                    Boot</a>
                                            </li>

                                            <li>
                                                <a href="/collection-grid"
                                                    class="text-sm font-hk text-secondary-lighter leading-loose border-b border-transparent hover:border-secondary-lighter">Work
                                                    Boot</a>
                                            </li>

                                        </ul>
                                    </div>

                                    <div class="flex-1 relative z-20">
                                        <h4 class="font-hkbold text-base text-secondary mb-2">Woman</h4>
                                        <ul>

                                            <li>
                                                <a href="/collection-grid"
                                                    class="text-sm font-hk text-secondary-lighter leading-loose border-b border-transparent hover:border-secondary-lighter">Accessories</a>
                                            </li>

                                            <li>
                                                <a href="/collection-grid"
                                                    class="text-sm font-hk text-secondary-lighter leading-loose border-b border-transparent hover:border-secondary-lighter">Belts</a>
                                            </li>

                                            <li>
                                                <a href="/collection-grid"
                                                    class="text-sm font-hk text-secondary-lighter leading-loose border-b border-transparent hover:border-secondary-lighter">Caps</a>
                                            </li>

                                            <li>
                                                <a href="/collection-grid"
                                                    class="text-sm font-hk text-secondary-lighter leading-loose border-b border-transparent hover:border-secondary-lighter">Laces</a>
                                            </li>

                                            <li>
                                                <a href="/collection-grid"
                                                    class="text-sm font-hk text-secondary-lighter leading-loose border-b border-transparent hover:border-secondary-lighter">Socks</a>
                                            </li>

                                        </ul>
                                    </div>

                                    <div class="flex-1 relative z-20">
                                        <h4 class="font-hkbold text-base text-secondary mb-2">Kids</h4>
                                        <ul>

                                            <li>
                                                <a href="/collection-grid"
                                                    class="text-sm font-hk text-secondary-lighter leading-loose border-b border-transparent hover:border-secondary-lighter">Shoes</a>
                                            </li>

                                            <li>
                                                <a href="/collection-grid"
                                                    class="text-sm font-hk text-secondary-lighter leading-loose border-b border-transparent hover:border-secondary-lighter">Derby
                                                    Shoes</a>
                                            </li>

                                            <li>
                                                <a href="/collection-grid"
                                                    class="text-sm font-hk text-secondary-lighter leading-loose border-b border-transparent hover:border-secondary-lighter">Belts</a>
                                            </li>

                                            <li>
                                                <a href="/collection-grid"
                                                    class="text-sm font-hk text-secondary-lighter leading-loose border-b border-transparent hover:border-secondary-lighter">Caps</a>
                                            </li>

                                            <li>
                                                <a href="/collection-grid"
                                                    class="text-sm font-hk text-secondary-lighter leading-loose border-b border-transparent hover:border-secondary-lighter">Laces</a>
                                            </li>

                                            <li>
                                                <a href="/collection-grid"
                                                    class="text-sm font-hk text-secondary-lighter leading-loose border-b border-transparent hover:border-secondary-lighter">Socks</a>
                                            </li>

                                        </ul>
                                    </div>

                                    <div class="flex-1">
                                        <div class="z-0 bg-contain bg-right-bottom bg-no-repeat absolute inset-0"
                                            style="background-image: url(https://source.unsplash.com/1000x640/?-menu)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>



                        <li class="mr-10">
                            <a href="/blog"
                                class="block text-lg font-hk hover:font-bold transition-all text-secondary hover:text-primary border-b-2 border-white hover:border-primary px-2">Blog</a>
                        </li>



                        <li class="mr-10">
                            <a href="/contact#faq"
                                class="block text-lg font-hk hover:font-bold transition-all text-secondary hover:text-primary border-b-2 border-white hover:border-primary px-2">FAQ</a>
                        </li>



                        <li class="mr-10">
                            <a href="/contact"
                                class="block text-lg font-hk hover:font-bold transition-all text-secondary hover:text-primary border-b-2 border-white hover:border-primary px-2">Contact</a>
                        </li>


                    </ul>
                </div>
            </div>
        </div>

        <div class="fixed inset-x-0 pt-20 md:top-28 z-50 opacity-0 pointer-events-none transition-all "
            :class="{ 'opacity-100 pointer-events-auto': mobileMenu }">
            <div class="w-full sm:w-1/2 absolute left-0 top-0 px-6 z-40 bg-white shadow-sm">
                <a href="/"
                    class="w-full py-3 cursor-pointer font-hk font-medium text-secondary border-b border-grey-dark block ">Home
                </a>
                <a href="/account/wishlist.html"
                    class="w-full py-3 cursor-pointer font-hk font-medium text-secondary border-b border-grey-dark block">Wishlist
                </a>
                <div class="w-full py-3 border-b border-grey-dark block" x-data="{
                isParentAccordionOpen: false
            }">
                    <div class="flex items-center justify-between"
                        @click="isParentAccordionOpen = !isParentAccordionOpen">
                        <span class="font-hk font-medium block transition-colors"
                            :class="isParentAccordionOpen ? 'text-primary' : 'text-secondary'">Collections</span>
                        <i class="bx text-secondary text-xl"
                            :class="isParentAccordionOpen ? 'bx-chevron-down' : 'bx-chevron-left'"></i>
                    </div>
                    <div class="transition-all"
                        :class="isParentAccordionOpen ? 'max-h-infinite' : 'max-h-0 overflow-hidden'">
                        <div x-data="{
                    isAccordionOpen: false
                }">
                            <div class="flex items-center pt-3" @click="isAccordionOpen = !isAccordionOpen">
                                <i class="bx text-xl pr-3 transition-colors"
                                    :class="isAccordionOpen ? 'bx-chevron-down text-secondary' : 'bx-chevron-right text-grey-darkest'"></i>
                                <a href="/collection-grid.html" class="font-hk font-medium transition-colors"
                                    :class="isAccordionOpen ? 'text-primary' : 'text-grey-darkest'">Men's Fashion</a>
                            </div>
                            <div class="pl-12 transition-all"
                                :class="isAccordionOpen ? 'max-h-infinite' : 'max-h-0 overflow-hidden'">
                                <a href="/collection-grid.html"
                                    class="font-hk font-medium text-secondary block mt-2">T-Shirts</a>
                                <a href="/collection-grid.html"
                                    class="font-hk font-medium text-secondary block mt-2">Shirts</a>
                                <a href="/collection-grid.html"
                                    class="font-hk font-medium text-secondary block mt-2">Men’s Bags</a>
                                <a href="/collection-grid.html"
                                    class="font-hk font-medium text-secondary block mt-2">Travel Essentials</a>
                            </div>
                        </div>
                        <div class="flex items-center pt-3">
                            <i class="bx bx-chevron-right text-grey-darkest text-xl pr-3"></i>
                            <a href="/collection-grid.html" class="font-hk font-medium text-grey-darkest">Women's
                                Fashion</a>
                        </div>
                        <div class="flex items-center pt-3">
                            <i class="bx bx-chevron-right text-grey-darkest text-xl pr-3"></i>
                            <a href="/collection-grid.html" class="font-hk font-medium text-grey-darkest">Baggage</a>
                        </div>
                        <div class="flex items-center pt-3">
                            <i class="bx bx-chevron-right text-grey-darkest text-xl pr-3"></i>
                            <a href="/collection-grid.html" class="font-hk font-medium text-grey-darkest">Camp</a>
                        </div>
                        <div class="flex items-center pt-3">
                            <i class="bx bx-chevron-right text-grey-darkest text-xl pr-3"></i>
                            <a href="/collection-grid.html" class="font-hk font-medium text-grey-darkest">Personal
                                Care</a>
                        </div>
                        <div class="flex items-center pt-3">
                            <i class="bx bx-chevron-right text-grey-darkest text-xl pr-3"></i>
                            <a href="/collection-grid.html" class="font-hk font-medium text-grey-darkest">Backpacks</a>
                        </div>
                        <div class="flex items-center pt-3">
                            <i class="bx bx-chevron-right text-grey-darkest text-xl pr-3"></i>
                            <a href="/collection-grid.html" class="font-hk font-medium text-grey-darkest">Pullovers</a>
                        </div>
                    </div>
                </div>
                <a href="/about.html"
                    class="w-full py-3 cursor-pointer font-hk font-medium text-secondary border-b border-grey-dark block">About
                </a>
                <a href="/contact#faq"
                    class="w-full py-3 cursor-pointer font-hk font-medium text-secondary border-b border-grey-dark block">FAQ
                </a>
                <a href="/blog.html"
                    class="w-full py-3 cursor-pointer font-hk font-medium text-secondary border-b border-grey-dark block">Blog
                </a>
                <a href="/contact.html"
                    class="w-full py-3 cursor-pointer font-hk font-medium text-secondary border-b border-grey-dark block">Contact
                </a>
                <div class="my-8">
                    <a href="/login" class="btn btn-primary w-full mb-4" aria-label="Login button">Login Account</a>

                    <a href="/register"
                        class="font-hk text-secondary md:text-lg pl-3 underline text-center block">Create your
                        account</a>
                </div>
            </div>
        </div>


        <div class="absolute inset-x-0 opacity-0 pointer-events-none z-50 top-20 lg:top-28"
            :class="{ 'opacity-100 pointer-events-auto': mobileSearch }">
            <div class="container">
                <div class="w-full sm:w-1/2 lg:w-1/4 z-10 bg-white shadow-sm rounded">
                    <form action="/search" class="border border-grey-dark px-4 py-3 rounded-md flex items-center">
                        <input type="text" name="search"
                            class="font-hk font-medium text-secondary outline-none border-grey-dark w-full placeholder-grey-darkest focus:ring focus:ring-primary focus:outline-none focus:border-primary"
                            placeholder="Search for a product" />
                        <button class="flex items-center focus:outline-none focus:border-transparent">
                            <i class="bx bx-search text-primary text-xl ml-4"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>


        <div class="absolute inset-x-0 opacity-0 pointer-events-none z-50"
            :class="{ 'opacity-100 pointer-events-auto': mobileCart }">
            <div class="w-full sm:w-1/2 absolute right-0 top-0 px-6 py-6 z-10 bg-white shadow-sm rounded">
                <div class="flex justify-between items-center border-b border-grey-dark pb-2">
                    <div class="flex items-center">
                        <i class="bx bx-x text-grey-darkest text-2xl sm:text-3xl mr-2 cursor-pointer"></i>
                        <div class="w-20 mx-0 h-20 rounded flex items-center justify-center">
                            <div class="w-16 h-16 mx-auto bg-center bg-no-repeat bg-cover"
                                style="background-image: url(/assets/img/unlicensed/backpack-1.png);">
                            </div>
                        </div>
                        <div class="pl-2">
                            <span class="font-hk text-grey-darkest text-base block">Winter Bag</span>
                            <span class="font-hk text-secondary text-base mt-2">$19</span>
                        </div>
                    </div>
                    <div class="flex pl-3 items-center">
                        <span class="border border-primary rounded-full h-6 w-6 flex items-center justify-center"><i
                                class="bx bx-minus text-primary"></i></span>
                        <span class="font-hkbold text-primary text-lg block px-2">1</span>
                        <span class="border border-primary rounded-full h-6 w-6 flex items-center justify-center"><i
                                class="bx bx-plus text-primary"></i></span>
                    </div>
                </div>
                <div class="flex justify-between items-center border-b border-grey-dark pb-2">
                    <div class="flex items-center">
                        <i class="bx bx-x text-grey-darkest text-2xl sm:text-3xl mr-2 cursor-pointer"></i>
                        <div class="w-20 mx-0 h-20 rounded flex items-center justify-center">
                            <div class="w-16 h-16 mx-auto bg-center bg-no-repeat bg-cover"
                                style="background-image: url(/assets/img/unlicensed/backpack-1.png);">
                            </div>
                        </div>
                        <div class="pl-2">
                            <span class="font-hk text-grey-darkest text-base block">Winter Bag</span>
                            <span class="font-hk text-secondary text-base mt-2">$19</span>
                        </div>
                    </div>
                    <div class="flex pl-3 items-center">
                        <span class="border border-primary rounded-full h-6 w-6 flex items-center justify-center"><i
                                class="bx bx-minus text-primary"></i></span>
                        <span class="font-hkbold text-primary text-lg block px-2">1</span>
                        <span class="border border-primary rounded-full h-6 w-6 flex items-center justify-center"><i
                                class="bx bx-plus text-primary"></i></span>
                    </div>
                </div>
                <div class="flex justify-between pt-4">
                    <span class="font-hkbold text-secondary text-lg">Total</span>
                    <span class="font-hkbold text-secondary text-lg">$38</span>
                </div>
                <button type="submit" class="btn btn-primary w-full mt-5" aria-label="Login button">Checkout</button>
                <a href="/cart" class="font-hk text-secondary md:text-lg pl-3 underline text-center block mt-4">Go to
                    cart page</a>
            </div>
        </div>

        <div>
            <!-- unibeautify:enable -->

            <div class="container">
                <div class="flex relative">
                    <div class="bg-no-repeat bg-cover bg-center w-3/4 ml-auto h-64 md:h-68"
                        style="background-image:url(https://source.unsplash.com/1000x640/?-hero)">
                    </div>
                    <div class="w-full h-64 md:h-68 bg-no-repeat bg-cover absolute top-0 left-0 c-hero-gradient-bg">
                        <div class="py-16 md:py-20 px-6 sm:px-12 lg:px-20 text-center">
                            <h1 class=" font-butler text-white text-2xl sm:text-3xl md:text-4.5xl lg:text-5xl">
                                Search
                            </h1>
                            <form class="flex justify-center pt-6 md:pt-8">
                                <input type="text" placeholder="Search our store"
                                    class="px-6 w-3/5 md:w-2/5 lg:w-1/3 xl:w-1/4 border-none rounded-l">
                                <button
                                    class="bg-primary hover:bg-primary-light px-8 hover:px-5 py-3 rounded-r focus:outline-none border-2 transition-all border-transparent hover:border-white coursor-pointer">
                                    <img src="/assets/img/icons/icon-search-white.svg"
                                        class="w-5 sm:w-6 md:w-8 h-5 sm:h-6 md:h-8" alt="icon search" />
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="py-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10">

                        <div class="w-full relative group lg:last:hidden xl:last:block">
                            <div class="relative rounded flex justify-center items-center">
                                <div class="w-full h-68 bg-center bg-no-repeat bg-cover"
                                    style="background-image:url(https://source.unsplash.com/1000x640/?ass-1)">
                                </div>
                                <span
                                    class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-v-green text-sm uppercase tracking-wide">New</span>

                                <div
                                    class="absolute opacity-0 transition-opacity group-hover:opacity-100 flex justify-center items-center py-28 inset-0 group bg-secondary bg-opacity-85">
                                    <a href="/cart"
                                        class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
                                        <img src="/assets/img/icons/icon-cart.svg " class="h-6 w-6" alt="icon cart" />
                                    </a>
                                    <a href="/product"
                                        class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
                                        <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6"
                                            alt="icon search" />
                                    </a>
                                    <a href="/account/wishlist/"
                                        class="bg-white hover:bg-primary-light  rounded-full px-3 py-3 flex items-center transition-all ">
                                        <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                                    </a>
                                </div>
                            </div>
                            <div class="flex justify-between items-center pt-6">
                                <div>
                                    <h3 class="font-hk text-base text-secondary">Cat eye</h3>
                                    <div class="flex items-center">
                                        <div class="flex items-center">
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                        </div>
                                        <p class="font-hk text-sm text-secondary ml-2">(45)</p>
                                    </div>
                                </div>
                                <span class="font-hk font-bold text-primary text-xl">$75.0</span>
                            </div>
                        </div>

                        <div class="w-full relative group lg:last:hidden xl:last:block">
                            <div class="relative rounded flex justify-center items-center">
                                <div class="w-full h-68 bg-center bg-no-repeat bg-cover"
                                    style="background-image:url(https://source.unsplash.com/1000x640/?ass-2)">
                                </div>
                                <span
                                    class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-v-blue text-sm uppercase tracking-wide">trend</span>

                                <div
                                    class="absolute opacity-0 transition-opacity group-hover:opacity-100 flex justify-center items-center py-28 inset-0 group bg-secondary bg-opacity-85">
                                    <a href="/cart"
                                        class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
                                        <img src="/assets/img/icons/icon-cart.svg " class="h-6 w-6" alt="icon cart" />
                                    </a>
                                    <a href="/product"
                                        class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
                                        <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6"
                                            alt="icon search" />
                                    </a>
                                    <a href="/account/wishlist/"
                                        class="bg-white hover:bg-primary-light  rounded-full px-3 py-3 flex items-center transition-all ">
                                        <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                                    </a>
                                </div>
                            </div>
                            <div class="flex justify-between items-center pt-6">
                                <div>
                                    <h3 class="font-hk text-base text-secondary">Floral Chick</h3>
                                    <div class="flex items-center">
                                        <div class="flex items-center">
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                        </div>
                                        <p class="font-hk text-sm text-secondary ml-2">(45)</p>
                                    </div>
                                </div>
                                <span class="font-hk font-bold text-primary text-xl">$50.0</span>
                            </div>
                        </div>

                        <div class="w-full relative group lg:last:hidden xl:last:block">
                            <div class="relative rounded flex justify-center items-center">
                                <div class="w-full h-68 bg-center bg-no-repeat bg-cover"
                                    style="background-image:url(https://source.unsplash.com/1000x640/?ass-3)">
                                </div>
                                <span
                                    class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-primary-light text-sm uppercase tracking-wide">25%</span>

                                <div
                                    class="absolute opacity-0 transition-opacity group-hover:opacity-100 flex justify-center items-center py-28 inset-0 group bg-secondary bg-opacity-85">
                                    <a href="/cart"
                                        class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
                                        <img src="/assets/img/icons/icon-cart.svg " class="h-6 w-6" alt="icon cart" />
                                    </a>
                                    <a href="/product"
                                        class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
                                        <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6"
                                            alt="icon search" />
                                    </a>
                                    <a href="/account/wishlist/"
                                        class="bg-white hover:bg-primary-light  rounded-full px-3 py-3 flex items-center transition-all ">
                                        <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                                    </a>
                                </div>
                            </div>
                            <div class="flex justify-between items-center pt-6">
                                <div>
                                    <h3 class="font-hk text-base text-secondary">Coffee Cream</h3>
                                    <div class="flex items-center">
                                        <div class="flex items-center">
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                        </div>
                                        <p class="font-hk text-sm text-secondary ml-2">(45)</p>
                                    </div>
                                </div>
                                <span class="font-hk font-bold text-primary text-xl">$65.0</span>
                            </div>
                        </div>

                        <div class="w-full relative group lg:last:hidden xl:last:block">
                            <div class="relative rounded flex justify-center items-center">
                                <div class="w-full h-68 bg-center bg-no-repeat bg-cover"
                                    style="background-image:url(https://source.unsplash.com/1000x640/?ack-1)">
                                </div>
                                <span
                                    class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-v-red text-sm uppercase tracking-wide">Hot</span>

                                <div
                                    class="absolute opacity-0 transition-opacity group-hover:opacity-100 flex justify-center items-center py-28 inset-0 group bg-secondary bg-opacity-85">
                                    <a href="/cart"
                                        class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
                                        <img src="/assets/img/icons/icon-cart.svg " class="h-6 w-6" alt="icon cart" />
                                    </a>
                                    <a href="/product"
                                        class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
                                        <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6"
                                            alt="icon search" />
                                    </a>
                                    <a href="/account/wishlist/"
                                        class="bg-white hover:bg-primary-light  rounded-full px-3 py-3 flex items-center transition-all ">
                                        <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                                    </a>
                                </div>
                            </div>
                            <div class="flex justify-between items-center pt-6">
                                <div>
                                    <h3 class="font-hk text-base text-secondary">Black Blake</h3>
                                    <div class="flex items-center">
                                        <div class="flex items-center">
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                        </div>
                                        <p class="font-hk text-sm text-secondary ml-2">(45)</p>
                                    </div>
                                </div>
                                <span class="font-hk font-bold text-primary text-xl">$115.0</span>
                            </div>
                        </div>

                        <div class="w-full relative group lg:last:hidden xl:last:block">
                            <div class="relative rounded flex justify-center items-center">
                                <div class="w-full h-68 bg-center bg-no-repeat bg-cover"
                                    style="background-image:url(https://source.unsplash.com/1000x640/?ack-2)">
                                </div>
                                <span
                                    class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-v-green text-sm uppercase tracking-wide">New</span>

                                <div
                                    class="absolute opacity-0 transition-opacity group-hover:opacity-100 flex justify-center items-center py-28 inset-0 group bg-secondary bg-opacity-85">
                                    <a href="/cart"
                                        class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
                                        <img src="/assets/img/icons/icon-cart.svg " class="h-6 w-6" alt="icon cart" />
                                    </a>
                                    <a href="/product"
                                        class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
                                        <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6"
                                            alt="icon search" />
                                    </a>
                                    <a href="/account/wishlist/"
                                        class="bg-white hover:bg-primary-light  rounded-full px-3 py-3 flex items-center transition-all ">
                                        <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                                    </a>
                                </div>
                            </div>
                            <div class="flex justify-between items-center pt-6">
                                <div>
                                    <h3 class="font-hk text-base text-secondary">Woody Blake</h3>
                                    <div class="flex items-center">
                                        <div class="flex items-center">
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                        </div>
                                        <p class="font-hk text-sm text-secondary ml-2">(45)</p>
                                    </div>
                                </div>
                                <span class="font-hk font-bold text-primary text-xl">$110.0</span>
                            </div>
                        </div>

                        <div class="w-full relative group lg:last:hidden xl:last:block">
                            <div class="relative rounded flex justify-center items-center">
                                <div class="w-full h-68 bg-center bg-no-repeat bg-cover"
                                    style="background-image:url(https://source.unsplash.com/1000x640/?ack-3)">
                                </div>
                                <span
                                    class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-v-blue text-sm uppercase tracking-wide">Trend</span>

                                <div
                                    class="absolute opacity-0 transition-opacity group-hover:opacity-100 flex justify-center items-center py-28 inset-0 group bg-secondary bg-opacity-85">
                                    <a href="/cart"
                                        class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
                                        <img src="/assets/img/icons/icon-cart.svg " class="h-6 w-6" alt="icon cart" />
                                    </a>
                                    <a href="/product"
                                        class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
                                        <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6"
                                            alt="icon search" />
                                    </a>
                                    <a href="/account/wishlist/"
                                        class="bg-white hover:bg-primary-light  rounded-full px-3 py-3 flex items-center transition-all ">
                                        <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                                    </a>
                                </div>
                            </div>
                            <div class="flex justify-between items-center pt-6">
                                <div>
                                    <h3 class="font-hk text-base text-secondary">Party Blake</h3>
                                    <div class="flex items-center">
                                        <div class="flex items-center">
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                        </div>
                                        <p class="font-hk text-sm text-secondary ml-2">(45)</p>
                                    </div>
                                </div>
                                <span class="font-hk font-bold text-primary text-xl">$130.0</span>
                            </div>
                        </div>

                        <div class="w-full relative group lg:last:hidden xl:last:block">
                            <div class="relative rounded flex justify-center items-center">
                                <div class="w-full h-68 bg-center bg-no-repeat bg-cover"
                                    style="background-image:url(https://source.unsplash.com/1000x640/?ack-4)">
                                </div>
                                <span
                                    class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-primary-light text-sm uppercase tracking-wide">25%</span>

                                <div
                                    class="absolute opacity-0 transition-opacity group-hover:opacity-100 flex justify-center items-center py-28 inset-0 group bg-secondary bg-opacity-85">
                                    <a href="/cart"
                                        class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
                                        <img src="/assets/img/icons/icon-cart.svg " class="h-6 w-6" alt="icon cart" />
                                    </a>
                                    <a href="/product"
                                        class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
                                        <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6"
                                            alt="icon search" />
                                    </a>
                                    <a href="/account/wishlist/"
                                        class="bg-white hover:bg-primary-light  rounded-full px-3 py-3 flex items-center transition-all ">
                                        <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                                    </a>
                                </div>
                            </div>
                            <div class="flex justify-between items-center pt-6">
                                <div>
                                    <h3 class="font-hk text-base text-secondary">Not Ballerina Blake</h3>
                                    <div class="flex items-center">
                                        <div class="flex items-center">
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                        </div>
                                        <p class="font-hk text-sm text-secondary ml-2">(45)</p>
                                    </div>
                                </div>
                                <span class="font-hk font-bold text-primary text-xl">$115.0</span>
                            </div>
                        </div>

                        <div class="w-full relative group lg:last:hidden xl:last:block">
                            <div class="relative rounded flex justify-center items-center">
                                <div class="w-full h-68 bg-center bg-no-repeat bg-cover"
                                    style="background-image:url(https://source.unsplash.com/1000x640/?oes-1)">
                                </div>
                                <span
                                    class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-v-red text-sm uppercase tracking-wide">Hot</span>

                                <div
                                    class="absolute opacity-0 transition-opacity group-hover:opacity-100 flex justify-center items-center py-28 inset-0 group bg-secondary bg-opacity-85">
                                    <a href="/cart"
                                        class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
                                        <img src="/assets/img/icons/icon-cart.svg " class="h-6 w-6" alt="icon cart" />
                                    </a>
                                    <a href="/product"
                                        class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
                                        <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6"
                                            alt="icon search" />
                                    </a>
                                    <a href="/account/wishlist/"
                                        class="bg-white hover:bg-primary-light  rounded-full px-3 py-3 flex items-center transition-all ">
                                        <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                                    </a>
                                </div>
                            </div>
                            <div class="flex justify-between items-center pt-6">
                                <div>
                                    <h3 class="font-hk text-base text-secondary">Cocktail Vans</h3>
                                    <div class="flex items-center">
                                        <div class="flex items-center">
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                        </div>
                                        <p class="font-hk text-sm text-secondary ml-2">(45)</p>
                                    </div>
                                </div>
                                <span class="font-hk font-bold text-primary text-xl">$33.0</span>
                            </div>
                        </div>

                        <div class="w-full relative group lg:last:hidden xl:last:block">
                            <div class="relative rounded flex justify-center items-center">
                                <div class="w-full h-68 bg-center bg-no-repeat bg-cover"
                                    style="background-image:url(https://source.unsplash.com/1000x640/?oes-2)">
                                </div>
                                <span
                                    class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-v-green text-sm uppercase tracking-wide">New</span>

                                <div
                                    class="absolute opacity-0 transition-opacity group-hover:opacity-100 flex justify-center items-center py-28 inset-0 group bg-secondary bg-opacity-85">
                                    <a href="/cart"
                                        class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
                                        <img src="/assets/img/icons/icon-cart.svg " class="h-6 w-6" alt="icon cart" />
                                    </a>
                                    <a href="/product"
                                        class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
                                        <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6"
                                            alt="icon search" />
                                    </a>
                                    <a href="/account/wishlist/"
                                        class="bg-white hover:bg-primary-light  rounded-full px-3 py-3 flex items-center transition-all ">
                                        <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                                    </a>
                                </div>
                            </div>
                            <div class="flex justify-between items-center pt-6">
                                <div>
                                    <h3 class="font-hk text-base text-secondary">WW Vans</h3>
                                    <div class="flex items-center">
                                        <div class="flex items-center">
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                        </div>
                                        <p class="font-hk text-sm text-secondary ml-2">(45)</p>
                                    </div>
                                </div>
                                <span class="font-hk font-bold text-primary text-xl">$35.0</span>
                            </div>
                        </div>

                        <div class="w-full relative group lg:last:hidden xl:last:block">
                            <div class="relative rounded flex justify-center items-center">
                                <div class="w-full h-68 bg-center bg-no-repeat bg-cover"
                                    style="background-image:url(https://source.unsplash.com/1000x640/?oes-3)">
                                </div>
                                <span
                                    class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-v-blue text-sm uppercase tracking-wide">trend</span>

                                <div
                                    class="absolute opacity-0 transition-opacity group-hover:opacity-100 flex justify-center items-center py-28 inset-0 group bg-secondary bg-opacity-85">
                                    <a href="/cart"
                                        class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
                                        <img src="/assets/img/icons/icon-cart.svg " class="h-6 w-6" alt="icon cart" />
                                    </a>
                                    <a href="/product"
                                        class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
                                        <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6"
                                            alt="icon search" />
                                    </a>
                                    <a href="/account/wishlist/"
                                        class="bg-white hover:bg-primary-light  rounded-full px-3 py-3 flex items-center transition-all ">
                                        <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                                    </a>
                                </div>
                            </div>
                            <div class="flex justify-between items-center pt-6">
                                <div>
                                    <h3 class="font-hk text-base text-secondary">Classic Beige</h3>
                                    <div class="flex items-center">
                                        <div class="flex items-center">
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                        </div>
                                        <p class="font-hk text-sm text-secondary ml-2">(45)</p>
                                    </div>
                                </div>
                                <span class="font-hk font-bold text-primary text-xl">$30.0</span>
                            </div>
                        </div>

                        <div class="w-full relative group lg:last:hidden xl:last:block">
                            <div class="relative rounded flex justify-center items-center">
                                <div class="w-full h-68 bg-center bg-no-repeat bg-cover"
                                    style="background-image:url(https://source.unsplash.com/1000x640/?oes-4)">
                                </div>
                                <span
                                    class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-primary-light text-sm uppercase tracking-wide">25%</span>

                                <div
                                    class="absolute opacity-0 transition-opacity group-hover:opacity-100 flex justify-center items-center py-28 inset-0 group bg-secondary bg-opacity-85">
                                    <a href="/cart"
                                        class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
                                        <img src="/assets/img/icons/icon-cart.svg " class="h-6 w-6" alt="icon cart" />
                                    </a>
                                    <a href="/product"
                                        class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
                                        <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6"
                                            alt="icon search" />
                                    </a>
                                    <a href="/account/wishlist/"
                                        class="bg-white hover:bg-primary-light  rounded-full px-3 py-3 flex items-center transition-all ">
                                        <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                                    </a>
                                </div>
                            </div>
                            <div class="flex justify-between items-center pt-6">
                                <div>
                                    <h3 class="font-hk text-base text-secondary">Siberian Boots</h3>
                                    <div class="flex items-center">
                                        <div class="flex items-center">
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                        </div>
                                        <p class="font-hk text-sm text-secondary ml-2">(45)</p>
                                    </div>
                                </div>
                                <span class="font-hk font-bold text-primary text-xl">$67.0</span>
                            </div>
                        </div>

                        <div class="w-full relative group lg:last:hidden xl:last:block">
                            <div class="relative rounded flex justify-center items-center">
                                <div class="w-full h-68 bg-center bg-no-repeat bg-cover"
                                    style="background-image:url(https://source.unsplash.com/1000x640/?tch-1)">
                                </div>
                                <span
                                    class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-v-red text-sm uppercase tracking-wide">Hot</span>

                                <div
                                    class="absolute opacity-0 transition-opacity group-hover:opacity-100 flex justify-center items-center py-28 inset-0 group bg-secondary bg-opacity-85">
                                    <a href="/cart"
                                        class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
                                        <img src="/assets/img/icons/icon-cart.svg " class="h-6 w-6" alt="icon cart" />
                                    </a>
                                    <a href="/product"
                                        class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
                                        <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6"
                                            alt="icon search" />
                                    </a>
                                    <a href="/account/wishlist/"
                                        class="bg-white hover:bg-primary-light  rounded-full px-3 py-3 flex items-center transition-all ">
                                        <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                                    </a>
                                </div>
                            </div>
                            <div class="flex justify-between items-center pt-6">
                                <div>
                                    <h3 class="font-hk text-base text-secondary">Submarine Watch</h3>
                                    <div class="flex items-center">
                                        <div class="flex items-center">
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                        </div>
                                        <p class="font-hk text-sm text-secondary ml-2">(45)</p>
                                    </div>
                                </div>
                                <span class="font-hk font-bold text-primary text-xl">$120.0</span>
                            </div>
                        </div>

                        <div class="w-full relative group lg:last:hidden xl:last:block">
                            <div class="relative rounded flex justify-center items-center">
                                <div class="w-full h-68 bg-center bg-no-repeat bg-cover"
                                    style="background-image:url(https://source.unsplash.com/1000x640/?tch-2)">
                                </div>
                                <span
                                    class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-v-green text-sm uppercase tracking-wide">New</span>

                                <div
                                    class="absolute opacity-0 transition-opacity group-hover:opacity-100 flex justify-center items-center py-28 inset-0 group bg-secondary bg-opacity-85">
                                    <a href="/cart"
                                        class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
                                        <img src="/assets/img/icons/icon-cart.svg " class="h-6 w-6" alt="icon cart" />
                                    </a>
                                    <a href="/product"
                                        class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
                                        <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6"
                                            alt="icon search" />
                                    </a>
                                    <a href="/account/wishlist/"
                                        class="bg-white hover:bg-primary-light  rounded-full px-3 py-3 flex items-center transition-all ">
                                        <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                                    </a>
                                </div>
                            </div>
                            <div class="flex justify-between items-center pt-6">
                                <div>
                                    <h3 class="font-hk text-base text-secondary">Rose Gold Watch</h3>
                                    <div class="flex items-center">
                                        <div class="flex items-center">
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                        </div>
                                        <p class="font-hk text-sm text-secondary ml-2">(45)</p>
                                    </div>
                                </div>
                                <span class="font-hk font-bold text-primary text-xl">$135.0</span>
                            </div>
                        </div>

                        <div class="w-full relative group lg:last:hidden xl:last:block">
                            <div class="relative rounded flex justify-center items-center">
                                <div class="w-full h-68 bg-center bg-no-repeat bg-cover"
                                    style="background-image:url(https://source.unsplash.com/1000x640/?tch-3)">
                                </div>
                                <span
                                    class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-v-blue text-sm uppercase tracking-wide">Trend</span>

                                <div
                                    class="absolute opacity-0 transition-opacity group-hover:opacity-100 flex justify-center items-center py-28 inset-0 group bg-secondary bg-opacity-85">
                                    <a href="/cart"
                                        class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
                                        <img src="/assets/img/icons/icon-cart.svg " class="h-6 w-6" alt="icon cart" />
                                    </a>
                                    <a href="/product"
                                        class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
                                        <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6"
                                            alt="icon search" />
                                    </a>
                                    <a href="/account/wishlist/"
                                        class="bg-white hover:bg-primary-light  rounded-full px-3 py-3 flex items-center transition-all ">
                                        <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                                    </a>
                                </div>
                            </div>
                            <div class="flex justify-between items-center pt-6">
                                <div>
                                    <h3 class="font-hk text-base text-secondary">Silver One Watch</h3>
                                    <div class="flex items-center">
                                        <div class="flex items-center">
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                        </div>
                                        <p class="font-hk text-sm text-secondary ml-2">(45)</p>
                                    </div>
                                </div>
                                <span class="font-hk font-bold text-primary text-xl">$137.0</span>
                            </div>
                        </div>

                        <div class="w-full relative group lg:last:hidden xl:last:block">
                            <div class="relative rounded flex justify-center items-center">
                                <div class="w-full h-68 bg-center bg-no-repeat bg-cover"
                                    style="background-image:url(https://source.unsplash.com/1000x640/?tch-4)">
                                </div>
                                <span
                                    class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-primary-light text-sm uppercase tracking-wide">25%</span>

                                <div
                                    class="absolute opacity-0 transition-opacity group-hover:opacity-100 flex justify-center items-center py-28 inset-0 group bg-secondary bg-opacity-85">
                                    <a href="/cart"
                                        class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
                                        <img src="/assets/img/icons/icon-cart.svg " class="h-6 w-6" alt="icon cart" />
                                    </a>
                                    <a href="/product"
                                        class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
                                        <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6"
                                            alt="icon search" />
                                    </a>
                                    <a href="/account/wishlist/"
                                        class="bg-white hover:bg-primary-light  rounded-full px-3 py-3 flex items-center transition-all ">
                                        <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                                    </a>
                                </div>
                            </div>
                            <div class="flex justify-between items-center pt-6">
                                <div>
                                    <h3 class="font-hk text-base text-secondary">Princess</h3>
                                    <div class="flex items-center">
                                        <div class="flex items-center">
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                        </div>
                                        <p class="font-hk text-sm text-secondary ml-2">(45)</p>
                                    </div>
                                </div>
                                <span class="font-hk font-bold text-primary text-xl">$145.0</span>
                            </div>
                        </div>

                        <div class="w-full relative group lg:last:hidden xl:last:block">
                            <div class="relative rounded flex justify-center items-center">
                                <div class="w-full h-68 bg-center bg-no-repeat bg-cover"
                                    style="background-image:url(https://source.unsplash.com/1000x640/?tch-5)">
                                </div>
                                <span
                                    class="absolute top-0 right-0 bg-white px-5 py-1 mt-4 mr-4 rounded-full font-hk font-bold  text-v-red text-sm uppercase tracking-wide">Hot</span>

                                <div
                                    class="absolute opacity-0 transition-opacity group-hover:opacity-100 flex justify-center items-center py-28 inset-0 group bg-secondary bg-opacity-85">
                                    <a href="/cart"
                                        class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
                                        <img src="/assets/img/icons/icon-cart.svg " class="h-6 w-6" alt="icon cart" />
                                    </a>
                                    <a href="/product"
                                        class="bg-white hover:bg-primary-light rounded-full px-3 py-3 flex items-center transition-all mr-3">
                                        <img src="/assets/img/icons/icon-search.svg" class="h-6 w-6"
                                            alt="icon search" />
                                    </a>
                                    <a href="/account/wishlist/"
                                        class="bg-white hover:bg-primary-light  rounded-full px-3 py-3 flex items-center transition-all ">
                                        <img src="/assets/img/icons/icon-heart.svg" class="h-6 w-6" alt="icon heart" />
                                    </a>
                                </div>
                            </div>
                            <div class="flex justify-between items-center pt-6">
                                <div>
                                    <h3 class="font-hk text-base text-secondary">Silver One for Men</h3>
                                    <div class="flex items-center">
                                        <div class="flex items-center">
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                            <i class="bx bxs-star text-primary"></i>
                                        </div>
                                        <p class="font-hk text-sm text-secondary ml-2">(45)</p>
                                    </div>
                                </div>
                                <span class="font-hk font-bold text-primary text-xl">$140.0</span>
                            </div>
                        </div>

                    </div>
                    <div class="py-16 flex justify-center mx-auto">
                        <span
                            class="font-hk font-semibold text-grey-darkest transition-colors hover:text-black pr-5 cursor-pointer">Previous</span>
                        <span
                            class="font-hk font-semibold text-black transition-colors hover:text-white text-sm hover:bg-primary h-6 w-6 rounded-full flex items-center justify-center mr-3 cursor-pointer">1</span>
                        <span
                            class="font-hk font-semibold text-black transition-colors hover:text-white text-sm hover:bg-primary h-6 w-6 rounded-full flex items-center justify-center mr-3 cursor-pointer">2</span>
                        <span
                            class="font-hk font-semibold text-black transition-colors hover:text-white text-sm hover:bg-primary h-6 w-6 rounded-full flex items-center justify-center mr-3 cursor-pointer">3</span>
                        <span
                            class="font-hk font-semibold text-grey-darkest transition-colors hover:text-black pl-2 cursor-pointer">Next</span>

                    </div>
                </div>
            </div>

        </div>
        <div class="bg-center bg-no-repeat bg-cover" style="background-image:url(/assets/img/bg-footer.png)">
            <div class="container py-16 sm:py-20 md:py-24">
                <div class="w-5/6 mx-auto flex flex-col lg:flex-row items-center justify-between">
                    <div class="text-center lg:text-left">
                        <h4 class="font-hk font-bold text-white text-xl pb-8">Contact</h4>
                        <ul class="list-reset">

                            <li class="pb-2 block">
                                <a href="mailto:test.email0123@elyssi.com"
                                    class="font-hk text-white transition-colors hover:text-primary text-base tracking-wide">test.email0123@elyssi.com</a>
                            </li>

                            <li class="pb-2 block">
                                <a href="tel:0123234222"
                                    class="font-hk text-white transition-colors hover:text-primary text-base tracking-wide">0123
                                    234 222</a>
                            </li>

                            <li class="pb-2 block">
                                <a href="https://elyssi.tailwindmade.com"
                                    class="font-hk text-white transition-colors hover:text-primary text-base tracking-wide">Elyssi</a>
                            </li>

                        </ul>
                    </div>
                    <div class="text-center py-16 lg:py-0">
                        <a href="/" class="font-butler text-white text-4xl uppercase tracking-wider">Elyssi.</a>
                        <div class="flex items-center justify-center pt-5">

                            <a href="https://www.google.com" class="group">
                                <div
                                    class="bg-white group-hover:bg-primary rounded-full px-2 py-2 flex items-center mr-5 transition-colors">
                                    <i
                                        class="bx bxl-facebook text-secondary transition-colors group-hover:text-white"></i>
                                </div>
                            </a>

                            <a href="https://www.google.com" class="group">
                                <div
                                    class="bg-white group-hover:bg-primary rounded-full px-2 py-2 flex items-center mr-5 transition-colors">
                                    <i
                                        class="bx bxl-twitter text-secondary transition-colors group-hover:text-white"></i>
                                </div>
                            </a>

                            <a href="https://www.google.com" class="group">
                                <div
                                    class="bg-white group-hover:bg-primary rounded-full px-2 py-2 flex items-center mr-5 transition-colors">
                                    <i
                                        class="bx bxl-instagram text-secondary transition-colors group-hover:text-white"></i>
                                </div>
                            </a>

                            <a href="https://www.google.com" class="group">
                                <div
                                    class="bg-white group-hover:bg-primary rounded-full px-2 py-2 flex items-center mr-5 transition-colors">
                                    <i
                                        class="bx bxl-pinterest text-secondary transition-colors group-hover:text-white"></i>
                                </div>
                            </a>

                        </div>
                    </div>
                    <div class="text-center lg:text-left">
                        <h4 class="font-hk font-bold text-white text-xl pb-8">Link</h4>
                        <ul class="list-reset">

                            <li class="pb-2 block">
                                <a href="/collection-list"
                                    class="font-hk transition-colors text-white hover:text-primary text-base tracking-wide">Shop</a>
                            </li>

                            <li class="pb-2 block">
                                <a href="/contact"
                                    class="font-hk transition-colors text-white hover:text-primary text-base tracking-wide">Contact
                                    Us</a>
                            </li>

                            <li class="pb-2 block">
                                <a href="/single"
                                    class="font-hk transition-colors text-white hover:text-primary text-base tracking-wide">Terms
                                    & Conditions</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-8">
            <p class="font-hk text-secondary text-base text-center">
                All rights reserved © 2021. Made with ❤️ by
                <a href="https://tailwindmade.com" target="_blank" class="text-primary">Tailwind Made</a>.
            </p>
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.min.js" defer></script>

    <script src="/assets/js/main.js"></script>

</body>

</html>
