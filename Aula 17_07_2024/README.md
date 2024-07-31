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

### Uso de Formulários no HTML :memo:

>Os formulários HTML são essenciais para coletar dados do usuário. O exemplo a seguir mostra como configurar um formulário para enviar dados utilizando o método GET:

```html

<form action="" method="get">
    <label for="">Nome do aluno:</label>
    <input class="form-control" type="text" name="bt_nome">
    <label for="">Nota 01:</label>
    <input class="form-control" type="text" name="bt_nota1">
    <label for="">Nota 02:</label>
    <input class="form-control" type="text" name="bt_nota2">
    <label for="">Nota 03:</label>
    <input class="form-control" type="text" name="bt_nota3">
    <label for="">Nota 04:</label>
    <input class="form-control" type="text" name="bt_nota4">

    <input class="btn btn-success" type="submit">
    <input class="btn btn-danger" type="reset">
</form>


```

- action="": Especifica a URL para onde os dados do formulário serão enviados. Um valor vazio significa que os dados serão enviados para a mesma página que o formulário está localizado.
- method="get": Especifica que os dados do formulário serão enviados como parâmetros de URL, permitindo que sejam acessados via $_GET no PHP.
- name="bt_nome", name="bt_nota1", etc.: Os atributos name são importantes para identificar os dados quando eles são enviados. Eles permitem que você acesse os valores no PHP usando $_GET["bt_nome"], $_GET["bt_nota1"], e assim por diante.
