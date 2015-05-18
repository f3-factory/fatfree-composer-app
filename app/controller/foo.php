<?php

namespace Controller;

use Respect\Validation\Validator as v;

class Foo {
	function bar(\Base $f3, $params) {
		echo "Hello World.";

		var_dump(v::age(18)->validate('1970-01-01'));
	}
}