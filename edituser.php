<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="bg-success p-3 mb-5">
        EDIT FURNITURE
        <a href="logout.php" class="text-right text-white text-decoration-none ml-3">LOG OUT</a>
    </div>
    <form action="" method="post">
          <div class=" w-25 mx-auto mt-5">
            <h3>E D I T</h3>
              First Name <br> 
              <input type="text" name="fname" class="form-control"> <br>
              Last Name <br>
              <input type="text" name="lname" class="form-control"> <br>
              Email <br> 
              <input type="email" name="email" class="form-control"> <br>
              Password <br> 
              <input type="password" name="pass" class="form-control"> <br>

              <input type="submit" name="submit" value="Submit" class="form-control btn btn-outline-success">
          </div>  
      </form>
</body>
</html>