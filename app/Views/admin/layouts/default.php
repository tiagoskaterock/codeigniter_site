<?php 

echo $this->include('website/includes/header');

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

echo $this->include('website/includes/footer');
echo $this->include('website/includes/scripts');