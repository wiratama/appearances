<?php
namespace Wiratama\Appearances\Console;

use Illuminate\Support\Facades\Facade;

class ThemeFacade extends Facade
{
	public static function getFacadeAccessor()
    {
        return 'appearances.theme';
    }
}