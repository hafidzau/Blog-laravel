<x-layout>
    <x-slot:judul>{{ $judul }}</x-slot:judul>

    @foreach ($posts as $post)
       
    <article class="py-8 max-w-screen-md border-b border-gray-400">
         <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
            <h3 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h3>
         </a>

         <div class="text-base text-gray-500">
            <a href="#">{{ $post['author'] }}</a> | 1 januari 2024
         </div>

         <p class="my-4 font-light">{{ Str::limit($post['isi'], 100) }}</p>
         
         <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read more&raquo;</a>
    </article>
    @endforeach

</x-layout>