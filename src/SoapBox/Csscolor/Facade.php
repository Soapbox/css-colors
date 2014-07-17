<?php namespace SoapBox\Csscolor;

class Facade extends \Illuminate\Support\Facades\Facade {
	protected static function getFacadeAccessor() {
		return 'csscolor';
	}
}