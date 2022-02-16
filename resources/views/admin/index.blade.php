@extends('layouts.app')

@section('content')
<div class="admin-page">
   <div class="container">
       <div class="row">
           <div class="col-2">
                <div class="text">
                    <h1>Hi There !</h1>
                    <p> Here You Can Accept New Guided Or Refuse. </p>
                </div>
          </div>

          <div class="col-2">
                <div class="image">
                    <img src="{{asset('asset/Images/admin2.png')}}" alt="">
                </div>
         </div>
      </div>

    </div>
</div>

<div class="container">
    <table class="table">
        <thead class="table-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @php
                $i = 0;
            @endphp
            @foreach ($data as $item)
            <tr>

                <th scope="row">{{++$i}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>

     <td>
        <div class="row">

            <div class="col-sm">
                <a class="btn btn-primary" href="{{ route('admin.show',$item->id)}}">Accept</a>
            </div>

            <div class="col-sm">
                <a class="btn btn-danger" href="{{ route('admin.store',$item->id)}}">Refuse</a>
            </div>

        </div>
    </td>
            </tr>
            @endforeach

        </tbody>
      </table>

  </div>

@endsection
