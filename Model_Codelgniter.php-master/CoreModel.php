<?php
    
    /*
     getter 存取或，或稱讀取
     setter 寫入
     */
    
    /*
     intval() 轉資料型別
     */
    
    /*
     third party has CIMongo
     */
    
    /*
     cimongo->like(key, val, true, flag, true, true)
     cimongo->or_where()
     cimongo->pull()
     cimongo->push()
     
     cimongo->select([]) 讀取資料，或稱選取讀取資料，或稱撈資料
     cimongo->select($arr_fields);
     cimongo->limit() 拘限
     cimongo->order_by() 排序
     */
    
    /* set_where
     === is true
     var A = $obj_where_option
     foreach(A as a){
        if($obj_where_option['k'] === 'v') {
            cimongo->where_val(A['key'], A['value'])
        }
     }
     */
    
class CoreModel extends CI_Model {
    
    //Query Result Count
    protected $_n_result_count = 0;
    
    public function __construct() {
        parent::__construct();
    }
    
    //Get Query Result Count
    public function get_result_count() {
        //debug($this->_result_count);
        return $this->_n_result_count;
    }
    
    //Set Query Result Count
    protected function _set_result_count($count) {
        $this->_n_result_count = $count;
    }
    
    
    
    //Set Extra Where Option
    public function set_extra_where($arr_where_options) {
        //Add Other Where Condition
        foreach($arr_where_options as &$obj_where_option) {
            if ($obj_where_option['op'] === 'gt') {
                $this->cimongo->where_gt($obj_where_option['key'], $obj_where_option['value']);
            } else if ($obj_where_option['op'] === 'gte') {
                $this->cimongo->where_gte($obj_where_option['key'], $obj_where_option['value']);
            } else if ($obj_where_option['op'] === 'lt') {
                $this->cimongo->where_lt($obj_where_option['key'], $obj_where_option['value']);
            } else if ($obj_where_option['op'] === 'lte') {
                $this->cimongo->where_lte($obj_where_option['key'], $obj_where_option['value']);
            } else if ($obj_where_option['op'] === 'ne') {
                $this->cimongo->where_ne($obj_where_option['key'], $obj_where_option['value']);
            } else if ($obj_where_option['op'] === 'in') {
                $this->cimongo->where_in($obj_where_option['key'], $obj_where_option['value']);
            } else if ($obj_where_option['op'] === 'eq') {
                $this->cimongo->where($obj_where_option['where']);
            } else if ($obj_where_option['op'] === 'like') {
                if ( ! array_key_exists('flag', $obj_where_option))
                    $obj_where_option['flag'] = 'i';$this->cimongo->like($obj_where_option['key'], $obj_where_option['value'], TRUE, $obj_where_option['flag'], TRUE, TRUE);
            } else if ($obj_where_option['op'] === 'or') {
                $this->cimongo->or_where($obj_where_option['where']);
            } else if ($obj_where_option['op'] === 'pull') {
                $this->cimongo->pull($obj_where_option['key'], $obj_where_option['value']);
            } else if ($obj_where_option['op'] === 'push') {
                $this->cimongo->push($obj_where_option['key'], $obj_where_option['value']);
            }
        }
    }
    
    //Set Extra Select Option
    public function set_extra_select($arr_select_options) {
        //Check Type
        if (is_array($arr_select_options))
            $this->cimongo->select($arr_select_options);
        else if (is_string($arr_select_options))
            $this->cimongo->select(array($arr_select_options));
    }
    
    //Set Page and Limit
    public function set_page($n_page = 1, $n_limit = 20) {
        //Check Parameter Type correct or not
        if ( ! is_numeric($n_page) OR ! is_numeric($n_limit))
            return FALSE;
        
        //Modify Type to integer
        $n_page = intval($n_page);
        $n_limit = intval($n_limit);
        
        $this->cimongo->limit($n_limit, ($n_page - 1) * $n_limit);
    }
    
    //Set Order By
    public function set_order_by($key, $vector) {
        $this->cimongo->order_by(array($key => $vector));
    }
    
}
