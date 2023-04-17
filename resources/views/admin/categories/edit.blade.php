<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex  m-2 p-2 ">

                <a href="{{route('admin.categories.index')}}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-800 rounded-lg text-white">Back to Category</a>
            </div>


            <div class=" w-full bg-slate-100 rounded-lg ">
                <div class="mt-10 w-1/2 space-y-8 divide-y divide-gray-200 bg-slate-100 rounded-xl">
                    <form method="POST" action="{{route('admin.categories.update',$category->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                      <div class="sm:col-span-6">
                        <label for="name" class="block text-sm font-medium text-gray-700"> name </label>
                        <div class="mt-1">
                          <input type="text" id="name"  name="name" value="{{$category->name}}"
                          class="block w-full appearance-none rounded-md border border-gray-400 bg-white py-2 px-3 text-base leading-normal sm:text-sm sm:leading-5" />
                        </div>
                      </div>
                      @error('name')
                          <div class=" text-sm text-red-400">{{$message}}</div>
                      @enderror
                      <div class="sm:col-span-6">
                        <label for="title" class="block text-sm font-medium text-gray-700"> Image </label>
                        <div class="mt-1">
                            <div>
                                <img class="w-32 h-32" src="{{Storage::url($category->image)}}" >
                            </div>
                          <input type="file" id="image"  name="image"
                          class="block w-full appearance-none rounded-md border border-gray-400 bg-white py-2 px-3 text-base leading-normalsm:text-sm sm:leading-5" />
                        </div>
                      </div>
                      @error('image')
                          <div class=" text-sm text-red-400">{{$message}}</div>
                      @enderror

                      <div class="pt-5 sm:col-span-6">
                        <label for="description"
                        class="block text-sm font-medium text-gray-700">Description</label>
                        <div class="mt-1">
                          <textarea id="description" rows="3" name = "description"
                           class="block w-full appearance-none  border  bg-white py-2 px-3 text-base leading-normal shadow-sm transition duration-150 ease-in-out focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            {{$category->description}}
                        </textarea>
                        </div>
                      </div>
                      @error('description')
                          <div class=" text-sm text-red-400">{{$message}}</div>
                      @enderror

                      <div class=" m-2 p-2 ">
                        <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-800 rounded-lg text-white">
                            Update Category
                        </button>
                      </div>

                    </form>
                  </div>


            </div>
            </div>
    </div>
</x-admin-layout>
