<?php

use Symfony\Component\HttpFoundation\Request;

class ActionsAdminProfil extends ActionsAdminBase
{
    
    private static $instance = false;
    
    public function __construct() {}
    
    /**
     * 
     * @return \ActionsAdminProfil
     */
    public static function getInstance()
    {
        if(self::$instance === false) self::$instance = new ActionsAdminProfil();
        
        return self::$instance;
    }
    
    /**
     * 
     * controller for all actions on administrator
     * 
     * @param \Symfony\Component\HttpFoundation\Request $request
     */
    public function action(Request $request)
    {
        switch($request->get("action"))
        {
            case "modify":
                ProfilAdmin::getInstance($request->request->get("profil"))->modifiy(
                    $request->request->get("droits_g")
                );
                redirige("droits.php");
                break;
                
        }
    }
}
