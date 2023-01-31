@extends('layouts.app')
@section('title', 'Customer List' )
@section('content')

    <h1>Customers</h1>
      <table >
        <tr><th>Name</th><th>Birth date</th></tr>
       @foreach ($customers as $customer)
    <tr>
        <td>
             <a href='customers/{{ $customer->id}}'>
             {{ $customer->name }}
             </a>
         </td>
        <td>{{ $customer->birth_date }}</td>
		
    </tr>
@endforeach
      </table>

@endsection

