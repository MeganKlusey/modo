<?php
	add_action('wp_enqueue_scripts', function () {
		if (@file_get_contents("http://localhost:5173/@vite/client")) {
			echo '<style>html { visibility: hidden; }</style>';
			wp_enqueue_script('vite-client', "http://localhost:5173/@vite/client", [], null, false);
			wp_enqueue_script('modo-js', "http://localhost:5173/src/js/main.js", [], null, true);
			add_filter('script_loader_tag', function ($tag, $handle) {
				if ($handle === 'vite-client' || $handle === 'modo-js') {
					return str_replace('<script ', '<script type="module" ', $tag);
				} return $tag;
			}, 10, 2);
		} else {
			$manifest = json_decode(file_get_contents(get_theme_file_path('dist/.vite/manifest.json')), true)['src/js/main.js'] ?? null;
			if ($manifest) {
				wp_enqueue_script('modo-js', get_theme_file_uri('dist/assets/' . basename($manifest['file'])), [], null, true);
				if (!empty($manifest['css'][0])) wp_enqueue_style('modo-css', get_theme_file_uri('dist/assets/' . basename($manifest['css'][0])));
			}
		}
	});