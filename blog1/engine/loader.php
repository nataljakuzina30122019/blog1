<?php
namespace TestProject\Engine;
use TestProject\Engine\Pattern\Singleton;

require_once_DIR_ . '/Pattern/Base.trait.php';
require_once_DIR_. '/Pattern/Singleton.trait.php';
class Loader
{
    use Singleton;
    public function init()
    {
        spl_autoload_register(arry(_CLASS_,'_loadClasses'));
    }
    private function _loadClasses($sClass)
    {
     $sClass = str_replace(array(_NAMESPASE_,'TestProject', '\\'),'/',$sClass);
     if (is_file(_DIR_ . '/'.$sClass . '.php')){
         require_once ROOT_PATH . $sClass . '.php';
     }
         
     }
     
        
    }




