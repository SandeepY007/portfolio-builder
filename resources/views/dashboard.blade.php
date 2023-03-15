<x-app-layout>
    <div class="max-w-7xl mx-auto mt-7 mb-7 py-4 sm:px-6 lg:px-8 border border-black bg-white rounded-xl">


        Introduction:-
        @if ($user->introduction->count() > 0)
            <div class="rounded-xl mt-3 mb-3 py-10 flex bg-black text-white">
                @foreach ($user->introduction as $intro)
                    <img src="images/{{ $intro->image }}" alt="images" class="w-20 rounded-xl ml-2 mr-2">
                    <div>
                        <label for="">Name:-</label>
                        <h1>{{ $intro->name }}</h1>
                    </div>
                    <div class="ml-3">
                        <label for="">Email</label>
                        <h1>{{ $intro->email }}</h1>
                    </div>
                    <div class="ml-3">
                        <label for="">Mobile</label>
                        <h1>{{ $intro->mobile }}</h1>
                    </div>
                    <div class="ml-3">
                        <label for="">Profile links</label>
                        <h1>{{ $intro->links }}</h1>
                    </div>
                @endforeach
            </div>
        @else
            <div class="rounded-xl mt-3 mb-3 py-10 flex bg-black text-white">
                <h1 class="ml-4">No Introduction available</h1>
            </div>
        @endif


        Objective:-
        @if ($user->objective->count() > 0)
            <div class="rounded-xl mt-3 mb-4 py-10  bg-black text-white">
                <div class="px-3 flex">
                    @foreach ($user->objective as $obj)
                        <h1>{{ $obj->objective }}</h1>
                    @endforeach
                </div>
            </div>
        @else
            <div class="rounded-xl mt-3 mb-4 py-10  bg-black text-white">
                    <h1 class="ml-4">No Objective Available</h1>
            </div>


        @endif

        Academics:-
        @if ($user->academic->count() > 0)
            <div class="rounded-xl mt-3 mb-2 py-10 flex bg-black text-white">
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="py-2 px-3 bg-gray-200 border-b-2 text-left">Course</th>
                            <th class="py-2 px-3 bg-gray-200 border-b-2 text-left">Started At</th>
                            <th class="py-2 px-3 bg-gray-200 border-b-2 text-left">Ends At</th>
                            <th class="py-2 px-3 bg-gray-200 border-b-2 text-left">Institute Name</th>
                            <th class="py-2 px-3 bg-gray-200 border-b-2 text-left">Percentage</th>
                        </tr>
                    </thead>
                    @foreach ($user->academic as $academic)
                        <tbody>
                            <tr>
                                <td class="px-2 py-3 border-b">{{ $academic->course }}</td>
                                <td class="px-2 py-3 border-b">{{ $academic->started_at }}</td>
                                <td class="px-2 py-3 border-b">{{ $academic->ends_at }}</td>
                                <td class="px-2 py-3 border-b">{{ $academic->institute_name }}</td>
                                <td class="px-2 py-3 border-b">{{ $academic->percentage }}</td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        @else
            <div class="rounded-xl mt-3 mb-2 py-10 flex bg-black text-white">
                <h1 class="ml-4">No Academics Available</h1>
            </div>
        @endif

        Experience:-
        @if ($user->experience->count() > 0)
            <div class="rounded-xl mt-3 mb-2 py-10 flex bg-black text-white">
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="py-2 px-3 bg-gray-200 border-b-2 text-left">Name</th>
                            <th class="py-2 px-3 bg-gray-200 border-b-2 text-left">Company Name</th>
                            <th class="py-2 px-3 bg-gray-200 border-b-2 text-left">Position</th>
                            <th class="py-2 px-3 bg-gray-200 border-b-2 text-left">Job Location</th>
                            <th class="py-2 px-3 bg-gray-200 border-b-2 text-left">Started At</th>
                            <th class="py-2 px-3 bg-gray-200 border-b-2 text-left">Ends At</th>
                            <th class="py-2 px-3 bg-gray-200 border-b-2 text-left">Pay</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user->experience as $experience)
                            <tr>
                                <td class="px-2 py-3 border-b">{{ $experience->name }}</td>
                                <td class="px-2 py-3 border-b">{{ $experience->company_name }}</td>
                                <td class="px-2 py-3 border-b">{{ $experience->position }}</td>
                                <td class="px-2 py-3 border-b">{{ $experience->job_location }}</td>
                                <td class="px-2 py-3 border-b">{{ $experience->started_at }}</td>
                                <td class="px-2 py-3 border-b">{{ $experience->ends_at }}</td>
                                <td class="px-2 py-3 border-b">{{ $experience->pay }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="rounded-xl mt-3 mb-2 py-10 flex bg-black text-white">
                <h1 class="ml-4">No Experience Available</h1>
            </div>
        @endif

        Skill:-
        @if ($user->skill->count() > 0)
            <div class="rounded-xl mt-3 mb-3 py-10 flex bg-black text-white">
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="py-2 px-3 bg-gray-200 border-b-2 text-left">Skill</th>
                            <th class="py-2 px-3 bg-gray-200 border-b-2 text-left">Skill Status</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($user->skill as $skill)
                            <tr>
                                <td class="px-2 py-3 border-b">{{ $skill->name }}</td>
                                <td class="px-2 py-3 border-b">{{ $skill->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="rounded-xl mt-3 mb-3 py-10 flex bg-black text-white">
                <h1 class="ml-4">No Skill available</h1>
            </div>
        @endif

        Project:-
        @if ($user->project->count() > 0)
            <div class="rounded-xl mt-3 mb-2 py-10 flex bg-black text-white">
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="py-2 px-3 bg-gray-200 border-b-2 text-left">Project Name</th>
                            <th class="py-2 px-3 bg-gray-200 border-b-2 text-left">Language</th>
                            <th class="py-2 px-3 bg-gray-200 border-b-2 text-left">Framework</th>
                            <th class="py-2 px-3 bg-gray-200 border-b-2 text-left">Project Url</th>
                            <th class="py-2 px-3 bg-gray-200 border-b-2 text-left">Project Reference</th>
                        </tr>
                    </thead>
                    @foreach ($user->project as $project)
                        <tbody>
                            <tr>
                                <td class="px-2 py-3 border-b">{{ $project->project_name }}</td>
                                <td class="px-2 py-3 border-b">{{ $project->language }}</td>
                                <td class="px-2 py-3 border-b">{{ $project->framework }}</td>
                                <td class="px-2 py-3 border-b">{{ $project->project_url }}</td>
                                <td class="px-2 py-3 border-b">{{ $project->project_reference }}</td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        @else
        <div class="rounded-xl mt-3 mb-2 py-10 flex bg-black text-white">
            <h1 class="ml-4">No Projects available</h1>
        </div>
        @endif
    </div>

</x-app-layout>
