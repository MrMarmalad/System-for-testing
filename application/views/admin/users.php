<?php
$menuButtons =
[
  'Список пользователей' => [
    'a'=> [
    'href' => 'users',]
  ],
  'Список тестов' => [
    'a' => [
    'href' => '#'
  ]
  ],
  'Выход' => [
    'a' => [
    'href' => '#',]
  ],
]
 ?>

<form class="" action="changeUsers" method="post">
<div class="row">
  <div class="col md-10 ml-3 mr-3 pt-3 pb-3">
      <input formaction="changeUsers" formmethod="post" type="submit" value="Изменить" class="btn btn-warning"/>
      <input formaction="deleteUsers" formmethod="post" type="submit" value="Удалить" class="btn btn-danger"/>
      <input formaction="addUsers" formmethod="post" type="submit" value="Добавить нового пользователя" class="btn btn-primary"/>
  </div>
</div>
<div class="row">
  <div class="col md-10 ml-3 mr-3">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <?php if ( isset($cols)):
            foreach ($cols as $col => $name) :?>
            <th scope="col"><?php echo $name; ?></th>
          <?php endforeach;
                endif; ?>
        </tr>
      </thead>
      <tbody>
      <?php if (!empty($users)):
      foreach ($users as $params): ?>
      <tr>
        <?php foreach ($params as $name => $param): ?>
          <td>
            <?php if (empty($param)):
              echo "Значение не указано";?>
            <?php elseif ($name == 'id'): ?>
              <div class="row ml-3 mr-1">
                <input type="checkbox" class="form-check-input" name="checkbox<?php echo $param ?>" id="checkbox<?php echo $param ?>" value="<?php echo $param ?>">
                <?php echo $param ?>
              </div>
            <?php else:
                  echo $param;
                endif;?>
          </td>
        <?php endforeach; ?>
      </tr>
      <?php endforeach; ?>
      <?php endif; ?>
      </tbody>
      </table>
  </div>
</div>
</form>
