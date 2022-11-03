@extends('layouts.app')

@section ('title',' Reciept detail')
@section ('content')
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>{{$rec->title}} Receipt</title>
</head>

<body>
    <div class="container">
        <h1 class="my-3 text-center">Receipts</h1>
        <h2>{{ $rec->title }}</h2>
        <p>{{ $rec->content }}</p>
        <a href="{{ route('rec.edit', ['rec' => $rec->id]) }}">Edit</a>
        <a href="{{ route('rec.delete', ['rec' => $rec->id]) }}">Delete</a>
        <p><a href="{{ route('index') }}">To the list of Reciepts</a></p>
    </div>
</body>

</html>
@endsection