<div class="flex flex-col items-center basis-full xs:basis-48 sm:basis-[280px]" x-data="userImgUpload">
    <img src="{{ Storage::url($prevImage) }}"
        class="rounded-full w-28 h-28 sm:w-[160px] sm:h-[160px] object-cover object-center mb-4 border">
    @error('image')
        <span class="text-red-600 text-sm">{{ $message }}</span>
    @enderror
    <button type="button" x-on:click="browseFile()"
        class="text-dark-primary border border-gray-300 hover:border-gray-600 transition-all duration-200  focus:bg-gray-100 font-medium rounded-lg text-sm sm:text-base px-5 py-2.5 me-2 mb-4">Ubah
        Foto Profil</button>
    <p class="text-center text-sm sm:text-base text-dark-secondary">Format foto harus .jpg .jpeg
        .png
        dan ukuran file max 2MB.</p>
    <input type="file" id="imgProfile" name="imgProfile" class="hidden" wire:model='image'>

</div>
