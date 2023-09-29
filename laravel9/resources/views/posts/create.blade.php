<x-layouts.app title="crear nuevo post" meta-description="form para crear">

    <h1>create nuevo post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label>
            Title
            <input type="text" name="title">
        </label>
        <button type="submit">Enviar</button>
    </form>

    <a href="{{ route('posts.index') }}">regresar</a>

</x-layouts.app>
