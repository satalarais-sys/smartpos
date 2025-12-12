<?php $this->load->view('layout/header', $data); ?>
<?php $this->load->view('layout/topbar'); ?>
<?php $this->load->view('layout/sidebar'); ?>

<div class="content-wrapper">
    <?php $this->load->view($page, $data); ?>
</div>

<?php $this->load->view('layout/footer'); ?>
