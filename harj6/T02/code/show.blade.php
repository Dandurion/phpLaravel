@extends('layouts.app')
@section('title', 'Customer' )
@section('content')
  


    <h1>Customer</h1>
            <h3>{{ $customer->name }}</h3>
            <p>Birth date: {{ $customer->birth_date }}</p>
          </tr>
		  
		 
<button><a  id="editbutton" href='{{ $customer->id}}/edit'>Edit</a></button>
@endsection

