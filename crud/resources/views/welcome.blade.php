<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

    </head>
    <body>
       login
            <div id="app">
                <label for="email" class="col-md-4 col-form-label text-md-right">Email </label>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus v-model="newItem.email"> <br/>
                <label for="password" class="col-md-4 col-form-label text-md-right">Password </label>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required v-model="newItem.password"> 
                <button type="submit" class="btn btn-primary">
                    <a class="action-link" tabindex="-1" @click="login()">
                        Login
                    </a>
                </button>
            </div>
            <script src="/js/app.js"></script>
    </body>
</html>
 