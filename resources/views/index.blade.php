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
				<img src="img/{{$room->image}}"class="card-img-top" width="150px" height="130px" >
			<div class="card" style="width: 350px;">
			<div class="card-body">
		
				<h5 class="card-title" style="text-transform: uppercase;">{{$room->name}}</h5>
				<hr>
				<th colspan="2" >
				<td style="color:#808080">Price:</td>
				<b>{{$room->getDisplayPrice()}}</b>
				</th><br>
				<hr>
				<th colspan="2">
				<td>Number:</td>
				<span style="margin-right: 0px">{{$room->number}}</td>
				</th><br>
				<hr>
				<th colspan="2">
				<td>Area:</td>
				<td >{{$room->getDisplayArea()}}</td>
				</th><br>
				<hr>
				<th colspan="2">
				<td>Typeroom:</td>
				<td >{{$room->typeroom}}</td>
				</th>
				<hr>
				<th colspan="2">
				<td>view</td>
				<span style="margin-left: 100px; color: #ff4000">Book</span>
				</th>
			</div>
</div>
	</div>
		@endforeach
		</div>
</body>
</html>