<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Category Name</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($category as $key => $val)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$val['name']}}</td>
                <td>{{$val['email']}}</td>
                <td>{{$val['address']}}</td>
                <td>{{$val['doj']}}</td>
                <td>{{$val['gender']}}</td>
                <td>{{$val['status']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>