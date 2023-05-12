<?php

class DVD extends Product
{
    protected $size;
    
    //Constructor
    public function __construct($id, $sku, $name, $price, $size)
    {
        parent::__construct($id, $sku, $name, $price);
        $this->size = $size;
    }

    //Getters and Setters
    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function getAttributes()
    {
        return $this->getSize();
    }

    public function save()
    {
        // Logic to save DVD product to the database
        // Implement the saving mechanism according to your project requirements
    }

    public function delete()
    {
        // Logic to delete a product from the database
    }
}
