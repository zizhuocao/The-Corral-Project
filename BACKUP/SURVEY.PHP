<?PHP
//CONNECT TO DATABASE-FIX THIS LATER
$MYSQLI = NEW MYSQLI("LOCALHOST", "ADMIN", "PASSWORD1", "CORRAL_PROJECT");

//ANSWER QUERIES
$QUERY = "SELECT * FROM ANSWER WHERE ANSWER_ID BETWEEN 1 AND 6";
$RESULT = $MYSQLI->QUERY( $QUERY );

echo "<br>";
ECHO '<SELECT ID="ANSWER" NAME="ANSWER" CLASS="TXTBOX">';
ECHO '<OPTION VALUE="">-SELECT-</OPTION>';
WHILE ($ROW = $RESULT->FETCH_ASSOC()){
?>
    <OPTION VALUE="<?PHP ECHO $ROW['ANSWER']; ?>"><?PHP ECHO $ROW['ANSWER']; ?></OPTION>
<?PHP

ECHO "</SELECT>";

echo "<br>";
echo "<br>";

?>
