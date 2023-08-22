<?php

interface UseMySqlServer{
    public function startMySql():void;
    
    
    public function stopMySql():void;
    
    
    public function runMySqlQuery():void;
    
}