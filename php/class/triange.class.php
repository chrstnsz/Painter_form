<?php

	class Triangle extends Shape{

		const NAME = "polygon";

		protected $points;


		public function __construct($x2, $y2, $x3, $y3){
			if (is_numeric($x2) &&
				is_numeric($y2) &&
				is_numeric($x3) &&
				is_numeric($y3)
			) {
				$this->points = $x2." ".$y2.", ".$x3." ".$y3;
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
						points='$this->coordX $this->coordY, $this->points'
						fill='$this->fill'
						stroke='$this->stroke'
						stroke-width='$this->strokewidth'
						opacity='$this->opacity'
			/>";

		}

	}
