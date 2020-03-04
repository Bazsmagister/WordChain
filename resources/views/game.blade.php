@include ('includes.header')

<?php
$userword = "";

//  With vanilla php you need validate the request:
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $userword = test_input($_POST["userword"]);

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


/*
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $userword = $_POST["userword"];
*/

?>

<div id="header-wrapper">

    <div id="header-featured">
        <div id="banner-wrapper">
            <div id="banner" class="container">
                Pick a word!


            <div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                @csrf
                Your word:
            <input type="text" name="userword" value="" onchange="hide_it()" ><br>

                <input type="submit" name="submit" value="Submit">

            </form>
            <div>


                <?php
                /*
                With vanilla php :
                echo "<h4>Your word was: </h4>";
                echo $userword;
                */
                ?>
                <br>

                <?php
                //With Laravel:
                ?>
                Your word was: {{$userword}}


                <br>
                My word is: {{--   --}}
                <br>

                <script>
                    function myFunction hide_it() {
                    document.getElementById("invisible").style.visibility = "hidden";
                    }
                </script>
                <p id="invisible">
                Your turn again!
                </p>



            </div>
        </div>
    </div>
        </div>
    </div>
</div>

<div>



</div>

@include ('includes.footer')
