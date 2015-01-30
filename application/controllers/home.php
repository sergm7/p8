<?php

	Class Home extends Controller{
		function __construct($params){

			parent::__construct($params);
			$this->model = new mHome;	
		}


			function home(){
				$this->loader->vista('vhome.php',$this->model->Info());
			}

	}