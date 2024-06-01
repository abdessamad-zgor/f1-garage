@extends('layouts.app')
@section('content')
<form class="max-w-sm mx-auto block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700" action="/signup" method="POST" >
  @csrf
  <div class="relative z-0 w-full mb-1 group">
      <label for="floating_email" class="block mb-1 text-sm font-medium text-gray-900 ">Email address</label>
      <input type="email" name="email" id="floating_email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" " required />
  </div>
  <div class="relative z-0 w-full mb-1 group">
      <label for="floating_password" class="block mb-1 text-sm font-medium text-gray-900 ">Password</label>
      <input type="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" " required />
  </div>
  <div class="relative z-0 w-full mb-1 group">
      <label for="floating_repeat_password" class="block mb-1 text-sm font-medium text-gray-900 ">Confirm password</label>
      <input type="password" name="repeat_password" id="floating_repeat_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" " required />
  </div>
  <div class="relative z-0 w-full mb-1 group">
      <label for="floating_name" class="block mb-1 text-sm font-medium text-gray-900 ">Full name</label>
      <input type="text" name="name" id="floating_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" " required />
  </div>
  <div class="grid md:grid-cols-2 md:gap-6">
    <div class="relative z-0 w-full mb-1 group">
        <label for="floating_phone" class="block mb-1 text-sm font-medium text-gray-900 ">Phone number (123-456-7890)</label>
        <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" " required />
    </div>
    <div class="relative z-0 w-full mb-1 group">
        <label for="floating_company" class="block mb-1 text-sm font-medium text-gray-900 ">Company (Ex. Google)</label>
        <input type="text" name="floating_company" id="floating_company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" " required />
    </div>
  </div>
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>
<a href="/login" class="font-thin text-xl text-white max-w-sm mx-auto block">tu as déja un compte? connectez-vous ici.</a>
@endsection
