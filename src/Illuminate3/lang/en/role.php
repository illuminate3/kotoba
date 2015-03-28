<?php

// role


return [

	'level'							=> 'Level',
	'role'							=> 'Role|Roles',
	'role_permissions'				=> 'Role Permissions',

// ask
	'ask' => [
		'delete'					=> 'Delete this Role?',
	],

// button
	'button' => [
		'add'						=> 'Add Role',
		'create'					=> 'Create New Role',
		'delete'					=> 'Delete Role',
		'edit'						=> 'Edit Role',
		'new'						=> 'New Role',
		'view'						=> 'View Role',
		'update'					=> 'Update Role',
	],

// command
	'command' => [
		'create'					=> 'Create New Role',
		'delete'					=> 'Delete Role',
		'edit'						=> 'Edit Role',
		'edit_permissions'			=> 'Edit Role Permissions',
		'update'					=> 'Update Role',
	],

// error
	'error' => [
		'create'					=> 'There was an issue creating the role. Please try again.',
		'delete'					=> 'There was an issue deleting the role. Please try again.',
		'exists'					=> 'Role already exists!',
		'name_required'				=> 'The Name Field is Required.',
		'not_exist'					=> 'Role [:id] does not exist.',
		'not_found'					=> 'No Roles found. Create a Role to assign to the User.',
		'update'					=> 'There was an issue updating the role. Please try again.',
	],

// success
	'success' => [
		'create'					=> 'The role was successfully created.',
		'delete'					=> 'The role was successfully deleted.',
		'update'					=> 'The role was successfully updated.',
	],


];
