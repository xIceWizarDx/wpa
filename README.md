# Guia do Projeto: Laravel + Vue

Este projeto utiliza Laravel como backend e Vue 3 para o frontend, integrados pelo Inertia.js. A seguir, um resumo de como a aplicação está organizada.

## Estrutura de pastas

- **routes/** – contém os arquivos de rotas do Laravel. O `web.php` define as rotas públicas e carrega páginas Vue via `Inertia::render`.
- **resources/views/** – abriga `app.blade.php`, layout base que importa os assets gerados pelo Vite e serve de ponto de entrada para o Inertia.
- **resources/js/** – diretório principal do código Vue:
  - `app.ts` configura a aplicação Vue e registra plugins como o Inertia.
  - `pages/` possui as páginas que correspondem às rotas Laravel (ex.: `Welcome.vue`, `Dashboard.vue`).
  - `components/`, `layouts/` e `composables/` guardam componentes reutilizáveis, layouts e funções compartilhadas.
- **vite.config.ts** – configuração do Vite utilizada para compilar o frontend com suporte a Vue, Tailwind e Inertia.

## Fluxo de uma rota

1. Uma rota é declarada em `routes/web.php` ou em outros arquivos de rota. Por exemplo:
   ```php
   Route::get('/', function () {
       return Inertia::render('Welcome');
   })->name('home');
   ```
2. O método `Inertia::render` informa qual página Vue será carregada. O arquivo correspondente está em `resources/js/pages/Welcome.vue`.
3. O Inertia monta a aplicação dentro do template `resources/views/app.blade.php`, que faz a ligação entre Laravel e Vue e carrega os scripts gerados pelo Vite.

## Configuração e execução

1. Instale as dependências PHP e JavaScript:
   ```bash
   composer install
   npm install
   ```
2. Para ambiente de desenvolvimento, execute:
   ```bash
   npm run dev
   php artisan serve
   ```
   Existe também um script Composer que combina servidor PHP, fila e Vite:
   ```bash
   composer dev
   ```
3. A aplicação estará disponível em `http://localhost:8000` (padrão do `php artisan serve`).

## Testes e lint

- `composer test` executa os testes de PHP localizados em `tests/`.
- `npm run lint` utiliza ESLint para verificar e ajustar o código Vue/TypeScript.

Use este guia como referência rápida para entender como o Laravel e o Vue se integram neste projeto.
