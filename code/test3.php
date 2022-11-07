<?php    
    
include 'o.php';    
?>    
<html>    
    <body>    
        <table>    
            <tr>    
                <td>ORPHNAGE NAME</td>    
                <td>TIME OF ORPHNAGE FOUNDATION</td>    
                <td>DIRECTOR</td>    
                <td>DIRECTOR PHONE NUMBER</td>    
                <td>DIRECTOR PROFESSION</td>    
                <td>NO OF CHILDREN AGE LESS THAN 5</td>    
                <td>NO OF CHILDREN AGE BETWEEN 5 AND 10</td>    
                <td>NO OF CHILDREN AGE BETWEEN 10 AND 18</td>    
                <td>NO OF CHILDREN AGE MORE THAN 18</td>    
                <td>NO OFSTAFF WORKING IN THE ORPHNAGE</td>    
                <td>MONEY REQUIREDPER ANUM</td>    
                <td>MONEY RECEIVED FOR ANUM</td>    
                <td>ORPHNAGE ACCOUNT NUMBER</td>    
                <td>ORPHNAGE MOBILE NUMBER</td>    
                <td>DOOR NO</td>   
                <td>STREET</td>   
				<td>CITY</td>   
				<td>STATE</td>    
                <td>PINCODE</td>   
                <td>ORPHNAGE ID</td>      
            </tr>    
       

<?php    
$q="select *  from r2 ";
$q1=mysqli_query($conn,$q);
while($row=mysqli_fetch_object($q1);){    
    
    
?>  
    <tr>  
        <td>  
            <?php echo "$row->name";?>  
        </td>  
        <td>  
            <?php echo $row->time;?>  
        </td>  
        <td>  
            <?php echo $row->director;?>  
        </td>  
        <td>  
            <?php echo $row->phno;?>  
        </td>  
        <td>  
            <?php echo $row->profession;?>  
        </td>  
        <td>  
            <?php echo $row->count1;?>  
        </td>  
        <td>  
            <?php echo $row->count2;?>  
        </td>  
        <td>  
            <?php echo $row->count3;?>  
        </td>  
        <td>
            <?php echo $row->count4;?>  
        </td>  
        <td>  
            <?php echo $row->no;?>  
        </td>  
        <td>  
            <?php echo $row->staff;?>  
        </td>  
        <td>  
            <?php echo $row->mreq;?>  
        </td>  
        <td>  
            <?php echo $row->mrec;?>  
        </td>  
        <td>  
            <?php echo $row->acc;?>  
        </td>  
        <td>  
            <?php echo $row->mno;?>  
        </td> 
         <td>  
            <?php echo $row->dno;?>  
        </td> 
         <td>  
            <?php echo $row->street;?>  
        </td> 

          <td>  
            <?php echo $row->city;?>  
        </td> 

         <td>  
            <?php echo $row->state;?>  
        </td> 

         <td>  
            <?php echo $row->pincode;?>  
        </td> 
          <td>  
            <?php echo $row->orphnageid;?>  
        </td> 
 
        <tr>  
 <? php } ?>  
 </table>    
    </body>    
</html>    