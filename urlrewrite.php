<?
$arUrlRewrite = array(
	array(
		"CONDITION"	=>	"#^/en/press/faq/([0-9]+)/([0-9]+)/#",
		"RULE"	=>	"sid=$1&id=$2&zz=$3",
		"PATH"	=>	"/en/press/faq/detail.php",
	),
	array(
		"CONDITION"	=>	"#^/press/faq/([0-9]+)/([0-9]+)/#",
		"RULE"	=>	"sid=$1&id=$2&zz=$3",
		"PATH"	=>	"/press/faq/detail.php",
	),
	array(
		"CONDITION"	=>	"#^/en/press/marketing/([0-9]+)/#",
		"RULE"	=>	"ID=$1&zz=$2",
		"PATH"	=>	"/en/press/marketing/detail.php",
	),
	array(
		"CONDITION"	=>	"#^/en/subscribe/subscr_edit.php#",
		"RULE"	=>	"id=$1&temp=$2",
		"PATH"	=>	"/en/subscribe/index.php",
	),
	array(
		"CONDITION"	=>	"#^/subscribe/subscr_edit.php#",
		"RULE"	=>	"id=$1&temp=$2",
		"PATH"	=>	"/subscribe/index.php",
	),
	array(
		"CONDITION"	=>	"#^/press/marketing/([0-9]+)/#",
		"RULE"	=>	"ID=$1&zz=$2",
		"PATH"	=>	"/press/marketing/detail.php",
	),
	array(
		"CONDITION"	=>	"#^/en/press/public/([0-9]+)/#",
		"RULE"	=>	"ID=$1&zz=$2",
		"PATH"	=>	"/en/press/public/detail.php",
	),
	array(
		"CONDITION"	=>	"#^/en/press/digest/([0-9]+)/#",
		"RULE"	=>	"ID=$1&zz=$2",
		"PATH"	=>	"/en/press/digest/detail.php",
	),
	array(
		"CONDITION"	=>	"#^/en/press/news/([0-9]+)/#",
		"RULE"	=>	"ID=$1&zz=$2",
		"PATH"	=>	"/en/press/news/detail.php",
	),
	array(
		"CONDITION"	=>	"#^/press/digest/([0-9]+)/#",
		"RULE"	=>	"ID=$1&zz=$2",
		"PATH"	=>	"/press/digest/detail.php",
	),
	array(
		"CONDITION"	=>	"#^/press/public/([0-9]+)/#",
		"RULE"	=>	"ID=$1&zz=$2",
		"PATH"	=>	"/press/public/detail.php",
	),
	array(
		"CONDITION"	=>	"#^/en/press/faq/([0-9]+)/#",
		"RULE"	=>	"sid=$1&zz=$2",
		"PATH"	=>	"/en/press/faq/index.php",
	),
	array(
		"CONDITION"	=>	"#^/en/clients/([0-9]+)/#",
		"RULE"	=>	"id=$1&temp=$2",
		"PATH"	=>	"/en/clients/detail.php",
	),
	array(
		"CONDITION"	=>	"#^/press/news/([0-9]+)/#",
		"RULE"	=>	"ID=$1&zz=$2",
		"PATH"	=>	"/press/news/detail.php",
	),
	array(
		"CONDITION"	=>	"#^/press/faq/([0-9]+)/#",
		"RULE"	=>	"sid=$1&zz=$2",
		"PATH"	=>	"/press/faq/index.php",
	),
	array(
		"CONDITION"	=>	"#^/clients/([0-9]+)/#",
		"RULE"	=>	"id=$1&temp=$2",
		"PATH"	=>	"/clients/detail.php",
	),
);

?>