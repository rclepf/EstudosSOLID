<?php

//Não seguindo padrão 
/* class Usuario{
    public function setNome() {}
    public function getNome() {}
    public function add() {}
    public function update() {}
    public function delete() {}
} */

//Seguindo Padrão SOLID
class Usuario
{
    public function setNome() {}
    public function getNome() {}
}

class UsuarioDb{
    public function add() {}
    public function update() {}
    public function delete() {}
}