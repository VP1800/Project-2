<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    {{-- @php
    
    print_r($errors->all());
    @endphp --}}
    
    <form action="{{url('/store')}}" method="post">
        @csrf
        <div class="card" style="width: 30rem;">
            <div class="card-body">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" value="{{old('category')}}" name="category" placeholder="Enter Category">
                  <span class="text-danger">
                    @error('category')
                    {{$message}}
                    @enderror
                  </span>
                </div>
                <input type="submit" name="register" class="btn btn-success mt-3" value="Register">
            </div>
          </div>
        </form>
</body>
</html>