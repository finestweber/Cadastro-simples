
<div style="display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh; 
    padding: 40px;
    border-radius: 2px;">	
<form style="" action="?page=salvar" method="POST">
	<h4 style="text-align: center;">cadastro</h4>
<input type="hidden" name="acao" value="cadastro">
	
<div class="form-floating mb-4" >
  <input type="text" class="form-control" id="floatingInput" placeholder="Digite seu mome" name="nome">
  <label for="floatingInput" >Digite seu nome</label>
</div>
<div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
  <label for="floatingInput">Email address</label>
</div >
<form class="form-floating">
<div class="form-floating">
  <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="senha">
  <label for="floatingPassword">Password</label>
</div>
<div class="form-floating mb-3" style="margin-top: 10px;">
  <input type="date" class="form-control" id="floatingInput" name="data_nasc" >
  <label for="floatingInput"></label>
</div>
<button type="button" class="btn btn-primary">ENVIAR</button>
</div>
</form>
</div>