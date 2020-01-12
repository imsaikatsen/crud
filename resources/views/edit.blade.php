@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Update Account
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <form method="post" action="{{ route('shows.update', $show->id) }}">
           <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name"> Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="email">Email :</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="group">Group :</label>
              <input type="text" class="form-control" name="group"/>
          </div>
          <div class="form-group">
              <label for="number">Phone No :</label>
              <input type="text" class="form-control" name="phone_no"/>
          </div>
          <button type="submit" class="btn btn-primary">Update Account</button>
      </form>
  </div>
</div>
@endsection