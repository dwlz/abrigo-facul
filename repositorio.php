<?php
require_once explode('\js', getcwd())[0]. '\vendor\autoload.php';
include "config.php";

class reposit
{

    private $ip = SERVIDOR;
    private $user = USUARIO;
    private $pass = SENHA;
    private $database = BANCO;
    private $porta = PORTA;
    //private $socket = SOCKET;
    private $sqlconnect;

    function AbreConexao($banco)
    {

        switch ($banco) {
            case 'mysql':
            case 'sql':
                try {
                    $dsn = "sqlsrv:server=$this->ip;database=$this->database;";
                    $pdo = new PDO($dsn, $this->user, $this->pass);
                    $pdo->setAttribute(
                        PDO::ATTR_ERRMODE,
                        PDO::ERRMODE_EXCEPTION
                    );
                    $pdo->setAttribute(
                        PDO::ATTR_DEFAULT_FETCH_MODE,
                        PDO::FETCH_ASSOC
                    );
                    $pdo->setAttribute(
                        PDO::SQLSRV_ATTR_FETCHES_NUMERIC_TYPE,
                        true
                    );
                    $this->sqlconnect = $pdo;
                    $ok = 1;
                    setlocale(LC_ALL, "pt_BR");
                } catch (Exception $e) {
                    echo "<p>Conexão falhou !!!.</p>\n";
                }
            case 'oracle':
            case 'cache':
        }
        return;

    }

    function Execprocedure($config)
    {
        $conf = explode("|", $config);

        try {
            $this->AbreConexao("sql");
            $pstmt = $this->sqlconnect->prepare('SET NOCOUNT ON; EXEC '
                // . '[' . self::SCHEMA . ']. '
                . $conf[0]);
            $pstmt->execute();

            if ($pstmt->rowCount() >= 0) {
                $pstmt->nextRowset();
            } else {
                if ($pstmt->columnCount() === 0) {
                    $pstmt->nextRowset();
                }
            }

            $result = $pstmt->fetchAll();
            $this->FechaConexao();
            return $result;
        } catch (Exception $e) {
            $GLOBALS["error"] = $e->getMessage();
            return 0;
        }
    }

}