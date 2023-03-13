<div class="mb-6">
    <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">Name</label>
    <input type="text" name="name" id="name" class="border border-gray-400 p-2 w-full"
        value="{{ old('name', $intros->name) }}">
    <span class="text-sm text-red-500">
        @error('name')
            {{ $message }}
        @enderror
    </span>
</div>
<div class="mb-6">
    <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">Email</label>
    <input type="email" name="email" id="email"
        class="border border-gray-400 p-2 w-full "value="{{ old('email', $intros->email) }}">
    <span class="text-sm text-red-500">
        @error('email')
            {{ $message }}
        @enderror
    </span>
</div>
<div class="mb-6">
    <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">Mobile Number</label>
    <input type="text" name="mobile" id="mobile" class="border border-gray-400 p-2 w-full "
        value="{{ old('mobile', $intros->mobile) }}">
    <span class="text-sm text-red-500">
        @error('mobile')
            {{ $message }}
        @enderror
    </span>
</div>
<div class="mb-6">
    <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">Image</label>
    <input type="file" name="image" id="image" class="border border-gray-400 p-2 w-full "
        value="{{ old('image',$intros->image) }}">
    @error('image')
        <span class="text-sm text-red-500">
            {{ $message }}
        @enderror
    </span>
</div>
<div class="mb-6">
    <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">Account Links</label>
    <input type="text" name="links" id="links" class="border border-gray-400 p-2 w-full "
        value="{{ old('links', $intros->links) }}">
    <span class="text-sm text-red-500">
        @error('links')
            {{ $message }}
        @enderror
    </span>
</div>
<div class="mb-6">
    <input type="submit" class="btn border border-black bg-blue-200 px-2 rounded-xl" value="Submit">
</div>
