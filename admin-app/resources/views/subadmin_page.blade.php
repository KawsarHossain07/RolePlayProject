<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sub Admin Panenl</title>
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
  <form>
    <br>
    <br>
    <center><h1>Welcome to Sub-Admin Dashboard</h1></center>
    <br>
    <br>

        <div>
        <center><button type="button" onclick="redirectToUserCreate()">Create User</button><center>
        <div>

    <br>
    <br>
        <center><h align="center">User Information</h></center>
        <table align="center" border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Password</th>
                    <th>Role ID</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($us as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->password}}</td>
                    <td>{{$value->role_id}}</td>
                    <td>{{$value->status}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
  </form> 
       
        <script>
            function redirectToUserCreate(){
            window.location.href = "{{ route('createUser') }}";
        }
        function redirectToLogIn(){
            window.location.href = "{{ route('login') }}";
        }
        </script>
</body>
</html>