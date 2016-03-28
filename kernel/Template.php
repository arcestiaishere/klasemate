<?php

## -------------------------------------------------------
#  Klasemate
## -------------------------------------------------------
#  Created by Laurensius Jeffrey Chandra
#  http://klasemate.arcestia.id
#
#  File: Template.php
#  License: GPLv2
#  Copyright: (c) 2016 - Klasemate
## -------------------------------------------------------

class Template
{
	// HTML template
	public static $html = "";

	/**
	 * --------------------------------------------------------------------
	 * INSERT HTML INTO $this->html
	 * --------------------------------------------------------------------
	 */
	public static function Add($html = "")
	{
		self::$html .= $html;
	}

	/**
	 * --------------------------------------------------------------------
	 * GET HTML TEMPLATE STORED IN $this->html
	 * --------------------------------------------------------------------
	 */
	public static function Get()
	{
		return self::$html;
	}

	/**
	 * --------------------------------------------------------------------
	 * CLEAN ALL
	 * --------------------------------------------------------------------
	 */
	public static function Clean()
	{
		self::$html = "";
	}
}
