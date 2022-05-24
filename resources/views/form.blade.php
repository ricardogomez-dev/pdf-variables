<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Send Data</title>
</head>
<body>
	<form method="POST" autocomplete="off" action="{{ route('download_pdf') }}">
		@csrf
		@method('POST')
		<label for="">Name:</label>
		<input type="text" name="name" />
		<label for="">Last Name: </label>
		<input type="text" name="last_name" />
		<button>Send</button>
	</form>
</body>
</html>