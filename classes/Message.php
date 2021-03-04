<?php 

class Message {
     public function displayStatusMessage($objects) {
          foreach($objects as $object) {
               echo $object->getName().":".$object->getHitPoint()."/".$object::MAX_HITPOINT."\n";
          }
          echo "\n";
     }
}


?>