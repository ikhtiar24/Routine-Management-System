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
                <li><a href="18.%20go-room.php"> Room</a></li>
                <li><a href="20.%20go-time-slot.php">Time Slot</a></li>
                <li><a href="23.%20static-routine.php">Static Routine Generate</a></li>
                <li> <a href="25.%20dynamic-routine.php">Dynamic Routine Generate</a></li>  
        </ul>   
    </div>
    
       <div class="ad-log">
			<p style= "font-size: 34px;"> <b> Add Course </b></p>
		
				<label>Course Code </label>
				<input type="text" placeholder="Enter Course Code" maxlength="" />
           
                <label>Course title </label>
                <input type="text" placeholder="Enter Course title" maxlength="" />
           

              <a href="#"><button>Add</button></a> 
        </div>
      
        
        
        <div class="ad-log">
			<p style= "font-size: 34px;"> <b> Update Course </b></p>
				<label>Course Code </label>
				<input type="text" placeholder="Enter Course Code" maxlength="" />
           
                <label>Course title </label>
                <input type="text" placeholder="Enter Course title" maxlength="" />
           

              <a href="#"><button>Update</button></a> 
        </div>
    
        <div class="fileup">   
                <a href="php/index.html"> <button> Upload Your csv File Here </button></a> 
        </div>
        
        
        <div class="copyright">
            <?php include ("includes/footer.php"); ?>
        </div>

</html>      
