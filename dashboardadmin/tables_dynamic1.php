<!DOCTYPE html>
<html>
<?php include 'sidenav.php';?>
    <table id="customersTable" >
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
    </table>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.js" charset="utf8" type="text/javascript"></script>
    <?php include 'footer.php';?>
    <script type="text/javascript">

    $(document).ready(function() {
        $('#customersTable').dataTable({
            "processing": true,
            "ajax": "get.php",
            "columns": [
                {data: 'id'},
                {data: 'first_name'},
                {data: 'emailid'}
            ]
        });
    });
    </script>
</body>
</html>