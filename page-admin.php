<!DOCTYPE html>
<html>
<head>
    <title>liste des utilisateurs</title>
</head>
<body>
<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">Liste des Utilisateurs</div>
        <div class="panel-body">
            <table border="1" cellpadding="3" cellspacing="6">
                <thead class="thead-inverse">
                <tr>
                    <th>Code</th>
                    <th>Nom</th>
                    <th>email</th>
                    <th>login</th>
                    <th>password</th>
                    
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
                </thead>
                <?php
                
                include 'connectbd.php';
                $req=$mabase->query("SELECT * FROM user");
                while ($res=$req->fetch()) {
                    $id = $res['idu'];
                    ?>
                    <tr>
                        <td> <?php echo $res['idu']?> </td>
                        <td> <?php echo $res['nom']?> </td>
                        <td> <?php echo $res['email']?> </td>
                        <td> <?php echo $res['login']?> </td>
                        <td> <?php echo $res['pwd']?> </td>
                       
                        <td><?php echo" <a href=\"?idu= $id\" >Modifier</a>";?> </td>
                        <td><?php echo" <a href=\"?idu= $id\" >Supprimer</a>";?> </td>

                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>

</body>
</html>