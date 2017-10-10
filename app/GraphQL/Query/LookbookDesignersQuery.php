<?php

namespace App\GraphQL\Query;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Query;
use App\LookbookDesigner;

class LookbookDesignersQuery extends Query {

	protected $attributes = [
		'name' => 'LookbookDesigner'
	];

	public function type () {
		return Type::listOf(GraphQL::type('LookbookDesigner'));
	}

	public function args () {
		return [
			'id' => [
        'name' => 'id',
        'type' => Type::string()
      ],
			'email' => [
        'name' => 'email',
        'type' => Type::string()
      ]
		];
	}

	public function resolve ($root, $args) {
		if(isset($args['id'])) {
			return LookbookDesigner::where('id' , $args['id'])->get();
		} else if(isset($args['email'])) {
			return LookbookDesigner::where('email', $args['email'])->get();
		} else {
			return LookbookDesigner::all();
		}
	}

}
