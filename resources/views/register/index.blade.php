@extends('layout.main')

@section('mainSection')
<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-register w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form>

              <div class="form-floating">
                <input type="text" name="name" id="name" class="form-control rounded-top" placeholder="Full Name">
                <label for="name">Full Name</label>
              </div>
              <div class="form-floating">
                <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                <label for="username">Username</label>
              </div>
              <div class="form-floating">
                <input type="email" name="email" id="email" class="form-control" placeholder="name@example.com">
                <label for="email">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" name="password" id="password" class="form-control rounded-bottom" placeholder="Password">
                <label for="password">Password</label>
              </div>

              <button class="btn btn-dark w-100 py-2 mt-3" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3">Already register? <a href="/register" class="text-decoration-none text-dark">Please <strong>Login</strong></a>.</small>

        </main>
    </div>
</div>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
@endsection
