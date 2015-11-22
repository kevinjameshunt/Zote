<?PHP
require_once("./include/fg_membersite.php");

$fgmembersite = new FGMembersite();

//Provide your site name here
$fgmembersite->SetWebsiteName('BroadcastTest.com');

//Provide the email address where you want to get notifications
$fgmembersite->SetAdminEmail('kevinjameshunt@gmail.com');

//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgusers in this case)
//by itself on submitting register.php for the first time
$fgmembersite->InitDB(/*hostname*/'198.57.232.20',
                      /*username*/'kevinjam_prod',
                      /*password*/'kjh!nco74!47you',
                      /*database name*/'kevinjam_kenya',
                      /*table name*/'broadcastusers');

//For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$fgmembersite->SetRandomKey('MuB2gS90KhrGPMf');

?>