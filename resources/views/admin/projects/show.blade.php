@extends('layouts.admin')

@section('page-title', $project->title)

@section('content')
  
<div class="card mt-4 w-75">

  <div class="d-flex">
    <img src="{{$project->image}}" class="personal_img_lg ">
    <div>
      <div class="card-body">
        <h5 class="card-title">{{$project->title}}</h5>
        <p class="card-text">{{$project->description}}</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Project id: {{$project->id}}</li>
        <li class="list-group-item">Project type: {{$project->type?$project->type->name:'No project type selected'}}</li>
      </ul>
    </div>
  </div>
  
</div>

<a class="btn btn-primary mt-3" href="{{route('admin.projects.index')}}">Come back to list</a>


@endsection