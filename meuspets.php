<?php
    include 'includes/header_cliente.php';
    include 'includes/conexao.php';
    session_start();

    // Temporário (depois tu usa $_SESSION['id_dono'])
    $id_dono = 1;

    // Buscar pets do dono logado
    $stmt = $pdo->prepare("SELECT * FROM Animal WHERE idDono_animal = ?");
    $stmt->execute([$id_dono]);
    $pets = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <main class="meuspets-container">
        <section class="meuspets-section">
            <!-- Cabeçalho da página -->
            <div class="meuspets-header">
                <h1 class="meuspets-title">Animais Cadastrados</h1>
                <button class="meuspets-btn-cadastrar" data-bs-toggle="modal" data-bs-target="#cadastroPetModal">
                    Cadastrar Pets
                </button>
            </div>

            <!-- Cards dos pets -->
            <div class="meuspets-grid">
                <?php if (count($pets) > 0): ?>
                    <?php foreach ($pets as $pet): ?>
                        <div class="meuspets-card">
                            <div class="meuspets-card-content">
                                <h5 class="meuspets-pet-name"><?= htmlspecialchars($pet['Nome']) ?></h5>
                                <p class="meuspets-pet-info">Espécie: <?= htmlspecialchars($pet['Especie']) ?></p>
                                <p class="meuspets-pet-info">Raça: <?= htmlspecialchars($pet['Raca']) ?></p>
                                <p class="meuspets-pet-info">Sexo: <?= htmlspecialchars($pet['Sexo']) ?></p>
                                <p class="meuspets-pet-info">Idade: <?= htmlspecialchars($pet['Idade']) ?> anos</p>
                                <p class="meuspets-pet-info">Peso: <?= htmlspecialchars($pet['Peso']) ?> kg</p>
                                <p class="meuspets-pet-info">Observação: <?= htmlspecialchars($pet['Observacao']) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p style="text-align:center;">Nenhum pet cadastrado ainda 💔</p>
                <?php endif; ?>
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
                        <form action="crud/inserir_pet.php" method="POST">
                            <div class="mb-3">
                                <label for="petName" class="form-label">Nome do Pet</label>
                                <input type="text" class="form-control" id="petName" name="Nome" required>
                            </div>

                            <div class="mb-3">
                                <label for="petEspecie" class="form-label">Espécie</label>
                                <select class="form-control" id="petEspecie" name="Especie" required>
                                    <option value="" disabled selected>Selecione a espécie</option>
                                    <option value="Cachorro">Cachorro</option>
                                    <option value="Gato">Gato</option>
                                    <option value="Pássaro">Pássaro</option>
                                    <option value="Coelho">Coelho</option>
                                    <option value="Hamster">Hamster</option>
                                    <option value="Outro">Outro</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="petRaca" class="form-label">Raça</label>
                                <input type="text" class="form-control" id="petRaca" name="Raca" required>
                            </div>

                            <div class="mb-3">
                                <label for="petIdade" class="form-label">Idade</label>
                                <input type="number" class="form-control" id="petIdade" name="Idade" required>
                            </div>

                            <div class="mb-3">
                                <label for="petPeso" class="form-label">Peso (kg)</label>
                                <input type="text" class="form-control" id="petPeso" name="Peso" required>
                            </div>

                            <div class="mb-3">
                                <label for="petSexo" class="form-label">Sexo</label>
                                <select class="form-control" id="petSexo" name="Sexo" required>
                                    <option value="" disabled selected>Selecione</option>
                                    <option value="Macho">Macho</option>
                                    <option value="Fêmea">Fêmea</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="petObs" class="form-label">Observação (opcional)</label>
                                <input type="text" class="form-control" id="petObs" name="Observacao">
                            </div>

                            <input type="hidden" name="idDono_animal" value="<?= $id_dono ?>">

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary"
                                    style="background-color: #3e51fa;">Cadastrar</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

<style>

</style>

<?php include 'includes/footer.php'; ?>
