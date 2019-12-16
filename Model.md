# model
create a model, which is as same as row of Table in DB, so the Filed maps itself to Column in Table.

https://pattyappier.blog/2019/01/23/核心資料模型-core-data-model/#more-1778

# Code

application/models/User_model.php

    class Blog_model extends CI_Model {

            public $title;
            public $content;
            public $date;

            public function get_last_ten_entries()
            {
                    $query = $this->db->get('entries', 10);
                    return $query->result();
            }

            public function insert_entry()
            {
                    $this->title    = $_POST['title']; // please read the below note
                    $this->content  = $_POST['content'];
                    $this->date     = time();

                    $this->db->insert('entries', $this);
            }

            public function update_entry()
            {
                    $this->title    = $_POST['title'];
                    $this->content  = $_POST['content'];
                    $this->date     = time();

                    $this->db->update('entries', $this, array('id' => $_POST['id']));
            }

    }
    
# Auto-Load Model

This is done by opening the application/config/autoload.php file and adding the model to the autoload array.

# DB connection for DB

This is not by default, shall do connection manually.

connect with a DB=>
https://codeigniter.com/user_guide/database/connecting.html

        // controller || model class
        $this->load->database();
        
        // confif file
        $config['hostname'] = 'localhost';
        $config['username'] = 'myusername';
        $config['password'] = 'mypassword';
        $config['database'] = 'mydatabase';
        $config['dbdriver'] = 'mysqli';
        $config['dbprefix'] = '';
        $config['pconnect'] = FALSE;
        $config['db_debug'] = TRUE;
        $config['cache_on'] = FALSE;
        $config['cachedir'] = '';
        $config['char_set'] = 'utf8';
        $config['dbcollat'] = 'utf8_general_ci';
        
        // controller || model class
        $this->load->database($config);
 
* In Case of PDO:

 For the PDO driver, you should use the $config[‘dsn’] setting instead of ‘hostname’ and ‘database’:

        // confif file
        $config[‘dsn’] = ‘mysql:host=localhost;dbname=mydatabase’;
        
         // controller || model class
        $dsn = 'dbdriver://username:password@hostname/database';
        $this->load->database($dsn);
        
         // controller || model class
        $dsn = 'dbdriver://username:password@hostname/database?char_set=utf8&dbcollat=utf8_general_ci&cache_on=true&cachedir=/path/to/cache';
        $this->load->database($dsn);
        
connect with Multi-DBs:

        $this->load->database('group_name');
        
        //...
        
        $DB1 = $this->load->database('group_one', TRUE);
        $DB2 = $this->load->database('group_two', TRUE);
        
* Reconnect, to Keep-Alive:

        $this->db->reconnect();
        
Close Connection:

        $this->db->close();
        
# DB connection for Model
        
* You can tell the model loading method to auto-connect by passing TRUE (boolean) via the third parameter, and connectivity settings, as defined in your database config file will be used:

        $this->load->model('model_name', '', TRUE);
        
# DB connection for DB & Model
    
* You can manually pass database connectivity settings via the third parameter:

        // confif file
        $config['hostname'] = 'localhost';
        $config['username'] = 'myusername';
        $config['password'] = 'mypassword';
        $config['database'] = 'mydatabase';
        $config['dbdriver'] = 'mysqli';
        $config['dbprefix'] = '';
        $config['pconnect'] = FALSE;
        $config['db_debug'] = TRUE;

        // controller || model class
        $this->load->model('model_name', '', $config);
    
# Interact with DB

https://github.com/redpint819/DB/blob/master/README.md
