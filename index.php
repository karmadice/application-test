<?php
$people = array(
    array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
    array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
    array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
    array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
    array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
        "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>eBASE Developer Application Test</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>
<body>
<div class="container">
<div class="page-header">
    <h1>eBASE Developer Application Test</h1>
</div>
    <table id="people" class="table table-bordered table-hover mt-4 text-center">
        <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php
        if( !empty( $people ) ) {
            foreach($people as $person) {
                ?>
                <tr>
                    <td class="id"><?php echo $person['id'] ?></td>
                    <td class="first-name"><?php echo $person['first_name']?></td>
                    <td class="last-name"><?php echo $person['last_name']  ?></td>
                    <td class="email"><?php echo $person['email'] ?></td>
                    <td><button class="btn btn-outline-info view_detail" type="button">View Detail</button></td>
                </tr>
                <?php
            }
        }
        ?>
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="view_person_data" tabindex="-1" role="dialog" aria-labelledby="person_detail_data" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="person_detail_data">Person Detail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="person_detail" class="table table-borderless">
                    <tbody>
                    <tr>
                        <td><strong>Name: </strong></td>
                        <td id="full_name"></td>
                    </tr>
                    <tr>
                        <td><strong>Email: </strong></td>
                        <td id="person_email"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(document).on('click', ".view_detail", function(e){
            e.preventDefault();
            var fullName = $(this).closest("tr").find(".first-name").html() + " " + $(this).closest("tr").find(".last-name").html();
            var email = $(this).closest("tr").find(".email").html();

            $("#full_name").html(fullName);
            $("#person_email").html(email);
            $("#view_person_data").modal({
                backdrop: 'static',
                show: true
            })
        });
    });
</script>
</body>
</html>