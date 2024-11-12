<?php
// Configurações do banco de dados local
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'nome_do_banco_de_dados_local';

// Função para conectar ao banco de dados MySQL
function connectDB($dbHost, $dbUsername, $dbPassword, $dbName) {
    $mysqli = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    // Verificando a conexão
    if ($mysqli->connect_error) {
        die("Conexão falhou: " . $mysqli->connect_error);
    }

    return $mysqli;
}

// Função para criar um novo aluno
function createAluno($nome, $email, $sexo, $endereco, $numero, $complemento, $bairro, $cidade, $uf, $modalidade) {
    $mysqli = connectDB($GLOBALS['dbHost'], $GLOBALS['dbUsername'], $GLOBALS['dbPassword'], $GLOBALS['dbName']);
    
    $stmt = $mysqli->prepare("INSERT INTO alunos (nome, email, sexo, endereco, numero, complemento, bairro, cidade, uf, modalidade) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssss", $nome, $email, $sexo, $endereco, $numero, $complemento, $bairro, $cidade, $uf, $modalidade);
    
    if ($stmt->execute()) {
        echo "Novo registro criado com sucesso";
    } else {
        echo "Erro: " . $stmt->error;
    }

    $stmt->close();
    $mysqli->close();
}

// Função para ler todos os alunos
function readAlunos() {
    $mysqli = connectDB($GLOBALS['dbHost'], $GLOBALS['dbUsername'], $GLOBALS['dbPassword'], $GLOBALS['dbName']);
    
    $result = $mysqli->query("SELECT * FROM alunos");
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo $row["nome"] . " - " . $row["email"] . "<br>";
        }
    } else {
        echo "0 resultados";
    }

    $mysqli->close();
}

// Função para atualizar um aluno
function updateAluno($id, $nome, $email, $sexo, $endereco, $numero, $complemento, $bairro, $cidade, $uf, $modalidade) {
    $mysqli = connectDB($GLOBALS['dbHost'], $GLOBALS['dbUsername'], $GLOBALS['dbPassword'], $GLOBALS['dbName']);
    
    $stmt = $mysqli->prepare("UPDATE alunos SET nome=?, email=?, sexo=?, endereco=?, numero=?, complemento=?, bairro=?, cidade=?, uf=?, modalidade=? WHERE id=?");
    $stmt->bind_param("ssssssssssi", $nome, $email, $sexo, $endereco, $numero, $complemento, $bairro, $cidade, $uf, $modalidade, $id);
    
    if ($stmt->execute()) {
        echo "Registro atualizado com sucesso";
    } else {
        echo "Erro: " . $stmt->error;
    }

    $stmt->close();
    $mysqli->close();
}

// Função para deletar um aluno
function deleteAluno($id) {
    $mysqli = connectDB($GLOBALS['dbHost'], $GLOBALS['dbUsername'], $GLOBALS['dbPassword'], $GLOBALS['dbName']);
    
    $stmt = $mysqli->prepare("DELETE FROM alunos WHERE id=?");
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        echo "Registro deletado com sucesso";
    } else {
        echo "Erro: " . $stmt->error;
    }

    $stmt->close();
    $mysqli->close();
}

// Exemplo de como as funções podem ser chamadas:
// createAluno('Nome', 'Email', 'Masculino', 'Endereco', '123', 'Apt', 'Bairro', 'Cidade', 'UF', 'Modalidade');
// readAlunos();
// updateAluno(1, 'Nome Atualizado', 'Email', 'Masculino', 'Endereco', '123', 'Apt', 'Bairro', 'Cidade', 'UF', 'Modalidade');
// deleteAluno(1);

?>
