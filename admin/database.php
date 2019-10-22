<?php

class Database
{
    private static $dbHost = ***REMOVED***;
    private static $dbName = ***REMOVED***;
    private static $dbUser = ***REMOVED***;
    private static $dbUserPassword = ***REMOVED***;
    
    private static $connection = "null";

    public static function connect()
    {
        try
        {
           self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName , self::$dbUser, self::$dbUserPassword); 
        }
        catch (PDOExeception $e)
        {
                   die($e->getMessage());
         }
        return self::$connection;
    }
    
    public static function disconnect()
    {
        self::$connection = null;
        
    }
    
}

?>