<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class LookbookDesignerType extends GraphQLType {

	protected $attributes = [
		'name' => 'LookbookDesigner',
		'description' => 'A lookbook designer'
	];

  /*
	 * Uncomment following line to make the type input object.
	 * http://graphql.org/learn/schema/#input-types
	 */
	// protected $inputObject = true;

	public function fields () {
		return [
			'id' => [
				'type' => Type::nonNull(Type::id()),
				'description' => 'The id of the lookbook designer'
			],
      'slug' => [
				'type' => Type::string(),
				'description' => 'The slug of lookbook designer'
			],
      'name' => [
				'type' => Type::string(),
				'description' => 'The name of lookbook designer'
			],
			'email' => [
				'type' => Type::string(),
				'description' => 'The email of lookbook designer'
			],
      'phone' => [
				'type' => Type::string(),
				'description' => 'The phone of lookbook designer'
			],
      'cover' => [
				'type' => Type::string(),
				'description' => 'The cover image of lookbook designer'
			],
      'image' => [
				'type' => Type::string(),
				'description' => 'The image of lookbook designer'
			],
      'url' => [
				'type' => Type::string(),
				'description' => 'The url of lookbook designer'
			],
      'retail' => [
				'type' => Type::string(),
				'description' => 'The retail url of lookbook designer'
			],
      'facebook' => [
				'type' => Type::string(),
				'description' => 'The facebook handle of lookbook designer'
			],
      'pinterest' => [
				'type' => Type::string(),
				'description' => 'The pinterest handle of lookbook designer'
			],
      'twitter' => [
				'type' => Type::string(),
				'description' => 'The twitter handle of lookbook designer'
			],
      'instagram' => [
				'type' => Type::string(),
				'description' => 'The instagram handle of lookbook designer'
			],
      'description' => [
				'type' => Type::string(),
				'description' => 'The description of lookbook designer'
			],
      'featured' => [
				'type' => Type::boolean(),
				'description' => 'Is the lookbook designer featured'
			]
		];
	}
}
