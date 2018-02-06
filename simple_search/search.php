<style type="text/css">
	.search_res {
    display: table;
    margin: 0 auto;
    margin-top: 10%;
    border: 2px solid;
    padding: 50px 100px;
}
</style>
<div class="search_res">

<?php  // Get the search variable from URL
if(!isset($_GET['q']))
die("Search Query not found");
$var = $_GET['q'];
$trimmed = trim($var); //trim whitespace from the stored variable
// rows to return
$limit=10;

// check for an empty string and display a message.
if ($trimmed == ""){
echo "<p>Please enter a search…</p>";
exit;
}

// check for a search parameter
if (!isset($var)){
echo "<p>We dont seem to have a search parameter!</p>";
exit;
}

//connect to your database ** EDIT REQUIRED HERE **
mysql_connect("localhost","root","");

//specify database ** EDIT REQUIRED HERE **
mysql_select_db('simple_search') or die("Unable to select database");
// Build SQL Query

$query = "select * from customer where first_name like '%".$trimmed."%' or last_name like '%".$trimmed."%'";

// EDIT the above SQL query and specify your table and field names

$numresults=mysql_query($query);
$numrows=mysql_num_rows($numresults);

// If we have no results, offer a google search as an alternative — this is optional

if ($numrows == 0)
{
echo "<h2 class='edufair-main-title'>Results</h2>";
echo "<h4>Sorry, your search: $trimmed returned zero results</h4>";

// google
//echo "<p><a href='http://www.google.com/search?q=&#8221; . $trimmed . , target='_blank' title='Look up' . $trimmed . , on Google'>Click here</a> to try the search on google</p>";
}

// next determine if s has been passed to script, if not use ZERO (0) to Limit the output
if (empty($s)) {
$s=0;
}

// get results
$query .= " limit $s,$limit";
$result = mysql_query($query) or die("Couldn’t execute query");

// display what the person searched for
echo "<h2 class='edufair-main-title'>Search Results for: $var </h2>";

// begin to show results set
echo "<h3>Results:</h3><br/>";
$count = 1 + $s ;

// now you can display the results returned
while ($row= mysql_fetch_array($result)) {
$f_name = $row["first_name"];
$l_name = $row["last_name"];
$email = $row["email"];

echo "[ $count ] -- <a href='#'> $f_name </a> $l_name | $email<br/>" ;
$count++ ;
}

$currPage = (($s/$limit) + 1);

//break before paging
echo "<br />";

// next we need to do the links to other results
if ($s>=1) {

// bypass PREV link if s is 0
$prevs=($s-$limit);
//print "<a href="$PHP_SELF?s=$prevs&q=$var"><< Prev 10</a>";
}

// calculate number of pages needing links
$pages=intval($numrows/$limit);

// $pages now contains int of pages needed unless there is a remainder from division

if ($numrows%$limit) {
// has remainder so add one page
$pages++;
}

// check to see if last page
if (!((($s+$limit)/$limit)==$pages) && $pages!=1) {

// not last page so give NEXT link
$news=$s+$limit;

//echo "<a href="$PHP_SELF?s=$news&q=$var">Next 10 >></a>";
}

$a = $s + ($limit) ;
if ($a > $numrows) { $a = $numrows ; }
$b = $s + 1 ;
echo "<hr>";
echo "<h4>Showing results $b to $a of $numrows</h4>";

?>

</div>