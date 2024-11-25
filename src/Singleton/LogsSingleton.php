<?php

namespace Singleton;

class LogsSingleton
{
    private function __construct()
    {
    }
    /**
     * 
     * @var self $instance Instancia da classe de logs
     */
    protected static LogsSingleton $instance;

    public function gravarLog(array $dados): void
    {
        $logArquivo = './src/Singleton/logs.txt';

        $logsAnteriores = [];

        if (filesize($logArquivo) > 0) {
            $conteudoDoArquivo = file_get_contents($logArquivo);
            $logsAnteriores = json_decode($conteudoDoArquivo, true);
        }

        $logsAnteriores[] = $dados;

        $arquivo = fopen($logArquivo, 'w');
        fwrite($arquivo, json_encode($logsAnteriores));
        fclose($arquivo);
    }

    public static function obterInstancia(): self
    {
        if (empty(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}