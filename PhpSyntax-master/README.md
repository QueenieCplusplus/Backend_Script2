# PhpSyntax

# some Exclusive Point in PHP Langugae

* ampersand "&" used in Variable & Function & Operations

>

           foreach ($a as &$aaa) {
           
               $yyy[$aaa['apple']] = array(
                  'name' => $aaa['user_name],
                  'contact' => $aaa['phone_number'],
                  'place' => $aaa['address']
              );
           }
> 

           // get singleton
           function &get_instance(){
           
                 return self::instance;
           
           }
           
> //in class

           foreach (has_loaded() as $module => $class){
           
                 $this->$module =& load_class($class);
           
           }
           
           $this->load =& load_class('loader', 'core')
           
           
