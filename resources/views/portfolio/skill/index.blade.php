<x-app-layout>
    <x-slot name="header">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-3 mb-0">
            <div class="flex justify-between mb-2">

                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Skills') }}
                </h2>

                <div class="flex justify-end items-end">
                    <a href="{{ route('skill.create') }}"
                        class="button border border-black bg-gray-500 rounded-xl px-3">Add Skill</a>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden  text-center sm:rounded-lg">
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="py-2 px-3 bg-gray-200 border-b-2">ID</th>
                            <th class="py-2 px-3 bg-gray-200 border-b-2">Skill</th>
                            <th class="py-2 px-3 bg-gray-200 border-b-2">Skill Status</th>
                            <th class="py-2 px-3 bg-gray-200 border-b-2">Edit</th>
                            <th class="py-2 px-3 bg-gray-200 border-b-2">Delete</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($skills as $skill)
                            <tr>
                                <td class="px-2 py-3 border-b">{{ $skill->id }}</td>
                                <td class="px-2 py-3 border-b"><a
                                        href="{{ route('skill.show', $skill->id) }}">{{ $skill->name }}</a></td>
                                <td class="px-2 py-3 border-b">{{ $skill->status }}</td>
                                <td class="px-2 py-3 border-b"><a href="{{ route('skill.edit', $skill->id) }}">Edit</a>
                                </td>
                                <td class="px-2 py-3 border-b">
                                    <form action="{{ route('skill.destroy', $skill->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="text-red-500 ">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
