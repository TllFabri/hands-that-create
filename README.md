# 🧶 MÃOS QUE CRIAM

Um catálogo digital para exposição e gerenciamento de produtos artesanais, desenvolvido em HTML, CSS e JavaScript. O projeto permite visualizar, cadastrar e editar produtos feitos à mão, promovendo o trabalho de artesãos locais.

## 📋 Estrutura do Projeto

```
/
├── index.html          # Página inicial com introdução e chamada para os produtos
├── produtos.html       # Lista todos os produtos cadastrados
├── produto.html        # Exibe os detalhes de um produto específico
├── cadastro.html       # (não incluído aqui, mas mencionado no código) Cadastro e edição de produtos
├── css/
│   └── style.css       # Estilos gerais do site
├── js/
│   ├── util.js         # Funções utilitárias (ex: leitura de parâmetros da URL)
│   └── produtos.js     # Script responsável por listar os produtos
├── php/
│   └── get_produto.php # Retorna informações de um produto em formato JSON
└── img/                # Imagens dos produtos
```

## 💡 Funcionalidades

- Página inicial com apresentação e link para os produtos  
- Listagem de produtos com carregamento dinâmico via JavaScript  
- Visualização de detalhes de cada item, incluindo imagem, descrição e preço  
- Edição e cadastro de novos produtos (página `cadastro.html`)  
- Integração com PHP e JSON para comunicação com o backend

## 🛠️ Tecnologias Utilizadas

- HTML5  
- CSS3  
- JavaScript (ES6)  
- PHP (backend simples)

## 🚀 Como Executar

1. Clone o repositório:
   ```bash
   git clone https://github.com/seu-usuario/maos-que-criam.git
   ```

2. Inicie um servidor local (necessário para rodar o PHP):
   ```bash
   php -S localhost:8000
   ```

3. Acesse no navegador:
   ```
   http://localhost:8000/index.html
   ```

## 📸 Pré-visualização

![Captura de tela da página inicial](img/screenshot-home.png)

## 📄 Licença

Este projeto é de uso livre para fins educacionais e não possui restrições comerciais.

---

Desenvolvido com dedicação para valorizar o artesanato local.
