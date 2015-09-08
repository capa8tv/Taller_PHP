<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
    </head>
    <body>
    <div style="width: 500px;">
            <table class="table table-hover">
                <thead>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>E-Mail</th>
                </thead>
                
                <tbody>
                    <?php
                    //iteraciones
                    for( $i=1; $i<=20 ; $i++ )
                    {
                       if($i%2==0 )
                       {
                            ?>
                           <!--ítem-->
                                <tr>
                                    <td><?php echo $i?></td>
                                    <td>César Cancino</td>
                                    <td>yo@cesarcancino.com</td>
                                </tr>
                            <!--/ítem-->
                           <?php 
                       }
                       
                    }
                    ?>
                    
                </tbody>
                
                
            </table>
    </div>
        
    </body>
</html>
