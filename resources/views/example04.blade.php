@extends('layout.master')

@section('title')
  Template Inheritance Test
@endsection

@section('content')
  <table class='table'>
    <thead class='thead-dark'>
        <tr>
          <th>Name</th>
          <th>Age</th>
          <th>Address</th>
        </tr>
    </thead>
    <tbody>
      @foreach($members as $member)
        <tr>
          <td>{{$member['name']}}</td>
          <td>{{$member['age']}}</td>
          <td>{{$member['address']}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
  @include('example05')
@endsection
