<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .navbar {
      height: 80px;
      position: fixed;
      width: 100%;
      top: 0;
      background-color: white;
      z-index: 100000;
    }
    .collapse li{
      margin-left: 20px;
    }
    .serbtn {
      border: solid 1px black;
      border-radius: 35px;
      width: 100%;
    }

    .serbtn1 {
      border-radius: 35px;
    }
.scr{
  width: 213%;
  height: 45px;
}
    @media (max-width: 768px) {
      .collapse {
        padding: 10px;
        background-color: white;
        position: relative;
        top: -10px;
        width: 100%;
      }
      .serbtn {
      border: solid 1px black;
      border-radius: 35px;
      width: 35%;
    }
    }

    .nav-link {
      font-size: larger;
      border-radius: 30px;
      padding: 10px 30px;
      width: 100px;
      display: flex;
      justify-content: center;
      align-items: center;
      font-weight: 500;

    }

    .nav-link:hover {
      background-color: black;
      color: white;

    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-sm navbar-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="javascript:void(0)"><img src="https://i.pinimg.com/474x/86/0c/87/860c87633f4de3aae800d9c948cbebdd.jpg" width="70px" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="/posts">Beranda</a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="/posts/create">Buat</a>
          </li>
          <li class="nav-item">
          <form class="d-flex scr" action="/posts" method="GET">
            <input class="serbtn form-control me-2" type="text" placeholder="Search" name="search">
            <button class="serbtn1 me-5 btn btn-danger" type="submit">Search</button>
          </form>
          </li>
        </ul>


        <div class="btn-group me-5">
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
      </div>
    </div>
  </nav>
</body>

</html>