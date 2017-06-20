<?php
session_start();
include_once 'dbconfig.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//bg" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Добавяне на оценки по изпитен протокол</title>
<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
 $(".specialities").change(function A()
 {
  var id=$(this).val();
  var dataString = 'id_speciality='+ id;
 
  $.ajax
  ({
   type: "POST",
   url: "Get_students.php",
   data: dataString,
   cache: false,
   success: function(html)
   {
      $(".students").html(html);	  
   } 
   });
  });  
 
 
 $(".subject").change(function B()
 {
  var id=$(this).val();
  var dataString = 'id_subject='+ id;
 
  $.ajax
  ({
   type: "POST",
   url: "Get_subjects.php",
   data: dataString,
   cache: false,
   success: function(html)
   {
    $(".specialities").html(html);
   } 
   });
  });
   
});
</script>
<style>
label
{
font-weight:bold;
padding:10px;
}
div
{
 margin-top:100px;
}
select
{
 width:200px;
 height:35px;
}
</style>
</head>

<body>
<center>
<div>
<label>Предмет</label> 
<select name="subject" class="subject">
<option selected="selected">--Изберете Предмет----</option>
<?php
 $stmt = $db_con->prepare("SELECT * FROM subjects");
 $stmt->execute();
 while($row=$stmt->fetch(PDO::FETCH_ASSOC))
 {
  ?>
        <option value="<?php echo $row['id_subject']; ?>"><?php echo $row['name_subject']; ?></option>
        <?php
 } 
?>
</select>

<label>Специалност :</label> <select name="specialities" class="specialities">
<option selected="selected">--Изберете Специалност--</option>
</select>


<!--label>Нещо :</label> <select name="students" class="students">
<option selected="selected">--Изберете Нещо си--</option>
</select-->
<div name="specialities" class="students"></div>

</div>

<br />
<!--a href="http://prebor.space" target="_blank">Made by</a-->
</center>
</body>
</html>