<?= $this->extend('Admin/layout/principal'); ?>



<?= $this->section('titulo'); ?>
<?= $titulo; ?>
<?= $this->endSection(); ?>


<?= $this->section('estilos'); ?>


<?= $this->endSection(); ?>







<?= $this->section('conteudo'); ?>

<div class="row">

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-header bg-primary pb-0 pt-4">
                <h4 class="card-title text-white"><?= esc($titulo); ?></h4>
            </div>
            <div class="card-body">

                <?php if (session()->has('errors_model')): ?>

                    <ul>
                        <?php foreach (session('errors_model') as $error): ?>

                            <li class="text-danger" >
                                <?= $error ?>
                            </li>

                        <?php endforeach; ?>
                    </ul>

                <?php endif; ?>


                <?= form_open("admin/usuarios/atualizar/$usuario->id"); ?>


                <?= $this->include('Admin/Usuarios/form'); ?>
                <a href = "<?= site_url("admin/usuarios/show/$usuario->id"); ?>" class = "btn btn-light text-dark btn-sm ">
                    <i class = "mdi mdi-arrow-left btn-icon-prepend"></i>
                    Voltar
                </a>

                <?= form_close(); ?>
                </form>


            </div>
        </div>
    </div>

</div>





<?= $this->endSection(); ?>






<?= $this->section('scripts'); ?>

<script src="<?php echo site_url('admin/vendors/mask/jquery.mask.min.js'); ?>"></script>
<script src="<?php echo site_url('admin/vendors/mask/app.js'); ?>"></script>


<?= $this->endSection(); ?>
