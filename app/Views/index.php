<?= $this->extend('layouts/layout.php'); ?>
<?= $this->section('content'); ?>


<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-header d-flex align-items-center justify-content-between">
				<h4 class="card-title ">list product</h4>
				<a href="/product/create" class="btn btn-primary btn-sm ">Create Data</a>
			</div>
			<div class="card-body">
				<div class="table responsive">
					<table class="table table-sm table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>product Name</th>
								<th>product Code</th>
								<th>price</th>
								<th>stock</th>
								<th>option</th>
							</tr>
						</thead>
						<tbody>

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


<?= $this->endSection(); ?>