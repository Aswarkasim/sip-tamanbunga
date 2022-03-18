<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-danger">
    <div class="container">
      <a class="navbar-brand" href="/">SIP</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
           <li class="nav-item active">
            <a class="nav-link" href="/">Home</a>
          </li>
          @foreach ($kategori as $item)
          <li class="nav-item active">
            <a class="nav-link" href="/home/post?kategori_id={{$item->id}}">{{$item->nama}}</a>
          </li>
          @endforeach
        </ul>

        
        
      

        
        @auth
        <a href="/profile" class="btn btn-primary btn-sm mx-2">
          <i class="fas fa-user"></i> Profile
        </a>
       
        @else
          <a href="/admin/auth" class="btn btn-primary btn-sm">
            <i class="fas fa-sign-in-alt"></i> Login
          </a>
        @endauth

      </div>
    </div>
  </nav>
</header> 