<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Created</title>
</head>
<body>
<h2>Creat new customer</h2>
<form action="/customer/store" method="post">
    @csrf
    <input name="name" type="text" placeholder="name">
    <input name="age" type="number" placeholder="age">
    <input name="address" type="text" placeholder="address">
    <input name="email" type="text" placeholder="email">
    <button type="submit">submit</button>
</form>
</body>
</html>
