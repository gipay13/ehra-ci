<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">Kategori Pertanyaan</h1>
			</div>
			<?php if ($this->session->userdata('level') == 1) { ?>
			<div class="col-sm-6">
				<ol class="float-sm-right">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus"></i> Tambah Kategori</button>
				</ol>
			</div>
			<?php } ?>
			<div class="col-sm-12 mt-3">
				<?= $this->session->flashdata('message'); ?>
			</div>
		</div>
	</div>
</div>

<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<table id="table" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Kode Kategori</th>
									<th>Judul Kategori</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $index = 1; ?>
								<?php foreach ($kategori as $k) { ?>
									<tr>
										<td><?= $index++ ?></td>
										<td><?= $k->category_code ?></td>
										<td><?= $k->category_name ?></td>
										<td>
											<!-- <a href="" id="edit" class="btn btn-success btn-xs" data-toggle="modal" data-target="#modal-default" data-id="<?= $k->id ?>" data-kode="<?= $k->category_code ?>" data-nama="<?= $k->category_name ?>">
												<i class="fas fa-edit mx-1"></i>
											</a> -->
											<?php if ($this->session->userdata('level') == 1) { ?>
											<a href="<?= base_url('kategori/delete/' . $k->id) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Anda Yakin?')"><i class="fas fa-trash mx-1"></i></a>
											<?php } ?>
										</td>
									</tr>
								<?php } ?>
							</tbody>
							<tfoot>
								<tr>
									<th>No</th>
									<th>Kode Kategori</th>
									<th>Judul Kategori</th>
									<th>Action</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="modal fade" id="modal-default">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Form Kategori Pertanyaan</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?= base_url('kategori/process') ?>" method="POST">
				<div class="modal-body">
					<div class="card-body">
						<div class="form-group">
							<label for="kode_kategori">Kode Kategori</label>
							<input type="hidden" name="id" id="id">
							<input type="text" name="kode_kategori" class="form-control" id="kode_kategori" style="text-transform: uppercase;" required autocomplete="off">
						</div>
						<div class="form-group">
							<label for="nama_kategori">Nama Kategori</label>
							<input type="text" name="nama_kategori" class="form-control" id="nama_kategori" required autocomplete="off">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-primary" name="add" id="submit">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script>
	$(document).on('click', '#edit', function() {
		var id = $(this).data('id');
		var kode_kategori = $(this).data('kode');
		var nama_kategori = $(this).data('nama');

		$('#id').val(id);
		$('#nama_kategori').val(nama_kategori);
		$('#kode_kategori').val(kode_kategori);
		$('#submit').attr('name', 'edit')
	})
</script>
