 # Blade Front, view helper, @yield, @section
  
  
        Route::get('parentLayout', function(){
	    return view('layouts.view1');
	});
	
	Route::get('childView', function(){
	    return view('childA');
	}); 
