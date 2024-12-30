<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
              
                    <h1 class="text-center text-black">DATA MAHASISWA</h1>
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="text-center">
                            <img class="logo" src="{{asset('assets/img/student.png')}}" alt="Logo">
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Masukkan Email" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
                            @if(session('errors'))
                                <span class="text-danger"></span>
                            @endif                
                        </div>

                        @if( session('errors') )
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ session('errors')->first() }}</strong>
                            </div>
                        @endif
                        <button type="submit" class="btn btn-primary mb-3">L O G I N</button>
                    </form>              

                </div>
            </div>
        </div>
    </body>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</html>