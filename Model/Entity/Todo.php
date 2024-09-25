<?php 

namespace Model\Entity;

class Todo extends BaseEntity
{
    private string $liste;

    public function getListe(): string
    {
        return $this->liste;
    }

    public function setListe(string $liste){
        $this->liste = $liste;
        return $this;
    }
}  
