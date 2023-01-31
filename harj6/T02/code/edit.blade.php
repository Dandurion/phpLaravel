@extends('layouts.app')
@section('title', 'Edit Customer' )
@section('content')
    <h1>Edit Customer</h1>

    <form method="POST" action="{{ url('/') }}/customers/{{ $customer->id}}">

      {{ method_field('PATCH') }}
      {{ csrf_field() }}

      <div>
        <input type="text" name="name" value="{{ $customer->name }}">
      </div>

      <div>
        <input type="text" name="birth_date" value="{{ $customer->birth_date }}">
      </div>

       <div>
         <button type="submit">Save changes</button>
       </div>

     </form>
	 <form method="POST" action="{{ url('/') }}/customers/{{ $customer->id}}">

      @method('DELETE')
      @csrf

       <div>
         <button type="submit">Delete Customer</button>
       </div>

     </form>

@endsection