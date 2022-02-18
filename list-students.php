<?php

include "connectdb.php";

$sql = "SELECT * FROM student";

$sth = $db->prepare($sql);

$sth->execute();

?>


<div class = "container">
<table>

    <thead>

    <tr>
        <th>Id</th>
        <th>Voornaam</th>
        <th>Achternaam</th>
        <th>adres</th>
        <th>Acties</th>
    </tr>

    </thead>

    <tbody>

    <?php while($row = $sth->fetch()) { ?>

        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["voornaam"]; ?></td>
            <td><?php echo $row["achternaam"]; ?></td>
            <td><?php echo $row['email'] . ' ' . $row['telefoonnummer'] . '' . $row['straatnaam'] . '' . $row['huisnummer'] . '' . $row['huisnummer_toevoeging'] . '' . $row['woonplaats'] . '' . $row['postcode']; ?></td>
            <td><button onclick="confirmDelete(<?php echo $row['id'];?>)" class="btn btn-danger" id="btn-delete-confirmed">Verwijder</button></td>
            <td><a class="btn btn-dark" href="update-student-form.php?id=<?php echo $row["id"]?>">Wijzig</a></td>
        </tr>

    <?php } ?>

    </tbody>

</table>
</div>



    <script>

        function confirmDelete(studentId) {

// Zoek met jquery het form met id “modal-confirm” en open het form

            $("#modal-confirm").modal('show');
            $('#btn-delete-confirmed').on('click', function(){deleteStudent(studentId);});

        }

    </script>


    <div class="modal" id="modal-confirm" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="" data-dismiss="modal">Annuleer</button>
                    <button type="button" class="btn btn-secondary" id="btn-delete-confirmed" data-dismiss="modal">Verwijder</button>
                </div>
            </div>
        </div>
    </div>



    <script>
        function deleteStudent(studentId) {

            $('#modal-confirm').modal('hide');

            $.get('delete-student.php',

                {id: studentId}).then(

                function() {

                    window.location.href = 'index.php';

                    window.location.reload(true);});

        }




    </script>


<?php include "templates/footer.php";

