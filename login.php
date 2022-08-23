<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'db_infotech');
if(isset($_POST['done'])){
$username = $_POST['id'];
$password  = $_POST['psw'];
$q = "select * from login_table where username='$username' and password='$password'";
$query = mysqli_query($conn, $q);
if($res = mysqli_fetch_array($query)){
    echo "<script> window.location='dc.php'<br></script>";
    echo "Success";
}
else{
    echo "Invalid"; 
}

}


?>
<style>
    body{
        background-color:blueviolet;
        background-image: url('2ndcar.jpg');
        

    }
   
    #header{
        /* border: 1px solid black; */
        width: 100%;
        height: 15vh;
        justify-content: space-between;
        display: inline-flex;
        background-color:burlywood;

        }
        #logo{

/* border: 1px solid black; */
width: 30%;
height: 100%; 

}
#img{
    width: 100%;
    height: 100%; 
}
#nav{
/* border: 1px solid black; */
width: 30%;
height: 100%; 
float: right;
/* margin-right: 15px; */
}
form{
        /* display: flex; */
        /* margin: auto;
  width: 50%; */
        border: 1px solid black;
        padding: 20px 10px 10px 10px;
        
text-align: left;
background-color:cornflowerblue;
    }
    #container{
        display: flex;
        justify-content: center;
        text-align: center;
        /* border: 1px solid black; */
        margin-top: 30vh;
        margin-bottom: 5px;

    }
    ul{
        display: inline-flex;
        margin-top: 30px;
    }

    li{
        margin-right: 50px;
        text-decoration: none;
        list-style-type: none;
        cursor:context-menu;
    }
    input{
        width: 100vh;
        filter: brightness(200%);
    }
    #submit{
        width: 100%;
        filter: brightness(200%);


        
    }
   
    

    /* if(isset($_POST['done'])){} */
</style>

<body>
    <div id="header">
        <div id="logo"><img id="img" src="/KTM-Logo-1954-1958.png" ></div>
        <div id="nav">
            <ul>
                <li>Home</li>
                <li>About</li>
                <li>Contact</li>
            </ul>

</div>
        </div>
    <div id="container">
    <form method="post">
        <label>Username:<br><input type="text" name="id"></label><br><br>
        <label>Password:<br><input type="password" name="psw"><br></label><br>
        <input id="submit" type="submit" name="done" value="submit"><br></label><br>
    </form>
    <a href="https://docs.google.com/document/d/1DboaBZDy6oQKZxk4nyiyBRV04NqcmELp/edit?usp=sharing&ouid=104312361013563396707&rtpof=true&sd=true"><input type="submit" value="show"></a>
    </div>
    
</body>
</html>