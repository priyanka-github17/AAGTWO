<?php
require_once '../functions.php';
require_once 'logincheck.php';
?>
<?php
require_once 'header.php';
require_once 'nav.php';
?>

<?php 
$conn = mysqli_connect('localhost', 'coacteh9_coact', 'Coact@2020#', 'aag');
$results = mysqli_query($conn, "SELECT * FROM tbl_review");
 ?>
<div class="container-fluid">
    <div class="row p-2">
        <div class="col-12">
            <!-- <div id="users">
            </div> -->

            <button onclick="ExportToExcel('xlsx')" class="btn btn-success" >Export table to excel</button>
            <table class="table table-bordered"  id="tbl_exporttable_to_xls">
    <thead>
        <tr>
        <th>S No.</th>
            <th>User Name</th>
            <th>User rating</th>
            <th>User Review</th>
            <th>Date</th>
            <!-- <th colspan="2">Action</th> -->
        </tr>
    </thead>
    
    <?php while ($row = mysqli_fetch_array($results)) { ?>
        <tr>
        <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['user_name']; ?></td>
            <td><?php echo $row['user_rating']; ?></td>
            <td><?php echo $row['user_review']; ?></td>
            <td><?php echo $row['created_at']; ?></td>
            <!-- <td>
                <a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
            </td>
            <td>
                <a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
            </td> -->
        </tr>
    <?php } ?>
</table>
        </div>
    </div>

</div>






<?php
require_once 'scripts.php';
?>
<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
<script>

    $(function() {
        getFeedbacks('1');
    });

    function gotoPage(pageNum) {
        getFeedbacks(pageNum);

        return false;
    }

    function getFeedbacks(pageNum) {

        $.ajax({
            url: '../control/fb.php',
            data: {
                action: 'getallfeedbacks',
                pagenum: pageNum
            },
            type: 'post',
            success: function(response) {
                $('#users').html(response);
            }
        });
    }

    function ExportToExcel(type, fn, dl) {
       var elt = document.getElementById('tbl_exporttable_to_xls');
       var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1" });
       return dl ?
         XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }):
         XLSX.writeFile(wb, fn || ('MySheetName.' + (type || 'xlsx')));
    }
</script>
<?php
require_once 'footer.php';
?>