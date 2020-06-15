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
        <ul class="hidden">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="/rooms" method="post">
    @csrf
    <label>Name</label>
    <input type="text"  required name="name"><br>
    @error('name')
    <div>{{ $message }}</div>
    @enderror </p>
    <label>Type Room</label>
    <input type="text"required name="typeroom"><br>
    <label>Price</label>
    @error('price')
    <div>{{ $message }}</div>
    @enderror </p>
    <input type="number"required name="price"><br>
    <label>Number</label>
    <input type="text"required name="number"><br>
    <label>Area</label>
    @error('area')
    <div>{{ $message }}</div>
    @enderror </p>
    <input type="number"required name="area"><br>
    <label>Image</label>
    <input type="file" name="image"><br>
    <button class="btn"type="submit">
    Submit
    </button> 
    </form>
</body>
</html>