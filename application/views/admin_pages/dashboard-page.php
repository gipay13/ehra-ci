
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Dashboard</h1>
				</div>
			</div>
		</div>
	</div>

	<section class="content">
		<div class="container-fluid">
			<div class="row">

				<div class="col-lg-4 col-6">
					<div class="small-box bg-info">
						<div class="inner">
							<h3><?= $pertanyaan ?></h3>
							<p>Pertanyaan</p>
						</div>
						<div class="icon">
							<i class="ion ion-bag"></i>
						</div>
						<a href="<?= base_url('admin/pertanyaan') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>

				<div class="col-lg-4 col-6">
					<div class="small-box bg-success">
						<div class="inner">
							<h3><?= $kategori ?></h3>
							<p>Kategori Pertanyaan</p>
						</div>
						<div class="icon">
							<i class="ion ion-stats-bars"></i>
						</div>
						<a href="<?= base_url('admin/kategori') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>

				<div class="col-lg-4 col-6">
					<div class="small-box bg-warning">
						<div class="inner">
							<h3><?= $hasil ?></h3>
							<p>Jumlah Survey</p>
						</div>
						<div class="icon">
							<i class="ion ion-person-add"></i>
						</div>
						<a href="<?= base_url('admin/hasil') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>

			</div>
		</div>
	</section>			
