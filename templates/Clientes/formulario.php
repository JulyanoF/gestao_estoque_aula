<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?= $tipo ?> de Cliente</h3>
                <?= $this->Html->link(__('Voltar'), ['action' => 'index'], ['class' => 'button float-right']) ?>
            </div>
            <!-- /.card-header -->
            <?= $this->Form->create($cliente) ?>
            <div class="card-body">
                <?= $this->element('form/input', [
                    'placeholder' => 'Nome',
                    'name'        => 'nome',
                    'value'       => $cliente->nome,
                ]) ?>
                <?= $this->element('form/email', [
                    'placeholder' => 'E-mail',
                    'name'        => 'email',
                    'value'       => $cliente->email,
                ]) ?>
                <?= $this->element('form/input', [
                    'placeholder' => 'Telefone',
                    'name'        => 'telefone',
                    'value'       => $cliente->telefone,
                ]) ?>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
            <?= $this->Form->end() ?>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- <div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Clientes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="clientes form content">
            <?= $this->Form->create($cliente) ?>
            <fieldset>
                <legend><?= __('Add Cliente') ?></legend>
                <?php
                echo $this->Form->control('nome');
                echo $this->Form->control('email');
                echo $this->Form->control('telefone');
                echo $this->Form->control('excluido');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div> -->