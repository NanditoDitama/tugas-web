<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
    <link rel="icon" href="https://i.pinimg.com/564x/1e/4b/72/1e4b72dc5a9906b86b01b3774dad180c.jpg" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/color-thief/2.3.2/color-thief.umd.js"></script>
    <style>
        body {
            min-height: 100vh;
        }

        /* width */
        ::-webkit-scrollbar {
            width: 0px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            border-radius: 10px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: red;
            border-radius: 10px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #b30000;
        }

        .tampil {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .show {
            width: 90%;
            max-width: 90%;
            display: flex;
            flex-direction: column;
            border-radius: 20px;
            align-content: center;
            justify-content: space-evenly;
            padding: 6%;
            background-size: cover;
        }

        .back {
            margin-top: 14px;
        }

        .kategori {
            display: flex;
            flex-wrap: wrap;
            font-size: 1vw;
        }

        .kategori2 {
            padding: 2px 5px;
            background-color: rgba(0, 0, 0, 0.531);
            border-radius: 20px;

            margin-right: 10px;
            /* adjust as needed */
            margin-bottom: 10px;
            /* adjust as needed */

        }

        .kategori2 .p2 {
            display: block;
            max-width: 200px;
            /* adjust as needed */
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            color: white;
        }

        .kategori2:hover {
            background-color: black;
        }

        .text {
            max-width: 600px;
            overflow-wrap: break-word;
            text-transform: capitalize;
            /* adjust as needed */
        }

        .truncate {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            word-wrap: break-word;
            /* number of lines to show */
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            cursor: pointer;
            overflow-wrap: break-word;
        }

        .expanded {
            -webkit-line-clamp: unset;
            overflow-wrap: break-word;
        }

        .image {
            max-height: 380px;
            max-width: 380px;
            border-radius: 10px;
            transition: 0.5s;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.325);
        }

        .image:hover {
            transition: 0.5s;
            box-shadow: -5px 5px 8px rgba(0, 0, 0, 0.625);
        }

        .masonry-grid {
            column-count: 4;
            column-gap: 10px;
            margin: 20px;
            margin-top: 6%;
        }

        .grid-item {
            display: inline-block;
            margin: 0 0 -10px;
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

        .grid-item img:hover {
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

        @media (min-width: 768px) {
            .show {
                flex-direction: row;
                align-items: flex-start;
            }

            .text {
                text-align: left;
                margin-top: 0;
                margin-left: 20px;
            }

            .image img {
                right: 10%;
                margin: 0;
                min-height: 280px;
                width: 280px;
            }
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.865);
        }

        .modal-content {
            margin: auto;
            display: block;
            top: 5%;
            height: 90%;
            width: auto;
        }

        .close {
            position: absolute;
            top: 15px;
            z-index: 100;
            right: 35px;
            color: gray;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: white;
            text-decoration: none;
            cursor: pointer;
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

    <div class="tampil container mt-5 mb-5">
        <div class="show bg-purple-500 text-black">
            <img class="image" src="{{ asset('storage/posts/'.$post->image) }}" alt="">
            <div class="text">
                <h4 style="font-size: 3vw;">{{ $post->judul }}</h4>
                <p id="description" class="truncate" style="font-size: 1.5vw;">{{ $post->deskripsi }}</p>
                <br>

                <div class="kategori">
                    <div class="kategori" style="display: flex; font-size: 1vw;">
                        <p>Kategori : </p>
                        @foreach($post->categories as $category)
                        <div class="kategori2">
                            <a href="{{ route('categories.posts', $category->id) }}" class="p2" style="display: contents;"> {{ $category->name }}</a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <p style="font-size: 1vw;">Di upload oleh : {{ $post->di_upload_oleh }}</p>
                <div style="font-size: 1vw;" id="">
                </div>
                <a id="download-btn" href="{{ asset('storage/posts/'.$post->image) }}" download class="btn btr btn-danger mt-3">Download Image</a>
                <button id="enlarge-btn" class="btn btr btn-secondary mt-3">Enlarge Image</button>
                <a href="/posts" class="btn back btn-dark">Back</a>
            </div>
        </div>
    </div>
    <div>
        <h1 style="position: relative; left: 70px; top: 50px; width: 30%;">Lainnya</h1>
        <div class="masonry-grid">
            @foreach ($posts as $postItem)
            @if ($postItem->id !== $post->id)
            <div class="grid-item">
                <a href="{{ route('posts.show', $postItem->id) }}">
                    <img class="img-fluid mb-4" src="{{ asset('storage/posts/'.$postItem->image) }}" alt="{{ $postItem->judul }}">
                    <div class="hover-text">Buka</div>
                </a>
            </div>
            @endif
            @endforeach
        </div>
    </div>

    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
    </div>

    <script>
        // Fungsi untuk mendeteksi warna dasar dari gambar menggunakan Color Thief
        function detectBaseColor() {
            const image = document.querySelector('.image');
            const colorThief = new ColorThief();

            // Pastikan gambar sudah dimuat sebelum mengambil warnanya
            if (image.complete) {
                const baseColor = colorThief.getColor(image);
                applyBaseColor(baseColor);
            } else {
                image.addEventListener('load', function() {
                    const baseColor = colorThief.getColor(image);
                    applyBaseColor(baseColor);
                });
            }
        }




        document.addEventListener('DOMContentLoaded', (event) => {
            const description = document.getElementById('description');

            description.addEventListener('click', () => {
                if (description.classList.contains('truncate')) {
                    description.classList.remove('truncate');
                    description.classList.add('expanded');
                } else {
                    description.classList.remove('expanded');
                    description.classList.add('truncate');
                }
            });
        });
















        // Fungsi untuk menerapkan warna dasar yang terdeteksi
        function applyBaseColor(color) {
            const baseColor = `rgb(${color[0]}, ${color[1]}, ${color[2]})`;

            if (baseColor === 'rgb(246, 249, 255)') {
                baseColor = 'rgb(150, 150, 150)';
                document.querySelector('.text').classList.add('text-dark');
            } else if (baseColor === 'rgb(200, 200, 200)' || parseInt(baseColor.split(',')[0].split('(')[1]) > 200) {
                document.body.style.backgroundColor = 'rgb(150, 150, 150)';
            }

            document.querySelector('.show').style.boxShadow = `-5px 5px 10px rgba(0, 0, 0, 0.393),-10px 10px 10px ${baseColor}`;
            document.querySelector('.show').style.border = `solid 2px ${baseColor}`;
            document.querySelector('body').style.background = `linear-gradient(to top right,  ${baseColor} -100%, ${baseColor} , #00000049)`;

            const colorPalette = document.getElementById('color-palette');
            const baseColorDiv = document.createElement('div');
            baseColorDiv.textContent = 'Base Color: ' + baseColor;
            colorPalette.appendChild(baseColorDiv);
        }

        window.onload = detectBaseColor;

        const modal = document.getElementById("myModal");
        const img = document.querySelector(".image");
        const modalImg = document.getElementById("img01");
        const enlargeBtn = document.getElementById("enlarge-btn");

        enlargeBtn.onclick = function() {
            modal.style.display = "block";
            modalImg.src = img.src;
        }

        const span = document.getElementsByClassName("close")[0];

        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>
</body>

</html>