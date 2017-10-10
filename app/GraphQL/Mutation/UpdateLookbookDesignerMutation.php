<?php

namespace App\GraphQL\Mutation;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Mutation;
use App\LookbookDesigner;

class UpdateLookbookDesignerMutation extends Mutation {

	protected $attributes = [
		'name' => 'updateLookbookDesigner'
	];

	public function type () {
		return GraphQL::type('LookbookDesigner');
	}

	public function args () {
		return [
			'id' => [
        'name' => 'id',
        'type' => Type::nonNull(Type::string()),
        'rules' => ['required']
      ],
			'name' => [
        'name' => 'name',
        'type' => Type::nonNull(Type::string())
      ]
		];
	}

	public function resolve($root, $args) {
		$lookbookDesigner = LookbookDesigner::find($args['id']);

		if (!$lookbookDesigner) {
			return null;
		}

		$lookbookDesigner->name = $args['name'];
		$lookbookDesigner->save();

		return $lookbookDesigner;
	}

}
