<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace BLKTech\Storage\Driver;

/**
 * Description of FSRoot
 *
 */
class FileSystem extends \BLKTech\Storage\Driver
{
    private $rootDirectory;
    function __construct(\BLKTech\FileSystem\Directory $rootDirectory) 
    {
        $this->rootDirectory = $rootDirectory;
        \Logger::getInstance()->debug("FileSystemDriver UID:".$this->getUID());
    }

    private function getFileById($id)
    {
        $id = strtoupper($id);
        
        $newPath = $this->rootDirectory;
        
        $pathElements = array();
        
        foreach(array_merge(range('A', 'Z'), range(0, 9)) as $char)
            if(strpos($id, $char)!==FALSE) 
                    $newPath = $newPath->getChild ($char);                    
            
        $newPath = $newPath->getChild ($id);
        return new \BLKTech\FileSystem\File($newPath);
    }
    
    public function exists($id) 
    {        
        return self::getFileById($id)->exists();
    }
    
    public function spaceAvailable() 
    {
        return $this->rootDirectory->getFreeSpace();
    }

    public function delete($id) 
    {
        return self::getFileById($id)->delete();
    }

    public function get($id) 
    {   
        return self::getFileById($id)->getContent();
    }

    public function set($id, $data) 
    {
        $file = self::getFileById($id);                
        $file->getParent()->create();
        $file->setContent($data);    
    }

    public function getUID() 
    {
        return $this->rootDirectory->getUID();
    }

}
