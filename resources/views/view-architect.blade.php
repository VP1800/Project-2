<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .img-fit {
         max-width: 100%;
        height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Category Name</th>
                <th>Architect</th>
                <th>DP</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($architect as $key => $val)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$val['c_name']}}</td>
                <td>{{$val['name']}}</td>
                <td><img src="{{ asset('app/public/img/' . $val['image']) }}" class="img-fit" alt="{{ $val['name'] }}"></td>
                <td>{{$val['created_at']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>