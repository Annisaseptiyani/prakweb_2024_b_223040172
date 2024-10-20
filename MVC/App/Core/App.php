<?

class App{
protected $controller = 'Home';
protected $method = 'index';
protected $params = [];
    public function __construct()
    {
        $url = $this->perseURL();
        //Controller
    if(file_exists('../app/controler/'.$url[0].'.php')){
        $this ->controller = $url[0];
        unset($url[0]);
    }
    require_once '../App/Controller/'.$this->controller.'.php;
     $this->controller = new $this->controller;

    //Method
if(isset($url[1])) {
    if(method_exists($this->controller,$url[1]));
    $this->method = $url[1];
    unset($url[1]);
}
    }
    //param 
    if(!empty($url)){
        $this->params = array_values($url);
       var_dump($url); 
    }
}


    public function perseURL(){
        if(isset($_GET['url'])){
           $url = rtrim($_GET['url'],'/');
           $url = filter_var($url,FILTER_SANITIZE_URL);
           $url = explode('/',$url);
           return $url;
        }
    }
