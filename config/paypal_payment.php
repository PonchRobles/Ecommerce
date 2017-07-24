<?php

return array(
	# Account credentials from developer portal
	'Account' => array(
		'ClientId' => env('Ab5o7T9BFhv9G5Rwwmkw_xQQc8A_dVqxhEF-Ez5C6_z3nzNdHn2O9ReKu_exNKW7KhnOwIK-ZtNxpUGv',''),
		'ClientSecret' => env('EBHvgeN33lUiSXjbhdOLouSCUy2eDSaSp0ZqqrPO_RUreSIRsXgIc2Lze7ny3yQOBbA3n4RFVmZI5Kf5',''),
	),

	# Connection Information
	'Http' => array(
		// 'ConnectionTimeOut' => 30,
		'Retry' => 1,
		//'Proxy' => 'http://[username:password]@hostname[:port][/path]',
	),

	# Service Configuration
	'Service' => array(
		# For integrating with the live endpoint,
		# change the URL to https://api.paypal.com!
		#'EndPoint' => 'https://api.sandbox.paypal.com',
		'EndPoint' => 'https://api.paypal.com',
	),


	# Logging Information
	'Log' => array(
		//'LogEnabled' => true,

		# When using a relative path, the log file is created
		# relative to the .php file that is the entry point
		# for this request. You can also provide an absolute
		# path here
		'FileName' => '../PayPal.log',

		# Logging level can be one of FINE, INFO, WARN or ERROR
		# Logging is most verbose in the 'FINE' level and
		# decreases as you proceed towards ERROR
		//'LogLevel' => 'FINE',
	),
);
