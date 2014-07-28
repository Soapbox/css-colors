<?php namespace SoapBox\Csscolor;

class CsscolorFacade extends \Illuminate\Support\Facades\Facade {
	protected static function getFacadeAccessor() {
		return 'csscolor';
	}
}