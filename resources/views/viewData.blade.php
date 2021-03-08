@extends('layouts.app')
@section('content')
<br>
<div class="container"style="position: relative; top:100px;" >

           
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Asal</th>
        <th>Created_at</th>
        <th>Updated_at</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
      <tr>
      <td>{{ $user->id }}</td>
      <td>{{ $user->name }}</td>
      <td>{{ $user->asal }}</td>
      <td>{{ $user->created_at }}</td>
      <td>{{ $user->updated_at }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<br>
@endsection