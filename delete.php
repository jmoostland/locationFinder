<?php

include 'connection.php';

$con = new mysqli('localhost', 'root', '', 'kunst');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sql = "DELETE FROM kunstwerk WHERE id='$_GET[id]'";

if (mysqli_query($con, $sql))
    header("refresh:2; url=collection.php");
else
    echo "This painting can't be deleted.";

echo "This is a result of a switch" . "<br>" . "<br>";

$varSwitch = "choice";
switch ($varSwitch) {
    case "choice":
        echo "You deleted a paiting" . "<br>";
        break;
    case "no choice":
        echo "Are you sure you want to delete this painting";
        break;
    default:
        echo"You didn't make a choice.";
}
echo "<br>";
echo "This is a result of an if.. ifelse...else" . "<br>" . "<br>";

if ($varSwitch == "choice") {
    echo "You deleted a painting" . "<br>";
} elseif ($varSwitch == "no choice") {
    echo "Are you sure you want to delete this painting";
} else {
    echo "Whatever";
}

echo "<br>";
echo "<br>";
echo "<br>" . "Here you find a Class, Method, Object, Constructor, Inheritance, etc." . "<br>";

$artwork1Object = new Artwork;
$artwork2 = new Artwork;
$artwork3 = new Artwork;

$artwork1Object->color = "red";
$artwork2->color = "green";
$artwork3->color = "yellow";

$artwork1Object->artist = "Martine Sauter";
$artwork2->artist = "Berend Strik";
$artwork3->artist = "Charlotte Dumas";

$artwork1Object->space = "foyer";
$artwork2->space = "entrance";
$artwork3->space = "shop";

$artWork = array($artwork1Object, $artwork2, $artwork3);
for ($x = 0; $x < count($artWork); $x++) {
    ArtWorkShow($artWork [$x]);
}

function ArtWorkShow($artworks) {
    echo "The artwork of the artist " . $artworks->artist;
    echo " in the location " . $artworks->space;
    echo " has the color " . $artworks->color;
    echo "<br>";
}

class Artwork {

    public $color;
    public $artist;
    public $space;

    function __construct() {
        print "Red, yellow, blue" . "<br>";
    }
}

class Title1 {

    protected $_paint;

    public function __construct($name) {
        $this->_paint = $name;
    }
    public function getBuyer() {
        return $this->_paint;
    }
}

class Owner1 extends Title1 {

    private $_title;

    public function __construct($paint, $title) {
        $this->_paint = $paint;
        $this->_title = $title;
    }
}

$buyer = new Owner1('Damien Hirst', 2);
$buyer = new Owner1('Marlene Dumas', 3); //methods wordt overschreven
echo "Another artist is " . $buyer->getBuyer();

interface ArtistD {
    const nameH = "<br>" . 'Damien Hirst';
}

echo ArtistD::nameH;
?>

