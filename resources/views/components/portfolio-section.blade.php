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
