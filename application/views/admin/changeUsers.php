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
      <input formaction="applyChanges" formmethod="post" type="submit" value="Применить изменения" class="btn btn-warning"/>
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
      <form  method="post" name="applyChanges" id="applyChanges">


      <?php if (!empty($users)):
      foreach ($users as $params): ?>
      <tr>
        <?php foreach ($params as $name => $param): ?>
          <td>
            <?php switch ($name):
            case 'id': ?>
            <?php
            $id = $param;
            echo $param; ?>
            <?php break; ?>

            <?php case 'login':?>
            <input class="form-control" type="text" placeholder="Логин" name="<?php echo $name.":".$id ?>" value="<?php echo $param; ?>">
            <?php break; ?>

            <?php case 'password':?>
            <input class="form-control" type="text" name="<?php echo $name.":".$id ?>" placeholder="Новый пароль" ?>">
            <small class="form-text text-muted">Заполнять при необходимости смены пароля</small>
            <?php break; ?>

            <?php case 'roleStr':?>
            <select id="inputState" class="form-control" name="<?php echo $name.":".$id ?>">
              <option value="teacher" <?php if ($param=='teacher'){echo "selected";} ?>>Преподаватель</option>
              <option value="testable"<?php if ($param=='testable'){echo "selected";} ?>>Тестирумый</option>
              <option value="admin"<?php if ($param=='admin'){echo "selected";} ?>>Администратор</option>
            </select>
            <?php break; ?>

            <?php case 'fio':?>
            <input class="form-control" type="text" placeholder="ФИО" name="<?php echo $name.":".$id ?>" value="<?php echo $param; ?>">
            <?php break; ?>

            <?php case 'direction':?>
            <input class="form-control" type="text" placeholder="Направление" name="<?php echo $name.":".$id ?>" value="<?php echo $param; ?>">
            <?php break; ?>

            <?php case 'course':?>
            <input class="form-control" type="text" placeholder="Курс" name="<?php echo $name.":".$id ?>" value="<?php echo $param; ?>">
            <?php break; ?>

            <?php case 'class':?>
            <input class="form-control" type="text" placeholder="Номер группы" name="<?php echo $name.":".$id ?>" value="<?php echo $param; ?>">
            <?php break;
            endswitch; ?>
          </td>
        <?php endforeach; ?>
      </tr>
      <?php endforeach; ?>
      <?php endif; ?>
      </form>
      </tbody>
      </table>
  </div>
</div>
</form>
