<?php

#File: app/models/Hello.php

namespace Furbook\Models;

class Hello {

	public static function message($one = 'default1', $two = 'default2') {
		echo "First  Param: $one", "\n<br>\n";
		echo "Second Param: $two", "\n<br>\n";
		echo "\n<br>\n";
	}

}
