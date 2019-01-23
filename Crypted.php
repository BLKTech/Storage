<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace BLKTech\Storage;
use BLKTech\Cryptography\Hash;
use BLKTech\Cryptography\Crypt;

/**
 * Description of Hashed
 *
 */
class Crypted
{
//    private $driver;
//    private $hash;
//    
//    public function __construct(Driver $driver,Hash $hash) 
//    {
//        $this->driver = $driver;
//        $this->hash = $hash;
//    }
//
//    private function checkHash($hashValue)
//    {
//        if(!$this->hash->checkHash($hashValue))
//            throw new InvalidHashValueException($hashValue);
//    }
//    
//    public function delete($hashValue) 
//    {
//        $this->checkHash($hashValue);
//        return $this->driver->exists($hashValue);
//    }
//
//    public function exists($hashValue) 
//    {
//        $this->checkHash($hashValue);
//        return $this->driver->exists($hashValue);
//    }
//
//    public function get($hashValue) 
//    {
//        $this->checkHash($hashValue);
//        $data = $this->driver->get($hashValue);
//        
//        if(!$this->hash->check($hashValue, $data))
//        {
//            $this->driver->delete($hashValue);
//            throw new CorruptedFileException($hashValue);
//        }
//        
//        return $data;
//    }
//
//    public function set($data) 
//    {
//        $hashValue = $this->hash->calc($data);
//        $this->driver->set($hashValue, $data);
//        return $hashValue;
//    }

}
