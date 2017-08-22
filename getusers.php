<php
        $db_name  = 'BookNet';
        $hostname = 'localhost';
        $username = 'root';
        $password = 'root';

        $dbh = new PDO("mysql:host=$hostname;dbname=$db_name", $username, $password);

        $sql = 'SELECT * FROM Users';

        $stmt = $dbh->prepare( $sql );

        $stmt->execute();

        $result = $stmt->fetchAll( PDO::FETCH_ASSOC );

        header('Content-Type: application/json');
        echo json_encode( $result );

?>
