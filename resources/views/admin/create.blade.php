<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo mới</title>
</head>
<body>
     @if ($errors->any())
    <div class="hidden">
        <ul style="display: none">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="/rooms" method="post" enctype="multipart/form-data">
    @csrf
    <label>Name</label><br>
    <input type="text"  required name="name"><br>
    @error('name')
    <div>{{ $message }}</div>
    @enderror </p>
    <label>Type Room</label><br>
    <input type="text"required name="typeroom"><br>
    <label>Price</label><br>
    @error('price')
    <div>{{ $message }}</div>
    @enderror </p>
    <input type="number"required name="price"><br>
    <label>Number</label><br>
    <input type="text"required name="number"><br>
    <label>Area</label><br>
    @error('area')
    <div>{{ $message }}</div>
    @enderror </p>
    <input type="number"required name="area"><br>
    <label>Image</label><br>
    <input type="file" name="image"><br>
    <button class="btn"type="submit">
    Submit
    </button> 
    </form>
</body>
</html>