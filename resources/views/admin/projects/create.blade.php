@extends('layouts.admin')
@section('content')

<h1>CREA NUOVO PRODOTTO</h1>

<form action="{{route('admin.projects.store')}}" method="POST" class="needs-validation" enctype="multipart/form-data">
    @csrf

    <label for="title">Title</label>
    <input class="form-control" type="text" name="title" id="title" value="">

    <label for="content">Content</label>
    <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>

    <label for="deadline">Dead-Line</label>
    <input class="form-control" type="text" name="deadline" id="deadline" value="">

    <label for="category_id">Category</label>
    <select class="form-control" name="category_id" id="category_id">

        <option value="" selected disabled>Seleziona Categoria</option>

        @foreach ($categories as $category)

            <option value="{{$category->id}}">{{$category->name}}</option>

        @endforeach
    </select>

    <div class="container my-2">
        <div class="row">
            @foreach ($technologys as $i => $techology)
                    <div class="form-check col-3 d-flex flex-wrap">
                        <input type="checkbox" value="{{$techology->id}}" name="technologys[{{$i}}]" id="techology" class="form-check-input">
                        <label for="technologys[{{$i}}]" class="form-check-label">{{$techology->name}}</label>
                    </div>
            @endforeach
        </div>
    </div>

    <label for="image">Import Image:</label>
    <input type="file" name="image" id="image" class="form-control my-4">

    <div>
        <input type="submit" class="form-control btn btn-primary my-4" value="Create" style="width: 10rem;">
    </div>

</form>

@endsection