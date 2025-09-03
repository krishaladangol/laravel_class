
@extends('layouts.app')

@section('title', 'Chirps-edit')

@section('content')


<div class="mt-8">
  <h1 class="text-3xl font-bold text-center text-blue-700">Edit Chirps</h1>
  <form action="{{route('chirps.update',$chirp->id)}}" method="POST" class="max-w-sm mx-auto">
    @csrf
    @method('PUT')
    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
    <textarea id="message" name="chirp" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment...">{{$chirp->chirp}}</textarea>
    <button type="submit" class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</button>
  </form>
</div>


@endsection




