<?php

class View {

	public function render($path, $only_content = false) {
		if ($only_content) {
			require 'view/'.$path.'.php';
			return;
		}
		require 'view/header.php';
		require 'view/'.$path.'.php';
		require 'view/footer.php';
	}

}