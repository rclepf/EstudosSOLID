<?php
class A{
    public function getNome()
    {
        return "Meu nome é A";
    }
}
class B extends A{
    public function getNome()
    {
        return 'Meu nome é B';
    }
}

//Class C viola o princípio de Liskov, 
//pois não mantém a fidelidade do método original
//alterando o princípio.
class C extends A{
    public function getNome()
    {
        return 30;
    }
}

function imprimeNome(A $obj){
    return $obj->getNome();
}

$objeto1 = new A();
$objeto2 = new B();
$objeto3 = new C();
echo imprimeNome($objeto1)."<br/>";
echo imprimeNome($objeto2)."<br/>";
echo imprimeNome($objeto3)."<br/>";