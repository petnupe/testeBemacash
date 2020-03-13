Teste desenvolvimento Bemacash

Este software foi desenvolvido com a intenção de analisar minhas qualidades 
como desenvolvedor.

Objetivo:
Listar os pedidos dos clientes bem como os produtos, contratos e licenças por pedido.

Requisitos:
PHP7
Composer
SQLite3

Utilização:
Executar na pasta raiz o comando # composer install

Deve-ser criar um servidor direcionando para a pasta public
"php -S localhost:8080 -t public"

Na tela inicial será solicitado um email e senha de acesso.
Acesso teste 1: teste@teste.com.br e senha 123456
Acesso teste 2: teste@dois.com.br e senha 654321
Já existem alguns pedidos pré cadastrados para cada os clientes teste.

Metodologia de desenvolvimento.
A pasta public/index.php é o front controler, responsável por identificar 
a rota com base na URL.
Em config/routes estão as classes correspondentes a cada rota.
A interfaceControladoraDeRequisicao garante que todos os controllers impelemtarão o metodo processa requisiçao 
que realiza as verificações e gerenciamento das Entidades (com EntityManager) e devolve para a sua view correspondente.

Toda a relação com a base de dados foi realizada através do mapeamente das Entidades com Doctrine abstraindo o banco de dados.
