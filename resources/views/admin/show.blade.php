@extends('layouts.app')

@section('content')

<div class="container">

    <div class="from-groub">
      <label for="exampleInputEmail1" class="form-label">{{ $date->id}}</label>

    </div>

    <div class="from-groub">
      <label for="exampleInputPassword1" class="form-label">{{ $date->name}}</label>

    </div>

    <div class="from-groub">
        <label for="exampleInputPassword1" class="form-label">{{ $date->email }}</label>

      </div>

    <div class="from-groub">
        <label for="exampleInputPassword1" class="form-label">{{ $dta->status}}</label>

      </div>
</div>

@endsection
