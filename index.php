<!DOCTYPE >
<html>
	<head>
		<title>PHP - Procedural</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/table.css" />

		<!-- Link do Bootstrap e Font Awesome (coloque no <head> do seu arquivo) -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

		<!-- conexao para pagina toda  -->
		<?php require_once './src/conexao.php'; ?>

	</head>
	<body class="is-preload">

		<!-- Header -->
			<div id="header">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<h1 id="title">Jonathan Luis</h1>
							<p>Desenvolvedor de Software</p>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="#top" id="top-link"><span class="icon solid fa-home">Home</span></a></li>
								<li><a href="#tabela" id="portfolio-link"><span class="icon solid fa-th">Cadastro / Tabela</span></a></li>
								<li><a href="#about" id="about-link"><span class="icon solid fa-user">Sobre</span></a></li>
								<li><a href="#contact" id="contact-link"><span class="icon solid fa-envelope">Contato</span></a></li>
							</ul>
						</nav>
				</div>

				<div class="bottom">

					<!-- Social Icons -->
					<ul class="icons">
						<li>
							<a href="https://github.com/DevJhoow" class="icon brands fa-github" target="_blank">
								<span class="label">GitHub</span>
							</a>
						</li>
						<li>
							<a href="https://www.linkedin.com/in/jonathanluis/" class="icon brands fa-linkedin" target="_blank">
								<span class="label">LinkedIn</span>
							</a>
						</li>
						<li>
							<a href="mailto:jonathan.luisrodrigues@hotmail.com" class="icon solid fa-envelope">
								<span class="label">Email</span>
							</a>
						</li>
					</ul>

				</div>

			</div>

		<!-- Main -->
			<div id="main">

				<!-- Introducao do Sistema Crud  -->
					<section id="top" class="one dark cover">
						<div class="container">

							<header>
								<h2>
									Sistema CRUD desenvolvido em PHP procedural
								</h2>
								<p>
									Demonstração prática das operações de banco de dados — criando, listando, editando e excluindo dados.
								</p>
								<p>
									Entenda como funciona o CRUD — a base de qualquer aplicação dinâmica!
								</p>
							</header>


							<footer>
								<a href="#tabela" class="button scrolly">Confira comigo</a>
							</footer>

						</div>
					</section>

				<!-- Formulário -->
				 <?php
				 	require_once './src/cadastrar_cliente.php';
				 ?>
					<section id="cadastro" class="py-5 bg-light">
					<div class="container d-flex justify-content-center">
						<div class="card shadow p-4" style="max-width: 500px; width: 100%;">
						<h4 class="text-center mb-4">
							<i class="fa-solid fa-user-plus"></i> Cadastrar Pessoa
						</h4>

						<form action="" method="POST">
							<div class="mb-3 input-group input-group-sm">
							<span class="input-group-text"><i class="fa-solid fa-user"></i></span>
							<input type="text" name="nome" class="form-control" placeholder="Nome" required>
							</div>

							<div class="mb-3 input-group input-group-sm">
							<span class="input-group-text"><i class="fa-solid fa-user-tag"></i></span>
							<input type="text" name="sobrenome" class="form-control" placeholder="Sobrenome" required>
							</div>

							<div class="mb-3 input-group input-group-sm">
							<span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
							<input type="tel" name="telefone" class="form-control" placeholder="Telefone" required>
							</div>

							<div class="mb-3 input-group input-group-sm">
							<span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
							<input type="email" name="email" class="form-control" placeholder="E-mail" required>
							</div>

							<button type="submit" class="btn btn-primary w-100">
							<i class="fa-solid fa-floppy-disk"></i> Salvar
							</button>
						</form>
						</div>
					</div>
					</section>

					<!-- Tabela -->
					<section id="tabela" class="py-5">
					<div class="container">

						<header class="text-center mb-4">
						<h2><i class="fa-solid fa-users"></i> Pessoas Cadastradas</h2>
						<p class="text-muted">Aqui será exibida a lista de pessoas registradas no sistema.</p>
						</header>

						<div class="table-responsive shadow-sm">
						<table class="table table-striped table-bordered text-center align-middle">
							<thead class="table-dark">
							<tr>
								<th><i class="fa-solid fa-hashtag"></i> ID</th>
								<th><i class="fa-solid fa-user"></i> Nome</th>
								<th><i class="fa-solid fa-user-tag"></i> Sobrenome</th>
								<th><i class="fa-solid fa-phone"></i> Telefone</th>
								<th><i class="fa-solid fa-envelope"></i> E-mail</th>
								<th><i class="fa-solid fa-calendar-days"></i> Data de Cadastro</th>
								<th><i class="fa-solid fa-gear"></i> Ações</th>
							</tr>
							</thead>
							
							<?php 
							// mostrar mensagem de sucesso ao Editar
							if (isset($_GET['msg']) && $_GET['msg'] == 'atualizado'): ?>
								<div class="alert alert-warning text-center" id="msg-editado">
									Registro atualizado com sucesso!
								</div>
							<?php endif; ?>

							<?php
							// mostrar mensagem de sucesso ao deletar
							if (isset($_GET['msg']) && $_GET['msg'] == 'deletado'): ?>
								<div class="alert alert-danger text-center" id="msg-deletado">
									Registro deletado com sucesso!
								</div>
							<?php endif; ?>

							<tbody>

								<?php
									require_once './src/exibir.php';

									while($pessoa = $dados->fetch_assoc()) : 

									$data_formatada = date("d/m/Y", strtotime($pessoa['data']));
									$telefone_formatado = formatar_telefone($pessoa['telefone']);
									$nome_formatado = formatar_nome($pessoa['nome']);
									$sobrenome_formatado = formatar_nome($pessoa['sobrenome']);
								?>

									<tr>
										<td><?= $pessoa['id'] ?></td>
										<td><?= $nome_formatado ?></td>
										<td><?= $sobrenome_formatado ?></td>
										<td><?= $telefone_formatado ?></td>
										<td><?= $pessoa['email'] ?></td>
										<td><?= $data_formatada ?></td>
										
										<td>
										<!-- EDITAR -->
										<a href="src/editar.php?id=<?= $pessoa['id'] ?>" class="btn btn-sm btn-warning me-1">
											<i class="fa-solid fa-pen"></i> Editar
										</a>

										<!-- DELETAR -->
										<a href="src/deletar.php?id=<?php echo $pessoa['id']; ?>" class="btn btn-sm btn-danger"
											onclick="return confirm('Tem certeza que deseja deletar?');">
												<i class="fa-solid fa-trash"></i> Excluir
										</a>
										</td>
									</tr>
								<?php endwhile ;?>

							</tbody>
							</table>
							</div>
							<?php
							if ($dados->num_rows === 0):
							?>
								<div class="text-center py-5">
									<i class="fa-solid fa-box-open fa-4x text-muted mb-3"></i>
									<h3 class="text-muted">Nenhum registro encontrado</h3>
									<p class="text-muted">Ainda não há pessoas cadastradas no sistema.</p>
								</div>

							<?php
							// impedir a tabela de aparecer:
							endif;
							?>
						</div>
						</section>

					<!-- About Me -->
					<section id="about" class="three">
						<div class="container">

							<header>
								<h2>Sobre o CRUD</h2>
							</header>

							<p>
								Muitas pessoas pensam que um CRUD serve apenas para cadastrar dados — mas ele vai muito além disso.  
								CRUD é a base de praticamente tudo o que usamos no dia a dia digital.  
								Quando fazemos uma postagem, enviamos uma mensagem, compartilhamos uma foto ou atualizamos um perfil, estamos realizando operações CRUD — 
								<strong>Create, Read, Update e Delete</strong> (Criar, Ler, Atualizar e Excluir).
							</p>

							<p>
								Entender o CRUD é entender o funcionamento essencial por trás de redes sociais, lojas virtuais, sistemas administrativos e muito mais.  
								Este projeto foi criado justamente para demonstrar isso de forma simples e prática, mostrando como essas operações são o coração de qualquer aplicação dinâmica.
							</p>

						</div>
					</section>

					<!-- Contact -->
					<section id="contact" class="four">
						<div class="container">

							<header>
								<h2>Contato</h2>
							</header>

							<p>Quer conversar sobre projetos, ideias ou oportunidades?  
							Fique à vontade para entrar em contato pelos canais abaixo:</p>

							<div class="contact-info">
								<p><strong>📍 Localização:</strong> Campinas – SP</p>
								<p><strong>📧 E-mail:</strong> <a href="mailto:jonathan.luisrodrigues@hotmail.com">jonathan.luisrodrigues@hotmail.com</a></p>
								<p><strong>📱 Telefone:</strong> <a href="tel:+5519988630793">(19) 98863-0793</a></p>
							</div>

						</div>
					</section>

			</div>

			<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="copyright">
						<li>© 2025 | Desenvolvido por <strong>Jonathan Luís Rodrigues</strong>
							<a href="https://github.com/DevJhoow" target="_blank">GitHub</a> • 
							<a href="https://www.linkedin.com/in/jonathanluis/" target="_blank">LinkedIn</a>
						</li>
					</ul>
				</div>
			</footer>

			<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/cadsatro.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

			<!-- funcoes para abrir e fechar o modal  -->
			<script>
				function abrirModalEditar(id) {

					document.getElementById('modalEditar').style.display = 'flex';

					// carrega o form-editar.php dentro do modal
					fetch("src/form-editar.php?id=" + id)
						.then(response => response.text())
						.then(html => {
							document.getElementById('conteudoModalEditar').innerHTML = html;
						});
				}

				function fecharModal() {
					document.getElementById('modalEditar').style.display = 'none';
				}
			</script>
	</body>
</html>