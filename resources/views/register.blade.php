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
    
    <form action="{{url('/register')}}" method="post">
        @csrf
        <div class="card" style="width: 30rem;">
            <div class="card-body">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" value="{{old('name')}}" name="name" placeholder="Enter your name">
                  <span class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                  </span>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" id="email" value="{{old('email')}}" name="email" placeholder="Enter your email">
                  <span class="text-danger">
                    @error('email')
                    {{$message}}
                    @enderror
                  </span>
                </div>
                <div class="form-group">
                  <label for="address">Address</label>
                  <textarea name="address" class="form-control">{{old('address')}}</textarea>
                  <span class="text-danger">
                    @error('address')
                    {{$message}}
                    @enderror
                  </span>
                </div>
                <div class="form-group">
                    <label for="email">Date of joining</label>
                    <input type="date" class="form-control" value="{{old('doj')}}" name="doj" placeholder="Enter date">
                    <span class="text-danger">
                      @error('doj')
                      {{$message}}
                      @enderror
                    </span>
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <input type="radio" value="M" name="gender">Male
                    <input type="radio" value="F" name="gender">Female
                    <input type="radio" value="O" name="gender">Other
                    <span class="text-danger">
                      @error('gender')
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