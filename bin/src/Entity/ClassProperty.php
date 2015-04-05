<?php

namespace Entity;

class ClassProperty {
    public $name        = "";
    public $modifier    = 0;
    public $type        = "";
    public $defauls     = "";
    public $doc         = "";

    public function isPublic() {
        return (bool) ($this->modifier & ClassData::MODIFIER_PUBLIC);
    }

    public function isProtected() {
        return (bool) ($this->modifier & ClassData::MODIFIER_PROTECTED);
    }

    public function isPrivate() {
        return (bool) ($this->modifier & ClassData::MODIFIER_PRIVATE);
    }

    public function isStatic() {
        return (bool) ($this->modifier & ClassData::MODIFIER_STATIC);
    }

    public function setModifier($modifier){
        $this->modifier = $modifier;
    }
    
    public function toArray(){
        return [
            'type' => $this->type,
            'docComment' => $this->doc,
            'array_type' => 0,
            'inheritdoc' => 0
        ];
    }
}
