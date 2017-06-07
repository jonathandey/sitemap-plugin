<?php namespace RainLab\Sitemap\Classes;

use RainLab\Sitemap\Models\Definition;

class SitemapGenerator
{
	protected $definition;

	public function __construct(Definition $definition)
	{
		$this->definition = $definition;
	}

	
}