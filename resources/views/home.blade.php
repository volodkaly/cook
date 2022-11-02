@extends('layouts.app')
@section('title', 'My receipts')
@section('main')
<p class="text-left"><a href="{{ route('rec.add') }}">Add new receipt</a></p>
@if (count($recs) > 0)
<table class="table table-striped">
    <thead>
        <tr>
            <th>Receipt</th>
            <th colspan="2">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($recs as $rec)
        <tr>
            <td>
                <h3>{{ $rec->title }}</h3>
            </td>
            <td>
                <a href="{{ route('rec.edit', ['rec' => $rec->id]) }}">Edit</a>
            </td>
            <td>
                <a href="{{ route('rec.delete', ['rec' => $rec->id]) }}">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif
@endsection