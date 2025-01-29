<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Kronos</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/chi-siamo">Chi Siamo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contatti">Contatti</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://picsum.photos/id/237/1920/720" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://picsum.photos/id/23/1920/720" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://picsum.photos/id/56/1920/720" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div class="container px-4 py-5" id="custom-cards">
        <h2 class="pb-2 border-bottom">Servizi</h2>
    
        <div class="py-5 row row-cols-1 row-cols-lg-3 align-items-stretch g-4">
          @foreach ($services as $service)
          <div class="col">
            <div class="overflow-hidden shadow-lg card card-cover h-100 text-bg-dark rounded-4" style="background-image: url('https://picsum.photos/id/34/1920/720');">
              <div class="p-5 pb-3 text-white d-flex flex-column h-100 text-shadow-1">
                <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">
                {{$service}}
                </h3>
             <a href="/servizio/{{$service}}">Clicca Qui</a>
              </div>
            </div>
          </div>
          @endforeach
        
     
        </div>
      </div>
      <div class="container">
        <footer class="py-3 my-4">
          <ul class="pb-3 mb-3 nav justify-content-center border-bottom">
            <li class="nav-item"><a href="/" class="px-2 nav-link text-body-secondary">Homepage</a></li>
            <li class="nav-item"><a href="/chi-siamo" class="px-2 nav-link text-body-secondary">Chi Siamo</a></li>
            <li class="nav-item"><a href="/contatti" class="px-2 nav-link text-body-secondary">Contatti</a></li>
         </ul>
          <p class="text-center text-body-secondary">© 2025 Pippo SRL</p>
        </footer>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>


