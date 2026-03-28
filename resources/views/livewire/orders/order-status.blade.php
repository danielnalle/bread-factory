<select id="status" wire:change='updateStatus($event.target.value)'
    class="border border-gray-300 text-dark-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full px-3 py-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary">
    <option>-- Pilih status --</option>
    @foreach ($order_status as $status)
        <option value="{{ $status->id }}" {{ $status->id == $order->order_status_id ? 'selected' : '' }}>
            {{ $status->name }}
        </option>
    @endforeach
</select>
