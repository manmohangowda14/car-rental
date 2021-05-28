<!DOCTYPE html>
<html>
    <head>
        <title> CABS AVILABLE NEAR ME</title>
     <link rel="stylesheet"   type="text/css" href="u.css">
    </head>
    <body>
        <center>
            <h1>CABS AVILABLE NEAR ME</h1><br><br>
        
            <div>
                <form action="" method="POST">
                    <input type="text" class="abc"name="location" placeholder="Enter The Location">
                    <input type="submit" class="def" name="search" value="Find Cab"><br><br><br>
                </form>
                </form>
                <table>
                    <tr>
                        <th>Car Type</th>
                        <th>No. Of Seats</th>
                        <th>Location</th>  
                    </tr><br>
                    <?php
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,'mydb');

                    if(isset($_POST['search']))
                    {
                        $location = $_POST['location'];

                        $query = "SELECT * FROM mytable WHERE location LIKE '%$location%'";
                        $query_run = mysqli_query($connection,$query);
                       
                        while($row = mysqli_fetch_array($query_run))
                        {
                            ?>
                            <tr>
                                <td> <?php echo $row['Car Type']; ?> </td>
                                <td> <?php echo $row['No. Of Seats']; ?> </td>
                                <td> <?php echo $row['Location']; ?> </td>

                            </tr>
                            <?php
                        }
                    }
                    ?>
                </table>
            </div>
        </center>
    </body>
</html>
