<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style type="text/css">
	.grid-container {
		 display: inline-grid;
		 grid-template-columns: auto auto auto;
		 margin-left: 200px;
		}
	.grid-containera {
		 display: inline-grid;
		 grid-template-columns: auto;
		 margin-left: 200px;
		}
		.grid-item {
			width:auto;
			height: auto;
			margin: 50px;

		}
		td{
			color: #808080;
		}
	</style>
<body>
	<div class="grid-container">
@foreach($rooms as $room)
			<div class= "grid-item">
				<td><img src="{{'storage/'.$room->image}}"class="card-img-top" width="150px" height="130px" ></td>
			<div class="card" style="width: 350px;">
			<div class="card-body">
		
				<h5 class="card-title" style="text-transform: uppercase;">{{$room->name}}</h5>
				<hr>
				<th colspan="2">
				<td>Phòng:</td>
				<td >{{$room->typeroom}}</td>
				</th>
				<hr>
				<th colspan="2">
				<td>Chỗ nghỉ:</td>
				<span style="margin-right: 0px">{{$room->number}}</td>
				</th><br>
				<hr>
				<th colspan="2">
				<td>Kích thước:</td>
				<td >{{$room->getDisplayArea()}}</td>
				</th><br>
				<hr>
				<th colspan="2" >
				<td style="color:#808080">Giá phòng:</td>
				<b>{{$room->getDisplayPrice()}}</b>
				</th><br>
				<hr>
				<th colspan="2">
				<td>Xem </td>
				<span style="margin-left: 100px; color: #ff4000">Đặt phòng</span>
				</th>
			</div>
</div>
	</div>
		@endforeach
		</div>
</body>
</html>