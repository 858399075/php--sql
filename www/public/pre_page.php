﻿<?php
class pre_page {
	var $num;
	var $pagesize;
	var $npage;
	function pre_page($npagex, $n, $size) {
		$this->num=$n;
		$this->pagesize=$size;
		if($npagex>ceil($n/$size))
			$this->npage=ceil($n/$size);
		else
			$this->npage=$npagex;
	}
	function npage() {
		if($this->npage<1) $this->npage=1;
		return $this->npage;
	}
}
?>
