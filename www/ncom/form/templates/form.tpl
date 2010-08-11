<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="title" content="Form validation" />
		<title>Form validation</title>
		<link rel="shortcut icon" href="/fett.gif" type="image/gif"/>

	</head>

	<body>
		<h2>Application form</h2>

		<form method="post">
			<div>
				{if $error_first_name}
					<p style="color:#cc0020">{$error_first_name}</p>
				{/if}

				<div><label>First name</label></div>
				<input type="text" name="form[first_name]" value="{$smarty.request.form.first_name}"/>
			</div>

			<br />

			<div>
				{if $error_last_name}
					<p style="color:#cc0020">{$error_last_name}</p>
				{/if}

				<div><label>Last name</label></div>
				<input type="text" name="form[last_name]" value="{$smarty.request.form.last_name}"/>
			</div>

			<br />

			<div>
				<div><label>Age</label></div>
				<input type="text" name="form[age]" />
			</div>

			<br />

			<div>
				<label>Active</label>
				<input type="checkbox" name="form[active]" />
			</div>

			<br />
			<input type="submit" />
		</form>
	</body>

</html>

