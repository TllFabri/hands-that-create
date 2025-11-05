const id = getParam('id');

if (id) {
  document.getElementById('titulo-form').innerText = 'Editar Produto';
  fetch(`php/get_produto.php?id=${id}`)
    .then(res => res.json())
    .then(p => {
      document.getElementById('id').value = p.id;
      document.getElementById('nome').value = p.nome;
      document.getElementById('preco').value = p.preco;
      document.getElementById('descricao').value = p.descricao;
      document.getElementById('imagem').value = p.imagem;
    });
}

document.getElementById('form-produto').addEventListener('submit', e => {
  e.preventDefault();
  const formData = new FormData(e.target);

  fetch('php/salvar_produto.php', {
    method: 'POST',
    body: formData
  })
  .then(res => res.json())
  .then(res => {
    alert(res.mensagem);
    window.location.href = 'produtos.html';
  })
  .catch(() => alert('Erro ao salvar produto.'));
});
