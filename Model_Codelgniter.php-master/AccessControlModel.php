<?php

class AccessControlModel extends CoreModel {

    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->commerceDB = $this->load->database('', true);
    }

    public function getCommerceList(){



    }

    private function getAuthSql(){




    }

    public function getAutherizeList(){


    }

    public function getAutherizeStatus(){


    }

    public function getImportLog(){



    }

    private function generateACL(){


    }

    public function getPermissionList(){


    }

    public function savePermissionList(){


    }

    public function saveAutherizedCommerceList(){



    }


}
