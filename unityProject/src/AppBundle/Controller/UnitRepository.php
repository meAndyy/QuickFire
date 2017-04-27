<?php
namespace AppBundle\Controller;
class UnitRepository
    {
        private $units = [];

        public function __construct()
        {
            $s1 = new Unit(1, 'matt');
            $s2 = new Unit(2, 'joelle');
            $s3 = new Unit(3, 'jim');
            $this->units[] = $u1;
            $this->units[] = $u2;
            $this->units[] = $u3;
        }

        public function getAll()
        {
            return $this->units;
        }
    }