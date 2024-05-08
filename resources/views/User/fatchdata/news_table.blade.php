<table id="example" class="table-auto w-full">
    <thead>
        <tr>
            <th class="px-4 py-2">Id</th>
            <th class="px-4 py-2">Image</th>
            <th class="px-4 py-2">Title</th>
            <th class="px-4 py-2">Description</th>
            <th class="px-4 py-2">Status</th>
            <th class="px-4 py-2">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($news as $key => $item)
            <tr>
                <td class="border px-4 py-2">{{ $key + 1 }}</td>
                <td class="border px-4 py-2">
                    <div class="flex items-center font-semibold">
                        <span class="!me-2 inline-flex justify-center items-center">
                            <img src="{{ asset('assets/images/dailynews/'.$item->image) }}" alt="img"
                                class="w-[1.75rem] h-[1.75rem] leading-[1.75rem] text-[0.65rem]  rounded-full">
                        </span>
                    </div>
                </td>
                <td class="border px-4 py-2">{!! nl2br(e(Str::limit(strip_tags($item->title), 20))) !!}</td>                              
                <td class="border px-4 py-2">{!! nl2br(e(Str::limit(strip_tags($item->description), 20))) !!}</td>
                <td class="border">
                    @php
                        $storepick = DB::table('storepick')
                                    ->where('STORE_ID', '=', 'Status')
                                    ->where('PICK_ID', '=', $item->status)
                                    ->first();
                    @endphp
                    @if($storepick)
                        @php
                            $statusText = '';
                            $statusColor = '';

                            switch ($item->status) {
                                case 101:
                                    $statusText = $storepick->PICK_TEXT;
                                    $statusColor = 'primary';
                                    break;
                                case 102:
                                    $statusText = $storepick->PICK_TEXT;
                                    $statusColor = 'info';
                                    break;
                                case 103:
                                    $statusText = $storepick->PICK_TEXT;
                                    $statusColor = 'danger';
                                    break;
                                default:
                                    // Default case if none of the above conditions are met
                                    $statusText = $storepick->PICK_TEXT;
                                    $statusColor = 'info'; // You can set a default color here if needed
                                    break;
                            }
                        @endphp
                        <span class="inline-flex text-{{ $statusColor }} !py-[0.15rem] !px-[0.45rem] rounded-sm !font-semibold !text-[0.75em] bg-{{ $statusColor }}/10">{{ $statusText }}</span>
                    @else
                        <span class="inline-flex text-danger !py-[0.15rem] !px-[0.45rem] rounded-sm !font-semibold !text-[0.75em] bg-danger/10">No Value</span>
                    @endif
                </td>
                <td class="border px-4 py-2">
                    <div class="flex flex-row items-center !gap-2 text-[0.9375rem]">
                        <a aria-label="anchor" href="{{ route('edit.newsedit', $item->id) }}" class="ti-btn ti-btn-icon ti-btn-wave !gap-0 !m-0 !h-[1.75rem] !w-[1.75rem] text-[0.8rem] bg-primary/10 text-primary hover:bg-primary hover:text-white hover:border-primary">
                            <i class="ri-edit-line"></i>
                        </a>
                        <button aria-label="button" type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-danger-full btn-wave delete-news" data-item-id="{{ $item->id }}">
                            <i class="ri-delete-bin-line align-middle me-2 inline-block"></i>Delete
                        </button>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
