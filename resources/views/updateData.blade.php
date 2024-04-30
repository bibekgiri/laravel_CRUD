<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Student Data</title>
</head>
<body>
    <h1>Update Student Data</h1>
    @if(session('error'))
        <div style="color: red;">{{ session('error') }}</div>
    @endif
    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif
    <form action="/update/{{ $students->id }}" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $students->name }}" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $students->email }}" required>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
