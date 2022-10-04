<?php
    session_start();

    // Flash message helper
    // EXAMPLE -> flash('register_success', "you are now registered")
    // DISPLAY IN VIEW -> <?php echo flash('register_success)
    function flash($name = '', $message = '', $class = 'alert alert-success'){
            if(!empty($name) && !empty($message) && empty($_SESSION[$name])){
                $_SESSION[$name] = $message;
                $_SESSION[$name. '_class'] = $class;

            } elseif (empty($message) && !empty($_SESSION[$name])){
                echo '<div class="'.$_SESSION[$name. '_class'].'" id="msg-flash">'.$_SESSION[$name].'</div>';
                unset($_SESSION[$name]);
                unset($_SESSION[$name. '_class']);
            }
    }

    function isLoggedIn(){
       if(isset($_SESSION["user_id"])){
            return true;
         } else {
            return false;
         }
    }
