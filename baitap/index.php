<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>

form {
  background-color: #f4f4f9;
  border: 1px solid #ccc;
  padding: 20px;
  width: 300px;
  margin: 0 auto;
  border-radius: 8px;
}

form h1 {
  font-family: 'Arial', sans-serif;
  font-size: 24px;
  text-align: center;
  margin-bottom: 20px;
  color: #333;
}

form label {
  font-family: 'Arial', sans-serif;
  font-size: 14px;
  color: #333;
  margin-bottom: 5px;
  display: block;
}

form input[type="text"], form input[type="password"], form input[type="email"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 14px;
  font-family: 'Arial', sans-serif;
}

form button {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  font-size: 14px;
  cursor: pointer;
  width: 100%;
}

form button:hover {
  background-color: #45a049;
}

form input[type="text"]:focus, form input[type="password"]:focus, form input[type="email"]:focus {
  border-color: #66afe9;
  outline: none;
}

form input[type="text"]:hover, form input[type="password"]:hover, form input[type="email"]:hover {
  border-color: #aaa;
}

</style>
</head>

<body>
    <form action="add.php" method="POST">
        <h1>Them quan tri vien</h1>
        <div class="block">
            <label for="">Ten dang nhap: </label>
            <input type="text" name="username" id="">
        </div>
        <div class="block">
            <label for="">Mat khau: </label>
            <input type="password" name="password" id="">
        </div>
        <div class="block">
            <label for="">Email: </label>
            <input type="text" name="email" id="">
        </div>
        <div class="block">
            <label for="">Ho va ten: </label>
            <input type="text" name="hoten" id="">
        </div>
        <div class="block">
            <label for=""> </label>
            <input type="submit" name="dbsubmit" value="Them moi">
        </div>
    </form>


</body>

</html>
