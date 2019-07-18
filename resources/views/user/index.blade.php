@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
@parent

<p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($user as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->fname}}</td>
            <td>{{$item->lname}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->phone}}</td>
        </tr>
        @empty

        @endforelse
    </tbody>
</table>


@endsection
