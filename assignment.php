
<?php

class Assignment
{
	public function __construct($week)
	{
		echo "<table border='0' width='100%'><tr bgcolor='#3d5d91'><td style='padding:15px'><font size='4' color='white'><b>".$week."</b></font></td></tr>";
	}

	public function assignment($assignment)
	{
		echo "<tr bgcolor='#769cdb'><td style='padding:10px'><font color='white'><b>" . $assignment . "</b></font></td></tr><tr>";
	}

	public function echoThis($param)
	{
		echo "<tr bgcolor='#e1e6ef'><td style='padding:15px'>" . $param . "</td></tr><tr>";
	}

	public function dumpThis($param)
	{
		echo "<tr bgcolor='#e1e6ef'><td style='padding:15px'>";
		var_dump($param);
		echo "</td></tr><tr>";
	}

	public function printRThis($param)
	{
		echo "<tr bgcolor='#e1e6ef'><td style='padding:15px'>";
		print_r($param);
		echo "</td></tr><tr>";
	}

	public function zvalThis($param)
	{
		echo "<tr bgcolor='#e1e6ef'><td style='padding:15px'>";
		debug_zval_dump($param);
		echo "</td></tr><tr>";
	}

	public function startRow()
	{
		echo "<tr bgcolor='#e1e6ef'><td style='padding:15px'>";
	}

	public function endRow()
	{
		echo "</td></tr><tr>";
	}

	public function endAssignment()
	{
		echo "</tr>";
	}

	public function endWeek()
	{
		echo "</table>";
	}

}

?>