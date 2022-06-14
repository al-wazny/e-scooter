<?php
/*
 #
 # Core Class for Creating URL and Loading Core Controllers
 # URL Format - /controller/method/param
 */

class Core {
    protected $currentController = 'Pages';
    protected $currentmethod = 'index';
    protected $params = [];

    public function __construct() {
        $url = $this->getUserURL();

        // TODO ask if $_SERVER['REQUEST_METHOD'] == $_POST und dann darauf die Login-daten entnehmen
        $pathIndex = count($url);
        
        if(file_exists(APP_ROOT. '/controllers/'. ucwords($url[($pathIndex-2)]) . '.php')){
            // if the file exists, we set it as the current controller
            $this->currentController = ucwords($url[$pathIndex-2]); // our default controller is Pages, which is defined above, anything founded would override it.
        }

        require_once APP_ROOT. '/controllers/'. $this->currentController . '.php';

        $this->currentController = new $this->currentController;

        if(method_exists($this->currentController, $url[$pathIndex-1])){
            $this->currentmethod = $url[$pathIndex-1];
        }

        // Get Params
        $this->params = $_REQUEST ? [$_REQUEST] : [];

        // call a callback with array of params
        call_user_func_array([$this->currentController, $this->currentmethod], $this->params);
    }

    private function getUserURL() {
        if(isset($_SERVER['PHP_SELF'])) { 
        
            $url = rtrim($_SERVER['REQUEST_URI']);

            $url = filter_var($url);

            $url = explode("?", $url);
            $path = explode("/", $url[0]);

            return $path; 
        }
    }
}

