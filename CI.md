# Singleton_Design_Pattern, 單一實例的設計模式

保證此類別只產生唯一物件，單一實例此類別提供存取該物件的方法（唯一入口）。

# Code

    public class Singleton {
    
        
        private static Singleton instance  = new Singleton();

        
        private SingletonGreed(){}

       
        public static SingletonGreed getInstance(){
            return instance;
        }
        
    }
    
    // 一開始就建立物件，這樣只要一直回傳這個物件就是簡單的singleton
    // private constructor，這樣其他物件就沒辦法直接用new來取得新的實體
    // 因為constructor已經private，所以需要另外提供方法讓其他程式調用這個類別
    
# SingletonModel

    class SingletonModel {
    

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
         * __get 
         *
         * Allows models to access CI's loaded classes using the same
         * syntax as controllers.
         *
         * @param	string	$key
         * saying 'Undefined Property: system/core/Model.php', it's
         * most likely a typo in your model code.
         */

        public function __get($key)
        {
            return get_instance()->$key;
        }

    }
    
# SingletonController

    class SingletonController {

        /*
         * Reference to the CI singleton
         * @var	object
         */
         
        private static $instance;

        /**
         * Class constructor
         * @return	void
         */
         
        public function __construct()
        {
            self::$instance =& $this;

            // Assign all the class objects that were instantiated by the
            // bootstrap file (CodeIgniter.php) to local class variables
            // so that CI can run as one big super object.
            
            foreach (is_loaded() as $var => $class)
            {
                $this->$var =& load_class($class);
            }

            $this->load =& load_class('Loader', 'core');
            $this->load->initialize();
            
            log_message('info', 'Controller Class Initialized');
        }

        /**
         * Get the CI singleton
         * @static
         * @return	object
         */
         
        public static function &get_instance()
        {
            return self::$instance;
        }

    }
