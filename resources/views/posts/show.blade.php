<x-layout>
<div class=" bg-blue-300 h-2/4 p-5">
<div class="text-lg">{{$post->title}}</div>
<div class="text-5xl">{{$post->content}}</div>
<div class="text-lg mt-10 mb-5">{{$post->created_at}}</title>
</div>

<div x-data>
<button @click="window.location.href='{{route('posts.edit',$post->id)}}'" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
Update
</button>
<form method="POST" action="{{route('posts.destroy',$post->id)}}">
@csrf
@method('delete')
<button type="submit" class="bg-blue-500 hover:  bg-blue-700 text-white font-bold py-2 px-4 rounded">
Delete
</button>
</form>
</div>
<script>
</script>
</x-layout>
