<?php
namespace AppBundle\Controller;

 class Unit
    {
        private $id;
        private $name;
        private $icon;
        private $description;

        public function __construct($id, $name){
            $this->id = $id;
            $this->name = $name;
        }

        public function getId()
        {
            return $this->id;
        }

        public function getName()
        {
            return $this->name;
        }

        public function getIcon()
        {
            return $this->icon;
        }

        public function getDescription()
        {
            return $this->description;
        }
    }