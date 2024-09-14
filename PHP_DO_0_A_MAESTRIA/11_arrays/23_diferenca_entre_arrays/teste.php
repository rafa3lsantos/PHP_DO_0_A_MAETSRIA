<?php
// caixa.php

// Inicializar dados em memória
$users = [
    'admin' => 'password', // Usuário padrão
];
$total_sales = 0;

// Função de login
function login(&$users, &$current_user) {
    echo "Informe o login: ";
    $login = readline();
    echo "Informe a senha: ";
    $password = readline();

    if (isset($users[$login]) && $users[$login] === $password) {
        $current_user = $login;
        echo "Usuário $login logado com sucesso!\n";
        return true;
    } else {
        echo "Login ou senha incorretos.\n";
        return false;
    }
}

// Função para registrar um novo usuário
function register_user(&$users) {
    echo "Informe o login do novo usuário: ";
    $login = readline();
    echo "Informe a senha do novo usuário: ";
    $password = readline();

    if (isset($users[$login])) {
        echo "Usuário já existe.\n";
        return;
    }

    $users[$login] = $password;
    echo "Usuário registrado com sucesso!\n";
}

// Função para realizar uma venda
function make_sale(&$total_sales) {
    echo "Informe o nome do item: ";
    $item = readline();
    echo "Informe o valor da venda: ";
    $value = readline();
    
    $total_sales += (float)$value;
    echo "Venda registrada com sucesso!\n";
}

// Função para exibir o menu de login e registro
function show_initial_menu(&$users, &$current_user) {
    while (true) {
        system('clear');
        echo "Bem-vindo ao sistema de gerenciamento de caixa\n";
        echo "1. Login\n";
        echo "2. Cadastrar novo usuário\n";
        echo "3. Sair\n";
        
        echo "Escolha uma opção: ";
        $option = readline();
        
        switch ($option) {
            case 1:
                if (login($users, $current_user)) {
                    return; // Retorna para o menu principal
                }
                break;
            case 2:
                register_user($users);
                break;
            case 3:
                exit();
            default:
                echo "Opção inválida.\n";
                break;
        }
        sleep(2);
    }
}

// Função para exibir o menu principal
function show_main_menu(&$total_sales, &$users, &$current_user) {
    while (true) {
        system('clear');
        echo "Bem-vindo ao sistema de gerenciamento de caixa\n";
        echo "Usuário: $current_user\n";
        echo "Valor total obtido nas vendas: R$ " . number_format($total_sales, 2, ',', '.') . "\n";
        echo "1. Vender\n";
        echo "2. Deslogar\n";
        echo "3. Sair\n";
        
        echo "Escolha uma opção: ";
        $option = readline();
        
        switch ($option) {
            case 1:
                make_sale($total_sales);
                break;
            case 2:
                echo "Você foi deslogado.\n";
                $current_user = null;
                show_initial_menu($users, $current_user); // Volta para o menu inicial
                break;
            case 3:
                exit();
            default:
                echo "Opção inválida.\n";
                break;
        }
        sleep(2);
    }
}

// Inicializar o sistema
$current_user = null;
show_initial_menu($users, $current_user); // Exibir o menu inicial
show_main_menu($total_sales, $users, $current_user); // Exibir o menu principal
?>
