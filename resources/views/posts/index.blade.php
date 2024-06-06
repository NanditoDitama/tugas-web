<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pinteres kw</title>
    <link rel="icon" href="https://i.pinimg.com/564x/1e/4b/72/1e4b72dc5a9906b86b01b3774dad180c.jpg" type="image/png">
    @vite('resources/js/app.js')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <style>
        body {
            background-color: #00000049;
            min-height: 100vh;
        }
        .alert{
            width: 50%;
            margin-left: 5%;
        }
        /* width */
        ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            border-radius: 0px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: red;
            border-radius: 0px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #b30000;
        }

        .masonry-grid {
            column-count: 4;
            column-gap: 10px;
            margin: 20px;
            margin-top: 6%;
        }

        .grid-item {
            display: inline-block;
            margin: 0 0 10px;
            width: 100%;
            position: relative;
            overflow: hidden;
            border-radius: 4px;
        }

        .grid-item img {
            width: 100%;
            border-radius: 4px;
            height: auto;
            transition: 0.2s;
        }
        .grid-item img:hover{
            transform: scale(1.04);
            transition: 0.2s;
        }

        .hover-text {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .grid-item:hover .hover-text {
            opacity: 1;
        }

        @media only screen and (max-width: 1200px) {
            .masonry-grid {
                column-count: 4;
            }
        }

        @media only screen and (max-width: 800px) {
            .masonry-grid {
                column-count: 3;
            }
        }

        @media only screen and (max-width: 600px) {
            .masonry-grid {
                column-count: 2;
            }

            .grid-item {
                width: 100%;
            }
        }
    </style>
</head>

<body>
<div id="app"></div>
    <div>
        @include('shared.header')
        <hr>
    </div>

    <div class="masonry-grid">
        @forelse ($posts as $post)
        <div class="grid-item">
            <a href="{{ route('posts.show', $post->id) }}">
                <img src="{{ asset('/storage/posts/' . $post->image) }}" alt="{{ $post->judul }}" />
                <div class="hover-text">Buka</div>
            </a>
        </div>
        @empty
        <div class="col-12">
            <p class="text-center">No posts found.</p>
        </div>
        @endforelse
    </div>

    @if ($search && $posts->isEmpty())
    <div class="alert alert-danger" role="alert">
        Tidak ditemukan hasil pencarian untuk "{{ $search }}"
    </div>
    @endif

    {{ $posts->links() }}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
