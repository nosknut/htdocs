<?php
    /*
    $port = "undefined";
    $state = "undefined";
    for($port = 0; $port < 9; $port++){
        if(isset($_GET[$port])){
            $state = $_GET[$port];
            break;
        }
    }
    
    if($state != "undefined"){
        $servername = "35.187.40.176";
        $username = "nosk";
        $password = "1234";

        // Create connection
        $conn = new mysqli($servername, $username, $password);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $sql = ("Update Traverskran.Traverskran SET Status = $state WHERE Utgang = $port");
        
        $result = $conn->query($sql);
        if(isset($result->num_rows)){
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "Utgang: " . $row["Utgang"]. " - Status: " . $row["Status"]."<br>";
                }
            }
        }

        $sql = "SELECT * FROM Traverskran.Traverskran";
        $result = $conn->query($sql);
        if(isset($result->num_rows)){
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "Utgang: " . $row["Utgang"]. " - Status: " . $row["Status"]."<br>";
                }
            }
        }
        
        
        $conn->close();
    }
    echo "<br>";
    */
?>
<?php
    /*
    $port = "undefined";
    $state = "undefined";
    for($port = 0; $port < 9; $port++){
        if(isset($_GET[$port])){
            $state = $_GET[$port];
            break;
        }
    }
    
    if($state != "undefined"){
        $servername = "35.187.40.176";
        $username = "nosk";
        $password = "1234";

        $conn = new mysqli($servername, $username, $password);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        $sql = ("Update Traverskran.Traverskran SET Status = $state WHERE Utgang = $port");
        $conn->query($sql);
        $conn->close();
    }
    */
?>
<?php
    /*
    //http://localhost:1234/index.php?server=35.187.40.176&user=nosk&password=1234&query=SELECT * FROM Traverskran.Traverskran
    if(isset($_GET["server"]) && isset($_GET["user"]) && isset($_GET["password"]) && isset($_GET["query"])){
        $servername = $_GET["server"];//"35.187.40.176"
        $username = $_GET["user"];
        $passcode = $_GET["password"];
        $sql = $_GET["query"];
        $conn = new mysqli($servername, $username, $passcode);
        $result = $conn->query($sql);

        if(isset($result->num_rows)){
            $utgang = array();
            $status = array();
            $data = array();
            $data[] = array();
            $columns = array();

            $numRows = $result->num_rows;
            if ($numRows > 0) {
                $i = 0;
                while($row = $result->fetch_assoc()) {
                    $data[$i] = $row;
                    $j = 0;
                    foreach ($row as $key => $value) {
                        $columns[$j] = $key;
                        $j ++;
                    }
                    $i++;
                }
            }

            for($x = 0; $x < sizeof($columns); $x++){
                echo $columns[$x];
                if($x != (sizeof($columns) - 1)) echo " : ";
            }
            echo "<br>";

            for($y = 0; $y < $numRows; $y ++){
                for($x = 0; $x < sizeof($data[$y]); $x ++){
                    echo $data[$y][$columns[$x]];
                    if($x != (sizeof($data[$y]) - 1)) echo " : ";
                }
                    echo "<br>";
            }
        }
        $conn->close();
    }
  */
?>
<?php
    
    //http://localhost:1234/index.php?server=35.187.40.176&user=nosk&password=1234&query=SELECT * FROM Traverskran.Traverskran
    /*
    if(isset($_GET["server"]) && isset($_GET["user"]) && isset($_GET["password"]) && isset($_GET["query"])){
        $servername = $_GET["server"];//"35.187.40.176"
        $username = $_GET["user"];
        $passcode = $_GET["password"];
        $sql = $_GET["query"];
        $conn = new mysqli($servername, $username, $passcode);
        $result = $conn->query($sql);

        if(isset($result->num_rows)){
            $utgang = array();
            $status = array();

            $numRows = $result->num_rows;
            if ($numRows > 0) {
                $i = 0;
                while($row = $result->fetch_assoc()) {
                    $utgang[$i] = $row["Utgang"];
                    $status[$i] = $row["Status"];
                    $i++;
                }
            }
            */
            /*
            echo "<br>";
            for($i = 0; $i < sizeof($utgang); $i ++){
                echo "Utgang: ";
                echo $utgang[$i];
                echo " = ";
                echo $status[$i];
                echo "<br>";
            }*/
            /*
                $output[0] = $utgang;
                $output[1] = $status;
                echo json_encode($output);
        }
        $conn->close();
        
    }
  */
?>
<?php
  /*
<html>
    <body>
        <form action="index.php" method="get">
            0: <input type="submit"  name="0" value="1">    <input type="submit"  name="0" value="0"><br>
            1: <input type="submit"  name="1" value="1">    <input type="submit"  name="1" value="0"><br>
            2: <input type="submit"  name="2" value="1">    <input type="submit"  name="2" value="0"><br>
            3: <input type="submit"  name="3" value="1">    <input type="submit"  name="3" value="0"><br>
            4: <input type="submit"  name="4" value="1">    <input type="submit"  name="4" value="0"><br>
            5: <input type="submit"  name="5" value="1">    <input type="submit"  name="5" value="0"><br>
            6: <input type="submit"  name="6" value="1">    <input type="submit"  name="6" value="0"><br>
            7: <input type="submit"  name="7" value="1">    <input type="submit"  name="7" value="0"><br>
            8: <input type="submit"  name="8" value="1">    <input type="submit"  name="8" value="0"><br>
        </form>
    </body>
</html>
  */
?>

<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>

    <body>
        <script>
            /*
            $(document).ready(function () {

            //$("#table").html("yollllllo");
            $("button").click(function () {
            alert("fy")
            $("p").hide();
            });
            });
            success: function(data) {
            alert("iehkbjd"); // apple


            }

            $.get("http://localhost:1234/index.php?server=35.187.40.176&user=nosk&password=1234&query=Select+*+FROM+Traverskran.Traverskran", function (data) {
            $(".result").html(data);
            alert(data);
            var $returned = JSON.parse(data);
            $("#table").html("ituewgjh");
            });
            */
            function cf() {
                $.get("http://localhost:1234/index.php?server=35.187.40.176&user=nosk&password=1234&query=Select+*+FROM+Traverskran.Traverskran", function (data) {
                    $(".result").html(data);
                    alert(data);
                    var $returned = JSON.parse(data);
                });
            }
        </script>
        <button id="button" onclick="cf()">Set</button>
                <?php
            /*  

        <form action="index.php" method="get">
            
            Server: <input type="text" name="server" value="35.187.40.176"> <br>
            User: <input type="text" name="user" value="nosk"> <br>
            Password: <input type="text" name="password" value="1234"> <br>
            Get: <input type="submit" name="query" value="Select * FROM Traverskran.Traverskran"> <br> <br>
            <h1 id="table">Hello World!</h1>
            Set: <br>
            0: <input type="submit"  name="query" value="UPDATE Traverskran.Traverskran SET Status = 1 WHERE Utgang = 0">    <input type="submit"  name="query" value="UPDATE Traverskran.Traverskran SET Status = 0 WHERE Utgang = 0"><br>
            1: <input type="submit"  name="query" value="UPDATE Traverskran.Traverskran SET Status = 1 WHERE Utgang = 1">    <input type="submit"  name="query" value="UPDATE Traverskran.Traverskran SET Status = 0 WHERE Utgang = 1"><br>
            2: <input type="submit"  name="query" value="UPDATE Traverskran.Traverskran SET Status = 1 WHERE Utgang = 2">    <input type="submit"  name="query" value="UPDATE Traverskran.Traverskran SET Status = 0 WHERE Utgang = 2"><br>
            3: <input type="submit"  name="query" value="UPDATE Traverskran.Traverskran SET Status = 1 WHERE Utgang = 3">    <input type="submit"  name="query" value="UPDATE Traverskran.Traverskran SET Status = 0 WHERE Utgang = 3"><br>
            4: <input type="submit"  name="query" value="UPDATE Traverskran.Traverskran SET Status = 1 WHERE Utgang = 4">    <input type="submit"  name="query" value="UPDATE Traverskran.Traverskran SET Status = 0 WHERE Utgang = 4"><br>
            5: <input type="submit"  name="query" value="UPDATE Traverskran.Traverskran SET Status = 1 WHERE Utgang = 5">    <input type="submit"  name="query" value="UPDATE Traverskran.Traverskran SET Status = 0 WHERE Utgang = 5"><br>
            6: <input type="submit"  name="query" value="UPDATE Traverskran.Traverskran SET Status = 1 WHERE Utgang = 6">    <input type="submit"  name="query" value="UPDATE Traverskran.Traverskran SET Status = 0 WHERE Utgang = 6"><br>
            7: <input type="submit"  name="query" value="UPDATE Traverskran.Traverskran SET Status = 1 WHERE Utgang = 7">    <input type="submit"  name="query" value="UPDATE Traverskran.Traverskran SET Status = 0 WHERE Utgang = 7"><br>
            8: <input type="submit"  name="query" value="UPDATE Traverskran.Traverskran SET Status = 1 WHERE Utgang = 8">    <input type="submit"  name="query" value="UPDATE Traverskran.Traverskran SET Status = 0 WHERE Utgang = 8"><br>
        </form>

 
            




            <video width="320" height="240" autoplay controls>
        <source src="1454665" type="video/mp4"/>
    <object width="320" height="240" type="application/x-shockwave-flash" data="http://releases.flowplayer.org/swf/flowplayer-3.2.5.swf">
        
            
                 
                <param name="movie" value="http://releases.flowplayer.org/swf/flowplayer-3.2.5.swf" /> 
                <param name="flashvars" value='config={"clip": {"url": "%StreamURL%", "autoPlay":true, "autoBuffering":true}}' /> 
                <p><a href="%StreamURL%">view with external app</a></p> 
            */
        ?>
    </object>
</video>
    </body>
</html>
    