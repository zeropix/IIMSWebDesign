<html>
<head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    


    <script>
        $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtipl',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        "ajax": {
            "url": "export.php?pwd=<?php echo $_GET['key'];?>",
            "type": "GET"
        }
    } );
} );
    </script>

</head>
<body>
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name 1</th>
                <th>Email 1</th>
                <th>Contact 1</th>
                <th>Name 2</th>
                <th>Email 2</th>
                <th>Contact 2</th>
                <th>Institute</th>
                <th>Team name</th>
            </tr>
        </thead>
    </table>
</body>
</html>

