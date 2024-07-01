@extends('layouts.admin')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">subtitle</th>
        <th scope="col">description</th>
        <th scope="col">owner</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($projects as $curProject)
        <tr>
          <th scope="row">{{$curProject->id}}</th>
          <td>{{$curProject->name}}</td>
          <td>{{$curProject->subtitle}}</td>
          <td>{{$curProject->description}}</td>
          <td>{{$curProject->owner}}</td>
        </tr>
            
        @endforeach
      
    </tbody>
  </table>
    
@endsection