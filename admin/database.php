<?php
// Remplacer les XXXX par vos valeurs
class Database
{
    private static $dbHost = "localhost";
    private static $dbName = "XXXX";
    private static $dbUser = "XXXX";
    private static $dbUserPassword = "XXXX";
    
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