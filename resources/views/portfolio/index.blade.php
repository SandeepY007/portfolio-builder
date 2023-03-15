<x-app-layout>
    <x-slot name="header">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-3 mb-0">
            <div class="flex justify-between mb-2">

                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Sections') }}
                </h2>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <main class="max-w-lg mt-10 mx-auto py-6 rounded-xl  mb-11">

                    <div class="main py-2 w-full">
                        <table class="table-auto w-full">
                            <tbody>

                                <tr>
                                    <td class="px-2 py-3 border-b">
                                        <div class="border border-black rounded-xl px-10 py-10 mb-2 flex">
                                            <img src="\images\9993-name-proile-icon-animation-stroke.gif" alt="Gif"
                                                class="w-20 rounded-xl">
                                            <a href="/introduction"
                                                class="button bg-blue-300 border border-black rounded-xl py-10 ml-3 w-full text-center">Introduction</a>
                                        </div>
                                    </td>
                                    <td class="px-2 py-3 border-b">
                                        <div class="border border-black rounded-xl px-10 py-10 mb-2 flex ">
                                            <img src="\images\42930-objective-communication.gif" alt="Gif"
                                                class="w-20 rounded-xl">
                                            <a href="/objective"
                                                class="button bg-blue-300 border border-black rounded-xl py-10 ml-3 w-full text-center">Objective</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2 py-3 border-b">
                                        <div class="border border-black rounded-xl px-10 py-10 mb-2 flex ">
                                            <img src="\images\137359-experience.gif" alt="Gif"
                                                class="w-20 rounded-xl">
                                            <a href="/experience"
                                                class="button bg-blue-300 border border-black rounded-xl py-10 ml-3 w-full text-center">Experience</a>
                                        </div>
                                    </td>
                                    <td class="px-2 py-3 border-b">
                                        <div class="border border-black rounded-xl px-10 py-10 mb-2 flex ">
                                            <img src="\images\99312-developer-skills.gif" alt="Gif"
                                                class="w-20 rounded-xl">
                                            <a href="/skill"
                                                class="button bg-blue-300 border border-black rounded-xl py-10 ml-3 w-full text-center">Skills</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-2 py-3 border-b">
                                        <div class="border border-black rounded-xl px-10 py-10 mb-2 flex ">
                                            <img src="\images\69437-academic-hut-banner.gif" alt="Gif" class="w-20 rounded-xl">
                                            <a href="/academic"
                                                class="button bg-blue-300 border border-black rounded-xl py-10 ml-3 w-full text-center">Academics</a>
                                        </div>
                                    </td>
                                    <td class="px-2 py-3 border-b">
                                        <div class="border border-black rounded-xl px-10 py-10 mb-2 flex ">
                                            <img src="\images\35684-business-team-discusses-project.gif" alt="Gif"
                                                class="w-20 rounded-xl">
                                            <a href="/projects"
                                                class="button bg-blue-300 border border-black rounded-xl py-10 ml-3 w-full text-center">Projects</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="rounded-xl py-3 px-3 content-center ml-0 mr-10">

                    </div>
            </div>
            </main>
        </div>
    </div>
    </div>
</x-app-layout>
