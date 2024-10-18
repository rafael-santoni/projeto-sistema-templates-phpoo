<?php

namespace App\Framework\Classes;

use Exception;
use ReflectionClass;

class Engine
{
  private ?string $layout;
  private string $content;
  private array $data;
  private array $dependencies;
  private array $section;
  private string $actualSection;

  public function __call(string $name, array $params)
  {
    if(!method_exists($this->dependencies['macros'], $name)) {
      throw new Exception("Macro {$name} does not exist");
    }

    if(empty($params)) {
      throw new Exception("Method {$name} needs at least one parameter");
    }

    return $this->dependencies['macros']->$name($params[0]);
  }

  private function load() {
    return !empty($this->content) ? $this->content : '';
  }

  private function extends(string $layout, array $data = []) {
    $this->layout = $layout;
    $this->data = $data;
  }

  private function section(string $name)
  {
    echo $this->section[$name] ?? null;
  }

  private function start(string $name)
  {
    ob_start();
    $this->actualSection = $name;
  }

  private function stop()
  {
    $this->section[$this->actualSection] = ob_get_contents();
    ob_end_clean();
  }

  private function teste()
  {
    return 'teste';
  }
  
  public function dependencies(array $dependencies)
  {
    foreach($dependencies as $dependency) {
      $className = strtolower((new ReflectionClass($dependency))->getShortName());
      $this->dependencies[$className] = $dependency;
    }
  }

  public function render(string $view, array $data)
  {
    $view = dirname(__FILE__, 2) . "/Resources/Views/{$view}.php";

    if(!file_exists($view)) {
      throw new Exception("View {$view} not found");
      
    }

    ob_start();

    extract($data);

    require $view;

    $content = ob_get_contents();

    ob_end_clean();

    if(!empty($this->layout)) {
      $this->content = $content;

      $data = array_merge($this->data, $data);
      
      $layout = $this->layout;
      $this->layout = null;

      return $this->render($layout, $data);
    }

    return $content;
  }
}
