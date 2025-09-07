@extends('layouts.app')
@section('title', 'Admin Chirps')

@section('content')

<!-- logoutbutton -->
<div>
    <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="btn btn-danger">Logout</button>
</form>
</div>

<div>
    <!-- {{ $userCount }} users are registered. -->
    
    <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $userCount }}</h5>
    <p class="font-normal text-gray-700 dark:text-gray-400">Total User</p>
    </a>

</div>


<div>
    <h1>Admin Chirps</h1>
    <p>Welcome, {{ $user->name }} (Admin)</p>

    <ul>
        @foreach ($chirps as $chirp)
            <li>
                <strong>{{ $chirp->user->name }}:</strong> {{ $chirp->chirp }}

                <br>
                <small>Posted on: {{ $chirp->created_at->format('M d, Y \a\t h:i A') }}</small>
            </li>
            <hr>
        @endforeach
    </ul>
</div>


@endsection