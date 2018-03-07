<?php

namespace Observer;

/**
 * Class ControleRequisicoesCompraObserver
 * @package Observer
 */
class ControleRequisicoesCompraObserver implements Observer
{
    /**
     * @param string $codigo
     */
    public function atualizado(string $codigo)
    {
        $this->adicionaListaRequisicaoCompra($codigo);
    }

    /**
     * Simula a adi��o do produto a lista de requisi��es de compra.
     * @param string $codigoProduto
     */
    public function adicionaListaRequisicaoCompra(string $codigoProduto)
    {
        echo 'Produto adicionado a lista de requisi��es de compra';
    }
}