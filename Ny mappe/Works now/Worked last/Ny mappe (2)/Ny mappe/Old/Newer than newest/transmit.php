<?php
    //Example string:
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

            $numRows = $result->num_rows;
            if ($numRows > 0) {
                $i = 0;
                while($row = $result->fetch_assoc()) {
                    $utgang[$i] = $row["Utgang"];
                    $status[$i] = $row["Status"];
                    $i++;
                }
            }

            /*
            //Echo out the information as html instead of json
            echo "<br>";
            for($i = 0; $i < sizeof($utgang); $i ++){
                echo "Utgang: ";
                echo $utgang[$i];
                echo " = ";
                echo $status[$i];
                echo "<br>";
            }
            */
            
                $output[0] = $utgang;
                $output[1] = $status;
                echo json_encode($output[1]);
        }
        $conn->close();   
    }
?>