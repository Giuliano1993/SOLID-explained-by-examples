<?php 

// this interface does not comply the ISP:
// if a create a server instance for a server that does not use my sql
// every mysql related function would we pointless
// moreover, every change to the mysql logic would involve also non-mysql servers
interface Server{

    public function start():void;
    

    public function stop():void;
    

    public function delete():void;
    

    public function startMySql():void;
    
    
    public function stopMySql():void;
    
    
    public function runMySqlQuery():void;
    
    
}