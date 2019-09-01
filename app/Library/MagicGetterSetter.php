<?php


namespace App\Library;

use App\Exceptions\PropertyDoesNotExistsException;

class MagicGetterSetter
{

    protected $key = 'key';

    protected $value = 'value';

    public function __get($property)
    {
        if(!property_exists($this, $property)){
            throw new PropertyDoesNotExistsException;
        }

        return $this->{$property};
    }

    public function __set($property, $value)
    {
        if(!property_exists($this, $property)){
            throw new PropertyDoesNotExistsException;
        }

        $this->{$property} = $value;
    }


}
