<x-layout>
    <div class="flex justify-center items-center h-screen bg-teal-900">
        <div class="w-96 p-6 shadow-lg bg-yellow-800 rounded-md">
<h1 class="text-6   x1 block text-center font-bold">  <i class="fa-regular fa-user"></i>  LOGIN HERE </h1>
<hr class="mt-3">
<form action="/login" method="POST">
    @csrf

    <div class="mt-3">
   <label for ="email" class="block text-base mb-2">Email</label>
   <input type="text" name="email" class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-sky-400" placeholder="Enter Email">

    </div>

    <div class="mt-3">
   <label for ="password" class="block text-base mb-2"> Password </label>
   <input type="text" name="password" class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-stone-900" placeholder="Enter Password">
   @error('password')
     <p> {{$message}} </p>
     @enderror

    </div>

    <div class="mt-5">
    <button type="submit" class="border-2 border-red-950 bg-red-950 text-white py-1 w-full rounder-md hover:bg-transparent hover:text-indigo-700 font-semibold"> Log In </button>


 </form>
 </div>
</div>
</x-layout>


