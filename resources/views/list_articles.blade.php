<html>
    <head>
        <title>Articles List</title>
    </head>

    <body>
        <div>
        @forelse ($data ?? [] as $article)
            <div>
                <p>{{ $article->title }}</p>
                <p>{{ $article->content }}</p>
            </div>
        @empty
            <div>
                <p>No articles found.</p>
            </div>
        @endforelse
        </div>
        <form method ="POST" action="/articles/new">
            @csrf
            <p>Titulo:<input type="text" name="title" id="title"></p>
            <p>Contenido:<textarea name="content" id="content"></textarea></p>
            <p><button type="submit" name="sendbtn">Enviar</button></p>
        </form>
    </body>
</html>
