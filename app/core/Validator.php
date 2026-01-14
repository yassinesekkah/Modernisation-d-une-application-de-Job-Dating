<?php 

namespace App\Core;

class Validator
{
    private array $errors = [];

    public function required(string $field, $value): self
    {
        if(empty(trim($value))){
            $this -> errors[$field][] = "Ce champ est obligatoire";
        }

        return $this;
    }

    public function email(string $field, $value): self
    {
        if(!filter_var($value, FILTER_VALIDATE_EMAIL)){
            $this -> errors[$field][] = "Email invalide";
        }

        return $this;
    }

    public function min(string $field, $value, int $length): self
    {   
        if(strlen($value) < $length){
            $this -> errors[$field][] = "Minimum {$length} caractères";
        }

        return $this;
    }

    public function fails(): bool
    {
        return !empty($this -> errors);
    }

    public function errors(): array
    {
        return $this -> errors;
    }
}