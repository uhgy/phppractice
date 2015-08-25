<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>

<?php
	require_once 'EmpService.class.php';
  require_once "common.php";
  checkUserValidate();
	$id=$_GET['id'];

	$empService=new EmpService();
	$emp=$empService->getEmpById($id);

?>

<h1>update employees</h1>

<form action="empProcess.php" method="post">
	<table>
		<tr><td>id</td><td><input readonly="readonly" type="text" name="id" value="<?php echo $emp->getId(); ?>"/></td></tr>
		<tr><td>name</td><td><input type="text" name="name" value="<?php echo $emp->getName(); ?>"/></td></tr>
		<tr><td>grade</td><td><input type="text" name="grade" value="<?php echo $emp->getGrade() ?>"/></td></tr>
		<tr><td>email</td><td><input type="text" name="email" value="<?php echo $emp->getEmail() ?>"/></td></tr>
		<tr><td>salary</td><td><input type="text" name="salary" value="<?php echo $emp->getSalary() ?>"/></td></tr>
		<input type="hidden" name="flag"  value="updateemp"/>
		<tr>
			<td><input type="submit" value="modify users" /></td>
			<td><input type="reset" value="reset" ?></td>
		</tr>
	</table>
</form>
		<a href="empManage.php">main</a>


</html>