@extends('layouts.app')

@section('content')
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <form class="d-flex">
    <button class="btn-sm btn-outline-success" type="submit">Search</button>

      <input class="form-control-sm me-2" type="search" placeholder="Search" aria-label="Search">
    </form>
  </div>
</nav>
@endsection
