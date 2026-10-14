<?php

namespace ContentRelations;

defined( 'WPINC' ) || exit;

/**
 * The strings the block editor bundle needs - RelationsEditor.jsx and the Query Loop
 * variation - translated in PHP and passed to the script via wp_localize_script - the same
 * pattern ph-postqueue uses, and simpler than wp_set_script_translations(): no per-bundle
 * JED JSON files, no @wordpress/i18n import in the bundle at all. RelationsEditor.jsx is
 * shared by the block editor sidebar and the classic meta box, so both enqueue points call
 * this rather than keeping two copies.
 */
class RelationsI18n {

	public static function strings(): array {
		return array(
			// The plugin's name, not translated.
			'panel_title'          => 'Content Relations',
			'no_relations'         => __( 'No relations yet.', 'content-relations' ),
			'add_relation'         => __( 'Add relation', 'content-relations' ),
			'move_up'              => __( 'Move up', 'content-relations' ),
			'move_down'            => __( 'Move down', 'content-relations' ),
			'remove'               => __( 'Remove', 'content-relations' ),
			'relation_type'        => __( 'Relation type', 'content-relations' ),
			'relation_type_help'   => __( 'Pick a type or type a new name.', 'content-relations' ),
			'choose_type_first'    => __( 'Choose a relation type first.', 'content-relations' ),
			'add_related_post'     => __( 'Add a related post', 'content-relations' ),
			'search_posts'         => __( 'Search posts…', 'content-relations' ),
			'no_posts_found'       => _x( 'No posts found.', 'post search', 'content-relations' ),
			/* translators: %s is replaced with the typed name in the browser, not by PHP */
			'create_type_template' => __( 'Create "%s"', 'content-relations' ),
			// Query Loop variation, in the block inserter and the block's settings panel.
			'variation'            => _x( 'Related content', 'block editor', 'content-relations' ),
			'variation_desc'       => _x( 'Posts this post relates to, under one relation type, in their saved order.', 'block editor', 'content-relations' ),
			'select_type'          => _x( 'Relation type', 'block editor', 'content-relations' ),
			'select_type_help'     => _x( 'Which of this post\'s relation types to list.', 'block editor', 'content-relations' ),
			'select_none'          => _x( '— Select —', 'block editor', 'content-relations' ),
		);
	}
}
