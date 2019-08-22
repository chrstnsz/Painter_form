<?php

	class Rectangle extends Shape{

		const NAME = "rect";

		protected $width;
		protected $height;

		public function __construct($width, $height){
			if (is_numeric($width) && is_numeric($height)) {
				$this->width = $width;
				$this->height = $height;
			}
		}
		public function setCoordonates($x, $y){
			if (is_numeric($x) && is_numeric($y)) {
				$this->coordX = $x;
				$this->coordY = $y;
			}
		}

		public function draw(){
			return "<".self::NAME."
						x='$this->coordX'
						y='$this->coordY'
						width='$this->width'
						height='$this->height'
						fill='$this->fill'
						stroke='$this->stroke'
						stroke-width='$this->strokewidth'
						opacity='$this->opacity'
						transform='rotate($this->rotation)'
						transform-origin='$this->coordX $this->coordY'
			/>";

		}


	}
