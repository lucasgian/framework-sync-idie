# Contribuindo para o IDIE

Nós adoraríamos que você contribuísse com o IDIE e ajudasse a torná-lo ainda melhor do que é
hoje! Como colaborador, aqui estão as diretrizes que gostaríamos que você seguisse:

 - [Solicitação de nova funcionalidade] (# feature)
 - [Diretrizes de Envio] (# submit)
 - [Regras de codificação] (regras #)
 - [Commit Message Guidelines] (# commit)



 ## <a name="feature"> </a> Está faltando alguma funcionalidade?
Você pode * solicitar * uma nova funcionalidade por [enviar um problema] (# submit-issue) para o nosso GitHub
Repositório. Se você quiser * implementar * um novo recurso, envie um problema com
uma proposta para o seu trabalho em primeiro lugar, para ter certeza de que podemos usá-lo.
Por favor, considere que tipo de mudança é:

* Para um ** Funcionalidade Principal **, primeiro abra um problema e delineie sua proposta para que ela possa ser
discutido. Isso também nos permitirá coordenar melhor nossos esforços, evitar a duplicação de trabalho,
e ajudá-lo a criar a mudança para que ela seja aceita com sucesso no projeto.
* ** Pequenas Funcionalidades ** podem ser criados e diretamente [enviados como Pull Request] (# submit-pr).




### <a name="submit-pr"> </a> Como enviar um pedido de Pull Request (PR)
Antes de enviar sua Solicitação de Pull (RP), considere as seguintes diretrizes:

1. Faça suas alterações em um novo branch git:

     ```shell
     git checkout -b my-fix-branch master
     ```

1. Siga nossas [regras de codificação] (regras #).
  e garantir que todos os testes sejam aprovados.
1. Confirme suas alterações usando uma mensagem de confirmação descritiva que segue a nossa
  [commit message conventions] (# commit). Adesão a estas convenções
  é necessário porque as notas de versão são geradas automaticamente a partir dessas mensagens.

     `` `shell
     git commit -a
     `` `
    Nota: a opção opcional de linha de comando commit -a irá automaticamente "adicionar" e "rm" arquivos editados.

1. Envie sua ramificação para o GitHub:

    `` `shell
    git push origem my-fix-branch
    `` `

1. No GitHub, envie um pedido de pull para `idie-software: master`.
* Se sugerirmos mudanças, então:
  * Faça as atualizações necessárias.
  * Rebase sua ramificação e force o push para o seu repositório GitHub (isso atualizará sua solicitação pull):

    `` `shell
    git rebase master -i
    git push -f
    `` `

É isso aí! Obrigado pela sua contribuição!



## <a name="rules"> </a> Regras de codificação
Para garantir a consistência em todo o código-fonte, mantenha essas regras em mente enquanto você está trabalhando:

* Tadas as funcionalidades ou correções de bugs ** devem ser testados ** por uma ou mais especificações (testes unitários).
* Todos os métodos públicos da API ** devem ser documentados **.

## <a name="commit"> </a> Diretrizes para mensagens de confirmação

Temos regras muito precisas sobre como nossas mensagens de commit do git podem ser formatadas. Isso leva a ** mais
mensagens legíveis ** que são fáceis de seguir ao analisar o ** histórico do projeto **.

### Formato da mensagem de confirmação (Commit)
Cada mensagem de confirmação consiste em um ** cabeçalho **, um ** corpo ** e um ** rodapé **. O cabeçalho tem um especial
formato que inclui um ** tipo **, um ** escopo ** e um ** assunto **:

```
<type> (<scope>): <assunto>
<LINHA BLANCA>
<body>
<LINHA BLANCA>
<footer>
```

O ** cabeçalho ** é obrigatório e o ** escopo ** do cabeçalho é opcional.

Qualquer linha da mensagem de commit não pode ter mais de 100 caracteres! Isso permite que a mensagem seja mais fácil
para ler no GitHub, assim como em várias ferramentas do git.

O rodapé deve conter uma [referência de fechamento para um problema] (https://help.github.com/articles/closing-issues-via-commit-messages/), se houver.

Exemplos:

```
docs (template/issue): atualiza o template issue
```
```
fix (release): alteração no comportamento do metódo xxx.
```



### Reverter commit
Se o commit reverte um commit anterior, ele deve começar por `revert:`, seguido pelo cabeçalho do commit revertido. No corpo, ele deve dizer: `Isso reverte o commit <hash> .`, onde o hash é o SHA do commit sendo revertido.

### Tipo
Deve ser um dos seguintes:

* ** build **: Alterações que afetam o sistema de construção ou dependências externas (escopos de exemplo: gulp, broccoli, npm)
* ** docs **: somente alterações na documentação
* ** feat **: um nova funcionalidade
* ** fix **: uma correção de bug
* ** perf **: uma mudança de código que melhora o desempenho
* ** refactor **: uma alteração de código que não corrige um bug nem adiciona um recurso
* ** style **: uma alterações que não afetam o significado do código (espaço em branco, formatação, ponto e vírgula ausente, etc)
* ** test **: Adicionando testes ausentes ou corrigindo testes existentes

### Escopo
O escopo deve ser o nome do pacote afetado (conforme percebido pela pessoa que está lendo o changelog gerado a partir das mensagens de commit), podendo ter uma especificação ex: ''' feat(form/login) add form'''  

A seguir, a lista de escopos suportados:

* ** template **
* ** form **
** controller **
** ** model **
* ** view **
* ** config **
* ** adapter **
* ** style **

### Assunto
O assunto contém uma descrição sucinta da mudança:

* use o imperativo, tempo presente: "mudança" não "mudou" nem "muda"
* Sem letra maiúscula a primeira letra
* sem ponto (.) no final

### Body
Assim como no ** assunto **, use o tempo presente imperativo: "alterar" não "alterado" nem "alterações".
O corpo deve incluir a motivação para a mudança e contrastar isso com o comportamento anterior.

### Rodapé
O rodapé deve conter qualquer informação sobre o ** Breaking Changes ** e é também o lugar para
referencia problemas do GitHub que este commit ** Fecha **.

** Breaking Changes ** deve começar com a palavra "BREAKING CHANGE:" com um espaço ou duas novas linhas. O restante da mensagem de confirmação é então usado para isso.