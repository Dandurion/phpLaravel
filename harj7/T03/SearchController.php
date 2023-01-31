<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function gsearch(){
	  $search_text=urlencode($_GET['query']);
	  
	  
	  $search_engine=$_GET['engines'];
	  
	  if($search_engine == 'google'){
		  return redirect()->away('https://www.google.com/search?q='.$search_text);
	  }else{
		  return redirect()->away('https://www.bing.com/search?q='.$search_text);
	  }
	  
	  
	  
	  
  }
  
}
