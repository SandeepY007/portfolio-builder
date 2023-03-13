<x-app-layout>
    <x-slot name="header">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-3 mb-0">
            <div class="flex justify-between mb-2">

                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Project') }}
                </h2>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <main class="max-w-lg mt-10 mx-auto py-6 rounded-xl  mb-11">
                    <div class="max-w-lg mt-10 mx-auto border border-gray-500 p-6 rounded-xl bg-gray-100">
                        <h1 class="text-center text-xl font-bold mb-6">Project</h1>
                        <form action="{{ route('projects.store') }}" method="POST">
                            @csrf
                            @include('portfolio.project.form')
                        </form>

                    </div>
                </main>
            </div>
        </div>
    </div>
</x-app-layout>
