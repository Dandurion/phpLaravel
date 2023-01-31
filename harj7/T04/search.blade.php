

<form type="get" action="{{ URL::to('gsearch') }}">
			<input pattern="[a-zA-Z0-9]+.{4,30}" name="query" value="{{old('query')}}" {!! $errors->has('query') ? 'style="background-color: #faa"' : ''!!} type="search" palceholder="Search">
			<br>
				<select  name="engines" type="text" >
					<option value="google" {{ old('engines') == 'google' ? 'selected' : '' }}>Google</option>
					<option value="bing" {{ old('engines') == 'bing' ? 'selected' : '' }}>Bing</option>
				</select>
			<br>
			<button type="submit" name="buttonpress">Search</button>
			</form>
		
		@if ($errors->any())

       <div style='background-color: #faa;'>
      <ul>
            @foreach ($errors->all() as $error)
          <li> {{ $error }}</li>
        @endforeach
          </ul>
       </div>
    @endif

			
			
			



