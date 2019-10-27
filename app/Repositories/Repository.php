<?php 

namespace App\Repositories;

use Config;

abstract class  Repository {

	protected $model = false;

	public function get($select='*',$take=false){

		$builder = $this->model->select($select);

		if($take){
			$builder->take($take);
		}

		//dd($builder->get());

		return $this->check($builder->get());
	}

	protected function check($result){

		if($result->isEmpty()){
			return false;
		}

		$result->transform(function($item,$key){

			if(is_string($item->img) && is_object(json_decode($item->img)) && json_last_error() == JSON_ERROR_NONE){$item->img = json_decode($item->img);}

			

			return $item;

		});

		return $result;

	}

}


 ?>