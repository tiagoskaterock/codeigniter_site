<?php 

echo $this->include('admin/includes/header');

echo $this->include('admin/includes/aside');

if (session()->has('warning')) {
	?>
	<div class="warning container">
		<p class="alert alert-warning">
			<?= session('warning') ?>
		</p>
	</div>
	<?php
}

if (session()->has('info')) {
	?>
	<div class="info container">
		<p class="alert alert-info">
			<?= session('info') ?>
		</p>
	</div>
	<?php
}

echo $this->renderSection('content');

echo $this->include('admin/includes/footer');