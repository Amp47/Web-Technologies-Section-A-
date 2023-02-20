<html>

<body>
    <!-- TEXT BOX first one -->
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> <!-- GET -> POST and back to the startPAGE  -->
        Name: <input type="text" name="fname">
        <input type="submit">
        <!-- Text Area -->
        <h1>This is Webtech Section [A] Laboratory</h1>

        <!-- Radio Area -->
        <p>Please select your tasks:</p>
        <input type="radio" id="tsk1" name="tsk" value="5">
        <label for="tsk1">This is Task 1</label><br>
        <input type="radio" id="tsk2" name="tsk" value="5">
        <label for="task2">This is Task 2</label><br>
        <input type="radio" id="tsk3" name="tsk" value="5">
        <label for="tsk3">This is Task 3</label><br><br>
        <input type="submit" value="Submit"><br><br>

        <!-- CheckBox Area -->
        <input type="checkbox" id="lab1" name="lab" value="5">
        <label for="lab1"> This is lab 1.</label><br>
        <input type="checkbox" id="lab2" name="lab" value="5">
        <label for="lab2"> This is lab 2.</label><br>
        <input type="checkbox" id="lab3" name="lab" value="5">
        <label for="lab3"> This is lab 3.</label><br><br>
        <input type="submit" value="Submit"><br><br>

        <!--SELECT area -->
        <label for="hobbies">Choose a hobby:</label>
        <select name="hobbies" id="hobbies">
            <option value="gaming">Gaming</option>
            <option value="exercising">Exercising</option>
            <option value="gardening">Gardening</option>
            <option value="reading">Reading</option>
        </select><br><br>
        <input type="submit" value="Submit"><br><br>

        <!-- Textbox Area -->
        <p><label for="coursereview">Review of Web Technologies:</label></p>
        <textarea id="coursereview" name="coursereview" rows="4" cols="50">At Webtech course you will learn how to make a website. They offer necessary materials for whole week.</textarea>
        <br>
        <input type="submit" value="Submit">


    </form>




    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
        // collect value of input field
        $name = $_REQUEST['fname'];
        
    if (empty($name)) {
            echo "Name is empty!";
        } else {
            echo $name;
        }

        $name = $_REQUEST['tsk'];
    if (empty($name)) {
        echo "Task is empty";
        } else {
        echo $name;
        }

        $name = $_REQUEST['lab'];
    if (empty($name)) {
        echo "Lab is empty";
        } else {
        echo $name;
        }
 
    if(isset($_REQUEST['hobbies'])){
            echo $_REQUEST['hobbies'];
            
        }else{
            echo "Please select your hobby.";
        }
    


        
 
    
    ?>

</body>

</html>