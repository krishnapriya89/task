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
  
    <form action="{{url('upl')}}/{{$arey->id}}" method="post" style="border: 2px solid black;width: 50%;margin-left: 20%;margin-top: 20px;padding-right: 10%;" onsubmit="return validate()" name="form1">
    @csrf
        <h2 align="center">Update your profile</h2>
        <hr width="50%">
        <div class="row" style="margin-left: 30%;">
            <label for="">Name:</label>&nbsp;&nbsp;
            <input type="text" name="tname" id="" style="margin-left: 10%;" value="{{$arey->name}}">
        </div>
        <br>
        <div class="row" style="padding-left: 30%;">
            <label for="">Contact:</label>&nbsp;
            <input type="text" name="tcont" id="" style="margin-left: 10%;" value="{{$arey->contact}}">
        </div>
        <br>
        <div class="row" style="padding-left: 30%;">
            <label for="">Email:</label>&nbsp;&nbsp;&nbsp;
            <input type="text" name="tmail" id="" style="margin-left: 10%;" value="{{$arey->email}}">
        </div>
        <br>
        <div class="row" style="padding-left: 30%;">
            <label for="">Username:</label>&nbsp;&nbsp;
            <input type="text" name="tuname" id="" style="margin-left: 10%;" value="{{$arey->username}}">
        </div>
        <br>
        <div class="row" style="padding-left: 30%;">
            <label for="">Password:</label>&nbsp;&nbsp;
            <input type="text" name="tpass" id="" style="margin-left: 10%;" value="{{$arey->password}}">
        </div>
        <br>


        <div class="row" style="padding-left: 30%;">

            <button type="submit" style="display: block;width: 50%;">Update</button>
        </div>


    </form>
    



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


</body>

</html>
<script>
    function validate() {
        fname = document.forms["form1"]["tname"].value
        fcont = document.forms["form1"]["tcont"].value
        fmail = document.forms["form1"]["tmail"].value
        funame = document.forms["form1"]["tuname"].value
        fpas = document.forms["form1"]["tpass"].value
        // conpas = document.forms["form1"]["cpas"].value
        epat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        matchArray = fmail.match(epat)
        if (fname.length == "") {
            alert("enter name")
            document.forms["form1"]["tname"].focus();
            return false;
        } else if (/[^a-z]/gi.test(document.forms["form1"]["tname"].value)) {
            alert("alphabets only")
            document.forms["form1"]["tname"].focus();
            return false;
        } else if (fcont.length == "") {
            alert("enter contact")
            document.forms["form1"]["tcont"].focus();
            return false;
        } else if ((fcont.length < 10) || (fcont.length > 10)) {
            alert("phone number must contain 10 digits")
            document.forms["form1"]["tcont"].focus();
            return false;
        } else if (fmail.length == "") {
            alert("enter mail")
            document.forms["form1"]["tmail"].focus();
            return false;

        } else if (matchArray == null) {
            alert("invalid maild id")
            document.forms["form1"]["tmail"].focus();
            return false;
        } else if (funame.length == "") {
            alert("enter username")
            document.forms["form1"]["tuname"].focus();
            return false;
        } else if (fpas.length == "") {
            alert("enter password")
            document.forms["form1"]["tpass"].focus();
            return false;
        } else if (document.forms["form1"]["tpass"].value.length <= 6) {
            alert("at least 7 or more characters")
            document.forms["form1"]["tpass"].focus();
            return false;
        }
        // } else if (conpas.length == "") {
        //     alert("enter cofirmpassword")
        //     document.forms["form1"]["cpas"].focus();
        //     return false;


        // } else if (conpas != document.forms["form1"]["tpass"].value) {
        //     alert("incorrect password try again")
        //     document.forms["form1"]["cpas"].focus();
        //     return false;
        // }
    }
</script>