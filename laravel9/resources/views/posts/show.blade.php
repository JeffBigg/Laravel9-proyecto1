<x-layouts.app :title="$post->title" meta-description="about meta description">

    <h1>{{ $post->title }}</h1>

    <a href="{{ route('posts.index') }}">regresar</a>

</x-layouts.app>
