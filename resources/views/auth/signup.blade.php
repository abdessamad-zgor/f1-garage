@extends('layouts.app')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form class="max-w-sm mx-auto block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100" action="/signup" method="POST" >
  @csrf
  <div class="relative z-0 w-full mb-1 group">
      <label for="floating_email" class="block mb-1 text-sm font-medium text-gray-900 ">Email address</label>
      <input type="email" name="email" id="floating_email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder=" " required />
  </div>
  <div class="relative z-0 w-full mb-1 group">
      <label for="floating_password" class="block mb-1 text-sm font-medium text-gray-900 ">Password</label>
      <input type="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder=" " required />
  </div>
  <div class="relative z-0 w-full mb-1 group">
      <label for="floating_repeat_password" class="block mb-1 text-sm font-medium text-gray-900 ">Confirm password</label>
      <input
        type="password"
        name="password_confirmation"
        id="floating_repeat_password"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder=" " required />
  </div>
  <div class="relative z-0 w-full mb-1 group">
      <label for="floating_name" class="block mb-1 text-sm font-medium text-gray-900 ">Full name</label>
      <input type="text" name="name" id="floating_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder=" " required />
  </div>
  <div class="relative z-0 w-full mb-1 group">
      <label for="floating_phone" class="block mb-1 text-sm font-medium text-gray-900 ">Phone number</label>
      <input type="tel" pattern="[0-9]{10-12}" name="floating_phone" id="floating_phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder=" " required />
  </div>
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
</form>
<a href="/login" class="font-thin text-xl text-stone-600 max-w-sm mx-auto block">tu as déja un compte? connectez-vous ici.</a>
@endsection
