@extends('Admin.MainAdminLayout')
@section('content')


       
       @if ( count($user) > 0)
            @foreach ($username as $item)
           
            @endforeach
      @endif 

@endsection