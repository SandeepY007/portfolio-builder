<div class="mb-6">
    <label for="objective" class="block mb-2 uppercase font-bold text-xs text-gray-700">Project Name</label>
    <input type="text" name="project_name" id="project_name" class="border border-gray-400 p-2 w-full" value="{{ $projects->project_name }}">
    <span class="text-sm text-red-500">
        @error('project_name')
            {{ $message }}
        @enderror
    </span>
</div>

<div class="mb-6">
    <label for="objective" class="block mb-2 uppercase font-bold text-xs text-gray-700">Language</label>
    <input type="text" name="language" id="language" class="border border-gray-400 p-2 w-full" value="{{ $projects->language }}">
    <span class="text-sm text-red-500">
        @error('language')
            {{ $message }}
        @enderror
    </span>
</div>

<div class="mb-6">
    <label for="objective" class="block mb-2 uppercase font-bold text-xs text-gray-700">FrameWork</label>
    <input type="text" name="framework" id="framework" class="border border-gray-400 p-2 w-full" value="{{ $projects->framework }}">
    <span class="text-sm text-red-500">
        @error('framework')
            {{ $message }}
        @enderror
    </span>
</div>

<div class="mb-6">
    <label for="objective" class="block mb-2 uppercase font-bold text-xs text-gray-700">Project Url</label>
    <input type="text" name="project_url" id="project_url" class="border border-gray-400 p-2 w-full" value="{{ $projects->project_url }}">
    <span class="text-sm text-red-500">
        @error('project_url')
            {{ $message }}
        @enderror
    </span>
</div>

<div class="mb-6">
    <label for="objective" class="block mb-2 uppercase font-bold text-xs text-gray-700">Project References</label>
    <input type="text" name="project_reference" id="project_reference" class="border border-gray-400 p-2 w-full" value="{{ $projects->project_reference }}">
    <span class="text-sm text-red-500">
        @error('project_reference')
            {{ $message }}
        @enderror
    </span>
</div>
<div class="mb-6">
    <input type="submit" class="btn border border-black bg-blue-200 px-2 rounded-xl" value="Submit">
</div>
