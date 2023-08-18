# formulario-telegram

Projeto em PHP para processamento de formulários web e envio das respostas via telegram

## Instruções

As bibliotecas necessárias para o uso do telegram estão no repositório [telegram-bot-php](https://github.com/renatomb/telegram-bot-php), que deve ser baixado na pasta raiz do projeto.

```bash
git clone https://github.com/renatomb/telegram-bot-php.git
```

Essa pasta está no `.gitignore` para não ficar repetitivo aqui. Como o bot será usado somente para enviar mensagens a um usuário específico não somente usaremos a função sm. Se não desejar baixar o repositório todo copiar manualmente somente as funções necessárias.

## Configuração

Criar um bot no telegram através do [BotFather](https://telegram.me/BotFather) e pegar o token gerado.

Modificar o arquivo config.php com o token gerado e o id do usuário que receberá as mensagens. Siga o modelo existenteno arquivo `config-modelo.php`

