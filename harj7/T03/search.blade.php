<form type="get" action="{{ URL::to('gsearch') }}">
			<input name="query" type="search" palceholder="Search">
			<br>
				<select  name="engines" type="text" >
					<option selected value="google">Google</option>
					<option value="bing">Bing</option>
				</select>
			<br>
			<button type="submit">Search</button>
			</form>
			
			


