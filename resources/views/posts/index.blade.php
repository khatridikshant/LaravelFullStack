<x-layout>
    <h1>All Posts Display</h1>
    <div class="p-2">
        <form action="{{ route('posts.create') }}" method="get">
            @csrf
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none
     dark:focus:ring-blue-800">Create</button>
        </form>
    </div>
    <div>
    <div class="grid grid-cols-3 gap-5">
        @foreach ($posts as $key)


<div class="flex flex-col bg-white border shadow-sm rounded-xl">
  <div class="p-4 md:p-5">
    <h3 class="text-lg font-bold text-gray-800">
{{$key->title}}
    </h3>
    <p class="mt-2 text-gray-500">
{{$key->content}}
    </p>
    <a href="/posts/{{$key->id}}" class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 decoration-2 hover:text-blue-700 hover:underline focus:underline focus:outline-none focus:text-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="#">
      Card link
      <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="m9 18 6-6-6-6"></path>
      </svg>
    </a>
  </div>
  <div class="bg-gray-100 border-t rounded-b-xl py-3 px-4 md:py-4 md:px-5">
    <p class="mt-1 text-sm text-gray-500">
    {{$key->created_at}}
    </p>
  </div>
</div>

        @endforeach
    </div>
    </div>
</x-layout>
