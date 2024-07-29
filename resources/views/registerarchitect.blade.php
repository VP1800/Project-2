<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Create Architect</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
</head>
<body>
    @php
        // echo"<pre>";
        // print_r($category);
        // print_r($categories);
        
    @endphp
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create an Architect</div>
                    <div class="card-body">
                        <form method="POST" action="{{url('/storearchitect')}}" enctype="multipart/form-data">
                            @csrf
                            <h1>Enter Details to create an architect</h1>
                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select class="form-control" value="{{old('category_id')}}" name="category_id">
                                    @foreach ($category as $key)
                                        <option value="{{ $key->id }}">{{ $key->name }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">
                                    @error('category')
                                    {{$message}}
                                    @enderror
                                  </span>
                            </div>
                            <div class="form-group">
                                <label for="name">Architect Name</label>
                                <input type="text" class="form-control" name="name" value="{{old('name')}}">
                                <span class="text-danger">
                                    @error('name')
                                    {{$message}}
                                    @enderror
                                  </span>
                            </div>
                            <div class="form-group">
                                <label for="image">Profile photo</label>
                                <input type="file" class="form-control" name="image">
                                <span class="text-danger">
                                    @error('image')
                                    {{$message}}
                                    @enderror
                                  </span>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>