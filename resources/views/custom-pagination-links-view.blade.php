{{-- <div
    class="grid px-4 py-3 text-xs font-semibold tracking-wide text-black uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
    @if ($paginator->hasPages())
    <button wire:click="nextPage"
        class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple" aria-label="Previous">
        <svg aria-hidden="true" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
            <path
                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                clip-rule="evenodd" fill-rule="evenodd"></path>
        </svg>
    </button>
    <button wire:loading.attr="disabled" rel="prev" wire:click="previousPage"
        class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple" aria-label="Previous">
        <svg aria-hidden="true" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
            <path
                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                clip-rule="evenodd" fill-rule="evenodd"></path>
        </svg>
    </button>
    @endif
</div> --}}
<div
    class="grid px-4 py-3 text-xs font-semibold tracking-wide text-black uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">

    <span class="col-span-2"></span>
    <!-- Pagination -->
    @if ($paginator->hasPages())
    <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
        <nav aria-label="Table navigation" role="navigation">
            <ul class="inline-flex items-center">
                <li>
                    <button wire:loading.attr="disabled" rel="prev" wire:click="previousPage"
                        class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                        aria-label="Previous">
                        <svg aria-hidden="true" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                            <path
                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                clip-rule="evenodd" fill-rule="evenodd"></path>
                        </svg>
                    </button>
                </li>

                {{-- mantap --}}

                <?php
        $start = $paginator->currentPage() - 2; // show 3 pagination links before current
        $end = $paginator->currentPage() + 2; // show 3 pagination links after current
        if($start < 1) {
            $start = 1; // reset start to 1
            $end += 1;
        }
        if($end >= $paginator->lastPage() ) $end = $paginator->lastPage(); // reset end to last page
        ?>

                @if($start > 1)
                <li class="page-item">
                    <a class=" px-3 py-1 page-link" href="{{ $paginator->url(1) }}">{{1}}</a>
                </li>
                @if($paginator->currentPage() != 4)
                {{-- "Three Dots" Separator --}}
                <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
                @endif
                @endif
                @for ($i = $start; $i <= $end; $i++) <li
                    class="page-item {{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                    <a class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple page-link" href="{{ $paginator->url($i) }}">{{$i}}</a>
                    </li>
                    @endfor
                    @if($end < $paginator->lastPage())
                        @if($paginator->currentPage() + 3 != $paginator->lastPage())
                        {{-- "Three Dots" Separator --}}
                        <li class="px-3 py-1 page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
                        @endif
                        <li class="page-item">
                            <a class="page-link"
                                href="{{ $paginator->url($paginator->lastPage()) }}">{{$paginator->lastPage()}}</a>
                        </li>
                    @endif

                        {{-- banget --}}
                        {{-- <li>
                            <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                1
                            </button>
                        </li>
                        <li>
                            <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                2
                            </button>
                        </li>
                        <li>
                            <span class="px-3 py-1">...</span>
                        </li>
                        <li>
                            <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                8
                            </button>
                        <li> --}}
                            @if ($paginator->hasMorePages())
                            <button wire:loading.attr="disabled" rel="next" wire:click="nextPage"
                                class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                                aria-label="Next">
                                <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                                    <path
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" fill-rule="evenodd"></path>
                                </svg>
                            </button>

                            @endif
                        </li>
            </ul>
        </nav>
    </span>
    @endif
</div>
