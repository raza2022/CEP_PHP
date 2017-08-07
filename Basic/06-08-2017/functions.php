<?PHP
//functions
// function functionName($param)
// {

// }

// function add($var1,$var2)
// {
// 	return $var1+$var2;
// }
// abs path 
// (http://www.abc.com/assets/js/jquery.js)
// relative path 
// (c:/wamp/www/projectname/assets/js/jquery.js)
// echo add(10,20);
// require("procedures1.php");
// echo "after including";
// include_once("procedures.php");
// include_once("procedures.php");
// include_once();
// require();
// require_once();

// echo add(20,30);

function calc_gst($amount, $type='floor')
{
	if($type == 'floor')
		return ($amount * 0 / 100);
	else
		return ($amount * 6 / 100);
}

echo calc_gst(500);
echo "<br>";
echo calc_gst(500,'electronics');

function input($type, $name="", $class="", $attr="", $style="")
{
	$str = "<input type=$type ";
	if($name != "")
	{
		$str .= "name=$name";
		// $str = $str . "name=$name";
	}

	if($class != "")
	{
		$str .= "class=$class";
	}

	//

	$str .= " />";
	echo $str;
}

input("text","fullname");
input("password","pwd");
?>
<!-- <input type="text"> -->