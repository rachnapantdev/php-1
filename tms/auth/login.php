<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .container{
      padding: 20px;
    }
    form{
      border: 5px groove black;
      width: 50%;
      margin: auto;
      padding: 20px;
    }
    label{
      display: block;
      font-size: 20px;
      font-weight: bold;
    }
    input{
      width: 90%;
      margin: 5px 0px;
      padding: 10px 0px;
    }
    input[type="submit"]{
      width: 30%;
      margin-top: 20px;
      background-color: black;
      color: wheat;
      padding: 10px 5px;
      border: none;
      border-radius: 10px;
      font-size: 20px;
    }
    .reg{
      font-size: 40px;
    font-weight: 600;
    border-bottom: 5px solid black ;
    border-radius: 20px;
    text-align: center;
    }
  </style>
</head>

<body>
  <div class="container">
    <form action="validate.php" method="get">
      <p class="reg"> Login Here  </p>
      
      <div class="box">
        <label for=""> Email </label>
        <input type="text" name="email">
      </div>
      <div class="box">
        <label for=""> Password </label>
        <input type="text" name="password">
      </div>
      <div class="box">
        <input type="submit" value="Login">
      </div>
    </form>
  </div>

</body>

</html>