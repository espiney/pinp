<?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * PinpView.php View class
 *
 *  Pinp is a small php framework
 *
 * @package     pinp
 * @author      Damien Hodgkin <dracul01@gmail.com>
 * @copyright   Copyright (c) 2011, FourElements Development
 * @license     BSD License http://www.opensource.org/licenses/bsd-license.php
 * @link        http://pinp.us
 * @version     0.0.1
 * @filesource
 */

class Pinp_View {
    public function __construct() {}

    public function display( $template ) {
        echo $this->render('layout', $template);
    }

    public static function partial( $template ) {
        echo self::render('partial', $template);
    }

    public static function yield() {
        // TODO: add better handling of views
        echo self::render('view', 'index.html');
    }

    public static function render( $type, $template ) {
        //$file = dirname(__FILE__) . '/' . str_replace('_', DIRECTORY_SEPARATOR, substr($class,4)) . '.php';
        $file = "../app/" . $type . "s/" . $template . ".php";
        if ( file_exists($file) ) {
            ob_start();
            require $file;
            return ob_get_clean();
        }
    }
}

/* End of file PinpView.php */
/* Location: ./Pinp/PinpView.php */
