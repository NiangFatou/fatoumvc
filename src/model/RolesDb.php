<?php
namespace src\model;
use libs\system\Model;

    class RolesDb extends Model
    {
        public function findAll()
        {
            return $this->entityManager
                        ->createQuery("SELECT r FROM Roles r")
                        ->getResult();
            
            //array("ROLES_COMPTA","ROLE_FINANCE");
            //echo  2;
        }
    }
?>