<?php

include 'User.php';


class UserDAO
{

    public array $users = [];
    public int $AId = 1;

    public function cadastrar()
    {
        echo "Digite o nome do Usuario: ";
        $nome = (string) readline();
        echo "Digite o email do Usuario: ";
        $email = (string) readline();
        echo "Digite uma senha: ";
        $senha = (string) readline();
        $u = new User($this->AId, $nome, $email, $senha);
        if (count($this->users) == 0) {
            array_push($this->users, $u);
            $this->AId++;
            echo "Usuario Cadastrado com sucesso! \n";
        } else {
                if (!$this->verificaEmail($email)) {
                    echo "Email ja cadastrado \n";
                } else {
                    array_push($this->users, $u);
                    $this->AId++;
                    echo "Usuario Cadastrado com sucesso\n";
                } 
            }
        }
    
    
    private function verificaEmail($email): bool {
     for ($i = 0; $i < count($this->users); $i++) {
                if ($this->users[$i]->getEmail() == $email) {
                  return false;  
                } else {
                    return true;
                } 
    } }

    public function mostrar()
    {
        foreach ($this->users as $u) {
            echo "-----------------------\n";
            echo "ID: " . $u->getId() . PHP_EOL;
            echo "Nome: " . $u->getNome() . PHP_EOL;
            echo "Email: " . $u->getEmail() . PHP_EOL;
            echo "-----------------------\n";
        }
    }

    public function alterar()
    {
        echo "Digite o id do usuario que tu quer alterar: ";
        $id = (int) readline();
        foreach ($this->users as $user) {
            if ($user->getId() == $id) {
                echo "Qual o novo nome do usuario: ";
                $nome = (string) readline();
                echo "Qual o novo email do usuario: ";
                $email = (string) readline();
                echo "Qual a nova senha do usuario: ";
                $senha = (string) readline();

                $user->setNome($nome);
                $user->setEmail($email);
                $user->setSenha($senha);

                echo "\nUsurio alterado com sucesso! \n";
            }
        }
    }

    public function deletar()
    {
        echo "Digite o id do usuario que tu quer deletar: ";
        $id = (int) readline();
        foreach ($this->users as $user) {
            if ($user->getId() == $id) {
                unset($this->users[$id - 1]);
                echo "Usuario excluido com sucesso! \n";
            }
        }
    }

    public function buscarPorEmail()
    {
        echo "Digite o email do usuario que deseja achar: ";
        $email = (string) readline();
        foreach ($this->users as $user) {
            if ($user->getEmail() == $email) {
                echo "-----------------------\n";
                echo "ID: " . $user->getId() . PHP_EOL;
                echo "Nome: " . $user->getNome() . PHP_EOL;
                echo "Email: " . $user->getEmail() . PHP_EOL;
                echo "-----------------------\n";
            }
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

$b = new UserDAO();
$b->menu();
