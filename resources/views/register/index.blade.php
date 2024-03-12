@extends('layout.main')

@section('mainSection')
<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-register w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form action="/register" method="POST">
                @csrf
                <div class="form-floating">
                    <input
                        type="text"
                        name="name"
                        id="name"
                        class="form-control rounded-top @error('name') is-invalid @enderror"
                        placeholder="Full Name"
                        value="{{ old('name')}}"
                        required>
                    <label for="name">Full Name</label>
                    @error('name')
                        <div class="invalid-feedback mb-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input
                        type="text"
                        name="username"
                        id="username"
                        class="form-control @error('username') is-invalid @enderror"
                        placeholder="Username"
                        value="{{ old('username') }}"
                        required>
                    <label for="username">Username</label>
                    @error('username')
                        <div class="invalid-feedback mb-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input
                        type="email"
                        name="email"
                        id="email"
                        class="form-control @error('email') is-invalid @enderror"
                        placeholder="name@example.com"
                        value="{{ old('email') }}"
                        required>
                    <label for="email">Email address</label>
                    @error('email')
                        <div class="invalid-feedback mb-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input
                        type="password"
                        name="password"
                        id="password"
                        class="form-control rounded-bottom @error('password') is-invalid @enderror"
                        placeholder="Password"
                        required>
                    <label for="password">Password</label>
                    @error('password')
                        <div class="invalid-feedback mb-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button class="btn btn-dark w-100 py-2 mt-3" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3">Already register? <a href="/register" class="text-decoration-none text-dark">Please <strong>Login</strong></a>.</small>
        </main>
    </div>
</div>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
@endsection
