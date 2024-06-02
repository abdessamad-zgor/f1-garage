@extends('layouts.app')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger max-w-sm mx-auto block p-6 rounded-lg ">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form class="max-w-sm mx-auto block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 " action="/login" method="POST">
  @csrf
  <div class="mb-2">
    <label for="email" class="block text-sm font-medium text-gray-900 ">Your email</label>
    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="name@flowbite.com" required />
  </div>
  <div class="mb-2">
    <label for="password" class="block text-sm font-medium text-gray-900 ">Your password</label>
    <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required />
  </div>
  <div class="flex items-between mb-2">
    <div class="flex items-center h-5">
      <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 " />
      <label for="remember" class="ms-2 text-sm font-medium text-gray-900 ">Remember me</label>
    </div>
    <a></a>
  </div>
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
</form>
<a href="/signup" class="font-thin text-xl text-stone-600 max-w-sm mx-auto block">tu n'a pas du compte ? s'inscrire ici.</a>
@endsection
