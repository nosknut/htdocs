<?php
    //Example string:
    //http://localhost:1234/index.php?server=35.187.40.176&user=nosk&password=1234&query=SELECT * FROM Traverskran.Traverskran

    if(isset($_GET["command"])){
        $servername = "35.187.40.176";
        $username = "nosk";
        $passcode = "1234";
        $command = $_GET["command"];
        $sql="";//making sure the alue is carried on after local allocation
        $validGET = FALSE;
        if($command=="getPorts"){//If the command is to get all ports from sql and output as json
            $sql="Select * FROM Traverskran.Traverskran";
            $validGET = TRUE;
        }
		elseif(isset($_GET["state"])){//State will be defined if any ports are to be set
            $state = $_GET["state"];

            if($command == "setAllPorts"){//Set all ports to the state value
                $sql = "UPDATE Traverskran.Traverskran SET status=$state";
                $validGET = TRUE;

            }elseif($command == "setPort" && isset($_GET["port"])){//Set port in value port to state
                $port = $_GET["port"];
                $sql = "UPDATE Traverskran.Traverskran SET status=$state WHERE Utgang=$port";
                $validGET = TRUE;
            }
        }

        if($validGET){
            $servername = "35.187.40.176";
            $username = "nosk";
            $passcode = "1234";
            //echo $sql;
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
              $output[0] = $utgang;
              $output[1] = $status;
              echo json_encode($output[1]);
            }else{
				
				echo "no information returned from sql";
			}
            $conn->close();
        }
    }elseif(isset($_GET["server"]) && isset($_GET["user"]) && isset($_GET["password"]) && isset($_GET["query"])){

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
			$output[0] = $utgang;
			$output[1] = $status;
			echo json_encode($output[1]);
        }
        $conn->close();
    }
	else{
		echo "insertPropperParameters";
	}
?>
