<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Show RSS feeds in your site
 * 
 * @author  	Douglas Burchardz
 * @package		KcsaraTwo\Widgets
 */
class Widget_Sidebar_article extends Widgets
{


	/**
	 * The widget title
	 *
	 * @var array
	 */
	public $title = 'Sidebar Article';

	/**
	 * The translations for the widget description
	 *
	 * @var array
	 */
	public $description = array(
		'en' => 'Create an article for the KCSARA sidebar',
	);
	
	/**
	 * The author of the widget
	 *
	 * @var string
	 */
	public $author = 'Douglas Burchard';

	/**
	 * The author's website.
	 * 
	 * @var string 
	 */
	public $website = 'http://www.douglasburchard.com/';

	/**
	 * The version of the widget
	 *
	 * @var string
	 */
	public $version = '1.0.0';

	/**
	 * The fields for customizing the options of the widget.
	 *
	 * @var array 
	 */
	public $fields = array(
		array(
			'field' => 'sidebar_link',
			'label' => 'Link'
		),
		array(
			'field' => 'sidebar_article',
			'label' => 'Article',
			'rules' => 'required'
		)
	);

	/**
	 * The main function of the widget.
	 *
	 * @param array $options The options for displaying a Sidebar Article.
	 * @return array 
	 */
	public function run($options)
	{
		if (empty($options['sidebar_article']))
		{
			return array('output' => '');
		}

		// Store the feed items
		return array('output' => $this->parser->parse_string($options['sidebar_article'], null, true));
	}

}