<?php declare(strict_types = 1);

return new \PHPStan\Reflection\Native\NativeFunctionReflection(
	'trait_exists',
	[
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'traitname',
			false,
			PHPStan\Type\StringType::__set_state(array()),
			false,
			false
		),
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'autoload',
			true,
			PHPStan\Type\BooleanType::__set_state(array()),
			false,
			false
		),

	],
	false,
	PHPStan\Type\BooleanType::__set_state(array())
);
