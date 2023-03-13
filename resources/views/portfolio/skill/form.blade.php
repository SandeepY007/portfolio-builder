<div class="mb-6">
    <label for="objective" class="block mb-2 uppercase font-bold text-xs text-gray-700">Name</label>
    <input type="text" name="name" id="name" class="border border-gray-400 p-2 w-full" value="{{$skill->name}}">
    <span class="text-sm text-red-500">
        @error('name')
            {{ $message }}
        @enderror
    </span>
</div>
<div class="mb-6">
    <input type="submit" class="btn border border-black bg-blue-200 px-2 rounded-xl" value="Submit">
</div>
