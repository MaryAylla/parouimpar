
# 🔢 Verificador de Par ou Ímpar em PHP

Um sistema web simples e didático desenvolvido em **PHP** e **HTML** para verificar se um número fornecido pelo usuário é **par** ou **ímpar** ✨. Este projeto é ideal para quem está começando a aprender PHP e deseja compreender conceitos fundamentais de desenvolvimento web.

Este projeto é uma excelente oportunidade para aprofundar conhecimentos em:

  * **HTML:** Criação de formulários web (`<form>`, `<input>`, `<label>`, `<button>`).
  * **PHP Básico:**
      * Utilização de **superglobais** (`$_GET`) para receber dados de formulários.
      * **Estruturas condicionais** (`if/else`) para lógica de decisão.
      * **Operadores aritméticos** (módulo `%`).
      * **Exibição de conteúdo dinâmico** (`echo`).
      * **Tipagem de variáveis** (casting `(int)`).
  * **Boas Práticas de Código:** Separação da lógica de apresentação (HTML) e processamento (PHP).
  * **Web Fundamentals:** Entendimento do método HTTP `GET` e como os dados são transmitidos na URL.

-----

## ✨ Funcionalidades

  * **Entrada de Dados:** Formulário HTML intuitivo para o usuário digitar um número inteiro.
  * **Verificação de Par/Ímpar:** Lógica PHP para determinar se o número é par ou ímpar usando o operador de módulo.
  * **Exibição de Resultado:** Apresenta claramente se o número digitado é "PAR" ou "ÍMPAR".
  * **Validação Básica:** Verifica se um número foi de fato enviado e se ele é numérico, evitando erros.
  * **Separação de Preocupações:** O formulário (`index.html`) e o script de processamento (`processar_numero.php`) são arquivos separados, facilitando a organização e o entendimento do código.

-----

## 🛠️ Tecnologias Utilizadas

  * **PHP**: A linguagem de programação principal para a lógica de back-end.
  * **HTML5**: Para estruturar o formulário e o conteúdo da página web.
  * **CSS3**: (Opcional, incluído no código para melhor visualização) Para estilização básica e tornar a interface mais agradável.

-----

## 🚀 Como Executar Localmente

Para rodar este projeto em sua máquina, você precisará de um servidor web com suporte a PHP (como Apache ou Nginx).

1.  **Clone este repositório (ou crie os arquivos manualmente):**

    ```bash
    git clone https://github.com/MaryAylla/parouimpar.git
    ```

2.  **Acesse a pasta do projeto:**

    ```bash
    cd parouimpar
    ```

3.  **Configure seu servidor web:**

      * Coloque os arquivos `index.html` e `processar_numero.php` na pasta de documentos raiz do seu servidor web (ex: `htdocs` para Apache, `www` para Nginx/XAMPP/WAMP).

4.  **Inicie seu servidor web:**

      * Certifique-se de que o Apache/Nginx e o PHP estejam rodando.

5.  **Acesse o formulário no navegador:**

      * Abra seu navegador e digite a URL para o seu arquivo `index.html`. Geralmente será algo como:
        ```
        http://localhost/index.html
        ```
        (Se você não estiver usando `index.html`, substitua pelo nome do seu arquivo HTML, por exemplo, `http://localhost/formulario_par_impar.html`).

6.  **Interaja com a aplicação:**

      * Digite um número no campo e clique em "Verificar". Você será redirecionado para a página `processar_numero.php` com o resultado.

