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

<a href="/" class="card-recomend card-list-recomend mt-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  <div class="recomend-card-img">
    <img src="<?= base_url('assets/img/banner-edu-01.jpg') ?>" alt="" />
  </div>
  <div class="recomend-edu-info">


    <h3> Belajar Gitar </h3>
    <label> Rapli</label>
    <p>
      <img src="<?= base_url('assets/img/ic-star.svg') ?>" alt="" />
      <img src="<?= base_url('assets/img/ic-star.svg') ?>" alt="" />
      <img src="<?= base_url('assets/img/ic-star.svg') ?>" alt="" />
      <img src="<?= base_url('assets/img/ic-star.svg') ?>" alt="" />
      <img src="<?= base_url('assets/img/ic-star.svg') ?>" alt="" />
      <b>5.0</b> (20.578)
    </p>
    <h5>
      Rp. 236.600<span>Rp. 2.800.000</span>
    </h5>

  </div>
</a>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<?= $this->endSection(); ?>