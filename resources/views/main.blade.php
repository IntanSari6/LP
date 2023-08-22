<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LabMp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    {{-- Boostrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    {{-- My Styles --}}
     <link rel="stylesheet" href="/css/style.css">

  </head>
  <body>

@include('.navbar')

      <div class="container mt-4">
        @yield('container')
      </div>

      <div class="center">
         <center><h2> Selamat Datang di Labkom SMKS Mahaputra Cerdas Utama</h2></center> 
      </div>
      <div class="row justify-content-center fs-5 text-center mt-5">
        <div class="col-md-4 col-sm-4 mb-3">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1588200908342-23b585c03e26?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="card-img-top" alt="...">
     
                <div class="card-body">
                    <div class="card-title"><h4>LAB 1</h4></div>
                    <p>Lab 1 merupakan lab yang dipakai oleh jurusan Multimedia</p>
                </div>
     
                <div class="card-footer">
                    <a href="https://www.malasngoding.com/card-bootstrap-4/" class="card-link">Lihat</a>
                </div>
            </div>
        </div>
     
        <div class="col-md-4 col-sm-4 mb-3">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1588200908342-23b585c03e26?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="card-img-top" alt="...">
     
                <div class="card-body">
                    <div class="card-title"><h4>LAB 2</h4></div>
                    <p>Lab 2 merupakan lab yang dipakai oleh jurusan Rekayasa Perangkat Lunak</p>
                </div>
     
                <div class="card-footer">
                    <a href="https://www.malasngoding.com/card-bootstrap-4/" class="card-link">Lihat</a>
                </div>
            </div>
        </div>
     
        {{-- <div class="col-md-4 col-sm-6 mb-3">
            <div class="card">
                <img src="gambar1.jpg" class="card-img-top" alt="...">
     
                <div class="card-body">
                    <div class="card-title"><h4>LAB 3</h4></div>
                    Selamat datang di tutorial bootstrap 4 lengkap dari paling dasar sampai mahir, untuk pemula sampai expert.
                </div>
     
                <div class="card-footer">
                    <a href="https://www.malasngoding.com/card-bootstrap-4/" class="card-link">Lihat</a>
                </div>
            </div>
        </div> --}}
     
    </div>
@include('.footer')

      
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>