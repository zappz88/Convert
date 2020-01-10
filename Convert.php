<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Convert
 *
 * @author Andrew
 */
class Convert {
    public static function Object_To_Array($val){
        if(gettype($val) === "object")
        {
            return (array)$val;
        }
        else
        {
            $type = gettype($val);
            throw new Exception("Argument {$val} of type {$type} is not of valid type");
        }
    }
    
    public static function Array_To_Object($val)
    {
        if(gettype($val) === "array")
        {
            return (object)$val;
        }
        else
        {
            $type = gettype($val);
            throw new Exception("Argument {$val} of type {$type} is not of valid type");
        }
    }
    
    public static function ToInt($val)
    {
        if(is_numeric($val) && gettype($val) === "string")
        {
            return (integer)$val;
        }
        else
        {
            $type = gettype($val);
            throw new Exception("Argument {$val} of type {$type} is not of valid type");
        }
    }
    
    public static function ToString($val)
    {
        if(gettype($val) === "integer" || gettype($val) === "string" || gettype($val) === "boolean" || gettype($val) === "float" || gettype($val) === "double")
        {
            return (string)$val;
        }
        else
        {
            $type = gettype($val);
            throw new Exception("Argument {$val} of type {$type} is not of valid type");
        }
    }
    
    public static function ToBoolean($val)
    {
        if(gettype($val) === "string" || gettype($val) === "boolean")
        {
            if($val == true || $val == false)
            {
                return (bool)$val;
            }
        }
        else
        {
            $type = gettype($val);
            throw new Exception("Argument {$val} of type {$type} is not of valid type");
        }
    }
}
