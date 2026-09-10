<?php
    // Step 1: Buat variabel untuk menyimpan nilai tujuan
    $destination = "Tokyo";

    // Step 2: Mulai struktur switch untuk mencocokkan variabel $destination
    switch ($destination) {
        case "Las Vegas":
            echo "Bring an extra $500";
            break;
        case "Amsterdam":
            echo "Bring an open mind";
            break;
        case "Egypt":
            echo "Bring 15 bottles of SPF 50 Sunscreen";
            break;
        case "Tokyo":
            echo "Bring lots of money";
            break;
        case "Caribbean Islands":
            echo "Bring a swimsuit";
            break;
    }
?>