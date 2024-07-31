
# **> Estruturas JavaScript <**

> [!NOTE]
> ***Esta é uma breve introdução lógica aos tipos de estruturas em JS***<br>
> ***Exemplos completos estão no arquivo -->*** <span>`topics.js`</span>

---
> Aluno : ***Caio Henrique Faria Mendes*** | :shipit:

## **Conteúdos Abordados** :

- [ IF , Else IF e Else ]
- [ Switch Case ]
- [ For loop ]
- [ While loop ]

---
# **Estruturas Condicionais** :mag:

### _IF_
> Estrutura Condicional baseada em comparação composta por (`if` , `else if` , `else`), seja calculos, estados booleanos, etc ... 

### _If Else_

```JavaScript
    //Caso a condição seja Verdadeira a ação é disparada.

    if (condição) { ação } 

    //Caso nenhuma condição seja Verdadeira, outra ação é disparada pelo else.
    else { outra ação } 
```
### _Else If_

```JavaScript
    if (condição) { ação } 

    //Caso a primeira condição não seja Verdadeira, 
    //podemos adicionar uma segunda comparação, que dispara outra ação.

    else if (segunda condição) { outra ação }
    //Caso nenhuma das condições seja satisfeita o Else dispara outra ação.

    else { outra ação }
```
### _Swicth Case_
> Estrutura Condicional baseada em comparação composta por (`Switch` = objeto , `case` = condição), seja calculos, estados booleanos, etc ... 
```JavaScript
    //Utilizado quando temos varias condições de comparação, substituindo o uso do If.

    Switch(alvo){

        //Observa se o alvo satisfaz alguma condição e,
        // então dispara seu respectivo bloco de codigo presente no case.

        case (condição):
            bloco de ação
            break
        case (outra condição):
            bloco de ação
            break
        case (outra condição):
            bloco de ação
            break

        //Caso alvo não satisfaça nenhuma condição case,
        //o default dispara uma ultima opção de ação.

        default:
            bloco de ação
            break
    }
```
#### (Obs: Break serve para quebrar a execução das comparações assim que uma é satisfeita.)
---
# **Estruturas de Repetição** :dizzy:
### _For loop_
> Estrutura de Repetição composta pelo comando `for` que estabelece um contador e uma condição, que enquanto verdadeira permite que o codigo seja executado varias vezes até que ela se torne falsa.
```JavaScript
    //For é uma das estruturas de repetição, e serve para executar um bloco ou mais
    //de codigo repetidas vezes, com base em parametros previamente estipulados.

    for(i = 0 ; i < 2 ; i++){
        console.log(i)  //retornara: 0 -> 1
    }

    // i = 0 inicializa o contador
    // i > 2 condiciona a repetição enquanto i for menor que 2
    // i++ soma 1 ao i cada vez que o bloco é executado
    
```
### _While loop_
> Estrutura de repetição composta pelo comando `while` e uma condição, que enquanto verdadeira permite que o codigo seja executado varias vezes até que ela se torne falsa.
```JavaScript
    //While também é uma estrutura de repetição, porém é composta apenas de uma condição,
    //que enquanto verdadeira permite a repetição do bloco de codigo.
    const i = 0

    while( i < 2 ){
        console.log(i) //retornara: 0 -> 1
        i++
    }
    
    //const i = 0 inicializa o contador
    //i < 2 é a condição
    //logo enquanto i for menor que 2 ele continuara repetindo
    //i++ soma 1 ao i a cada repetição do bloco
```
---

# `</Fim>` <br>Documented By _zCaio79_

![JavaScript](https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E)
---
| [<img loading="lazy" src="https://avatars.githubusercontent.com/u/129559720?s=400&u=00e5ce096d7d7820bf6eab559b6ed448e7ebce60&v=4" width="130px;"><br><sub> Caio Mendes </sub>](https://github.com/zCaio79)
|:-:|

---