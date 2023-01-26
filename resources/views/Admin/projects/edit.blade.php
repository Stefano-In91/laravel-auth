@extends('layouts.admin')

@section('content')
  <h1>Aggiorna</h1>
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{ route('admin.projects.update', $project) }}" method="POST">

    @csrf

    @method('PUT')

    <div class="mb-3">
      <label for="title" class="form-label">Titolo</label>
      <input type="text" class="form-control @error('title') alert alert-danger @enderror"
        value="{{ $project->title }}" id="title" name="title" maxlength="50" required>
    </div>

    <div class="mb-3">
      <label for="description" class="form-label">Descrizione</label>
      <textarea name="description" id="description" cols="30" rows="10"
        class="form-control @error('description') alert alert-danger @enderror" required>{{ $project->description }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Salva</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
  </form>
@endsection
