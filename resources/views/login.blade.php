@extends("adminlayout")

@section("extracss")

@endsection

@section("content")
<div class="container-fluid" style="margin-top:120px;height:auto;">
    <div class="login-container">
        <h2>Login</h2>
        <form action="/" method="post">
            @csrf
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            @error('error')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="form-group">
                <input type="submit" value="Login">
            </div>
        </form>
    </div>
</div>
@endsection
