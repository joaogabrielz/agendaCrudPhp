<?php
  include_once('templates/header.php')
?>
  <div class="container">
  <?php include_once('templates/backBtn.html'); ?>
    <h1 id="main-title">Criar contato</h1>
    <form id="create-form" action="<?= $BASE_URL ?>/config/process.php" method="POST">

      <input type="hidden" name="type" value="create">

      <div class="form-group">
        <label for="name">Nome do contado: </label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Digite um nome" required>
      </div>

      <div class="form-group">
        <label for="phone">Telefone do contado: </label>
        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Digite um telefone" required>
      </div>

      <div class="form-group">
        <label for="observations">Observações: </label>
        <textarea type="tel" class="form-control" id="observations" name="observations" placeholder="Digite uma observação" rows="3"></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
  </div>
<?php
  include_once('templates/footer.php')
?>