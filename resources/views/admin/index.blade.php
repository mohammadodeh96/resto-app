<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>


            </div>
        </div>
        <div class=" mt-6 py-4 container flex justify-center">

            <a href="{{route('logout')}}"
                            class="px-4 py-2  flex justify-center bg-indigo-500 hover:bg-red-500 rounded-lg text-white">logout</a>
           </div>

           <div class=" flex justify-evenly">
            @foreach ($users as $user)
            <h1 class=" text-xl text-slate-100 py-4 bg-indigo-500 hover:bg-indigo-800 text-center w-fit m-4 rounded-2xl px-6 "> User Name = {{$user->name}} <br></h1>
            <h1 class=" text-xl text-slate-100 py-4 bg-indigo-500 hover:bg-indigo-800 text-center w-fit m-4 rounded-2xl px-6 "> User email = {{$user->email}} <br></h1>
            <h1 class=" text-xl text-slate-100 py-4 bg-indigo-500 hover:bg-indigo-800 text-center w-fit m-4 rounded-2xl px-6 "> User id = {{$user->id}} <br></h1>
            @endforeach
           </div>


    </div>
</x-admin-layout>
