<?php
/**
 * Plugin Name: WPGraphQL Blue Guitar
 * Author: Matt Cromwell, for BenUNC birthday
 */

add_action( 'graphql_register_types', function() {

	register_graphql_object_type( 'Guitar', [
		'fields' => [
			'color' => [
				'type' => 'String',
				'description' => __( 'Happy birthday, Ben!', 'wp-graphql-blue-guitar' ),
			]
		],
	] );

	register_graphql_field( 'RootQuery', 'guitar', [
		'type' => 'Guitar',
		'description' => __( 'Hi roy', 'wp-graphql-blue-guitar' ),
		'resolve' => function() {
			$guitar = [
				'color' => 'blue'
			];
			return $guitar;
		}
	] );

} );
