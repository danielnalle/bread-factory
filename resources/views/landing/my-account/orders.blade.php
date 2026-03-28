<x-guest-layout>
    <section id="detail" class="px-5 md:px-24 xl:px-44 w-full pt-[96px] pb-10 bg-white">
        <div class="flex gap-2">
            <x-landing.my-account.sidebar />
            @livewire('my-account.list-order')
        </div>
    </section>
</x-guest-layout>
