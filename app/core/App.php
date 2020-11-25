<?php

class App
{
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        // Analisa a URL em uma string legível
        $url = $this->parseUrl();

        //Get controller (Obter Controlador)
        if (file_exists('../app/controllers/' . $url[1] . '.php')) {
            $this->controller = $url[1];
            unset($url[1]);
        }
        //this->controller ='contact';

        //Se o controlador (url [0]) não existir, ele usará 'home' automaticamente
        require_once '../app/controllers/' . $this->controller . '.php';

        //Criar uma nova instância do Controlador
        $this->controller = new $this->controller();

        //Método Get
        if (isset($url[2])) {
            if (method_exists($this->controller, $url[2])) {
                $this->method = $url[2];
                unset($url[2]);
            }
        }

        // GET parameters
        $this->params = $url ? array_values($url) : [];

        // Chama o controlador específico, método e passa os parâmetros para eles
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    // Parse url  into useable array
    // Analisa o url em uma matriz utilizável
    private function parseUrl()
    {
        if (isset($_SERVER['REQUEST_URI'])) {
            return $url = explode(
                '/',
                filter_var(
                    rtrim($_SERVER['REQUEST_URI'], '/'),
                    FILTER_SANITIZE_URL
                )
            );
        }
    }
}

?>