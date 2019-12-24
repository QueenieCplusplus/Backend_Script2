# Model in Codelgniter

root -> CI_Model

parent -> CoreModel

child -> CommerceModel

# Data Model,資料建模

https://pattyappier.blog/2019/01/23/核心資料模型-core-data-model/#more-1778

# 3rd party using CIMongo

  http://intekhab.in/mongodb-library-for-codeigniter.html
  
# CI_Model's Instance as a Singleton, 單一實例，唯一介面

    class CI_Model {
      /**
       * Class constructor
       *
       * @return	void
       */
      public function __construct()
      {
        log_message('info', 'Model Class Initialized');
      }
      
      /**
       * __get magic
       *
       * Allows models to access CI's loaded classes using the same
       * syntax as controllers.
       *
       * @param	string	$key
       */
      public function __get($key)
      {
        // Debugging note:
        //	If you're here because you're getting an error message
        //	saying 'Undefined Property: system/core/Model.php', it's
        //	most likely a typo in your model code.
        return get_instance()->$key;
      }
    }

# Php inline method

        intval() //轉資料型別
      
        is_string()
        array_key_exists()
        pow()

# CIMongo DB method to call thru RPC
   
       cimongo->like(key, val, true, flag, true, true)
       cimongo->or_where()
       cimongo->pull()
       cimongo->push()

       cimongo->select([]) 讀取資料，或稱選取讀取資料，或稱撈資料
       cimongo->select($arr_fields);
       cimongo->limit() 拘限
       cimongo->order_by() 排序


       var A = $obj_where_option
       foreach(A as a){
          if($obj_where_option['k'] === 'v') {
              cimongo->where_val(A['key'], A['value'])
          }
       }
     
  
        $obj_where shall be initialized
        cimongo->where_in('', [])
        cimongo->get('')->get_cursor()
        cimongo->where
        cimongo->get_one()
        cimongo->distinct( , ,$obj_where)

# 單一物件類別的探討

      https://github.com/redpint819/Singleton_Design_Pattern
  
  
  
  
