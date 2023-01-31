<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
    <head>
	<style>
	html{
		display: table;
    margin: auto;
	}
	body{
		font: 100% arial, helvetica, sans-serif;
		width:900px;
		display: table-cell;
    vertical-align: middle;
	background-color: #F0FFFF;
		
	}
      table, th, td {
      border:1px solid black;border-collapse:collapse;
      }
	  tr:nth-child(odd) {background: #ccc}
tr:nth-child(even) {background: #fff}
tr:nth-child(1) {background: #e7ecf1}
#container {width: 400px; margin:auto;}

	  .navbar{
		  display: flex;
    flex-direction: row;
    align-items: flex-start;
	background
	  }
	  .navbar form{
		  padding:20px;
	  }
	  #editbutton{
		 color: black;
  text-decoration: none;  
	  }
	  .cb1{
		  text-align:right;
		  padding-top:15px;
		  
	  }
	  .cb1 span{
		  background-color: #80ced6;
	  }
	  
	  
    </style>
        <title>@yield('title')</title>
		
    </head>
    <body>
		<p class="cb1"><span>SeeBook</span> by me. I made this one.</p>
        @section('sidebar')
            <div class="navbar">
			<h4>[ <a href="{{ URL::to('customers') }}">Listaa</a> ][ <a href="{{ URL::to('customers/create') }}">Lisää</a> ]</h4>
			<form type="get" action="{{ URL::to('search') }}">
			<input name="query" type="search" palceholder="Search">
			<button type="submit">Search</button>
			</form>
			</div>
			<hr>
		@show

        <div id="container">
            @yield('content')
        </div>
    </body>
</html>