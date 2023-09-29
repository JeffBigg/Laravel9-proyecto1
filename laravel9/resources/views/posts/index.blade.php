<x-layouts.app title="blog" meta-description="blog meta description">
    <h1>blog</h1>
    <a href="{{ route('posts.create') }}">crear un nuevo post</a>

    @foreach ($posts as $post)
        <div style="display: flex; align-items: baseline">
            <h1> <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a> </h1>
            <a href="{{ route('posts.edit', $post) }}">editar</a>
            <form action="{{ route('posts.destroy', $post) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>

            </form>
        </div>
    @endforeach

</x-layouts.app>
