<?php declare(strict_types = 1);

return new \PHPStan\Reflection\Native\NativeFunctionReflection(
	'mysqli_stmt_get_warnings',
	[
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'stmt',
			false,
			PHPStan\Type\ObjectType::__set_state(array(    'className' => 'mysqli_stmt', )),
			false,
			false
		),

	],
	false,
	PHPStan\Type\ObjectWithoutClassType::__set_state(array())
);
