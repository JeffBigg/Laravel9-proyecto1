<x-layouts.app :title="$post->title" meta-description="about meta description">

    <h1>formulario de edicion</h1>
    <form action="{{ route('posts.update') }}" method="POST">
        @csrf
        <label>
            Title
            <input type="text" name="title" value="{{ $post->title }}">
        </label>
        <button type="submit">Enviar</button>
    </form>
    <a href="{{ route('posts.index') }}">regresar</a>

</x-layouts.app>
