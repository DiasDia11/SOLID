<?php

namespace src\dao;

use src\BD;
use src\componentes\Notificacao;
use src\interfaces\INotificacao;
use src\interfaces\ICadastro;

class LeadModel extends BD implements ICadastro, INotificacao{

    public function salvar() {
      
    }

    public function enviarNotificacao(Notificacao $notificacao) {
        
    }
}