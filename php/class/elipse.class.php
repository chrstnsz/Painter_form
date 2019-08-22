<?php

	class Elipse extends Shape{
		const NAME = "ellipse";

		protected $radioX;
		protected $radioY;

		public function __construct($rx, $ry){
			$this->radioX = $rx;
			$this->radioY = $ry;
		}

		public function setCoordonates($x, $y){
			$this->coordX = $x;
			$this->coordY = $y;
		}

		public function draw(){
			return "<".self::NAME."
						cx='$this->coordX'
						cy='$this->coordY'
						rx='$this->radioX'
						ry='$this->radioY'
						fill='$this->fill'
						stroke='$this->stroke'
						stroke-width='$this->strokewidth'
						opacity='$this->opacity'
						transform='rotate($this->rotation)'
						transform-origin='$this->coordX $this->coordY'
  			/>";

		}
	}
