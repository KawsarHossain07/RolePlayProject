<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        #h12 {
            color: red;
            font-style: oblique;
        }
    </style>
</head>
<body>
        <br>
        @if (\Session::has('msg'))
         <div class="alert alert-danger">
            <ul>
             <center><h1 id="h12"> {!! \Session::get('msg') !!} </h1></center>
            </ul>
         </div>
        @endif 
        <br>
    <form method="POST" action="{{ route('loginControl') }}">
        @csrf
        <br>
         <center><h1>Log-in Pannel</h1></center>
        <br>
        <br>
        <div align="center">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <br>

        <button type="submit">Login</button>
        </div>
    </form>
</body>
</html>
