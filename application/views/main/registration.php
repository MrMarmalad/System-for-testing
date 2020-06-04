<form>
  <div class="form-group">
    <label for="login">Логин</label>
    <input type="text" class="form-control" id="login"  placeholder="Введите логин">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="password">Пароль</label>
    <input type="password" class="form-control" id="password" placeholder="Введите пароль">
  </div>


  <div class="form-group">
    <label for="password">ФИО</label>
    <input type="text" class="form-control" id="fio" placeholder="Фамилия Имя Отчество">
  </div>

  <div class="form-group">
  <label for="role">Пользовательская роль</label>
  <select class="form-control" id="role">
    <option>Администратор</option>
    <option>Тестируемый</option>
    <option>Преподаватель</option>
  </select>
</div>


  <!-- <div class="form-group">
  <label for="exampleFormControlSelect1">Example select</label>
  <select class="form-control" id="exampleFormControlSelect1">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
  </select>
</div> -->

  <button type="submit" class="btn btn-primary">Зарегистрировать</button>
</form>
