<?php namespace Artesaos\Guardian\Repositories\Eloquent;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AbstractEloquentRepository
 *
 * @package Artesaos\Guardian\Repositories\Eloquent
 */
abstract class AbstractEloquentRepository {

	/**
	 * @var Application
	 */
	protected $app;

	/**
	 * @var Model
	 */
	protected $model;

	/**
	 * @param Application $app
	 * @param Model       $model
	 */
	public function __construct(Application $app, Model $model)
	{
		$this->app   = $app;
		$this->model = $model;
	}

	/**
	 * @param $id
	 * @return \Illuminate\Support\Collection|null|static
	 */
	public function findById($id)
	{
		return $this->model->find($id);
	}

	/**
	 *
	 * @param $name
	 * @return mixed
	 */
	public function findByName($name)
	{
		return $this->model->where('name', '=', $name)->first();
	}

}