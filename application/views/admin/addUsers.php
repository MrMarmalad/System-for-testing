<?php
 ?>

 <script type="text/javascript">



 function makeCounter() {
   var currentCount = 0;

   return { // возвратим объект вместо функции
     getNext: function() {
       return ++currentCount;
     },

     getCurent: function () {
       return currentCount;
     },

     set: function(value) {
       currentCount = value;
     },

     reset: function() {
       currentCount = 0;
     }
   };
 }

 var counter = makeCounter();

 function addUser()
 {
   let form_copy = document.getElementsByClassName('js-form-user')[0].cloneNode(true);
   let insert_before = document.getElementById('insertHere');
   counter.getNext();

   // console.log(insert_before);
   // console.log(form_copy);
   //form_copy
   //form_copy.reset();
   form_copy.getElementsByClassName('js-select')[0].name = "role:" + counter.getCurent();;

   let login = form_copy.getElementsByClassName('js-login')[0].value='';
   form_copy.getElementsByClassName('js-login')[0].name = "login:" + counter.getCurent();

   let password = form_copy.getElementsByClassName('js-password')[0].value='';
   form_copy.getElementsByClassName('js-password')[0].name = "password:" + counter.getCurent();

   let fio = form_copy.getElementsByClassName('js-fio')[0].value='';
   form_copy.getElementsByClassName('js-fio')[0].name = "fio:" + counter.getCurent();

   let direction = form_copy.getElementsByClassName('js-direction')[0].value='';
   form_copy.getElementsByClassName('js-direction')[0].name = "direction:" + counter.getCurent();

   let course = form_copy.getElementsByClassName('js-course')[0].value='';
   form_copy.getElementsByClassName('js-course')[0].name = "course:" + counter.getCurent();

   let group = form_copy.getElementsByClassName('js-group')[0].value='';
   form_copy.getElementsByClassName('js-group')[0].name = "group:" + counter.getCurent();

   insert_before.insertAdjacentElement('beforebegin', form_copy);
   //insert_before.after();
 }
 </script>

<div class="col md-10 ml-3 mr-3 pt-3 pb-3">
     <form action="applyNewUsers" method="post">
       <div class="form-group">
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="createReport"> Создать отчет
          </label>
        </div>
      </div>
      <div class="">
         <div class="row js-form-user" >
           <span class="border-bottom border-primary">
             <div class="form-row">
               <div class="col">
               <label for="exampleFormControlSelect1">Роль</label>
               <select class="form-control js-select" name="role:0">
                 <option value="teacher" selected>Преподаватель</option>
                 <option value="testable">Тестируемый</option>
                 <option value="admin">Администратор</option>
               </select>
             </div>
           </div>
           <div class="form-row">

             <br>
          <div class="form-group col-md-6">
            <label for="login">Логин</label>
            <input type="text" name="login:0" class="form-control js-login"  placeholder="Логин">
          </div>
          <div class="form-group col-md-6">
            <label for="password">Пароль</label>
            <input type="password" name="password:0" class="form-control js-password"  placeholder="Пароль">
          </div>
        </div>
        <div class="form-group ">
          <label for="fio">ФИО</label>
          <input type="text" name="fio:0" class="form-control js-fio"  placeholder="Иван Иванович Иванов">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="direction">Направление</label>
            <input type="text" name="direction:0" class="form-control js-direction" placeholder="значения для администратора и преподавателя будут проигнорированы" >
          </div>
          <div class="form-group col-md-4">
            <label for="course">Курс</label>
            <input type="text" name="course:0" class="form-control js-course" placeholder="значения для администратора и преподавателя будут проигнорированы">
          </div>
          <div class="form-group col-md-2">
            <label for="group">Группа</label>
            <input type="text" name="group:0" class="form-control js-group" placeholder="значения для администратора и преподавателя будут проигнорированы">
          </div>
        </div>
       </div>
     </span>
       <input type="hidden" id="insertHere">
      </div>

      <!-- <input type="text" name="" value=""> -->
      <div class="pt-3">
        <button type="button" class="btn btn-primary" onclick="addUser()" >Добавить еще одного пользователя</button>
        <button type="submit" class="btn btn-primary">Сохранить</button>
      </div>
    </form>
</div>
