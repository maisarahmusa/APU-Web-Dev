<?php

class Account
{
    public function __construct(
        private string $_userName,
        private string $_password,
        private string $_email
    ) {
    }

    /* magic functions */
    // same concept as get set function
    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    /* format object to string e.g., user|pwd|email */
    //to visualize and check
    public function __toString()
    {
        //split into array: 0 | 1 | 2, read from txt file
        return "{$this->_userName}|{$this->_password}|{$this->_email}";
    }

}