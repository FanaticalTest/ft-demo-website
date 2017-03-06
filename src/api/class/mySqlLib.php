<?php
class mySqlLib
{
    public function oMysqli()
    {
        return new mysqli(getenv('SQL_SERVER'),getenv('SQL_USER'),getenv('SQL_PASSWORD'),getenv('SQL_DB'),getenv('SQL_PORT'));
    }

    public function escape($val)
    {
        try 
        {
            $escape = $this->oMysqli();
            $val = $escape->real_escape_string($val);
            $escape->close();
            return $val;
        }
        catch (Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function sQuery($sql)
    {
        try
        {
            $mysqli = $this->oMysqli();

            //Check connection
            if ($mysqli->connect_errno)
            {
                echo "Failed to connect to MySQL: " . $mysqli->connect_errno;
                exit();
            }

            $result = $mysqli->query($sql);

            $mysqli->close();

            return $result;
        }
        catch (Exception $e)
        {
            return $e->getMessage();
        }
    }
}
?>