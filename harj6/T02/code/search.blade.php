@extends('layouts.app')
@section('title', 'Search Results' )
@section('content')

<h1>Results</h1>
      <table >
        <tr><th>Name</th><th>Birth date</th></tr>
       @foreach ($results as $customer)
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