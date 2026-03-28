<!-- Badge -->
<div wire:poll.keep-alive.5s>
    @if ($orders)
        <div class="flex flex-shrink-0 ml-2">
            <span
                class="inline-flex items-center justify-center h-5 text-xs font-medium text-white bg-primary px-2 rounded">{{ $orders }}</span>
        </div>
    @endif
</div>
