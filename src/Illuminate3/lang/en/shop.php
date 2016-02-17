<?php

// shop

return [

	'account'						=> 'Account|Accounts',
	'adjusted'						=> 'Adjusted',
	'allergen'						=> 'Allergens|Allergens',
	'aisle'							=> 'Aisle|Aisles',
	'amount'						=> 'Amount',
	'asset'							=> 'Asset|Assets',
	'asset_status'					=> 'Asset Status|Asset Statuses',
	'asset_tag'						=> 'Asset Tag',
	'available'						=> 'Available',
	'balance'						=> 'Balance',
	'barcode'						=> 'Barcode',
	'build'							=> 'Build|Builds',
	'built'							=> 'Built',
	'card'							=> 'Credit Card',
	'card_number'					=> 'Credit Card Number',
	'cash'							=> 'Cash',
	'catalog'						=> 'Catalog|Catalogs',
	'customer_catalog'				=> 'Customer Catalog|Customer Catalogs',
	'company'						=> 'Company|Companies',
	'count'							=> 'Count',
	'create_report_for'				=> 'Create report for',
	'credit'						=> 'Credit',
	'customer'						=> 'Customer|Customers',
	'customer_date'					=> 'Customer Date',
	'customer_inbpo'				=> 'Inbound Purchase Order Number',
	'customer_number'				=> 'Customer Number',
	'cvc_number'					=> 'CVC Number',
	'customer_outbpo'				=> 'Outbound Purchase Order Number',
	'delivery'						=> 'Delivery',
	'expected_date'					=> 'Expected Date',
	'expected_time'					=> 'Expected time',
	'expiration'					=> 'Expiration Date',
	'grand_total'					=> 'Grand Total',
	'gross_wt'						=> 'Gross Weight',
	'has_rack'						=> 'Does this area have racks?',
	'inbound'						=> 'Inbound',
	'ingredient'					=> 'Ingredient|Ingredients',
	'inventory'						=> 'Inventory',
	'invoice'						=> 'Invoice|Invoices',
	'item'							=> 'Item|Items',
	'label'							=> 'Label|Labels',
	'level'							=> 'Level|Levels',
	'live_or_test'					=> 'Live Mode Or Test Mode',
	'locale_type'					=> 'Locale Type|Locale Types',
	'look_up_lot'					=> 'Look up Lot #',
	'lot_number'					=> 'Lot #',
	'make'							=> 'Make',
	'model'							=> 'Model',
	'model_number'					=> 'Model Number',
	'move'							=> 'Move|Moves',
	'n_a'							=> 'N / A',
	'number'						=> 'Number',
	'on_hand'						=> 'On Hand',
	'option'						=> 'Option|Options',
	'order'							=> 'Order|Orders',
	'out_bound'						=> 'Out bound',
	'out_of_stock'					=> 'Out of Stock',
	'pack'							=> 'Pack',
	'pick'							=> 'Pick',
	'picked'						=> 'Picked',
	'pallet'						=> 'Pallet|Pallets',
	'pallet_type'					=> 'Pallet Type|Pallet Types',
	'payment_setting'				=> 'Payment Setting|Payment Settings',
	'payment_type'					=> 'Payment Type',
	'per_pallet'					=> 'Per Pallet',
	'pickup_date'					=> 'Pickup Date',
	'pickup_time'					=> 'Pickup time',
	'po'							=> 'PO #',
	'produced'						=> 'Produced',
	'production'					=> 'Production',
	'production_catalog'			=> 'Production Catalog|Production Catalogs',
	'production_po'					=> 'Production Order Number',
	'quantity'						=> 'Quantity',
	'rack'							=> 'Rack|Racks',
	'raw'							=> 'Raw',
	'receivable'					=> 'Receivable|Receivables',
	'received'						=> 'Recevied',
	'received_date'					=> 'Recevied Date',
	'receiving'						=> 'Receving',
	'receiving_order_no'			=> 'Receiving Order Number',
	'receiving_po'					=> 'Receiving Order Number',
	'record'						=> 'Record|Records',
	'remaining'						=> 'Remaining',
	'report'						=> 'Report|Reports',
	'scan'							=> 'Scan|Scans',
	'sell_by'						=> 'Sell By',
	'serial'						=> 'Serial #',
	'sheet'							=> 'Sheet|Sheets',
	'ship'							=> 'Ship',
	'shippable'						=> 'Shippable|Shippables',
	'shipped'						=> 'Shipped',
	'shipping'						=> 'Shipping',
	'shipping_po'					=> 'Shipping Order Number',
	'slot'							=> 'Slot|Slots',
	'split'							=> 'Split',
	'status_production'				=> 'Production Status|Production Statuses',
	'status_receive'				=> 'Receiving Status|Receiving Statuses',
	'status_ship'					=> 'Shipping Status|Shipping Statuses',
	'stock_um'						=> 'Stock Unit Measurement',
	'tech_status'					=> 'Tech Status|Tech Statuses',
	'total'							=> 'Total',
	'total_amount'					=> 'Total Amount',
	'total_original_amount'			=> 'Total Original Amount',
	'truck'							=> 'Truck|Trucks',
	'trucking'						=> 'Trucking Company|Trucking Companies',
	'unit'							=> 'Unit|Units',
	'vendor'						=> 'Vendor|Vendors',
	'vendor_catalog'				=> 'Vendor Catalog|Vendor Catalogs',
	'zone'							=> 'Zone|Zones',

// Stripe
	'last_four'						=> 'Last Four Digits',
	'live_publish_key'				=> 'Live Publishable Key',
	'live_secret_key'				=> 'Live Secret Key',
	'stripe_active'					=> 'Stripe Active',
	'stripe_api_key'				=> 'Stripe Payment API Keys',
	'stripe_id'						=> 'Stripe ID',
	'stripe_plan'					=> 'Stripe Plan',
	'stripe_subscription'			=> 'Stripe Subscription',
	'subscription_ends_at'			=> 'Subscription Ends At',
	'test_publish_key'				=> 'Test Publishable Key',
	'test_secret_key'				=> 'Test Secret Key',
	'trial_ends_at'					=> 'Trial Ends At',

// ask
	'ask' => [
// 		'delete'					=> 'Delete this Module?',
	],

// button
	'button' => [
// 		'add'						=> 'Add Module',
// 		'create'					=> 'Create New Module',
// 		'delete'					=> 'Delete Module',
// 		'edit'						=> 'Edit Module',
// 		'new'						=> 'New Module',
// 		'view'						=> 'View Module',
// 		'update'					=> 'Update Module',
	],

// command
	'command' => [
	],

// error
	'error' => [
		'bulk_create'				=> 'Asset Tags and Serial Numbers do not match.',
		'pallet_created'			=> 'Pallets have been created',
		'pallet_not_created'		=> 'Pallets have not been created',
		'shipping_delete'			=> 'Pallets have been created',
		'pallet_picked'				=> 'The Pallet has been Picked.',
	],

// success
	'success' => [
		'allergen_create'			=> 'The Allergen was successfully created.',
		'allergen_update'			=> 'The Allergen was successfully updated.',
		'asset_checkin'				=> 'The Asset was successfully Checked In.',
		'asset_checkout'			=> 'The Asset was successfully Checked Out.',
		'asset_create'				=> 'The Asset was successfully created.',
		'asset_update'				=> 'The Asset was successfully updated.',
		'bulk_create'				=> 'The Assets were successfully created.',
		'catalog_create'			=> 'The Catalog was successfully created.',
		'catalog_delete'			=> 'The Catalog was successfully deleted.',
		'catalog_update'			=> 'The Catalog was successfully updated.',
		'customer_create'			=> 'The Customer was successfully created.',
		'customer_delete'			=> 'The Customer was successfully deleted.',
		'customer_update'			=> 'The Customer was successfully updated.',
		'customer_receiving_create'	=> 'The Customer\'s order was successfully created.',
		'customer_receiving_delete'	=> 'The Customer\'s order was successfully deleted.',
		'customer_receiving_update'	=> 'The Customer\'s order was successfully updated.',
		'ingredient_create'			=> 'The Ingredient was successfully created.',
		'ingredient_delete'			=> 'The Ingredient was successfully deleted.',
		'ingredient_update'			=> 'The Ingredient was successfully updated.',
		'item_create'				=> 'The Item was successfully created.',
		'item_update'				=> 'The Item was successfully updated.',
		'locale_type_create'		=> 'The Locale Type was successfully created.',
		'locale_type_update'		=> 'The Locale Type was successfully updated.',
		'pallet_create'				=> 'The Pallet was successfully created.',
		'pallet_update'				=> 'The Pallet was successfully updated.',
		'pallet_picked'				=> 'The Pallet was successfully Picked.',
		'payment_create'			=> 'The Payment was successfully created.',
		'pallet_type_create'		=> 'The Pallet Type was successfully created.',
		'pallet_type_update'		=> 'The Pallet Type was successfully updated.',
		'payment_type_create'		=> 'The Payment Type was successfully created.',
		'payment_type_update'		=> 'The Payment Type was successfully updated.',
		'payment_update'			=> 'The Payment Settings were successfully updated.',
		'production_create'			=> 'The Order was successfully created.',
		'production_delete'			=> 'The Order was successfully deleted.',
		'production_update'			=> 'The Order was successfully updated.',
		'rack_create'				=> 'The Rack was successfully created.',
		'rack_delete'				=> 'The Rack was successfully deleted.',
		'rack_update'				=> 'The Rack was successfully updated.',
		'received_create'			=> 'The Order was successfully created.',
		'received_delete'			=> 'The Order was successfully deleted.',
		'received_update'			=> 'The Order was successfully updated.',
		'receiving_create'			=> 'The Order was successfully created.',
		'receiving_delete'			=> 'The Order was successfully deleted.',
		'receiving_update'			=> 'The Order was successfully updated.',
		'shipping_create'			=> 'The Order was successfully created.',
		'shipping_delete'			=> 'The Order was successfully deleted.',
		'shipping_update'			=> 'The Order was successfully updated.',
		'status_receive_create'		=> 'The Status was successfully created.',
		'status_receive_update'		=> 'The Status was successfully updated.',
		'status_ship_create'		=> 'The Status was successfully created.',
		'status_ship_update'		=> 'The Status was successfully updated.',
		'trucking_create'			=> 'The Trucking Company was successfully created.',
		'trucking_update'			=> 'The Trucking Company was successfully updated.',
		'unit_create'				=> 'The Unit was successfully created.',
		'unit_update'				=> 'The Unit was successfully updated.',
		'vendor_create'				=> 'The Vendor was successfully created.',
		'vendor_update'				=> 'The Vendor was successfully updated.',
		'vendor_receiving_create'	=> 'The Vendor\'s order was successfully created.',
		'vendor_receiving_delete'	=> 'The Vendor\'s order was successfully deleted.',
		'vendor_receiving_update'	=> 'The Vendor\'s order was successfully updated.',
		'zone_create'				=> 'The Zone was successfully created.',
		'zone_delete'				=> 'The Zone was successfully deleted.',
		'zone_update'				=> 'The Zone was successfully updated.',
	],


];

