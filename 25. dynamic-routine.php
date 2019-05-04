<!doctype html>
<html>
	<div class="header">
            <?php include ("includes/header3(logout).php"); ?>
     </div>
        
        <div class="log-in">
        
        <ul>
                <li><a href="13.%20admin-log-in.php"> My Profile </a></li>
                <li><a href="15.%20go-add-admin.php">Add Admin</a></li>
                <li><a href="16.%20Go-teacher-details.php"> Teacher</a></li>
                <li><a href="17.%20Go-Course-details.php">Course </a></li>
                <li><a href="18.%20go-room.php"> Room </a></li>
                <li><a href="20.%20go-time-slot.php">Time Slot</a></li>
                <li><a href="23.%20static-routine.php">Static Routine Generate</a></li>
                <li> <a href="25.%20dynamic-routine.php">Dynamic Routine Generate</a></li>  
        </ul>   
    </div>
      
        <div class="start-routine">
            
            <label>Semester </label>
				<input  type="text" placeholder="Enter Semester" maxlength="" />
            
            <label>Department </label>
				<input  type="text" placeholder="Enter Department" maxlength="" /> 

            <a href="3.%20Full%20Routine.php"><button> Show Routine </button></a>
        </div>      
        
        <!--
        <div class="start-routine">
            <p style="text-align: left; font-size: 28px;"><b>Download files</b></p>
            <a href="#" download> </a>
            <a href="#" download> </a> 
            <a href="#" download> </a> 
            <a href="#" download> </a>
        </div>
    -->
        
      <div class="copyright">
            <?php include ("includes/footer.php"); ?>
        </div>

</html>