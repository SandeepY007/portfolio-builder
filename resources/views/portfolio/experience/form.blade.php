<div class="mb-6">
    <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">Name</label>
    <input type="text" name="name" id="name" class="border border-gray-400 p-2 w-full"  value="{{old('name', $experience->name)}}">
    <span class="text-sm text-red-500">
        @error('name')
            {{ $message }}
        @enderror
    </span>
</div>
<div class="mb-6">
    <label for="company_name" class="block mb-2 uppercase font-bold text-xs text-gray-700">Company Name</label>
    <input type="text" name="company_name" id="company_name" class="border border-gray-400 p-2 w-full" value="{{old('company_name', $experience->company_name)}}">
    <span class="text-sm text-red-500">
        @error('company_name')
            {{ $message }}
        @enderror
    </span>
</div>

<div class="mb-6">
    <label for="position" class="block mb-2 uppercase font-bold text-xs text-gray-700">Position\Role</label>
    <input type="text" name="position" id="position" class="border border-gray-400 p-2 w-full" value="{{old('position', $experience->position)}}">
    <span class="text-sm text-red-500">
        @error('position')
            {{ $message }}
        @enderror
    </span>
</div>

<div class="mb-6">
    <label for="job_location" class="block mb-2 uppercase font-bold text-xs text-gray-700">Job Location</label>
    <input type="text" name="job_location" id="job_location" class="border border-gray-400 p-2 w-full" value="{{old('job_location', $experience->job_location)}}">
    <span class="text-sm text-red-500">
        @error('job_location')
            {{ $message }}
        @enderror
    </span>
</div>

<div class="mb-6">
    <label for="started_at" class="block mb-2 uppercase font-bold text-xs text-gray-700">Started At</label>
    <input type="date" name="started_at" id="started_at" class="border border-gray-400 p-2 w-full" value="{{old('started_at', $experience->started_at)}}">
    <span class="text-sm text-red-500">
        @error('started_at')
            {{ $message }}
        @enderror
    </span>
</div>

<div class="mb-6">
    <label for="ends_at" class="block mb-2 uppercase font-bold text-xs text-gray-700">Ends At</label>
    <input type="date" name="ends_at" id="ends_at" class="border border-gray-400 p-2 w-full" value="{{old('ends_at', $experience->ends_at)}}">
    <span class="text-sm text-red-500">
        @error('ends_at')
            {{ $message }}
        @enderror
    </span>
</div>

<div class="mb-6">
    <label for="pay" class="block mb-2 uppercase font-bold text-xs text-gray-700">Payment</label>
    <input type="number" name="pay" id="pay" class="border border-gray-400 p-2 w-full" value="{{old('pay', $experience->pay)}}">
    <span class="text-sm text-red-500">
        @error('pay')
            {{ $message }}
        @enderror
    </span>
</div>



<div class="mb-6">
    <input type="submit" class="btn border border-black bg-blue-200 px-2 rounded-xl" value="Submit">
</div>
