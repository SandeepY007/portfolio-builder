<div class="mb-6">
    <label for="objective" class="block mb-2 uppercase font-bold text-xs text-gray-700">Name</label>
    <input type="text" name="name" id="name" class="border border-gray-400 p-2 w-full" value="{{old('name', $skills->name)}}">
    <span class="text-sm text-red-500">
        @error('name')
            {{ $message }}
        @enderror
    </span>
</div>
<div class="mb-6">
    <label for="status" class="block mb-2 uppercase font-bold text-xs text-gray-700">Rate Your Skill</label>
    <select name="status" id="status">
        @foreach (App\Enums\SkillStatusEnum::values() as $key=>$value)
            <option value="{{$key}}">{{$value}}</option>
        @endforeach
    </select>
    <span class="text-sm text-red-500">
        @error('status')
            {{ $message }}
        @enderror
    </span>
</div>
<div class="mb-6">
    <input type="submit" class="btn border border-black bg-blue-200 px-2 rounded-xl" value="Submit">
</div>
