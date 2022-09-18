<?php
/*
 * 1) Criar uma classe chamada Pessoa com o método "nascer"
 * 2) Carregar o autoload do composer
 * 3) Criar namespaces
 * 4) Usar o "use" para carregar a classe pelo namespace
 * 5) Dar o require no autoload
 * 6) Instanciar a classe e chamar o método nascer
 */

require_once "vendor/autoload.php";

use App\Pessoa;
use App\Models\DB;

$pessoa = new Pessoa();

echo $pessoa->nascer() . "<br>";

$db = new DB();

echo $db->mysql();
