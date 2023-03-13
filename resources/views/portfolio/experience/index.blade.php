<x-app-layout>
    <x-slot name="header">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-3 mb-0">
            <div class="flex justify-between mb-2">

                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Experience') }}
                </h2>

                <div class="flex justify-end items-end">
                    <a href="{{ route('experience.create') }}"
                        class="button border border-black bg-gray-500 rounded-xl px-3">Add Experience</a>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="py-2 px-3 bg-gray-200 border-b-2 text-left">ID</th>
                            <th class="py-2 px-3 bg-gray-200 border-b-2 text-left">Name</th>
                            <th class="py-2 px-3 bg-gray-200 border-b-2 text-left">Company Name</th>
                            <th class="py-2 px-3 bg-gray-200 border-b-2 text-left">Position</th>
                            <th class="py-2 px-3 bg-gray-200 border-b-2 text-left">Job Location</th>
                            <th class="py-2 px-3 bg-gray-200 border-b-2 text-left">Started At</th>
                            <th class="py-2 px-3 bg-gray-200 border-b-2 text-left">Ends At</th>
                            <th class="py-2 px-3 bg-gray-200 border-b-2 text-left">Pay</th>
                            <th class="py-2 px-3 bg-gray-200 border-b-2 text-left">Edit</th>
                            <th class="py-2 px-3 bg-gray-200 border-b-2 text-left">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($experiences as $experience)
                            <tr>
                                <td class="px-2 py-3 border-b">{{ $experience->id }}</td>
                                <td class="px-2 py-3 border-b"><a
                                        href="{{ route('experience.show', $experience->id) }}">{{ $experience->name }}</a>
                                </td>
                                <td class="px-2 py-3 border-b">{{ $experience->company_name }}</td>
                                <td class="px-2 py-3 border-b">{{ $experience->position }}</td>
                                <td class="px-2 py-3 border-b">{{ $experience->job_location }}</td>
                                <td class="px-2 py-3 border-b">{{ $experience->started_at }}</td>
                                <td class="px-2 py-3 border-b">{{ $experience->ends_at }}</td>
                                <td class="px-2 py-3 border-b">{{ $experience->pay }}</td>
                                <td class="px-2 py-3 border-b"><a
                                        href="{{ route('experience.edit', $experience->id) }}">Edit</a></td>
                                <td class="px-2 py-3 border-b mt-0">
                                    <form action="{{ route('experience.destroy', $experience->id) }}" method="post">
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
