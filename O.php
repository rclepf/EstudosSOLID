<?php
class ContratoClt
{
    public function calcularSalario()
    {
    }
}

class Estagio
{
    public function bolsaAuxilio()
    {
    }
}

class FolhaDePagamento
{
    public function calcular($funcionario)
    {
        $salario = 0;
        if ($funcionario instanceof ContratoClt) {
            $salario = $funcionario->calcularSalario();
        } elseif ($funcionario instanceof Estagio) {
            $salario = $funcionario->bolsaAuxilio();
        }
        return $salario;

    }
}