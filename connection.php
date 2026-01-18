
<div class="container">
    <div class="row">
        <table>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Subject</th>
                <th scope="col">Message</th>
            </tr>
            <?php
            $con=mysqli_connect('localhost','root','','kiddo');

            $sql="SELECT * FROM `form`";
            $result=mysqli_query($con,$sql);
             while($row=mysqli_fetch_assoc($result))
             {
                $name=$row['name'];
$email=$row['email'];
$subject=$row['subject'];
$message=$row['message'];

$message=$row['message'];
$ID=$row['id'];
?>
<tr>
    <td><?php echo $name ?></td>
    <td><?php echo $email ?></td>
    <td><?php echo $subject ?></td>
    <td><?php echo $message ?></td>

    <td>
    <a href="php_delete.php?eid=<?php echo $ID?>">    
    edit
    </a>
</td>

    <td>
    <a href="php_delete.php?uid=<?php echo $ID?>">    
    delete
    </a>
</td>

</tr>
<?php
             }
            
             ?>
        </table>
    </div>
</div>