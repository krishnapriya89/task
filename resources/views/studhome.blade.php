<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <h3 style="text-align: center;"><i>Student Home Page</i></h3>
    <hr style="width: 50%;">
    <div class="row">
        <div class="col-lg-3">
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="{{url('st')}}">View Profile</a>
                </li>
               
                <li class="list-group-item">
                    <a href="{{url('out')}}">Logout</a>

                </li>
            </ul>
        </div>
        <div class="col-lg-7">
            <table style="text-align: center;width: 50%;" border="2">
                <tr>
                   <th>ID</th>
                    <th>Name</th>
                    
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Update</th>
                   
                </tr>
               
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->contact}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->username}}</td>
                    <td><a href="{{url('up')}}/{{$user->id}}">Update</a></td>
                   
                   
                    
                </tr>
                
            </table>

        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


</body>

</html>