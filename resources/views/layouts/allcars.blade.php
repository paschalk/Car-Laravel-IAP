<!DOCTYPE html>
<html>
<head>
	<title>Car {{ $car->id }}</title>
</head>
<body>
	<h1>Car {{ $car->id }}</h1>
	<table>
		<tr>
			<td>Car ID</td>
			<td>Make</td>
			<td>Model</td>
		</tr>
		@foreach {$cars as $car}
		<tr>
			<td>{{ $car->id }}</td>
			<td>{{ $car->make }}</td>
			<td>{{ $car->model }}</td>
		</tr>
		@endforeach
	</table>

</body>
</html>