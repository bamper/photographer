<?php

class View
{
    public $env = array();

    public function assign($name, $value)
    {
        $this->env[$name] = $value;
    }

    public function display($template)
    {
        extract($this->env);
        include $template;
    }
}