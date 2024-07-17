<x-layout>
    <x-slot:judul>{{ $judul }}</x-slot:judul>
 <article class="py-8 max-w-screen-md border-b border-gray-400">

   <h3 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h3>
      

      <div class="text-base text-gray-500">
         <a href="#">{{ $post['author'] }}</a> | 1 januari 2024
      </div>

      <p class="my-4 font-light">{{ $post['isi'] }}</p>
      <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo;back to blog</a>

      
 </article>
</x-layout> 