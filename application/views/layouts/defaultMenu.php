<nav class="navbar navbar-dark bg-primary navbar-expand-lg">
  <a href="#" class="navbar-brand">
    <img src="public/recources/mstucaEmblem.png" width="50" height="65" alt="">
  </a>
<a class="navbar-brand" href="#">Система тестирования</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
<!-- start navbar -->
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">Главная страница <span class="sr-only">(current)</span></a>
    </li>
  <?php   foreach ($menuButtons as $button => $attributes): ?>
    <li class="nav-item">
      <a class="nav-link" <?php foreach ($attributes['a'] as $att => $val) { echo $att. '="' . $val . '"';} ?>
        >
        <?php echo $button; ?>
      </a>
    </li>
  <?php endforeach; ?>
  <!--
    <li class="nav-item">
      <a class="nav-link" href="#" data-toggle="modal"
      data-target="#AuthModal">Вход в систему</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Обратиться к администратору</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">О программе</a>
    </li>
  </ul> -->
  </ul>
</div>
</nav>

<?php
// foreach ($menuButtons as $button => $attributes) {
//   if (!empty($attributes['additional']))
//   {
//     echo $attributes['additional'];
//   }
// }
?>
