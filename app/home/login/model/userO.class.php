<?php

class UserO
{
    private $id = -1;
    private $no_user = "";
    private $ds_email = "";
    private $senha_user = "";

    public function __construct($no_user = "", $ds_email = "", $senha_user = "")
    {
        $this->no_user = $no_user;
        $this->ds_email = $ds_email;
        $this->senha_user = $senha_user;
    }

    public function set_all_parametros()
    {
        foreach ($_REQUEST as $chave => $valor) {
            $metodo = "set_" . $chave;

            if ($chave !== "acao" && method_exists($this, $metodo)) {
                $this->$metodo($valor);
            }
        }
    }

    public function get_id(): int
    {
        return $this->id;
    }

    public function set_id(int $id): void
    {
        $this->id = intval($id);
    }

    public function get_no_user(): String
    {
        return $this->no_user;
    }

    public function set_no_user(String $no_user): void
    {
        $this->no_user = $no_user;
    }

    public function get_ds_email(): String
    {
        return $this->ds_email;
    }

    public function set_ds_email(String $ds_email): void
    {
        $this->ds_email = $ds_email;
    }

    public function get_senha_user(): String
    {
        return $this->senha_user;
    }

    public function set_senha_user(String $senha_user): void
    {
        $this->senha_user = $senha_user;
    }
}