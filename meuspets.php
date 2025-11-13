<?php
include 'includes/header_cliente.php'
    ?>
<main class="meuspets-container">
    <section class="meuspets-section">
        <!-- Cabeçalho da página -->
        <div class="meuspets-header">
            <h1 class="meuspets-title">Animais Cadastrados</h1>
            <button class="meuspets-btn-cadastrar" data-bs-toggle="modal" data-bs-target="#cadastroPetModal">Cadastrar
                Pets</button>
        </div>

        <!-- Cards dos pets -->
        <div class="meuspets-grid">
            <div class="meuspets-card">
                <div class="meuspets-card-content">
                    <h5 class="meuspets-pet-name">Rex</h5>
                    <p class="meuspets-pet-info">Espécie: Cachorro</p>
                    <p class="meuspets-pet-info">Raça: Pitbull</p>
                    <p class="meuspets-pet-info">Sexo: Macho</p>
                    <p class="meuspets-pet-info">Idade: 5 anos</p>
                    <p class="meuspets-pet-info">Peso: 5 quilos</p>
                    <p class="meuspets-pet-info">Observação: Cão Bravo</p>
                    <a href="#" class="meuspets-btn-editar" data-bs-toggle="modal" data-bs-target="#editarPetModal">Editar</a>
                </div>
            </div>
            <div class="meuspets-card">
                <div class="meuspets-card-content">
                    <h5 class="meuspets-pet-name">Rex</h5>
                    <p class="meuspets-pet-info">Espécie: Cachorro</p>
                    <p class="meuspets-pet-info">Raça: Pitbull</p>
                    <p class="meuspets-pet-info">Sexo: Macho</p>
                    <p class="meuspets-pet-info">Idade: 5 anos</p>
                    <p class="meuspets-pet-info">Peso: 5 quilos</p>
                    <p class="meuspets-pet-info">Observação: Cão Bravo</p>
                    <a href="#" class="meuspets-btn-editar" data-bs-toggle="modal" data-bs-target="#editarPetModal">Editar</a>
                </div>
            </div>
            <div class="meuspets-card">
                <div class="meuspets-card-content">
                    <h5 class="meuspets-pet-name">Rex</h5>
                    <p class="meuspets-pet-info">Espécie: Cachorro</p>
                    <p class="meuspets-pet-info">Raça: Pitbull</p>
                    <p class="meuspets-pet-info">Sexo: Macho</p>
                    <p class="meuspets-pet-info">Idade: 5 anos</p>
                    <p class="meuspets-pet-info">Peso: 5 quilos</p>
                    <p class="meuspets-pet-info">Observação: Cão Bravo</p>
                    <a href="#" class="meuspets-btn-editar" data-bs-toggle="modal" data-bs-target="#editarPetModal">Editar</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal para cadastrar o Pet -->
    <div class="modal fade" id="cadastroPetModal" tabindex="-1" aria-labelledby="cadastroPetModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #3e51fa;">
                    <h5 class="modal-title" id="cadastroPetModalLabel" style="color: white;">Cadastre um novo pet</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="inserir.php" method="POST">
                        <!-- Nome do Pet -->
                        <div class="mb-3">
                            <label for="petName" class="form-label">Nome do Pet</label>
                            <input type="text" class="form-control" id="petName" name="pet"
                                placeholder="Digite o nome do pet" required>
                        </div>

                        <!-- Espécie -->
                        <div class="mb-3">
                            <label for="petEspecie" class="form-label">Espécie</label>
                            <select class="form-control" id="petEspecie" name="especie" required>
                                <option value="" disabled selected>Selecione a espécie do pet</option>
                                <option value="Cachorro">Cachorro</option>
                                <option value="Gato">Gato</option>
                                <option value="Passaro">Pássaro/Ave</option>
                                <option value="Coelho">Coelho</option>
                                <option value="Rato">Hamster/Rato</option>
                                <option value="Outro">Outro</option>
                            </select>
                        </div>

                        <!-- Raça -->
                        <div class="mb-3">
                            <label for="petRaca" class="form-label">Raça</label>
                            <input type="text" class="form-control" id="petRaca" name="raca"
                                placeholder="Digite a raça do pet" required>
                        </div>

                        <!-- Idade -->
                        <div class="mb-3">
                            <label for="petIdade" class="form-label">Idade</label>
                            <input type="text" class="form-control" id="petIdade" name="idade"
                                placeholder="Digite a idade do pet" required>
                        </div>

                        <!-- Peso -->
                        <div class="mb-3">
                            <label for="petPeso" class="form-label">Peso</label>
                            <input type="text" class="form-control" id="petPeso" name="peso" placeholder="Digite o peso"
                                required>
                        </div>

                        <!-- Sexo -->
                        <div class="mb-3">
                            <label for="petSexo" class="form-label">Sexo</label>
                            <select class="form-control" id="petSexo" name="sexo" required>
                                <option value="" disabled selected>Selecione o sexo do pet</option>
                                <option value="Macho">Macho</option>
                                <option value="Fêmea">Fêmea</option>
                            </select>
                        </div>

                        <!-- Campo Opcional -->
                        <div class="mb-3">
                            <label for="petObs" class="form-label">Observação (campo não obrigatório)</label>
                            <input type="text" class="form-control" id="petObs" name="obs">
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary"
                                style="background-color: #3e51fa; border-color: #3e51fa;">Cadastrar</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                style="background-color: #6c757d;">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal com as Info do Pet -->
    <div class="modal fade" id="editarPetModal" tabindex="-1" aria-labelledby="editarPetModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #3e51fa;">
                    <h5 class="modal-title" id="editarPetModalLabel" style="color: white;">Editar as informações do pet</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="inserir.php" method="POST">
                        <!-- Nome do Pet -->
                        <div class="mb-3">
                            <label for="petName" class="form-label">Nome do Pet</label>
                            <input type="text" class="form-control" id="petName" name="pet"
                                placeholder="Digite o nome do pet" required>
                        </div>

                        <!-- Espécie -->
                        <div class="mb-3">
                            <label for="petEspecie" class="form-label">Espécie</label>
                            <select class="form-control" id="petEspecie" name="especie" required>
                                <option value="" disabled selected>Selecione a espécie do pet</option>
                                <option value="Cachorro">Cachorro</option>
                                <option value="Gato">Gato</option>
                                <option value="Passaro">Pássaro/Ave</option>
                                <option value="Coelho">Coelho</option>
                                <option value="Rato">Hamster/Rato</option>
                                <option value="Outro">Outro</option>
                            </select>
                        </div>

                        <!-- Raça -->
                        <div class="mb-3">
                            <label for="petRaca" class="form-label">Raça</label>
                            <input type="text" class="form-control" id="petRaca" name="raca"
                                placeholder="Digite a raça do pet" required>
                        </div>

                        <!-- Idade -->
                        <div class="mb-3">
                            <label for="petIdade" class="form-label">Idade</label>
                            <input type="text" class="form-control" id="petIdade" name="idade"
                                placeholder="Digite a idade do pet" required>
                        </div>

                        <!-- Peso -->
                        <div class="mb-3">
                            <label for="petPeso" class="form-label">Peso</label>
                            <input type="text" class="form-control" id="petPeso" name="peso" placeholder="Digite o peso"
                                required>
                        </div>

                        <!-- Sexo -->
                        <div class="mb-3">
                            <label for="petSexo" class="form-label">Sexo</label>
                            <select class="form-control" id="petSexo" name="sexo" required>
                                <option value="" disabled selected>Selecione o sexo do pet</option>
                                <option value="Macho">Macho</option>
                                <option value="Fêmea">Fêmea</option>
                            </select>
                        </div>

                        <!-- Campo Opcional -->
                        <div class="mb-3">
                            <label for="petObs" class="form-label">Observação (campo não obrigatório)</label>
                            <input type="text" class="form-control" id="petObs" name="obs">
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary"
                                style="background-color: #3e51fa; border-color: #3e51fa;">Atualizar</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                style="background-color: #6c757d;">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include 'includes/footer.php'
?>