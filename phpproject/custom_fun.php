<!DOCTYPE HTML>
<html>
    <head>
        <title>Custom function for PHP</title>
    </head>

    <body>
        <?php
            function company($emp_id, $name, $age)
            {
                echo "$emp_id, $name, $age <br>";
            }
            company(1031, "Bharathi ->",21);
            company(1032, "senkathir ->",20);
            company(1033, "vasanth ->",17);
            company(1034, "tamil ->",22);
            company(1035, "mohan ->",20);

            function employee ($id, $name, $age, $boold_gr)
            {
                echo "$id, $name, $age, $boold_gr<br>";
            }
            employee(1, "John Doe", 25, "A+");
            employee(2, "Jane Smith", 30, "B+");
            employee(3, "Emily Davis", 28, "O+");
            employee(4, "Michael Brown", 35, "AB+");
            employee(5, "Chris Wilson", 22, "A-");
            employee(6, "Sarah Johnson", 27, "B-");
            employee(7, "David Lee", 31, "O-");
            employee(8, "Emma White", 29, "AB-");
            employee(9, "James Taylor", 26, "A+");
            employee(10, "Olivia Harris", 32, "B+");
        ?>

    </body>
</html>