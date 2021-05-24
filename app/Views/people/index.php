<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
  <div class="row mt-5">
    <div class="col-2">
      <div class="card">
        <img src="/img/people.jpg" class="card-img-top" alt="..." style="object-fit:cover; height: 100px;">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">An item</li>
          <li class="list-group-item">A second item</li>
          <li class="list-group-item">A third item</li>
        </ul>
        <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
    </div>
    <div class="col-10">
      <h1 class="mb-2">People</h1>

      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col"></th>
            <th scope="col">Name</th>
            <th scope="col">NIM</th>
            <th scope="col">Department</th>
            <th scope="col">-</th>
          </tr>
        </thead>
        <tbody>

          <!-- table content -->
          <?php $i = 1 ?>
          <?php foreach ($user as $u) : ?>
            <tr onclick="window.location='/profile/view/<?= $u['id']; ?>'">
              <th class="align-middle" scope="row"><?= $i++; ?></th>
              <td class="align-middle"><img src="img/profile/<?= $u['avatar']; ?>" style="width: 30px;
                  height: 30px;
                  background-position: center center;
                  background-repeat: no-repeat;
                  object-fit:cover;">
              </td>
              <td class="align-middle"><?= $u['name']; ?></td>
              <td class="align-middle"><?= $u['nim']; ?></td>
              <td class="align-middle"><?= $u['department']; ?></td>

              <!-- <td><a href="/profile/view/<?= $u['id']; ?>" class="btn btn-primary">Detail</a></td> -->
            </tr>
          <?php endforeach; ?>
          </tr>
        </tbody>
      </table>



    </div>
  </div>
</div>

<?= $this->endSection(); ?>