<?php
class SpecialBlender extends SpecialPage {
	function __construct() {
		parent::__construct( 'Blender' );
	}

	function execute( $par ) {
		$request = $this->getRequest();
		$output = $this->getOutput();
		$this->setHeaders();

		global $wgUser;

		# Get request data from, e.g.
		# $param = $request->getText( 'param' );

		$wikitext = "Hello $wgUser!";
		$output->addWikiTextAsInterface( $wikitext );
	}
}