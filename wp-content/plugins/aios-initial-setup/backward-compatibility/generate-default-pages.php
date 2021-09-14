<?php

use AiosInitialSetup\Config\Generate;

class aios_initial_setup_generate_default_pages
{
  use Generate;

  public function generate_default_pages($id)
  {
  	$arr = [];

  	if ($id === 0) {
  		$arr = ['what-is-my-home-worth'];
	  }

  	if ($id === 1) {
  		$arr = ['find-my-dream-home'];
	  }

  	if ($id === 2) {
  		$arr = ['help-me-relocate'];
	  }

  	if ($id === 3) {
  		$arr = ['contact'];
	  }

  	if ($id === 4) {
  		$arr = ['not-found'];
	  }

  	if ($id === 5) {
  		$arr = ['sitemap'];
	  }

    $this->generateDefaultPages($arr);
  }
}
