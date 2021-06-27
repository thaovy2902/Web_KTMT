<?php

class  Ctrl_Home
{
	public function invoke(){
			include_once("../View/Page.php");
	}
};
$C_Student = new Ctrl_Home();
$C_Student->invoke();
