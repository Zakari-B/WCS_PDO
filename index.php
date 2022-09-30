<?php

require_once '_connec.php';

$pdo = new \PDO(DSN, USER, PASS);

$query = "SELECT * FROM friend";
$statement = $pdo->query($query);
$friends = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<body>
    <ul>
        <?php
        foreach ($friends as $friend) {
            echo '<li>' . $friend['firstname'] . ' ' . $friend['lastname'] . '</li>';
        }
        ?>
    </ul>
    <br />
    <form action="addfriend.php" method="post">
        <label for="firstname">Prénom :</label>
        <input id="firstname" name="firstname" placeholder="John" required />
        <br />
        <label for="lastname">Prénom :</label>
        <input id="lastname" name="lastname" placeholder="Doe" required />
        <button type="submit">Ajouter</button>
    </form>
</body>