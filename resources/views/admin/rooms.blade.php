<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<center><h1>Thông tin sản phẩm</h1></center>
<table align="center" width="600px" border="1" cellspacing="0" cellpadding="3"
                class="table table-hover table-bordered">
                <tr  style="text-align: center;background: yellow">
                    <th>Id</th>
                    <th>Name</th>
                    <th>Type room</th>
                    <th>Number</th>
                    <th>Area</th>
                    <th>Price</th>
                    <th>Image</th>
                </tr>
                    @foreach($rooms as $room)
                            <tr>
                            <td>{{$room->id}}</td>
                            <td>{{$room->name}}</td>
                            <td>{{$room->typeroom}}</td>
                            <td>{{$room->number}}</td>
                            <td>{{$room->getDisplayArea()}}</td>
                            <td>{{$room->getDisplayPrice()}}</td>
                            <td><img src="img/{{$room->image}}" width="50px;"height="50px;"></td>
                    @endforeach
                    
            </table>
</body>
</html>