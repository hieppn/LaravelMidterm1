<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
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
	</style>
<body>
	<div class="grid-container">
@foreach($rooms as $room)
			<div class= "grid-item">
				<img src="img/{{$room->image}}"class="card-img-top" width="150px" height="130px" >
			<div class="card" style="width: 500px;">
			<div class="card-body">
		
				<h5 class="card-title">{{$room->name}}</h5>
				<th colspan="2">
				<td>Price</td>
				<td class="card-text">{{$room->price}}</td>
				</th><br>
				<th colspan="2">
				<td>Number</td>
				<td class="card-text">{{$room->number}}</td>
				</th><br>
				<th colspan="2">
				<td>Area</td>
				<td class="card-text">{{$room->area}}</td>
				</th><br>
				<th colspan="2">
				<td>Typeroom</td>
				<td class="card-text">{{$room->typeroom}}</td>
				</th>
			</div>
</div>
	</div>
		@endforeach
		</div>
</body>
</html>