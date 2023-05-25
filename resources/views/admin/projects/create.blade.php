@extends('layouts.admin')

@section('page-title', 'Create new project')

@section('content')

    <h2 class="fs-4 text-secondary my-4">Create new project</h2>

    <form method="POST" action="{{ route('admin.projects.store') }}" >

        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror " id="title" name="title" value="{{old('title')}}">
            @error('title')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" class="form-control @error('image') is-invalid @enderror " id="image" name="image" value="{{old('image')}}">
            @error('image')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="type_id" class="form-label">Project type</label>
            <select class="form-select @error('type_id') is-invalid @enderror"  name="type_id" id="type_id">
                <option  @selected(old('type_id')=='') value="">No project type</option>
                @foreach ( $types as $type)
                    <option  @selected(old('type_id')==$type->id) 
                    value="{{$type->id}}">{{$type->name}}</option>
                @endforeach
            </select>
            @error('type_id')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{old('description')}}</textarea>
            @error('description')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Save</button>

    </form>

@endsection