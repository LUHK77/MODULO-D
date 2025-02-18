<?php

include 'User.php';

class UserPDO
{

    public array $users = [];
    public int $AId = 1;

    public function db(){
        return $db = new PDO('sqlite:database.sqlite');
    }

    public function cadastrar()
    {
        echo "Digite o nome do Usuario: ";
        $nome = (string) readline();
        echo "Digite o email do Usuario: ";
        $email = (string) readline();
        echo "Digite uma senha: ";
        $senha = (string) readline();

        $q = $this->db()->prepare('insert into usuario (nome, email, senha) 
values (:nome, :email, :senha)');
            if (!$this->existeEmail($email)) {
                echo "Email ja cadastrado \n";
            } else {
                $q->execute(
                    [
                    'nome' => $nome,
                    'email' => $email,
                    'senha' => $senha,
                    ]
                );
                $this->AId++;
                echo "Usuario Cadastrado com sucesso\n";
            }
        }
    


    private function existeEmail($email): bool
    {
        $query = $this->db()->query("SELECT email from usuario");
        $usuarios = $query->fetchAll();
        foreach( $usuarios as $u ) {
            if ($u['email'] == $email) {
                return false;
            } 
        }
        return true;

    }

    public function mostrar()
    {
        $query = $this->db()->query("SELECT nome, email from usuario");
        $usuarios = $query->fetchAll();
        foreach ($usuarios as $u) {
            echo "-----------------------\n";
            echo "Nome: " . $u['nome'] . PHP_EOL;
            echo "Email: " . $u['email'] . PHP_EOL;
            echo "-----------------------\n";
        }
    }

    public function alterar()
    {
        echo "Digite o email do usuario que voce quer alterar: ";
        $email2 = (string) readline();
        if($this->existeEmail($email2)){
            echo "Este email, não existe\n";
        } else {
            echo "Qual o novo nome do usuario: ";
            $nome = (string) readline();
            echo "Qual o novo email do usuario: ";
            $email = (string) readline();
            echo "Qual a nova senha do usuario: ";
            $senha = (string) readline();

        $query = $this->db()->query("UPDATE usuario set nome = :nome,email = :email,senha = :senha where email = :email2");
        $query->execute(['email2' => $email2, 'nome' => $nome, 'email' => $email,'senha' => $senha]);
                echo "\nUsurio alterado com sucesso! \n";
            }
        }
        

    public function deletar()
    {
        echo "Digite o email do usuario que deseja deletar: ";
        $email = (string) readline();
        if($this->existeEmail($email)){
              echo "Este email, não existe\n";
        } else{
            $query = $this->db()->query("DELETE FROM usuario WHERE email = :email");
            $query->execute(['email'=> $email]);
            echo "Usuario deletado com sucesso!\n";
    }
    }

    public function buscarPorEmail()
    {
        echo "Digite o email do usuario que deseja achar: ";
        $email = (string) readline();
        if($this->existeEmail($email)){
            echo "Este email não existe\n";
        } else {
        $query = $this->db()->query("SELECT nome, email from usuario WHERE email = :email");
        $query->execute(["email"=> $email]);
        $user = $query->fetch();
                echo "-----------------------\n";
                echo "Nome: " . $user["nome"] . PHP_EOL;
                echo "Email: " . $user["email"] . PHP_EOL;
                echo "-----------------------\n";
            }
        }

    public function menu()
    {
        do {
            echo "Menu de Usuarios: \n";
            echo "-----------------------\n";
            echo "1-Cadastrar um usuario\n";
            echo "2-alterar um usuario\n";
            echo "3-Deletar um usuario\n";
            echo "4-Pesquisar pelo email algum usurio\n";
            echo "5-Mostrar todos os usuarios\n";
            echo "6-Sair\n";
            echo "-----------------------\n";
            echo "digite o numero da opção desejada: ";
            $escolha = (int) readline();

            switch ($escolha) {
                case 1:
                    $this->cadastrar();
                    break;

                case 2:
                    $this->alterar();
                    break;

                case 3:
                    $this->deletar();
                    break;

                case 4:
                    $this->buscarPorEmail();
                    break;

                case 5:
                    $this->mostrar();
                    break;
            }
        } while ($escolha != 6);
        echo "\nAdeus";
    }
}
