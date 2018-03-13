<?php

namespace TemplateMethod;

/**
 * Implementa��o da classe base do "Template Method".
 *
 * Class ImpostosAbstract
 * @package TemplateMethod
 *
 * @author Gabriel Anhaia <gabriel@mestredev.com.br>
 */
abstract class ImpostosAbstract
{
    /**
     * Implementa��o do "Template Method".
     *
     * @param float $precoProduto
     * @return float
     */
    public function calculaImpostosProduto(float $precoProduto): float
    {
        $precoProduto = $this->calculaPrimeiroImpostoFixo($precoProduto);

        $precoProduto = $this->calculaSegundoImpostoFixo($precoProduto);

        $precoProduto = $this->calculaImpostoVariavel($precoProduto);

        return $precoProduto;
    }

    /**
     * @param float $precoProduto
     * @return float
     */
    abstract protected function calculaImpostoVariavel(float $precoProduto): float;

    /**
     * @param float $precoProduto
     * @return float
     */
    private function calculaPrimeiroImpostoFixo(float $precoProduto): float
    {
        return ($precoProduto * 1.3);
    }

    /**
     * @param float $precoProduto
     * @return float
     */
    private function calculaSegundoImpostoFixo(float $precoProduto): float
    {
        return ($precoProduto * 1.1);
    }

    /**
     * Implementa��o do "Hook Method"
     * @param float $precoProduto
     * @return float
     */
    protected function calculaImpostoAdicional(float $precoProduto): float
    {
        return $precoProduto - ($precoProduto * 0.1);
    }
}