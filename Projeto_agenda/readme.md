# PHP PDO - Agenda

Desenvolver uma aplicação PHP com acesso a base de dados MySQL que permite efetuar a gestão de  contatos com base em NOME e TELEFONE.

### Normas obrigatórias

- Os nomes estão limitados a um mínimo de 3 e máximo 50 letras.
- Os telefones estão limitados e um mínimo de 3 e máximo de 12 letras.
- Os nomes podem se repetir.
- Os números de telefone são únicos.
- O sistema deve conter um mecanismo de inserção, edição e eliminação de registos, bem como um espaço para pesquisa por nome e/ou telefone. 
- Por razões de operacionalidade e teste, o sistema deverá ter uma funcionalidade para limpeza completa dos registos existentes.
- Deve existir um link para download de toda a informação em formato CSV.

### Descrição da aplicação

A página inicial deverá apresentar um campo de pesquisa do lado esquerdo e do lado direito um botão para adição de novos registos.

Imediatamente abaixo, deverá ser apresentado o resultado da pesquisa, ou todos os registos se não houver pesquisa, em formato de tabela.

Deverá ser apresentada uma informação no caso de não existirem registos.

A tabela deverá apresentar 4 colunas: Nome, Telefone, Editar e Eliminar.

A tabela deverá, quando apresentada, mostrar o total de registos apresentados.

A funcionalidade de adição de novos registos deverá obrigar a definir nome e telefone. O telefone deve ser unica, não sendo permitido guardar um número de telefone que tenha sido anteriormente atribuído a outro registo.

A funcionalidade de edição de registos existentes deve apresentar os dados a editar no formulário, deve permitir que ambos sejam editáveis e não permitir que o telefone seja alterado para um número que já exista na base de dados associado a outro registo.

A eliminação de cada registo deve ser objeto de confirmação.

A eliminação de todos os registos deve ser objeto de confirmação.

### Notas importantes

Esta não é uma aplicação que está pronta para produção.

Foi desenvolvida junto do professor no andamento do curso, com a finalidade de aplicar os conceitos estudados e consolidar o conhecimento adquirido.

Faltam ainda vários mecanismos de segurança e gestão de fluxo, definição de rotas, otimizações de código e organização do projeto.