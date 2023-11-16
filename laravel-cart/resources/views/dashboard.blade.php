<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome to your profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>

<div class="w-full min-h-screen">
  <div class="max-w-screen-md px-10 py-6 mx-4 mt-20 bg-white rounded-lg shadow md:mx-auto border-1">
    <div class="flex flex-col items-start w-full m-auto sm:flex-row">
      <div class="flex mx-auto sm:mr-10 sm:m-0">
        <div class="items-center justify-center w-20 h-20 m-auto mr-4 sm:w-32 sm:h-32">
          <img alt="profil"
            src="https://cdn-icons-png.flaticon.com/512/149/149071.png"
            class="object-cover w-20 h-20 mx-auto rounded-full sm:w-32 sm:h-32" />
        </div>
      </div>
      <div class="flex flex-col pt-4 mx-auto my-auto sm:pt-0 sm:mx-0">
      <div class="w-full pt-5">
      <h1 class="text-lg font-semibold text-gray-800 sm:text-xl"> username - {{ Auth::user()->name }}</h1>
      <p class="text-sm text-gray-700 md:text-base"> e-mail - {{ Auth::user()->email }}</p>  
    </div>
      </div>
    </div>
  </div>
</div>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

  body {
    font-family: 'Poppins', sans-serif;
  }
</style>

            </div>
        </div>
    </div>
</x-app-layout>
