<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Cadastro de Interesse</h1>
        </div>
    </div>
    <div class="row">
    <form action="respform.php" method="post">
            <div class="mb-3">
                <label for="inputNome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="inputNome" name="nome"> <br>
            </div>
            <div class="mb-3">
                <label for="InputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="InputEmail1" name="email"> <br>
            </div>
            <div class="mb-3">
                <label for="InputTelefone" class="form-label">Telefone</label>
                <input type="telefone" class="form-control" id="InputTelefone" name="telefone"> <br>
            </div>
            <select class="form-select" aria-label="Default select example" name="curso">
                <option selected>Curso</option>
                <option value="Técnico em Informática">Técnico em Informática</option>
                <option value="Técnico Computação Gráfica">Técnico Computação Gráfica</option>
                <option value="Técnico Design Gráfico">Técnico Design Gráfico</option> <br>
            </select>
            <div class="mb-3 form-check">
                <h3>Periodo</h3>
                <input type="checkbox" class="form-check-input" id="checkM" name="periodo[]" value="Manhã">
                <label class="form-check-label" for="checkM">Manhã</label><br>
                <input type="checkbox" class="form-check-input" id="checkT" name="periodo[]" value="Tarde">
                <label class="form-check-label" for="checkT">Tarde</label><br>
                <input type="checkbox" class="form-check-input" id="checkN" name="periodo[]" value="Noite">
                <label class="form-check-label" for="checkN">Noite</label><br>
                <input type="checkbox" class="form-check-input" id="checkS" name="periodo[]" value="Sabado">
                <label class="form-check-label" for="checkDesign">Sábado(Manhã)</label><br> <br>
                
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</div>