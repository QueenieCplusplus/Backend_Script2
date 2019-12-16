<?php

    // to start the seesions, then the global var called $_SESSION can be used.

    /*
        (array $options = [])
        [optional] <p>If provided, this is an associative array of options that will override the currently set session configuration directives. The keys should not include the session. prefix.
        In addition to the normal set of configuration directives, a read_and_close option may also be provided. If set to TRUE, this will result in the session being closed immediately after being read, thereby avoiding unnecessary locking if the session data won't be changed.</p>
    
        Initialize session data
    */
   
    

class FormUseSession {
    
    // load in the class by using require.
    
    protected $colors = array(
        'ff0000' => 'Red',
        '008000' => 'Green',
        '0000ff' => 'Blue'
   );

    private $input;
    public $errors;

    // Main Page's Logic
    // if submit form then validate & render(input), otherwise just show form(null)
    // if validate result is true then render(input), otherwise show error messaeg.
    
    function __construct(){

        session_start();

        if($_SERVER['REQUEST_METHOD' == 'POST']){

            list($errors, $inputColor)= $this->validate_form();

            if($errors){

                $this->show_emptyForm($errors);

            }else{

                $this->render_dataForm();

            }

        }else{
            $this->show_emptyForm();
        }

    }

    public function validate_form(){
        global $colors;
        $inputColor = array();
        $errors = array();

        // 但這三元寫法不能定義結果如果false的回傳型別
        // $inputColor['color'] = gettype($inputColor) == 'string' ?? $_POST['color'] ?? '';
        // array_key_exists(key, array)
        // the var name inside $GLOBALS[] is the key of the array.

        $inputColor['color'] = $_POST['color'] ?? ''; //php 7

        if( array_key_exists($input['color'], $this->colors)){

            $errors[] = 'no valid color can be render.';

        }

         return array($errors, $input);
    }

    public function show_emptyForm($errors = array()){
        global $colors;
        $form = new FormHelper(); // shall do FormHelper class
        include 'color-form.php'; // shall study functionality of include method.
    }


    public function render_dataForm($input){
        global $colors;
        $_SESSION['background_color']= $input['color'];
        print '<p>The color of page has been set up.</p>';
    }
}
?>

