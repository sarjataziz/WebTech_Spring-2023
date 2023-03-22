<!DOCTYPE html>  
 <html>  
      <head>  
        <title></title>  
          
          <style type="text/css">
               table, tr, td,th{
                    border: 1px solid black;
                    border-collapse: collapse;
               }
          </style>
      </head>  
      <body>  
        <div>              
                <div> 
                     <table>  
                          <tr>  
                               <th>Name</th> 
                               <th>E-mail</th>  
                               <th>User name</th>   
                               <th>Gender</th>   
                               <th>Date of birth</th>   
                          </tr>  
                          <?php   
                          $data = file_get_contents("data.json");  
                          $data = json_decode($data, true);
                          if (isset($data)) {
                              foreach($data as $row)  
                               {  
                                   // if ($row['username']=="john") {
                                        echo '<tr>
                                         <td>'.$row["name"].'</td>
                                         <td>'.$row["e-mail"].'</td>
                                         <td>'.$row["username"].'</td>
                                         <td>'.$row["gender"].'</td>
                                         <td>'.$row["dob"].'</td>
                                         </tr>'; 
                                   // }
                                   
                                     
                               } 
                          }
                           
                          ?>  
                     </table>  
                     <a href="store.php">Store Data</a>
                   </div>
                 </div>
      </body>  
 </html>  