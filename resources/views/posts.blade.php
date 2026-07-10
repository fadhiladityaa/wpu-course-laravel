<x-layout :title="$title">
    @foreach ($posts as $post)
        <article class="py-8 max-w-3xl mb-8 border-b border-gray-300  px-1">
            <h2 class="text-2xl tracking-tight font-bold text-gray-800">{{ $post['title'] }}</h2>
            <span class="text-sm text-gray-600">{{ $post['author'] }}</span>
            <p class="text-base text-gray-900 my-4 mt-3">{{ Str::limit($post['article'], 200) }}</p>
            <a class="hover:underline text-blue-400" href="#">Read More &raquo;</a>
        </article>
    @endforeach
</x-layout>
