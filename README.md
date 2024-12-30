# Projeto de Estudo - Página Web com Formulário

Este repositório contém os arquivos de uma página web que implementa um formulário interativo com validação tanto no front-end quanto no back-end. O objetivo deste projeto é estudar e aprimorar conhecimentos em HTML, CSS, Bootstrap, JavaScript e PHP, sem a utilização de frameworks.

## Descrição do Projeto

A página principal apresenta um formulário com os seguintes campos:
- **Email**
- **Senha**
- **Assunto**
- **Mensagem**

Todos os campos são obrigatórios. Após o preenchimento correto, o usuário é redirecionado para uma página onde pode visualizar os dados que preencheu.

### Funcionalidades:
- Validação de formulário:
  - **Front-end:** Implementada com JavaScript.
  - **Back-end:** Implementada com PHP.
- Layout responsivo:
  - Desenvolvido com **Bootstrap**, garantindo uma boa experiência em dispositivos móveis, tablets e desktops.
- Dados armazenados em sessão:
  - Utiliza `$_SESSION` para armazenar temporariamente os dados do usuário.

## Arquitetura do Projeto

A estrutura de pastas e arquivos do projeto é organizada da seguinte forma:

```
/
├── assets/                # Pasta contendo imagens e favicon
├── contato.php            # Valida o formulário no back-end e redireciona o usuário
├── db.sql                 # Banco de dados inicialmente vazio para futuras atualizações
├── index.html             # Página inicial do formulário
├── logout.js              # Script para gerenciamento de logout no front-end
├── logout.php             # Lida com o logout e limpeza da sessão
├── mensagens.php          # Página para exibir mensagens enviadas
├── README.md              # Documentação do projeto
├── script.js              # Validações e funcionalidades no front-end
└── script.css             # Estilos personalizados
```

## Tecnologias Utilizadas

- **HTML5**: Estruturação das páginas.
- **CSS3**: Estilização básica e personalizações.
- **Bootstrap**: Garantia de responsividade para diferentes dispositivos.
- **JavaScript**: Validações e interações no front-end.
- **PHP**: Validação de dados no back-end.

## Como Executar o Projeto

1. Clone este repositório:
   ```bash
   git clone https://github.com/IgorTorquatto/Web-PHP-Project
   ```

2. Configure o ambiente local:
   - Instale um servidor web como **XAMPP** ou **WAMP**.
   - Coloque os arquivos deste projeto na pasta **htdocs** ou equivalente.

3. Acesse o projeto no navegador:
   ```
   http://localhost/Web-PHP-Project
   ```

4. Teste o formulário preenchendo os campos e verificando a validação.

## Imagens

Parte da tela inicial com o formulário:
![Formulário](./assets/capturas%20de%20tela/Captura%20de%20Tela%20(52).png)

Apresentação de erros, caso o formulário não esteja totalmente preenchido:
![Formulário](./assets/capturas%20de%20tela/Captura%20de%20Tela%20(55).png)

Preenchendo todos os campos do formulário:
![Formulário](./assets/capturas%20de%20tela/Captura%20de%20Tela%20(53).png)

Apresentando as informações fornecidas para o usuário:
![Formulário](./assets/capturas%20de%20tela/Captura%20de%20Tela%20(54).png)

## Possibilidades de Atualização

- Implementar o uso do arquivo `db.sql` para armazenar os dados em um banco de dados relacional.
- Adicionar funcionalidades extras, como recuperação de senha ou envio de e-mails.
- Melhorar a interface com animações e interações avançadas.

## Contribuição

Sinta-se à vontade para abrir issues ou enviar pull requests para melhorar este projeto.

## Licença

Este projeto é de uso livre e está aberto para estudos e melhorias. Sem licença específica no momento.
