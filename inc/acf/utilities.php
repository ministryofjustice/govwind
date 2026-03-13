<?php
/**
 * Checks the status of a specific setting for the current post type.
 *
 * @param string $setting The name of the setting to check.
 *
 * @return mixed Returns value of setting for the current post type. Returns false if setting not found.
 *
 */
function govwind_get_post_type_setting($setting)
{
	$current_post_type = get_post_type();

	if (!$current_post_type) {
		return false;
	}

	$current_post_type_object = get_post_type_object($current_post_type);

	if (isset($current_post_type_object->$setting)) {
		return $current_post_type_object->$setting;
	}

	return false;
}
