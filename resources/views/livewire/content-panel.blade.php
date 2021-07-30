<div>

    <!-- component -->
    <div class="w-max mb-8 overflow-hidden rounded-lg shadow-xs m-4">
        <div class="w-full overflow-x-auto">
            <table class="min-w-max table-auto w-full whitespace-no-wrap">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-white uppercase border-b dark:border-black bg-gray-400 dark:text-green dark:bg-white">
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Type</th>
                        <th class="px-4 py-3">Workflow Step</th>
                        <th class="px-4 py-3">Due</th>
                        <th class="px-4 py-3">Published</th>
                        <th class="px-4 py-3">Last Modified</th>
                    </tr>
                </thead>
                @foreach ($set as $items )
                @php
                // $duedate = 10;
                $start = \Carbon\Carbon::parse($items->due);
                $end = \Carbon\Carbon::now();
                $difference = $start->diffInDays($end, false);
                $duedate = \Carbon\Carbon::now()->subDays($difference)->diffForHumans();

                @endphp
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800 border-b-2 border-gray-200">
                    <tr class="text-black dark:text-gray-400 ">
                        <td class="px-4 py-3">
                            <div>
                                <p class="px-4 py-3 text-xm">{{$items->names}}</p>
                            </div>
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{$items->name}}
                        </td>
                        @if ($items->workflow === 'draft')
                        <td class="px-4 py-3 text-xs">
                            <span
                                class="px-2 py-1 font-semibold leading-tight text-white bg-red-800 rounded-full dark:bg-red-800 dark:text-red-800">
                                {{$items->workflow}}
                            </span>
                        </td>
                        @elseif ($items->workflow === 'published')
                        <td class="px-4 py-3 text-xs">
                            <span
                                class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                {{$items->workflow}}
                            </span>
                        </td>
                        @else
                        <td class="px-4 py-3 text-xs">
                            <span
                                class="px-2 py-1 font-semibold leading-tight text-white bg-yellow-200 rounded-full dark:bg-yellow-200 dark:text-white-800">
                                {{$items->workflow}}
                            </span>
                        </td>
                        @endif
                        @if ($items->due === 0)
                        <td class="px-4 py-3 text-sm">
                            ---
                        </td>
                        @else
                        <td class="px-4 py-3 text-sm">
                            {{$duedate}}
                        </td>
                        @endif
                        <td class="px-4 py-3 text-sm">
                            {{$items->published}}
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{$items->updated_at}}
                        </td>
                    </tr>
                </tbody>
                @endforeach

            </table>
        </div>
        {{ $set->links('custom-pagination-links-view') }}
    </div>
</div>
