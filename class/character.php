<?php
/**
 * Classe définissant les personnages
 */
class character{
    var $health = 0;
    var $mana = 0; 
    
    /** 
     * Constructeur de la classe
     */
    function __construct() {
    }
    
    /**
     * Destructeur de la classe
     */
    function __destruct() {
    }
    /**
     * Méthode qui permet de discuter
     * @param type $charac
     * @return string 
     */
    function chat($charac = ''){
        return $charac;
    }
}

?>