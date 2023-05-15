<?php

namespace KenuraRGunarathna\Sroute;

# URI - Uniform Resource Identifier

class Route
{

    public array $urls;

    public string $requestMethod;
    public string $requestURI;
    public string $requestFile;

    public string $uri;
    public string $callback;

    public function __destruct()
    {
        # 404 page error
        if (!array_key_exists($this->requestURI, $this->urls)) {
            echo "404 : page not found";
            return true;
        }
    }

    public function get(string $uri, string $callback)
    {
        $this->uri = $uri;
        $this->callback = $callback;

        $this->requestMethod = $_SERVER['REQUEST_METHOD'];
        $this->requestURI = $_SERVER['REQUEST_URI'];
        $this->requestFile = "./views/" . $callback;

        $this->urls[$uri] = $callback;

        if ($this->requestMethod != "GET") {
            echo "Invalid method";
            return true;
        }

        return $this->viewFile();
    }
    public function post(string $uri, string  $callback)
    {
        $this->uri = $uri;
        $this->callback = $callback;

        $this->requestMethod = $_SERVER['REQUEST_METHOD'];
        $this->requestURI = $_SERVER['REQUEST_URI'];
        $this->requestFile = "./views/" . $callback;

        $this->urls[$uri] = $callback;

        if ($this->requestMethod != "POST") {
            echo "Invalid method";
            return true;
        }

        return $this->viewFile();
    }
    public function put(string $uri, string $callback)
    {
        $this->uri = $uri;
        $this->callback = $callback;

        $this->requestMethod = $_SERVER['REQUEST_METHOD'];
        $this->requestURI = $_SERVER['REQUEST_URI'];
        $this->requestFile = "./views/" . $callback;

        $this->urls[$uri] = $callback;

        if ($this->requestMethod != "PUT") {
            echo "Invalid method";
            return true;
        }

        return $this->viewFile();
    }
    public function patch(string $uri, string  $callback)
    {
        $this->uri = $uri;
        $this->callback = $callback;

        $this->requestMethod = $_SERVER['REQUEST_METHOD'];
        $this->requestURI = $_SERVER['REQUEST_URI'];
        $this->requestFile = "./views/" . $callback;

        $this->urls[$uri] = $callback;

        if ($this->requestMethod != "PATCH") {
            echo "Invalid method";
            return true;
        }

        return $this->viewFile();
    }
    public function delete(string $uri, string $callback)
    {
        $this->uri = $uri;
        $this->callback = $callback;

        $this->requestMethod = $_SERVER['REQUEST_METHOD'];
        $this->requestURI = $_SERVER['REQUEST_URI'];
        $this->requestFile = "./views/" . $callback;

        $this->urls[$uri] = $callback;

        if ($this->requestMethod != "DELETE") {
            echo "Invalid method";
            return true;
        }

        return $this->viewFile();
    }
    public function options(string $uri, string $callback)
    {
        $this->uri = $uri;
        $this->callback = $callback;

        $this->requestMethod = $_SERVER['REQUEST_METHOD'];
        $this->requestURI = $_SERVER['REQUEST_URI'];
        $this->requestFile = "./views/" . $callback;

        $this->urls[$uri] = $callback;

        if ($this->requestMethod != "OPTIONS") {
            echo "Invalid method";
            return true;
        }

        return $this->viewFile();
    }

    private function viewFile()
    {

        if (!file_exists($this->requestFile)) {
            echo "view file missing - " . $this->requestFile;
            return true;
        }

        if ($this->requestURI == $this->uri || $this->requestURI == "/" . $this->uri) {
            return require $this->requestFile;
        }
    }
}
