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

    // Fetch the url paramters
    public function getUserURL() {

        if(isset($_SERVER['PATH_INFO'])) { // if the url param is set do below
            $url = rtrim($_SERVER['PATH_INFO']);

            $url = filter_var($url);

            $url = array_filter(preg_split("/[^a-zA-Z0-9]+/", $url));

            $swag = parse_url($_SERVER['REQUEST_URI']);

            parse_str($swag['query'], $cool);

            array_push($url, $cool);

            return $url; // return the url to whatever place that it is been called, in our case, it is called by the __contsruct above.
        }
    }

    public function __construct() {
        // If you want to output the value of the array use print_r($this->getUrl());
        $url = $this->getUserURL();

        // TODO ask if $_SERVER['REQUEST_METHOD'] == $_POST und dann darauf die Login-daten entnehmen
        
        /*
         * Since all our request are routed to index.php, we need to act as though this file is located in there
         * Which is why I have .. to move out from the public directory (where the index.php is located), and then we
         * move into /app/controllers
         */
        if(file_exists(APP_ROOT. '/controllers/'. ucwords($url[1]) . '.php')){
            // if the file exists, we set it as the current controller
            $this->currentController = ucwords($url[1]); // our default controller is Pages, which is defined above, anything founded would override it.
            /*
             * Unset the 0 index, The unset() function would delete index 0, but would leave the other indexes
             * You'll see the reason we ae using this below
             */
            // unset the 0 index

            unset($url[1]);
        }


        /*
         * Require the controller, if anything is not found, it would require the default pages, and instantiate it
         * if something is found, the founded file would have been set to the current controller above, we then require and instantiate it.
         */

        require_once APP_ROOT. '/controllers/'. $this->currentController . '.php';
        // instantiate controller class
        // if for example, the controller is Post, then it would be post = new Post
        $this->currentController = new $this->currentController;
        /*
         * Check for second parameter of the url, for example if we have pages/music/3,
         * then the second parameter would be music
         */

        if(isset($url[2])) {
            //check to see if methods exist in controller
            /*
             * method_exist takes two parameter, we are checking the currentcontroller first
             * and the method which is going to be the second part of the url
             */
            if(method_exists($this->currentController, $url[2])){
                // if the method is there, we set the current method
                // so, the method would have to exist in the $this->currentController class, for example Pages.
                $this->currentmethod = $url[2];
                // unset the 0 index
                unset($url[2]);
            }

        }

        /*
         * Let's take care of the other parameters, by unsetting index 0 and 0, it is easy to take care of the rest
         * if there is paramters left in the $url we add them with the array_values, if otherwise, we default to empty array
         */
        // Get Params
        $this->params = $url ? array_values($url) : [];

        // call a callback with array of params
        call_user_func_array([$this->currentController, $this->currentmethod], $this->params);
    }
}

