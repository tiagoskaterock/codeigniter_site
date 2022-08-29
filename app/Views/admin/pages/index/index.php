<?php define('INCLUDES', 'admin/pages/index/includes/') ?>

<?= $this->extend('admin/layouts/default') ?>

<?= $this->section('title') ?>Admin<?= $this->endSection('title') ?>

<?= $this->section('content') ?>

<div class="page-wrapper">

	<?= $this->include(INCLUDES . 'breadcrumb') ?>

	<div class="container-fluid">

		<?= $this->include(INCLUDES . 'sales_chart1') ?>

		<?= $this->include(INCLUDES . 'sales_chart2') ?>

	</div>

	<?= $this->include(INCLUDES . 'table') ?>

	<?= $this->include(INCLUDES . 'recent_blog') ?>

</div>

<?= $this->endSection('content') ?>