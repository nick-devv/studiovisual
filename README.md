# Bem vindo 👋

## 💻 Sobre o projeto

Esse teste de Front-end foi desenvolvido em aproximadamente um dia de trabalho comercial (8 horas). O design do front-end implementado foi desenvolvido em aproximadamente 5h.

Esse projeto também pode ser visualizado no servidor particular: [Teste Front-end](https://gabrielsousa.com.br/studiovisual/)

## 🛠️ Tecnologias

As linguagens e tecnologias utilizadas foram: HTML5, CSS3, Jquery, AJAX, gulp (npm) e PHP.

## ⚙ Pré-requisitos

Para visualizar você precisa de um browser, como o [Google Chrome](https://nodejs.org/en/) e de uma solução para instalação de servidor local, como o [MAMP](https://www.mamp.info/en/windows/).

O único plugin necessário para rodar o projeto é o [CFS (Custom Field Suite)](https://br.wordpress.org/plugins/custom-field-suite/).

Já para começar a editar, você vai precisar ter instalado em sua máquina as seguintes ferramentas:

[Node.js](https://nodejs.org/en/). 
[NPM](https://nodejs.org/en/). 
[Gulp](https://nodejs.org/en/). 

Além disto é bom ter um editor, como o [VSCode](https://code.visualstudio.com/)

## 🚀 Como executar

1. Para começar, rode o servidor local e configure um banco de dados para associar ao wordpress do projeto. O banco de dados está na raiz do projeto (database.sql).
2. Depois de importar o banco de dados correto, ative o plugin CFS (Custom Field Suite)
3. Ative o tema criado do wordpress, Teste de Front-end

Uma segunda opção, também disponível na raiz do projeto (allinone.wordpress) é importar através do plugin All-in-one Migration.
Para isso, instale o plugin All In One Migration, rode um emulador de url para que o caminho do wp instalado fique no formato "http://localhost:8888/teste-front-wp/" e importe o arquivo na tab "importar" do plugin.

O projeto ja pode ser visualizado, contudo, para edita-lo, continue com os passos abaixo:

1. Na pasta raiz, rode o comando "npm install" no seu terminal de preferencia
2. Na pasta raiz, rode o comando "gulp" no seu terminal de preferencia

Pronto! Agora, ao editar os arquivos css (src/styles/main.css) ou  js (src/scripts/util.js) eles serão automaticamente compilados para a pasta assets.

## 🦸 Autor

<a href="https://nicolas--issaho.000webhostapp.com/">

### Nicolas Issaho

</a>

[![Gmail Badge](https://img.shields.io/badge/-nicolasissaho@gmail.com-c14438?style=flat-square&logo=Gmail&logoColor=white&link=mailto:nicolasissaho@gmail.com)](mailto:nicolasissaho@gmail.com)