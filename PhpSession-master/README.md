# Php Session

# Session

Global Variable using Session to render on HTML Form


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


使用者登入程序

(1) form, 顯示詢問使用者帳密的表單

(2) if, 檢查驗證輸入值的資料正確性

(3) $_SESSION,倘若使用者帳號是正確的話，於是將使用者帳號加入 session

(4) $form = new PattysBlog( ), 伺服器依照 session 中的使用者帳號開放對應的工作

(5) 使用者登出時，將 session 中的使用者帳號資料移除

https://pattyappier.blog/2019/03/10/id-in-cookies-session登入與使用者身份的識別證/#more-2336

如下程式碼將呈現出的登入邏輯為：validate_form( ) 驗證，並且在 process_form( ) 做處理，將使用者帳號加入 session。

            require ‘PattysBlog.php’

            session_start();

            if ($_SERVER[‘REQUEST_METHOD’] == ‘POST’) {

                  list($errors, $input) = validate_form( );

                  if ($errors) {

                      show_form($errors);

                   } else {

                      process_form($input);

                  }

            } else {

                 show_form( );

            }

            function process_form($input) { // 將使用者名稱加入 session 中

                 $_SESSION[‘username’] = $input[‘usename’];

                 print “Hallo, welcome to Pattys Blog! Dear User $_SESSION[‘usename’]";

            }

            function validate_form( ) {

                  $input = array( );

                  $errors = array( );

                  $users = array(‘patty’ => ‘p123’, ‘poupou’ => ‘kit456ty’, ‘eric’ => ‘*888*’)

                  $input[‘username’] = $_POST[‘username’]?? ;

                  if(! array_key_exists($input[‘username’], $users)) { // 使用者帳號輸入錯誤時

                        $errors[ ] = ‘plz enter a valid username and password again’;                                     

                    } else { // 使用者帳號輸入正確時，查驗其密碼是否正確的驗證邏輯

                         $saved_password = $users[$input[‘username’]];

                         $submitted_password = $_POST[‘password’] ?? ‘ ‘;

                         if ( $saved_password  != $submitted_password ){

                           $errors[ ] = ‘plz enter a valid username and password again’;                                 

                          }

                     }

                  return array($errors, $input);

            }

            function show_form($errors = array()) { // 無建立預設值，所以db建構子沒有參數傳入

                  $form = new PattysBlog( );

                  if ($errors ){

                      $errorHtml =  ‘<ul><li>’;

                      $errorHtml .=  implode(‘</li><li>’, $errors); //

                      $errorHtml .=  ‘</li></ul>’;

                  }  else {

                     $errorHtml = ‘ ‘;

                  }

            // 印出方式，建立表單元件

              print <<<_PattysLoginForm_

              <form method = “POST" action = “{$form->encode($_SERVER[‘PHP_SELF’])}">

                    $errorHtml

                    Username:{$form->input(‘text’, [‘name’ => ‘username’])} <br/>

                    Password:{$form->input(‘password’, [‘name’ => ‘password’])} <br/>

                    {$form->input(‘submit’, [‘balue’ => ‘Log In’])}

              </form>

              _PattysLoginForm_;

            }

# Secure Token for Session & cookie, 安全標誌

  https://pattyappier.blog/2019/02/19/cyber-attacks-探討攻擊/#more-2211
  
  即便藉由 HTTPs 建立伺服器和瀏覽器之間的對話，其 token 對話令牌仍然能洩露給攻擊者，而安全標誌存在於能夠指示瀏覽器別透過不安全通道傳送 cookies，故敏感傳遞如令牌的傳送都能受到加密的屏障保護。
