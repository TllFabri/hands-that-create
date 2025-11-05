fetch('php/get_produtos.php')
  .then(res => res.json())
  .then(produtos => {
    const lista = document.getElementById('lista-produtos');
    lista.innerHTML = '';
    produtos.forEach(p => {
      const card = document.createElement('div');
      card.classList.add('produto');
      card.innerHTML = `
        <img src="img/${p.imagem}" alt="${p.nome}">
        <h3>${p.nome}</h3>
        <p>R$ ${p.preco}</p>
        <a href="produto.html?id=${p.id}" class="btn">Detalhes</a>
        <button onclick="excluirProduto(${p.id})">Excluir</button>
      `;
      lista.appendChild(card);
    });
  });

function excluirProduto(id) {
  if (confirm('Tem certeza que deseja excluir este produto?')) {
    fetch(`php/excluir_produto.php?id=${id}`)
      .then(res => res.json())
      .then(() => location.reload());
  }
}
