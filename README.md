# Laravel Frontend Study 🧠🎨

> Projeto pessoal para documentar e praticar o aprendizado de frontend com Laravel, usando Blade, Tailwind CSS, Alpine.js e Vite.

## 📚 Objetivo

Aprender frontend com Laravel de forma **guiada, prática e consciente**, aplicando os seguintes pilares:

- Blade Templates e componentização
- Tailwind CSS para estilização moderna
- Alpine.js para interações leves
- Vite para build e hot reload no ambiente dev

## 🚀 Etapas do Estudo

Checklist completo [aqui](#checklist-de-estudo).

## 🛠 Tecnologias Usadas

- Laravel 12
- Blade
- Tailwind CSS
- Alpine.js
- Vite

## 🧱 Estrutura

```bash
resources/views/
├── layouts/      → Layouts base com @extends e @section
├── components/   → Componentes Blade reutilizáveis
└── pages/        → Páginas do projeto
```

---

## ✅ Checklist de Estudo

Progresso de estudo esperado:

## 🛠️ 0. Instalação do Projeto (Compreendendo cada passo)

- [ ] Entender a diferença entre `laravel new` e `composer create-project`
- [ ] Instalar Laravel via `composer create-project laravel/laravel front-laravel`
- [ ] Explicar o que é o `.env` e como ele configura o ambiente
- [ ] Rodar `php artisan serve` e entender o que o Artisan faz
- [ ] Ver o projeto rodando em `http://localhost:8000`
- [ ] Configurar o banco (mesmo que ainda não vá usar) para praticar `.env`
- [ ] Instalar dependências via `npm install` (entender o que é o `package.json`)
- [ ] Rodar `npm run dev` e entender o papel do Vite no frontend
- [ ] Confirmar que o Vite está injetando o CSS e JS com HMR

---

## 📁 1. Estrutura do Frontend no Laravel (Blade e Views)

- [ ] Entender o que é o Blade e por que ele existe
- [ ] Compreender a função do `resources/views`
- [ ] Criar um layout base com `@extends` e `@section`
- [ ] Explicar o que é e como usar o `@yield`
- [ ] Criar um layout real com cabeçalho, conteúdo e rodapé reutilizáveis
- [ ] Criar uma view estendida a partir do layout
- [ ] Entender e aplicar o `@include` para componentes reutilizáveis

---

## 🎨 2. Estilização com Tailwind CSS

- [ ] Por que Tailwind é usado em projetos Laravel modernos
- [ ] Como Tailwind funciona por trás (PostCSS, purge etc.)
- [ ] Ver onde Tailwind está configurado (`tailwind.config.js`)
- [ ] Criar uma página com espaçamento, cores e tipografia usando Tailwind
- [ ] Aprender e aplicar responsividade com `sm:`, `md:` etc.
- [ ] Criar botões com diferentes variantes (hover, active, focus)
- [ ] Usar classes utilitárias para layout: `flex`, `grid`, `gap`, `space-y`, etc.
- [ ] Customizar o `tailwind.config.js` com cores e fontes personalizadas

---

## ⚡ 3. Alpine.js (Interatividade leve)

- [ ] Por que usar Alpine.js no lugar de JS puro ou Vue completo
- [ ] Criar um componente com `x-data`
- [ ] Mostrar/ocultar elementos com `x-show`
- [ ] Lidar com eventos: `x-on:click`, `x-on:submit`
- [ ] Criar um modal simples com Alpine
- [ ] Aplicar `x-model` para inputs reativos
- [ ] Usar `x-transition` para animações suaves
- [ ] Separar Alpine em componentes reutilizáveis com `x-data="{ aberto: false }"`

---

## 🚀 4. Vite no Laravel

- [ ] O que é Vite e por que substituiu o Mix
- [ ] Como o Vite integra com Laravel (`vite.config.js`, `@vite`)
- [ ] Explicar o uso de `@vite('resources/css/app.css')`
- [ ] Configurar o Vite pra Tailwind e JS
- [ ] Importar assets corretamente com Vite
- [ ] Entender o HMR (Hot Module Replacement)

---

## 🛠️ 5. Componentização com Blade

- [ ] Criar componentes Blade reutilizáveis (`resources/views/components`)
- [ ] Passar dados para componentes (`:title="$variavel"`)
- [ ] Usar `{{ $slot }}` para conteúdos flexíveis
- [ ] Criar um botão customizado como componente
- [ ] Componentes aninhados: como reutilizar de forma modular

---

## 🧩 6. Projeto Final Front Laravel

- [ ] Criar uma SPA com páginas Blade e navegação simulada
- [ ] Criar layout com header fixo, sidebar e conteúdo principal
- [ ] Adicionar interações com Alpine (modal, menu mobile, toggle de tema)
- [ ] Estilizar tudo com Tailwind, responsivo e acessível
- [ ] Utilizar `@vite`, componentes Blade e Alpine juntos
- [ ] Criar uma tela de login visual (sem backend ainda)
- [ ] Criar uma página de dashboard visual com cards dinâmicos
- [ ] Simular loading com Alpine + Tailwind


---

## 📌 Observações

Cada parte do projeto será feita com explicações, boas práticas e foco em entender o “porquê” por trás de cada recurso.  
Este é um repositório de estudo contínuo.
