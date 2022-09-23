<?php

/**
 * Example Application
 *
 * @package Example-application
 */

require 'libs/Smarty.class.php';

$smarty = new Smarty;

//$smarty->force_compile = true;
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$smarty->assign("Name", 'Sandeep Kumar');

// Question No.3

$smarty->assign('data', array(1, 2, 3, 4, 5, 6, 7, 8, 9));



// $smarty->assign('Contacts',
//     array('fax' => '555-222-9876',
//           'email' => 'zaphod@slartibartfast.example.com',
//           'phone' => array('home' => '555-444-3333',
//                            'cell' => '555-111-1234')
//                            )
//          );


$smarty->assign(
    'Contacts',
    array(
        array(
            'fax' => '555-222-9876',
            'email' => 'megha@ucertify.com',
            'phone' => array(
                'home' => '555-444-3333',
                'cell' => '555-111-1234'
            )
        ),
        array(
            'fax' => '555-222-8876',
            'email' => 'pete.gupta@ucertify.com',
            'phone' => array(
                'home' => '555-444-8888',
                'cell' => '555-111-9999'
            )
        )
    )
);

$smarty->assign('myOptions', array(
    101 => 'Jack',
    102 => 'Peter',
    103 => 'Max')
    );
    $smarty->assign('mySelect', 103);



    $smarty->assign('Contacts',
	array('fax' => '555-222-9876',
		'email' => 'megha@ucertify.com',
		'phone' => array('home' => '555-444-3333',
			'cell' => '555-111-1234'
		)
	),
	array('fax' => '555-222-8876',
		'email' => 'pete.gupta@ucertify.com',
		'phone' => array('home' => '555-444-8888',
			'cell' => '555-111-9999'
		)
	)
);


// Question No. 8

$our_culture = array(
    array(
        "point_one" => "To be the best in the world.",
    ),
    array(
        "point_two" => "We produce results.",
    ),
    array(
        "point_three" => "We keep our word - We do what we say we will do.",
    ),
    array(
        "point_four" => "Coach, mentor and help the team grow."
    )
    );


    $smarty->assign('myPeople',$our_culture);


// Question No.9
// checkbox

$smarty->assign('cust_ids', array(1000,1001,1002,1003));
$smarty->assign('cust_names', array(
                                'Joe Schmoe',
                                'Jack Smith',
                                'Jane Johnson',
                                'Charlie Brown')
                              );
$smarty->assign('customer_id', 1001);
// Radio

$smarty->assign('cust_radios', array(
    1000 => 'Joe Schmoe',
    1001 => 'Jack Smith',
    1002 => 'Jane Johnson',
    1003 => 'Charlie Brown'));
$smarty->assign('customer_id', 1001);








// $smarty->assign("option_values", array("NY", "NE", "KS", "IA", "OK", "TX"));
// $smarty->assign("option_output", array("New York", "Nebraska", "Kansas", "Iowa", "Oklahoma", "Texas"));
// $smarty->assign("option_selected", "NE");

$smarty->display('index.tpl');
