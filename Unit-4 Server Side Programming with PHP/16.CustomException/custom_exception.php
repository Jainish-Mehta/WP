<?php
class custom_exception extends Exception{
    public function err(){
        return "Error: ". $this->getMessage()." at line ".$this->getLine()." in file ".$this->getFile();
    }
}
    try{
        throw new custom_exception("This is a custom exception");
    }
    catch(custom_exception $e){
        echo $e->err();
    }
?>