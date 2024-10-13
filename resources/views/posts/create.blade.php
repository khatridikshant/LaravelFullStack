<x-layout>

<div class="max-w-4xl">
<div><h1 class="p-2 text-zinc-950 text-3xl">Post Create</h1></div>


<form class="bg-gray-400 p-5 rounded-sm" method="post" action="/posts">

@csrf
  <div class="mb-5">
    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
    <input
     type="text" name="title" id="title" class="@error('title')
     border-red-500
     @enderror
     bg-gray-50 border
     border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
      focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600
       dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        placeholder="Title" />
        @error('title')
          <span class="text-red-500">{{$message}}</span>
        @enderror
  </div>
    <div class="mb-5">
      <label for="postcontent" name="postcontent" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Message</label>
      <input
       type="text" name="content" id="postcontent" 
      class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
@error('content')
      <span class="text-red-500">{{$message}}</span>
      @enderror
  </div>
  <button type="submit"
   class="text-white bg-blue-700
    hover:bg-blue-800 focus:ring-4
     focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2
      dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
      Submit</button>
</form>
</div>
</x-layout>