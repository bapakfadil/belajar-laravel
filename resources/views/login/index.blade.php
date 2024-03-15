@extends('layout.main')

@section('mainSection')
<div class="row justify-content-center">
    <div class="col-md-4">

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif



        <main class="form-signin w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>

            <form action="/login" method="post">
                @csrf
              <div class="form-floating">
                <input
                    type="email"
                    name="email"
                    id="email"
                    class="form-control @error('email') is-invalid @enderror"
                    placeholder="name@example.com"
                    value="{{ old('email') }}"
                    autofocus
                    required>
                <label for="floatingInput">Email address</label>
                @error('email')
                    <div class="invalid-feedback mb-2">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" requireds>
                <label for="floatingPassword">Password</label>
              </div>

              <button class="btn btn-dark w-100 py-2" type="submit">Login</button>
            </form>

            <small class="d-block text-center mt-3">Not yet registered? <a href="/register" class="text-decoration-none text-dark"><strong>Register</strong></a> now!</small>

        </main>
    </div>
</div>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
@endsection
