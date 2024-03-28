<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="Serkom/css/mycss.css">
  </head>
  <body>
<div class="container">
    <nav class="navbar bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Pendaftaran Mahasiswa</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ml-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
</div> <!--end Container-->
<div class="container">
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#beasiswa" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Beasiswa</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#daftar" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Daftar</button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#hasil" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Hasil</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="beasiswa" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
    <h4>
      Pilihan Beasiswa
    </h4>
  </div>
  <div class="tab-pane fade" id="daftar" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
    <h4>
      Formulir Pendaftaran
    </h4>
  </div>
  <div class="tab-pane fade" id="hasil" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
    <h4>
      Hasil Beasiswa
    </h4>
  </div>
</div>
</div> <!--end Container-->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>