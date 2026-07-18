<x-layout :title="$title">
    <article class="py-8 max-w-3xl mb-8 border-b border-gray-300  px-1">
        <h2 class="text-2xl tracking-tight font-bold text-gray-800">{{ $post['title'] }}</h2>
        <span class="text-sm text-gray-600">{{ $post->author->name }}</span>
        <p class="text-base text-gray-900 my-4 mt-3">{{ $post['body'] }}</p>
        <a href="/posts" class="hover:underline text-blue-400">&laquo; Back to All
            Posts</a>
    </article>
</x-layout>
