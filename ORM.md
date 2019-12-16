# ORM 
# DB::select('select * from users where active =?',[1]);
# return view('user.index', ['users' => $users]);
 
    public function index()
	    {
	        /*
	        @Param Binding
	        @SQL Injection
	        The 1st arg passed to the method called select is a raw SQL query,
	        while the 2nd arg is param binds that bound to the query.
	        Normally, these are the "values" of the where clause constraints.
	        "Param Bind" privides protection against SQL injection. 
	        */
	
	        // the method called select will return an array of Results = Response.
	        // the result will be PHP stdClass Obj
	        
		$users = DB::select('select * from users where active =?',[1]);
	        return view('user.index', ['users' => $users]);
	        
	        // to output eavery element in the array object.
	        
		foreach($users as $u) {
	            echo $u->name;
	        }
	    }
