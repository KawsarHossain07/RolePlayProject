<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Panenl</title>
    <style>
        #btn12{
            position:absolute;
            top: 10px;
             right:0;
        }
    </style>
</head>
<body>
         <div>
        <button id="btn12" type="button" onclick="redirectToLogIn()">Return to Log-in</button>
        <div>
    <br>
    <br>

    <center><h1>Welcome to User Dashboard</h1></center>

      <script>
            function redirectToLogIn(){
            window.location.href = "{{ route('login') }}";
        }
        </script>
</body>
</html>