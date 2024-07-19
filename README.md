# Aula 17/07/2024

## **Conteúdos Abordados**

- Introdução ao PHP :elephant:

> PHP (Hypertext Preprocessor) é uma linguagem de script de código aberto, amplamente utilizada para desenvolvimento web, que pode ser embutida em HTML. A tag `<?php ?>` é usada para iniciar e terminar um bloco de código PHP dentro de um arquivo HTML. Dentro dessas tags, você pode escrever qualquer código PHP que será executado no servidor antes de enviar o HTML gerado ao navegador do usuário.

### Exemplo:

```html
<!DOCTYPE html>
<html>
<head>
    <title>Exemplo PHP</title>
</head>
<body>
    <h1><?php echo "Olá, mundo!"; ?></h1>
</body>
</html>
```

### Uso do if no PHP :mag:
>A estrutura condicional if é utilizada no PHP para executar blocos de código baseados em condições específicas. No exemplo a seguir, mostramos como verificar se um botão foi clicado e obter valores passados através de parâmetros GET:

```php
if(isset($_GET["bt_nome"])) {
    $nome = $_GET["bt_nome"];
    $nota1 = $_GET["bt_nota1"];
    $nota2 = $_GET["bt_nota2"];
    $nota3 = $_GET["bt_nota3"];
    $nota4 = $_GET["bt_nota4"];
}

```

>`if(isset($_GET["bt_nome"]))`: Verifica se o parâmetro bt_nome foi enviado via GET (ou seja, se o botão foi clicado).
- `$nome = $_GET["bt_nome"];`: Atribui o valor do parâmetro bt_nome à variável $nome.
- `$nota1 = $_GET["bt_nota1"];`: Atribui o valor do parâmetro bt_nota1 à variável $nota1.
- `$nota2 = $_GET["bt_nota2"];`: Atribui o valor do parâmetro bt_nota2 à variável $nota2.
- `$nota3 = $_GET["bt_nota3"];`: Atribui o valor do parâmetro bt_nota3 à variável $nota3.
- `$nota4 = $_GET["bt_nota4"];`: Atribui o valor do parâmetro bt_nota4 à variável $nota4.
