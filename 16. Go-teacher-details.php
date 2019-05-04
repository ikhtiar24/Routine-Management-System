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
    
       <div class="ad-log">
			<p  style= "font-size: 34px;"><b> Add Teacher </b></p>
		
				<label>Name </label>
				<input type="name" placeholder="Enter Name" maxlength="" />
           
                <label>Id No. </label>
                <input type="text" placeholder="Enter Id No." maxlength="" />
           
                <label>Email Address </label>
				<input type="text" placeholder="Enter Email" maxlength="" />
           
                <label> Phone Number </label>
				<input type="text" placeholder="Enter Phone No." maxlength="" />
           
                <label> Depertment</label>
				<input type="name" placeholder="Enter Depertment" maxlength="" />
           
                <label> Designation </label>
				<input type="name" placeholder="Enter Designation" maxlength="" />

              <a href="#"><button>Add</button></a> 
        </div>
       
        
        
        <div class="ad-log">
			<p style= "font-size: 34px;"> <b> Update Teacher </b></p>
		
				<label>Name </label>
				<input type="name" placeholder="Enter Name" maxlength="" /> 
           
               <label>Id No. </label>
                    <input type="text" placeholder="Enter Id No." maxlength="" />

               <label>Email Address </label>
                    <input type="text" placeholder="Enter Email" maxlength="" />

               <label> Phone Number </label>
                    <input type="text" placeholder="Enter Phone No." maxlength="" />

               <label> Depertment</label>
                    <input type="name" placeholder="Enter Depertment" maxlength="" />

               <label> Designation </label>
                    <input type="name" placeholder="Enter Designation" maxlength="" />

              <a href="#"><button> Update </button></a> <br>
            
        </div>
    
        <div class="fileup">   
                <a href="php/index.html"> <button> Upload Your csv File Here </button></a> 
        </div>
    
    
        
        <div class="copyright">
            <?php include ("includes/footer.php"); ?>
        </div>

</html>
