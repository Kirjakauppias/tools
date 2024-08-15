<?php 
    // Funktio jossa POST -data lisätään SESSIOON
    function post_data_to_session(){
        // Onko POST?
        if ($_SERVER['REQUEST_METHOD'] === POST) {
            // Onko data -parametri?
            if(isset($_POST['data'])) {

                // Tallennetaan data sessioon
                $_SESSION['datas'][] = $_POST['data'];
                
            } else {
                echo "No 'data' in POST";
            }
        } else {
            echo "Not a POST request method";
        } 
    }
?>