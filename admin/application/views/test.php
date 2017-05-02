<html>
<head>
  <meta charset="UTF-8">
  <title>Document</title>

  <link rel="stylesheet" type="text/css" href="https://bootswatch.com/united/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <script src="//cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>
 
</head>
<body>
   <div class="container">
    <div class="row">
      <div class='col-sm-6'>
        <div class="form-group">
          <div class='input-group date' id='datetimepicker1'>
            <input type='text' class="form-control" />
            <span class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"></span>
            </span>
          </div>
        </div>


        <div class="form-group">
          <label for="dob" class="col-sm-2 control-label">Date of Birth</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="dob" name="dob" placeholder="Date of Birth">
            <?php echo form_error('dob'); ?>
          </div>
         </div>
          </div>
        </div>
      </div>

  <script>
    $(function() {
      $('#datetimepicker1').datetimepicker({
        format: 'YYYY-MM-DD'
      });
    });
  </script>

  <script>
   $("#dob").datetimepicker({format: 'YYYY-MM-DD'});
</script>
</body>
</html>