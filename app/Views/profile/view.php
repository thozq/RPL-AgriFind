<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<img class="" width="200px" src="/img/header/<?= $user['header']; ?>" alt="" style="object-fit:cover; width: 100vw; height: 200px;">
<div class="container">
  <div class="row">
    <div class="col">
      
      <h1 class="mt-5 mb-2">Profile <?= $user['name']; ?></h1>
      <br>

      <img class="mb-3 rounded-circle" width="200px" src="/img/profile/<?= $user['avatar']; ?>" alt="" style="  width: 100px;
        height: 100px;
        background-position: center center;
        background-repeat: no-repeat;
        object-fit:cover;">

      <h2>Information</h2>

      <ul>
        <li>Name : <?= $user['name']; ?></li>
        <li>Username : <?= $user['username']; ?></li>
        <li>Email : <?= $user['email']; ?></li>
        <li>Department : <?= $user['department']; ?></li>
      </ul>

      <h2>About Me</h2>

      <ul>
        <li>About Me : <?= $general['about_me']; ?></li>
        <li>Phone : <?= $general['phone']; ?></li>
        <li>Profession : <?= $general['profession']; ?></li>
        <li>Experience : <?= $general['experience']; ?></li>
      </ul>

      <h2>Skill</h2>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Skill</th>
            <th scope="col">Level</th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1 ?>
          <?php foreach ($skill as $s) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $s['name']; ?></td>
              <td><?= $s['level']; ?></td>
              <td><?= $s['description']; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

      <h2>Competition</h2>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Rank</th>
            <th scope="col">Event</th>
            <th scope="col">Field</th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1 ?>
          <?php foreach ($competition as $s) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $s['name']; ?></td>
              <td><?= $s['rank']; ?></td>
              <td><?= $s['organiser']; ?></td>
              <td><?= $s['field']; ?></td>
              <td><?= $s['description']; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

    </div>
  </div>
</div>
<?= $this->endSection(); ?>