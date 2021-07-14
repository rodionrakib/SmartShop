<div class="py-12">
@if ($paginator->hasPages())
        {{-- <div class="flex justify-between flex-1 sm:hidden">
            @if ($paginator->onFirstPage())
                <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                    {!! __('pagination.previous') !!}
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                    {!! __('pagination.previous') !!}
                </a>
            @endif

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                    {!! __('pagination.next') !!}
                </a>
            @else
                <span class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                    {!! __('pagination.next') !!}
                </span>
            @endif
        </div> --}}

        <div class="py-16 flex justify-center mx-auto">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                <span class="font-hk font-semibold text-grey-darkest transition-colors hover:text-black pr-5 cursor-pointer">Previous</span>
                @else
                    <a href="{{ $paginator->previousPageUrl() }}"> 
                        <span class="font-hk font-semibold text-grey-darkest transition-colors hover:text-black pr-5 cursor-pointer">Previous</span>
                    </a>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <span aria-disabled="true">
                            <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 cursor-default leading-5">{{ dd($element) }}</span>
                        </span>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                            <span
                                class="font-hk font-semibold text-black transition-colors 
                                hover:text-white text-sm bg-primary h-6 w-6 rounded-full 
                                flex items-center justify-center mr-3 cursor-pointer">{{ $page }}</span>
                                
                            @else
                                <a href="{{ $url }}"  aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                    <span
                                    class="font-hk font-semibold text-black transition-colors 
                                    hover:text-white text-sm hover:bg-primary h-6 w-6 rounded-full 
                                    flex items-center justify-center mr-3 cursor-pointer">{{ $page }}
                                </span>    
                                </a>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}">
                        <span class="font-hk font-semibold text-grey-darkest transition-colors hover:text-black pl-2 cursor-pointer">Next</span>
                    </a>
                @else
                <span class="font-hk font-semibold text-grey-darkest transition-colors hover:text-black pl-2 cursor-pointer">Next</span>
                @endif
            </span>
        </div>
    
@endif
</div>
