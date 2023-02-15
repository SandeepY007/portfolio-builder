<x-app-layout>
    <x-slot name="header">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">

                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Introduction') }}
                </h2>
                <div>
                    <button>Edit</button>
                </div>
            </div>
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <main class="max-w-lg mt-10 mx-auto border border-gray-500 p-6 rounded-xl bg-gray-100">
                    <form action="/register" method="POST">
                        <div class="mb-6">
                            <label for="name"
                                class="block mb-2 uppercase font-bold text-xs text-gray-700">Name</label>
                            <input type="text" name="name" id="name"
                                class="border border-gray-400 p-2 w-full ">
                        </div>
                        <div class="mb-6">
                            <label for="email"
                                class="block mb-2 uppercase font-bold text-xs text-gray-700">Email</label>
                            <input type="text" name="email" id="email"
                                class="border border-gray-400 p-2 w-full">
                        </div>
                        <div class="mb-6">
                            <label for="mobile"
                                class="block mb-2 uppercase font-bold text-xs text-gray-700">Mobile</label>
                            <input type="text" name="mobile" id="mobile"
                                class="border border-gray-400 p-2 w-full ">
                        </div>
                        <div class="mb-6">
                            <label for="image"
                                class="block mb-2 uppercase font-bold text-xs text-gray-700">Image</label>
                            <input type="file" name="image" id="image"
                                class="border border-gray-400 p-2 w-full ">
                        </div>
                        <div class="mb-6">
                            <label for="links"
                                class="block mb-2 uppercase font-bold text-xs text-gray-700">Links</label>
                            <input type="text" name="links" id="username"
                                class="border border-gray-400 p-2 w-full ">
                        </div>
                    </form>
                </main>
            </div>
        </div>
    </div>
</x-app-layout>
