<?php

if( !function_exists('upper')) {
	public function upper($value)
	{
		return Text\Format::upperText($value);
	}
}

if( !function_exists('upper')) {
	public function lower($value)
	{
		return Text\Format::lowerText($value);
	}
}