@extends('layouts.mainlayout')

@section('title', 'Dashboard')

@section('content')
    <h1>User List</h1>
    <div class="my-5">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Username</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->username}}</td>
            </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

