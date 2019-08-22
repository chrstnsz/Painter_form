<?php

	class Square extends Rectangle {

		public function __construct($width){
			if (is_numeric($width)) {
				$this->width = $width;
				$this->height = $width;
			}
		}

	}
