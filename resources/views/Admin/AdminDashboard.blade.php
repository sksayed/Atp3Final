@extends('Admin.MainAdminLayout')
@section('content')
      <h1>Sayed is a good boy and drinks milk</h1>

       
       @if ( count($username) > 0)
            @foreach ($username as $item)
      <li> {{ $item->username }}</li>
            @endforeach
      @endif 

@endsection