<?php

namespace App;

class EmailService {
    private $de;
    private $para;
    private $assunto;
    private $conteudo;

    public function __construct(string $de = 'contato@site.com',string $para = '',string $assunto = '',string $conteudo = '',){

        $this->de = $de;
        $this->para = $para;
        $this->assunto = $assunto;
        $this->conteu = $conteudo;

    }

    public static function dispararEmail(){
        return "--- envia e-mail ---";
    }
}