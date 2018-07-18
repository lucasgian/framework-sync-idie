<?php

class BootstrapClass {


    public function getAllStyle() {
        echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">';
    }

    public function getCadText($body) {
        echo "
            <div class='container'>
            
                <div class='card' style='width: 18rem;'>
                    <div class='card-header'>
                        " . $body . "
                    </div>
                </div>
            </div>
        ";
    }
    
}