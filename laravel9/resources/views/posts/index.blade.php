<x-layouts.app title="blog" meta-description="blog meta description">
    <h1>blog</h1>
    <a href="{{ route('posts.create') }}">crear un nuevo post</a>
    @foreach ($posts as $post)
        <h1> <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a> </h1>
    @endforeach

</x-layouts.app>
