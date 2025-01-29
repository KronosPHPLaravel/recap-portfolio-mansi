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
      <div class="px-4 py-5 mb-5 bg-light rounded-3 px-md-5">
        <div class="mb-5 text-center">
            <div class="mb-3 text-white feature bg-primary bg-gradient rounded-3"><i class="bi bi-envelope"></i></div>
            <h1 class="fw-bolder">Contatta Pippo</h1>
            <p class="mb-0 lead fw-normal text-muted">We'd love to hear from you</p>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
               
                <form >
                    <!-- Name input-->
                    <div class="mb-3 form-floating">
                        <input class="form-control" id="name" type="text" placeholder="Enter your name..." >
                        <label for="name">Nome</label>
                     </div>
                    <!-- Email address input-->
                    <div class="mb-3 form-floating">
                        <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" data-sb-can-submit="no">
                        <label for="email">Email </label>
                     </div>
                 
                    <!-- Message input-->
                    <div class="mb-3 form-floating">
                        <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required" data-sb-can-submit="no"></textarea>
                        <label for="message">Message</label>
                    </div>
                  
                    
              
                    <div class="d-grid"><button class="btn btn-primary btn-lg " id="submitButton" type="submit">Invia</button></div>
                </form>
            </div>
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


