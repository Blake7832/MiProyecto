<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>
    <body>
    @include (partials.nav)
    <h1>login</h1>
    <pre>{{Auth::user()}}</p re>
    <form method="POST">
        <label>
        <input name="email" type="email" placeholder="Email...">
         </label><br>
         <label>
         <input name="password "type="password" placeholder="Password...">
         </label><br>
         <button type="submit">Login</button>
    </form>
    </body>
</html>