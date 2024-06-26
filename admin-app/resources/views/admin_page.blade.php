<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Index</title>
    <style>
        #btn12{
            position:absolute;
            top: 10px;
             right:0;
        }
    </style>
</head>

<body>
    <form>
       
        <br>
        <center><h1 >Admin Dashboard</h1></center>
        <br>
        <div>
        <button id="btn12" type="button" onclick="redirectToLogIn()">Return to Log-in</button>
        <div>

        <!-- Admin Table Work -->

        <center><h align="center">Admin Table</h></center>
        <table align="center" border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Password</th>
                    <th>Role ID</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->password}}</td>
                    <td>{{$value->role_id}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <br>
        <div>
        <center><button type="button" onclick="redirectToSubAdminCreate()">Create Sub-Admin</button><center>
        <div>
        <br>
        <br>
        <br>
        <br>



       <!-- User Table Work -->   
        
        <h1 align="center">User Table</h1>
        <table align="center" border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Password</th>
                    <th>Role ID</th>
                    <th>Status</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
            </thead>
             <tbody>
                @foreach($us as $val)
                <tr>
                    <td>{{$val->id}}</td>
                    <td>{{$val->name}}</td>
                    <td>{{$val->password}}</td>
                    <td>{{$val->role_id}}</td>
                    <td>{{$val->status}}</td>
                    <td>
                    <form method="post" action="{{ route('accept') }}">
                       @csrf
                        <button type="submit" class="btn btn-warning">Accept</button>
                    </form>

                        <!-- <a href="{{ route('accept',['id'=>$val->id])}}" class="btn btn-warning">Accept</a> -->

                    </td>

                    <td>
                        <form method="post" action="{{ route('reject', ['id' => $val->id]) }}">
                            <button type="submit" class="btn btn-warning">Reject</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <br>
        <br>
        <!-- Sub-Admin Table Work -->
         
     <h align="center">Sub-Admin Table</h>
        <table align="center" border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Password</th>
                    <th>Role ID</th>
                </tr>
            </thead>
             <tbody>
                @foreach($subs as $val)
                <tr>
                    <td>{{$val->id}}</td>
                    <td>{{$val->name}}</td>
                    <td>{{$val->password}}</td>
                    <td>{{$val->role_id}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
       <br>
       <br>
       <br>
 
    </form>
    <script>
        function redirectToSubAdminCreate(){
            window.location.href = "{{ route('createSub') }}";
        }
        function redirectToLogIn(){
            window.location.href = "{{ route('login') }}";
        }
    </script>
</body>
</html>
