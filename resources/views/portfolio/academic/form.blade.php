<div class="mb-6">
    <label for="course" class="block mb-2 uppercase font-bold text-xs text-gray-700">Course/Degree</label>
    <input type="text" name="course" id="course" class="border border-gray-400 p-2 w-full" value="{{old('course', $academics->course)}}">
    <span class="text-sm text-red-500">
        @error('course')
            {{ $message }}
        @enderror
    </span>
</div>
<div class="mb-6">
    <label for="started_at" class="block mb-2 uppercase font-bold text-xs text-gray-700">Started At</label>
    <input type="date" name="started_at" id="started_at" class="border border-gray-400 p-2 w-full" value="{{old('started_at', $academics->started_at)}}">
    <span class="text-sm text-red-500">
        @error('started_at')
            {{ $message }}
        @enderror
    </span>
</div>

<div class="mb-6">
    <label for="ends_at" class="block mb-2 uppercase font-bold text-xs text-gray-700">Ends At</label>
    <input type="date" name="ends_at" id="ends_at" class="border border-gray-400 p-2 w-full" value="{{old('ends_at', $academics->ends_at)}}">
    <span class="text-sm text-red-500">
        @error('ends_at')
            {{ $message }}
        @enderror
    </span>
</div>

<div class="mb-6">
    <label for="institute_name" class="block mb-2 uppercase font-bold text-xs text-gray-700">Institute Name</label>
    <input type="text" name="institute_name" id="institute_name" class="border border-gray-400 p-2 w-full" value="{{old('institute_name', $academics->institute_name)}}">
    <span class="text-sm text-red-500">
        @error('institute_name')
            {{ $message }}
        @enderror
    </span>
</div>

<div class="mb-6">
    <label for="percentage" class="block mb-2 uppercase font-bold text-xs text-gray-700">Percentage scored</label>
    <input type="percentage" name="percentage" id="percentage" class="border border-gray-400 p-2 w-full" value="{{old('percentage',$academics->percentage)}}">
    <span class="text-sm text-red-500">
        @error('percentage')
            {{ $message }}
        @enderror
    </span>
</div>

<div class="mb-6">
    <input type="submit" class="btn border border-black bg-blue-200 px-2 rounded-xl" value="Submit">
</div>
