
    <?php 
        $nameErr = $ageErr = $emailErr = $name = $email = $age = $currentRole= $currentRoleErr= $friend =$friendErr =$tech = $TechErr = $freeCode = $freeCodeErr= $textArea = $textAreaErr = "" ;

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(empty($_POST["name"])){
                $nameErr = 'Name Is Required';
                echo $nameErr."<br>" ;
            }else{
                $name = $_POST["name"];
                echo "Hello $name"."<br>";
            }
            if(empty($_POST["email"])){
                $emailErr = "Email Is Required";
                echo $emailErr."<br>" ;
            }else{
                $email = $_POST["email"];
                echo "Your Email Is $email "."<br>";
            }
            if(empty($_POST["age"])){
                $ageErr = "Age Is Required";
                echo  $ageErr."<br>";
            }else{
                $age = $_POST["age"];
                echo "Your Age Is $age "."<br>" ;
            }
            if(empty($_POST["currentRole"])){
                $currentRoleErr = "currentRole Is Empty";
                echo $currentRoleErr ."<br>";
            }else{
                $currentRole = $_POST["currentRole"];
                echo $currentRole ."<br>";
            }
            if(empty($_POST["friend"])){
                $friendErr = "Please , choose one selection ";
                echo $friendErr ."<br>";
            }else{
                $friend = $_POST["friend"];
                echo $friend ."<br>";

            }
            if(empty($_POST["freeCode"])){
                $freeCodeErr = "Please , choose one selection ";
                echo $freeCodeErr ."<br>";
            }else{
                $freeCode = $_POST["freeCode"];
                echo $freeCode ."<br>";
            }

            $Tech = array("Front-endProjects","Back-endProjects","DataVisualization","Challenges","AdditionalCourses","Forum","Wiki","CityMeetups","Videos","Gitterhelprooms","OpenSourceCommunity");
            for ($i=0; $i < count($Tech); $i++) { 
                if(empty($_POST[$Tech[$i]])){
                    continue;

                }else{
                    $tech = $_POST[$Tech[$i]];
                    echo $tech ."<br>";
                }
            }

            if(empty($_POST["textArea"])){
                $textAreaErr = "Please , choose one selection ";
                echo $textAreaErr."<br>";
            }else{
                $textArea = $_POST["textArea"];
                echo $textArea."<br>";
            }

        }
?>
        <!DOCTYPE html>
        <html>
          <head>
            <meta charset="utf-8">
            <style>
                @import url('https://fonts.googleapis.com/css?family=Poppins:200i,400&display=swap');
              *{
                margin:0px;
                padding:0px;
                box-sizing:border-box;
              }
           
        
              main{
                width:100%;
                height:auto;
                background-size:cover;
                  font-family: 'Poppins', sans-serif;
        
              }
              form{
                width:70%;
                height:auto;
                margin:auto;
                background-color:#660000;
                opacity:0.8;
                color:white;
                  font-family: 'Poppins', sans-serif;
                padding-top:50px;
                padding-left:25px;
                
              }
              h1{
                text-align:center;
                padding-top:10%; 
                color:white;
              }
              p{
                text-align:center;
                color:white;
                font-size:20px;
              }
              .input{
                width:90%;
                height:50px;
                margin:5px 3%;
                border-radius:10px;
                border:0px;
                padding:15px;
                
              }
              .label{
                width:90%;
                margin:2px 3%;
                padding:15px;
              }
              .radio{
                margin:2px 3%;
                padding:15px;
              }
              .textarea{
                width:90%;
                height:100px;
                margin:2px 3%;
                padding:15px;
              }
              #submit{
                width:90%;
                height:50px;
                background-color:red;
                border:0px;
                border-radius:20px;
                margin:2px 3%;
                color:white;
              }
              @media(max-width:767px){
                form{
                width:80%;
                height:auto;
                margin:auto;
                margin:3% 5%;
                background-color:#660000;
                opacity:0.8;
                color:white;
                  font-family: 'Poppins', sans-serif;
                padding-top:50px;
                padding-left:25px;
                
              }
              h1{
                text-align:center;
                padding-top:10%; 
                color:white;
              }
              p{
                text-align:center;
                color:white;
                font-size:20px;
              }
              .input{
                width:80%;
                height:30px;
                margin:5px 3%;
                border-radius:10px;
                border:0px;
                padding:15px;
                
              }
              .label{
                width:80%;
                margin:2px 3%;
                padding:15px;
              }
              .radio{
                margin:2px 3%;
                padding:15px;
              }
              .textarea{
                width:90%;
                height:80px;
                margin:2px 3%;
                padding:15px;
              }
              #submit{
                width:90%;
                height:30px;
                background-color:red;
                border:0px;
                border-radius:20px;
                margin:2px 3%;
                color:white;
              }
              }
            </style>
          </head>
          <body>
        
            <main>
                <h1 id="title">Cat Reloaded Survey Form</h1><br>
                <p id="description"> Thank you for taking the time to help us improve the platform </p>
                <form id="survy-form" method="post" action="form.php">
        
                  
                  <label class="label" for="name">Name</label><br>
                  <input class="input" type="text" name="name" placeholder="Enter Your Name" id="name"><br>
                  <label class="label" for="email">Email</label><br>
                  <input class="input" name="email" type="email" placeholder="Enter Your Email" id="email"><br>
                  <label class="label" for="age">Age</label><br>
                  <input type="number" name="age" class="input" placeholder="Enter Your Age" id="age"><br>
             
             
             
                  <label class="label" for="dropdown">Which option best describes your current role?</label><br>   
                  <select class="input" id="dropdown" name="currentRole" value="Select Current role">
                  <option>Select your role</option>
                  <option value="Student">Student</option>
                  <option value="Full time job">Full time job</option>
                  <option value="Full time learner">Full time learner</option>
                  <option value="Prefer Not To Say">Prefer Not To Say</option>
                  <option value="Other">Other</option>
              
        
        
                  </select label><br>
                  <div id="radio">
                  <label class="label">Would you recommend freeCodeCamp to a friend?</label><br>
                  <div class="radio">
                  <input type="radio" id="Definitely" value="Definitely" name="friend">
                <label for ="Definitely">Definitely</label><br> 
                <input type="radio" value="Maybe" id="Maybe" name="friend"> <label for ="Maybe">Maybe</label><br>
                <input type="radio" value="Not sure" id="Not sure" name="friend"><label for ="Not sure">Not sure</label><br>
                </div>
                </div>
                <br>
        
        
        
        
        
                <label class="label" for="dropdown"> What is your favorite feature of freeCodeCamp? </label><br>
                <select class="input" id="dropdown2" name="freeCode" value="Select Current role">
                  <option>Select an option</option>
                  <option value="Challenges">Challenges</option>
                  <option value="Projects">Projects</option>
                  <option value="Community">Community</option>
                  <option value="Open Source">Open Source</option>
                </select><br>
               
               
               
                <label class="label"> What would you like to see improved? (Check all that apply) </label><br>
                <div class="radio">
                <input type="checkbox" name="Front-endProjects" value="Front-end Projects" id="Front-end Projects"><label for="Front-end Projects">Front-end Projects</label><br>
                <input type="checkbox" name="Back-endProjects" value="Back-end Projects" id="Back-end Projects"><label for="Back-end Projects">Back-end Projects</label><br>
                <input type="checkbox" name="DataVisualization" value="Data Visualization" id="Data Visualization"><label for="Data Visualization">Data Visualization</label><br>
                <input type="checkbox" name="Challenges" value="Challenges" id="Challenges"><label for="Challenges">Challenges</label><br>
                <input type="checkbox" name="OpenSourceCommunity" value="Open Source Community" id="Open Source Community"><label for="Open Source Community">Open Source Community</label><br>
                <input type="checkbox" name="Gitterhelprooms" value="Gitter help rooms" id="Gitter help rooms"><label for="Gitter help rooms">Gitter help rooms</label><br>
                <input type="checkbox" name="Videos" value="Videos" id="Videos"><label for="Videos">Videos</label><br>
                <input type="checkbox" name="CityMeetups" value="City Meetups" id="City Meetups"><label for="City Meetups">City Meetups</label><br>
                <input type="checkbox" name="Wiki" value="Wiki" id="Wiki"><label for="Wiki">Wiki</label><br>
                <input type="checkbox" name="Forum" value="Forum" id="Forum"><label for="Forum">Forum</label><br>
                <input type="checkbox" name="AdditionalCourses" value="Additional Courses" id="Additional Courses"><label for="Additional Courses">Additional Courses</label><br>
                </div>
        
        
        
        
                <div>
                  <label class="label">Any comments or suggestions?</label><br>
                  <textarea class="textarea" name="textArea" placeholder="Enter Your Comment"></textarea><br><br>
                <input type="submit" value="Submit" id="submit">  
              </div>
        
        
        
                <br><br>
              </form>
            </main>
          </body>
        </html>
        