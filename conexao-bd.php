// conexão com mysqli
<?php
// conexão com mysqli
// Configurações do banco de dados local
$dbHost = 'localhost';
$dbUsername = 'root'; // O nome de usuário padrão para MySQL local é geralmente 'root'
$dbPassword = ''; // A senha padrão é geralmente uma string vazia
$dbName = 'nome_do_banco_de_dados_local';

// Criando a conexão com MySQLi
$mysqli = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Verificando a conexão
if ($mysqli->connect_error) {
    die("Conexão falhou: " . $mysqli->connect_error);
}

// Restante do código que manipula o banco de dados vai aqui...

// Sempre feche a conexão quando terminar
$mysqli->close();
?>

===========================================

<?php
// Conexão Local com PDO
// Configurações do banco de dados local
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'nome_do_banco_de_dados_local';

try {
    // Criando a conexão com PDO
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUsername, $dbPassword);
    
    // Configura o PDO para lançar exceções em caso de erro
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Conexão bem-sucedida";
    
    // Restante do código que manipula o banco de dados vai aqui...
} catch (PDOException $e) {
    die("Conexão falhou: " . $e->getMessage());
}

// A conexão é fechada automaticamente quando o objeto PDO é destruído, mas se necessário, pode-se fechar explicitamente
$pdo = null;
?>

======================

<?php
// Conexão Externa com MySQLi
// Configurações do banco de dados externo
$dbHost = 'endereco_do_host_externo';
$dbUsername = 'seu_usuario_externo';
$dbPassword = 'sua_senha_externa';
$dbName = 'nome_do_banco_de_dados_externo';

// Criando a conexão com MySQLi
$mysqli = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Verificando a conexão
if ($mysqli->connect_error) {
    die("Conexão falhou: " . $mysqli->connect_error);
}

// Restante do código que manipula o banco de dados vai aqui...

// Sempre feche a conexão quando terminar
$mysqli->close();
?>

======================

<?php
// Conexão Externa com PDO
// Configurações do banco de dados externo
$dbHost = 'endereco_do_host_externo';
$dbUsername = 'seu_usuario_externo';
$dbPassword = 'sua_senha_externa';
$dbName = 'nome_do_banco_de_dados_externo';

try {
    // Criando a conexão com PDO
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUsername, $dbPassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Conexão bem-sucedida";
    
    // Restante do código que manipula o banco de dados vai aqui...
} catch (PDOException $e) {
    die("Conexão falhou: " . $e->getMessage());
}

// A conexão é fechada automaticamente quando o objeto PDO é destruído, mas se necessário, pode-se fechar explicitamente
$pdo = null;
?>
