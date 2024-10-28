# Site de Agendamento de Visitas

Este projeto é um site para agendamento de visitas, desenvolvido com PHP, JavaScript, HTML, CSS e MariaDB.

## Estrutura do Projeto

- **admin/**: Contém arquivos PHP para a administração do site.
- **config.php**: Arquivo de configuração central.
- **index.html**: Página inicial do site.
- **pages/**: Contém páginas HTML do site.
  - **public/**: Páginas acessíveis por todos.
    - `about.html`: Página sobre a empresa.
    - `contact.html`: Página de contato.
    - `schedule_visit.html`: Página para agendamento de visitas.
  - **private/**: Páginas restritas.
    - `admin_dashboard.html`: Painel de administração.
- **script/**: Contém scripts JavaScript e PHP.
  - **js/**: Scripts JavaScript para o frontend.
    - `main.js`: Script principal do site.
    - `schedule.js`: Script específico para a funcionalidade de agendamento.
    - **utils/**: Funções utilitárias.
      - `validation.js`: Script para validação de formulários.
  - **php/**: Scripts PHP para o backend.
    - `db_connect.php`: Script para conexão com o banco de dados MariaDB.
    - `schedule_visit.php`: Script para processar o agendamento de visitas.
- **style/**: Contém arquivos CSS.
  - `main.css`: Estilos principais do site.
  - `schedule.css`: Estilos específicos para a página de agendamento.
- **tests/**: Contém testes unitários e de integração.
  - `test_schedule.php`: Testes para a funcionalidade de agendamento.

## Tecnologias Utilizadas

- PHP (Backend)
- JavaScript (Frontend)
- HTML
- CSS
- MariaDB
- Apache2 (Servidor Web)

## Como Executar

1. Clone o repositório.
2. Configure o banco de dados MariaDB.
3. Configure a conexão com o banco de dados no arquivo `script/php/db_connect.php`.
4. Abra o arquivo `index.html` no navegador para acessar o site.

## Funcionalidades

- Agendamento de visitas.
- Painel de administração para gerenciar agendamentos.
- Página de contato.
- Página sobre a empresa.

## Licença

Este projeto é licenciado sob a Licença GPL-3.0 - veja o arquivo [LICENSE](LICENSE) para mais detalhes.