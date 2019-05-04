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
        
            <label>Select Day</label>
				<input id="date" type="date">
            
            <label>Select Time</label>
				<input id="time" type="time">
            
            <a href="24.%20Static-go.php"><button> Go </button></a>
        </div>      
        
        
    
        <div class="copyright">
            <?php include ("includes/footer.php"); ?>
        </div>

</html>
