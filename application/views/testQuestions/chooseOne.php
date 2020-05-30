<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>

	<!-- <script src="/public/scripts/jquery.js"></script>
	<script src="/public/scripts/form.js"></script> -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<!-- <link rel="stylesheet" href="/public/styles/default.css"> -->
	<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->
	<?php
		if (isset($custom_scripts) && is_array($custom_scripts))
		{
			foreach ($custom_scripts as $key => $value) {
				echo $value;
			}
		}
	 ?>
</head>

  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Вопрос</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="question" value="<?php echo $question ?>Вопрос">
    </div>
  </div>

  <div class="form-check">
    <input form="<?php echo $formId ?>" class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
    <label class="form-check-label" for="exampleRadios1">
      Default radio
    </label>
  </div>

  <div class="form-check">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
    <label class="form-check-label" for="exampleRadios2">
      Second default radio
    </label>
  </div>

  <div class="form-check">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option2">
    <label class="form-check-label" for="exampleRadios3">
      Second default radio
    </label>
  </div>

  <div class="form-check">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option2">
    <label class="form-check-label" for="exampleRadios4">
      Second default radio
    </label>
  </div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
