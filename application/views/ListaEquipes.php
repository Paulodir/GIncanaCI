<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= $this->config->base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Lista de Equipes</li>
        </ol>
    </nav> 
    <?= ($this->session->flashdata('retorno')) ? $this->session->flashdata('retorno') : ''; ?>
    <?= validation_errors(); ?>
    <div class="table-responsive">
        <table class="table table-striped">        
            <thead class="thead-dark">
                <tr>
                    <th>Nome</th>
                    <th>Imagem</th>
                    <th>Ações</th>
                </tr>
            </thead>        
            <tbody>
                <?php
                if (count($equipes) > 0) {
                    foreach ($equipes as $e) {
                        echo '<tr>';
                        echo '<td>' . $e->nome . '</td>';
                        if (!empty($e->imagem)) {
                            echo '<td><img src="../uploads/' . $e->imagem . '" width="50"></td>';
                        } else {
                            echo '<td><img src="data:image/jpeg;base64,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" width="50"></td>';
                        }
                        echo '<td> <div class="container-fluid">';
                        echo '<a href="' . $this->config->base_url() . 'Equipe/alterar/' . $e->id . '" class="btn btn-sm btn-outline-secondary mr-2" ><i class="fas fa-pencil-alt"></i> Alterar</a>';
                        if ($e->membros < 1) {
                            echo '<a href="' . $this->config->base_url() . 'Equipe/deletar/' . $e->id . '" class="btn btn-sm btn-outline-secondary" ><i class="fas fa-trash-alt"></i> Deletar</a>';
                        } else {
                            echo '<a href="' . base_url('Equipe/mensagem/') . '" class="btn btn-sm btn-dark" ><i class="fas fa-trash-alt"></i> Deletar</a>';
                        }
                        echo '</div></td>';
                        echo '</tr>';
                    }
                } else {
                    echo '<tr><td colspan="6">Nenhuma Equipe foi cadastrada até o momento.</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>