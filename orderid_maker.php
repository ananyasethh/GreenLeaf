    <?php
        $n=10;
        function orderID($n) {
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ_#';
                $randomString = '';
                for ($i = 0; $i < $n; $i++) {
                    $index = rand(0, strlen($characters) - 1);
                    $randomString .= $characters[$index];
                }
                return $randomString;
            }
            $orderID = orderID($n);
            // print($orderID);
    ?>