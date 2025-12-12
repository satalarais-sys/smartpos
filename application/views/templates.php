<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/sidebar'); ?>
<?php $this->load->view('layout/topbar'); ?>

<div class="content-wrapper p-3">
    <?php $this->load->view($content); ?>
</div>

<?php $this->load->view('layout/footer'); ?>
