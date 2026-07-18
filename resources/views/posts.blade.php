<x-layout :title="$title">
    @foreach ($posts as $post)
        <article class="py-8 max-w-3xl mb-8 border-b border-gray-300  px-1">
            <a href="/post/{{ $post['slug'] }}">
                <h2 class="text-2xl hover:underline tracking-tight font-bold text-gray-800">{{ $post['title'] }}</h2>
            </a>
            <a href="/posts/{{ $post->author->name }}">
                <span class="text-sm hover:underline cursor-pointer text-gray-600">{{ $post->author->name }}</span>
            </a>
            <p class="text-base text-gray-900 my-4 mt-3">{{ Str::limit($post['body'], 150) }}</p>
            <a href="/post/{{ $post['slug'] }}" class="hover:underline text-blue-400">Read More &raquo;</a>
        </article>
    @endforeach
</x-layout>
