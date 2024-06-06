<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Data Posts</title>
    <link rel="icon" href="https://i.pinimg.com/564x/1e/4b/72/1e4b72dc5a9906b86b01b3774dad180c.jpg" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    *{
        max-width: 100%;
        
    }
    .iwak {
        background-color: white;
        width: 80%;
        position: fixed;
        padding: 20px;
        top: -1%;
        z-index: 1000;
    }

    .iwak input {
        border: solid 1px black;
    }

    .row {
        margin-top: 10%;
    }
    .log{
       position: fixed;
       left: 80%;
       background-color: white;
       z-index: 1000;
       top: 14px;
       align-items: end;
       width: 100px;
       overflow-wrap: break-word;
    }
    .text {
            max-width: 200px;
            overflow-wrap: break-word;
            text-transform: capitalize;
            /* adjust as needed */
        }

      
</style>

<body class="bg-light">
    <form class="d-flex iwak" action="{{ route('admin')}}" method="GET">
        <a class="btn btn-primary me-5 " href="{{ route('admin')}}">Reload</a>
        
        <input class="serbtn form-control me-2" type="text" placeholder="Search" name="search">
        <button class="serbtn1 btn btn-danger" type="submit">Search</button>
    </form>
    <div class="btn-group log me-2">
          <a type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            {{ Auth::user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li><form action="{{ route('profile.edit') }}">
                @csrf
                <button type="submit" class="btn btn-link nav-link">{{ __('Profile') }}</button>
              </form>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="nav-item">
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-link nav-link">Logout</button>
              </form>
            </li>
          </ul>
        </div>
    <div class="bg-light container">
        <div class="bg-light row">

            <div class="card bg-light  border-0 shadow-sm rounded">
                <div class="card-body">


                    <table class=" table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">GAMBAR</th>
                                <th scope="col">JUDUL</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($posts as $post)
                            <tr>
                                <td class="text-center">
                                    <img src="{{ asset('/storage/posts/'.$post->image) }}" class="rounded" style="width:150px">
                                </td>
                                <td class="text">{{ $post->judul }}</td>
                                <td class="text">{!! $post->deskripsi !!}</td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                                </td>
                            </tr>

                            @empty
                            <tr>
                                <td colspan="4">
                                    <div class="alert alert-danger">
                                        Tidak ada Data.
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>