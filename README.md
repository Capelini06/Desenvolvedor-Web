# Desenvolvedor-Web

Repositório com as atividades feitas durante o curso de Desenvolvedor Web. As aulas estão separadas em duas pastas: [Aulas_html_css/](Aulas_html_css/) (front-end com HTML e CSS) e [Aulas_php/](Aulas_php/) (lógica de programação com PHP).

## Aulas de HTML e CSS

### [Aula 01](Aulas_html_css/Aula_01/) – Primeira página
Primeira página HTML, com um título e uma lista do que um site de portfólio precisa ter, e um arquivo CSS para estilizar o texto.
- `ola_mundo.txt`: primeiro arquivo criado na aula.

### [Aula 02](Aulas_html_css/Aula_02/) – Currículo em HTML
Currículo pessoal montado com títulos, parágrafos, listas (`ul` e `ol`), links e imagem, testando estilos de `text-decoration` nos títulos.
- `comandos.txt`: anotações sobre unidades de medida (`px`, `em`, `rem`, `vh`).

### [Aula 03 – Desafio](Aulas_html_css/Aula_03_Desafio/) – Portfólio pessoal
Primeiro desafio: página de portfólio com seção "Sobre mim", trilha de aprendizado, dicionário de conceitos web, comandos aprendidos e links para redes sociais.

### [Aula 04](Aulas_html_css/Aula_04/) – HTML semântico
Estrutura de página com as tags semânticas `header`, `nav`, `main`, `section`, `article`, `aside` e `footer`. No CSS, uso de variáveis (`--cor`) e primeiros layouts com `display: flex`.

### [Aula 05 – Desafio](Aulas_html_css/Aula_05_Desafio/) – Portfólio e currículo tech
Desafio de montar uma página de portfólio com apresentação, habilidades, contato, projetos em destaque e formações, usando HTML semântico e variáveis CSS.
- [Aula_05_Desafio_Correção](Aulas_html_css/Aula_05_Desafio_Correção/): correção do desafio feita em aula.

### [Aula 06 – Desafio](Aulas_html_css/Aula_06_Desafio/) – Portal de notícias
Página inicial de um portal de notícias fictício ("G2"), com menu, campo de busca, notícias em destaque, "Mais lidas" e previsão do tempo. Usa Flexbox, `grid-template-columns`, efeitos de `hover` e um arquivo `root.css` só com as variáveis de cores.

### [Aula 07](Aulas_html_css/Aula_07/) – Site de agência
Landing page da agência fictícia "Órbita Digital", com a seção de serviços oferecidos (criação de sites, e-commerce, SEO, identidade visual etc.).
- [Aula_07_Correção](Aulas_html_css/Aula_07_Correção/): versão corrigida e completa do site, com quatro páginas (`index`, `servicos`, `portfolio` e `sobre`) ligadas pelo menu.

### [Aula 08](Aulas_html_css/Aula_08/) – Gradientes e responsividade
Testes de texto com gradiente linear e radial e layout em CSS Grid que muda de colunas conforme o tamanho da tela com `@media`.

### [Display-flex](Aulas_html_css/Display-flex/) – Exemplo de Flexbox
Exemplo simples de três caixas organizadas com `display: flex` e `gap`.

## Aulas de PHP

### [Aula 09](Aulas_php/Aula_09/) – Variáveis e `echo`
Criação de variáveis (texto, número e booleano) e exibição com `echo`, usando concatenação e interpolação. Exemplos: dados de pessoas, apresentação pessoal, cadastro e informações de um produto.
- `exemplo.php` e `sistema.php`: exemplos da aula, incluindo a primeira função.

### [Aula 10](Aulas_php/Aula_10/) – Operadores
Operações aritméticas, cálculo de média de notas com `number_format` e comparações.
- `contas.php`: as quatro operações básicas.
- `concatenacao.php`: junção de textos com `.` e com `{$variavel}`.
- `comparacao.php`: diferença entre `=`, `==`, `===`, `!=` e `!==`.

### [Aula 11](Aulas_php/Aula_11/) – Entrada de dados
Leitura de dados do usuário com `readline()` e conversão com `(int)` e `(float)`. Exercícios: cadastro, total de compra, desconto, IMC, área do triângulo e do círculo, divisão e resto, conversão de metros, real para dólar, par ou ímpar e média ponderada.
- `entrada-de-dados.php`: exemplo da aula sobre `readline()`.

### [Aula 12](Aulas_php/Aula_12/) – Estrutura condicional `if`
- `if.php`: exemplo da aula, verificando maioridade e aprovação.

### [Aula 14](Aulas_php/Aula_14/) – Estrutura `switch` / `case`
Escolha entre várias opções com `switch`: menu de opções, dias da semana, meses do ano, caixa eletrônico, calculadora, verificação de vogais, faixas por letra, tabela de tamanhos de roupa e conversão de metros.
- `switch-case.php`: exemplo da aula sobre `switch`.

### [Aula 15](Aulas_php/Aula_15/) – Laço `while`
Repetições com `while`: contagem crescente e decrescente, números pares, tabuada, somas, média de notas até digitar 0, pedidos de pastel, senha, contagem de positivos e negativos, maior número, menu de banco e carrinho de compras com desconto.
- `while.php`: exemplo da aula sobre `while`.

### [Aula 16](Aulas_php/Aula_16/) – Laço `for`
Repetições com `for`: contagens, pares, tabuada (inclusive a tabuada completa com `for` dentro de `for`), somas, média da turma, múltiplos de 3, maior e menor valor e verificação de número primo. Também tem uma lista de chamada usando `foreach`.
- `for.php`: exemplo da aula sobre `for`.

### [Aula 17](Aulas_php/Aula_17/) – Vetores (arrays)
Criação e manipulação de vetores: acessar posições, alterar e adicionar itens, contar com `count()`, percorrer com `for` e remover itens com `array_pop()`, `array_search()` e `array_splice()`. Exercícios com frutas, alunos, lista de compras, inventário de jogo, preços, cidades, notas, convidados e temperaturas.
- `vetores.php`: exemplo da aula sobre vetores.
- `inserindoDadosNoVetor.php`: adicionando dados digitados pelo usuário em um vetor.

### [Aula 18](Aulas_php/Aula_18/) – Revisão geral
Lista de exercícios juntando tudo o que foi visto: condicionais, laços (`while`, `do while`, `for`), vetores e `switch`. Exemplos: situação do aluno, faixas de desconto, conversão de segundos em horas, ano bissexto, classificação de triângulos, caixa eletrônico com notas, senha com tentativas, fatorial, números primos, busca em vetor, separação de pares e ímpares, lista invertida, controle de presença, calculadora com menu e jogo de adivinhação.

### [Aula 19](Aulas_php/Aula_19/) – Vetores com `for`
Percorrendo vetores com `for`: listas numeradas de nomes, produtos e cidades, e contagem de alunos aprovados e reprovados a partir das notas digitadas.
- `for_recapitulacao.php`: recapitulação de como percorrer um vetor com `for`.

### [Aula 20](Aulas_php/Aula_20/) – Formulários com `GET`
Primeiras páginas PHP no navegador: formulários HTML que enviam dados pela URL com `method="get"`, lidos no PHP com `$_GET` e `isset()`, e exibidos com segurança usando `htmlspecialchars()`.
- [Exemplo-GET](Aulas_php/Aula_20/Exemplo-GET/): exemplo da aula, que recebe nome e idade e diz se a pessoa é maior ou menor de idade.
- [atividade-01](Aulas_php/Aula_20/atividade-01/): calculadora de IMC que mostra o resultado e a classificação (abaixo do peso até obesidade grau III).
- [atividade-01.2](Aulas_php/Aula_20/atividade-01.2/): nova versão da calculadora, com o cálculo separado do HTML, aceitando vírgula nos números, validando valores maiores que 0 e formatando o IMC com `number_format`.

### [Aula 21](Aulas_php/Aula_21/) – Formulários com `POST`
Formulários que enviam os dados com `method="post"`, sem aparecer na URL, lidos no PHP com `$_POST`. O exemplo separa as páginas HTML (pasta `html/`, com menu de navegação e um CSS em comum) dos arquivos PHP que processam cada formulário (pasta `php/`).
- [exemplo-POST](Aulas_php/Aula_21/exemplo-POST/): três formulários:
  - `contato`: recebe nome, e-mail e mensagem e mostra uma confirmação.
  - `login`: compara usuário e senha com valores fixos e avisa se a senha está errada ou se o usuário não existe.
  - `notas`: recebe três notas, calcula a média e mostra a situação do aluno (aprovado, exame final ou reprovado).

### [Aula 22](Aulas_php/Aula_22/) – `GET` x `POST`
Comparação entre os dois métodos de envio, usando `$_SERVER["REQUEST_METHOD"]`, o operador `??` e `trim()` para tratar campos vazios.
- [exemplo](Aulas_php/Aula_22/exemplo/): dois formulários na mesma página, um enviando o nome por `GET` (`resultado.php`) e outro o usuário por `POST` (`login.php`).
- [atividade-01](Aulas_php/Aula_22/atividade-01/): um único arquivo `leitor.php` que identifica se o nome chegou por `GET` ou por `POST`.
- [atividade-02](Aulas_php/Aula_22/atividade-02/): o mesmo login (usuário `ADMIN`, senha `123abc`) feito em duas versões, uma com `GET` e outra com `POST`.
- [atividade-09](Aulas_php/Aula_22/atividade-09/): conversor de reais para dólar a partir da cotação informada, validando com `is_numeric()` e formatando os valores com `number_format`.

### [Aula 23](Aulas_php/Aula_23/) – Revisão de PHP
Revisão dos tipos de dados e da conversão de tipos, de volta ao terminal.
- `atividade-01.php`: variáveis de texto, número inteiro, decimal e booleano exibidas com `var_dump()`.
- `atividade-02.php`: baixa de estoque, subtraindo a quantidade de saída digitada.
- `index.php`: cadastro de vários usuários com `readline()`, guardando só os maiores de idade em um vetor associativo e listando os dados no final.

### [Aula 24](Aulas_php/Aula_24/) – Funções
Criação de funções com `function`, passagem de parâmetros e diferença entre exibir o resultado com `echo` e devolvê-lo com `return`.
- [exemplos](Aulas_php/Aula_24/exemplos/):
  - `ex01.php`: função que calcula a média de três notas e função que mostra uma mensagem de boas-vindas.
  - `ex02.php` e `ex03.php`: a mesma função chamada várias vezes com valores diferentes (saudação e soma).
  - `ex04.php` e `ex05.php`: funções que recebem valores digitados com `readline()` (total da compra e soma).
  - `ex06.php`: comparação entre uma função com `echo` e outra com `return`, mostrando o retorno com `var_dump()`.
  - `ex07.php`: usando o resultado de uma função como parâmetro de outra chamada.
  - `ex08.php`: desconto de 10% para compras a partir de R$ 200, com `if` dentro da função.
  - `ex09.php`: subtotal e desconto calculados em funções separadas para chegar ao total.

## Como executar

**HTML e CSS:** abra o arquivo `index.html` da aula no navegador (ou use a extensão Live Server do VS Code).

**PHP:** com o PHP instalado, rode qualquer arquivo pelo terminal:

```bash
php Aulas_php/Aula_09/atividade-01.php
```

A partir da Aula 20 as atividades rodam no navegador. Inicie o servidor embutido do PHP na pasta da atividade e acesse o endereço indicado:

```bash
php -S localhost:8000 -t Aulas_php/Aula_20/Exemplo-GET
```

Depois abra `http://localhost:8000/processa.php` (ou `imc.php`, nas atividades).

Na Aula 21, inicie o servidor na pasta `exemplo-POST` (os formulários apontam para `../php/`) e abra uma das páginas HTML:

```bash
php -S localhost:8000 -t Aulas_php/Aula_21/exemplo-POST
```

Por exemplo, `http://localhost:8000/html/contato.html`.

Na Aula 22, inicie o servidor na pasta de cada atividade e abra o `index.html` (ou `login-get.html` / `login-post.html`, na atividade-02).

As Aulas 23 e 24 voltam a rodar pelo terminal, como as primeiras aulas.

Algumas atividades da Aula 17 usam `array_last()`, que precisa do PHP 8.5 ou mais recente.
