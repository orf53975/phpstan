<?php declare(strict_types = 1);

return new \PHPStan\Reflection\Native\NativeFunctionReflection(
	'mysql_list_dbs',
	[
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'link_identifier',
			true,
			PHPStan\Type\MixedType::__set_state(array(    'isExplicitMixed' => false, )),
			false,
			false
		),

	],
	false,
	PHPStan\Type\ResourceType::__set_state(array())
);
