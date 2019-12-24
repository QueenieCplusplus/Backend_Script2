<?php
    
    /* inline method

        is_string()
        array_key_exists()
        pow()
     */
    
    /* CIMongo
    
        $obj_where shall be initialized
        cimongo->where_in('', [])
        cimongo->get('')->get_cursor()
        cimongo->where
        cimongo->get_one()
        cimongo->distinct( , ,$obj_where)
     */
    
class CommerceModel extends CoreModel {
    
    public function __construct() {
        parent::__construct();
    }
    
    //Get Commercial List By Id
    public function getCommercialListById($arr_input) {
        
        if (is_string($arr_input))
            $arr_inputs = array($arr_input);
        
        $this->cimongo->where_in('TM_Location_ID', $arr_stores);
        
        //Set Result Count
        $this->_set_result_count($this->cimongo->count_all_results('commerce', FALSE));
        
        //Get Invoice Cursor
        $arr_order_cursor = $this->cimongo->get('commerce')->get_cursor();
        
        return $arr_order_cursor;
    }
    
    //Get Commpericial Detail By Commercial Id
    public function getCommercialDetailById($s_commerce_id) {
        
        $this->cimongo->where(array('serialCodeNumber' => $s_commerce_id));
        
        $obj_commerce_detail = $this->cimongo->get_one('commerce');
        
        return $obj_commerce_detail;
    }
    
    //Get User Account Level
    public function getLevelByParam(&$objParam) {
        
        //Initial Where Option
        // 2 D array
        $obj_where = array(
            'Country_City_ID' => array(
                '$in' => is_string($objParam['s_commerce_id']) ? array($objParam['s_commerce_id']) : $objParam['s_commerce_id']
            ),
            'Unix_DateTime' => array(
                '$gte' => $objParam['n_start_at'],
                '$lte' => $objParam['n_stop_at'],
            )
        );
        
        //Check Status and set where option
        if (array_key_exists('n_status', $objParam))
            $obj_where['n_commerce_status'] = pow(2, $objParam['n_status']);
        
        //Get Level
        $arr_level = $this->cimongo->distinct('commerce', 's_user_account_level', $obj_where);  
        return $arr_level;
    }  
}
