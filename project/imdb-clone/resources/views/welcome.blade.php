<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form class="input-group" action="{{ route('search')}}" method="GET">
        <input type="text" class="form-control" name="search" placeholder="Search"/>
        
        <input type="submit" value="Search"/>
</form>
</body>
</html> 