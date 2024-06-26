<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Subadmin</title>
</head>
<body>
   <form action="{{route('storeSub')}}" method="POST">
        @csrf
        <div class="login-box" align="center">
            <h1>Create Sub Admin</h1>  
           
            <div class="textbox">
                <input type="hidden" name="id" value="">
            </div>

             <br>

            <div class="textbox">
                <input type="text" placeholder="Enter name"   name="name" value="">
            </div>

            <br>

            <div class="textbox">
                <input type="text" placeholder="Enter password"  name="password" value="">
            </div>

            <br>
            
            <input type="submit" name="Submit" value="Create">
            <button type="button" onclick="redirectToAdmin()">Back</button>

   </form>
   <script>
        function redirectToAdmin() {
            window.location.href = "{{ route('all') }}";
        }
    </script>
</body>
</html>