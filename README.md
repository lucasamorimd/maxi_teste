## Estrutura do Banco de dados
Usuário
 nome,
 email,
 senha,

Cliente
 Razão Social,
 Nome Fantasia,
 CNPJ,
 Endereco,
 Email,
 Telefone,
 Nome do Responsável,
 CPF,
 Celular,

Proposta
 endereco_da_obra,
 valor_total,
 sinal,
 quantidade_de_parcelas,
 valor_das_parcelas,
 data_inicio_pagamento,
 data_parcelas,
 anexar_arquivo,
 status (em aberto, aprovada, fechada)

 ## MER (Modelo de entidade e relacionamentos)

**1. Um cliente recebe várias propostas, mas cada proposta é feita apenas a um cliente**
table:
usuarios
(
    id_usuario int PK,
    nome varchar,
    email varchar,
    senha varchar
)

table:
clientes
(
    id_cliente int PK,
    razao_social varchar,
    nome_fantasia varchar,
    cnpj varchar,
    endereco varchar,
    email varchar,
    telefone varchar,
    nome_responsavel varchar,
    cpf varchar,
    celular varchar,
)

table:
proposta
(
    id_proposta int PK,
    id_cliente int FK,
    endereco_da_obra,
    valor_total,
    sinal,
    quantidade_de_parcelas,
    valor_das_parcelas,
    data_inicio_pagamento,
    data_parcelas,
    anexar_arquivo,
    status (em aberto, aprovada, fechada)

)
