<?php


abstract class Session
{

    protected static function init(){
        session_start();
    }

    /**
     * @param $key
     * @param $value
     */
    static function set($key, $value){

        $_SESSION[$key] = $value;
    }

    /**
     * @param $key
     * @return bool|mixed
     */
    static function get($key){

        if(isset($_SESSION[$key]))
            return $_SESSION[$key];
        else
        return false;
    }

    /**
     * @param $key
     * @return bool
     */
    static function check($key){

        self::init();

        if(self::get($key) === false) {
            self::destroy();
        }
        return true;
    }


    static function destroy(){

        session_destroy();
        session_unset();
        header('Location:/user/singIn');
    }
}