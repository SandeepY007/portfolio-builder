<x-app-layout>
    <x-slot name="header">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-3 mb-0">
            <div class="flex justify-between mb-2">

                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Introduction') }}
                </h2>

                <div class="flex justify-end items-end">
                    <a href="{{ route('introduction.create') }}"
                        class="button border border-black bg-gray-500 rounded-xl px-3">Add Intro</a>
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
                            <th class="py-2 px-3 bg-gray-200 border-b-2 text-left">Image</th>
                            <th class="py-2 px-3 bg-gray-200 border-b-2 text-left">Name</th>
                            <th class="py-2 px-3 bg-gray-200 border-b-2 text-left">Email</th>
                            <th class="py-2 px-3 bg-gray-200 border-b-2 text-left">Mobile Number</th>
                            <th class="py-2 px-3 bg-gray-200 border-b-2 text-left">Links</th>
                            <th class="py-2 px-3 bg-gray-200 border-b-2 text-left">Edit</th>
                            <th class="py-2 px-3 bg-gray-200 border-b-2 text-left">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($intros as $intro)
                            <tr>
                                <td class="px-2 py-3 border-b">{{ $intro->id }}</td>
                                {{-- <td class="px-2 py-3 border-b w-0"><img src="{{ asset::url($intro->image) }}"
                                        alt="Image">
                                         @php
                                            dd($intro->image);
                                        @endphp 
                                        </td> --}}
                                <td class="px-2 py-3 border-b">
                                    <img src="images/{{$intro->image}}" alt="Image" class="border border-black w-10 rounded-xl">
                                </td>
                                <td class="px-2 py-3 border-b"><a
                                        href="{{ route('introduction.show', $intro->id) }}">{{ $intro->name }}</a></td>
                                <td class="px-2 py-3 border-b">{{ $intro->email }}</td>
                                <td class="px-2 py-3 border-b">{{ $intro->mobile }}</td>
                                <td class="px-2 py-3 border-b">{{ $intro->links }}</td>
                                <td class="px-2 py-3 border-b"><a
                                        href="{{ route('introduction.edit', $intro->id) }}">Edit</a></td>
                                <td class="px-2 py-3 border-b mt-0">
                                    <form action="{{ route('introduction.destroy', $intro->id) }}" method="post">
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
