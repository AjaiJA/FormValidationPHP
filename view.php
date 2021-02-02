<?php
    if(isset($_POST['apply'])){
        $fullName=$_POST['fullname'];
        $email=$_POST['mail'];
        $phone=$_POST['phone'];
        $service=$_POST['services'];
        $budgetCost=$_POST['budget-cost'];
        $message=$_POST['message-content'];
        $products=$_POST['product-name'];
        if(empty($fullName) || empty($email) || empty($phone) || empty($service) || empty($budgetCost)){
            header("Location:index.php?error=emptyField&fullName=".$fullName."&email=".$email."&phone=".$phone."&service=".$service."&budgetCost=".$budgetCost."&products=".$products);
        }
        else{
            if(!preg_match("/^[A-Za-z]*$/",$fullName) || !preg_match("/^[A-Za-z]*$/",$service)){
                header("Location:index.php?error=nameService");
            }
            else{
                if(!preg_match("/^\d{10}$/",$phone)){
                    header("Location:index.php?error=phone");
                }
                else{
                    if(!preg_match("/^[A-Za-z0-9_\.\-]+\@(([A-Za-z0-9\-])+\.)+([A-Za-z0-9]{2,4})+$/",$email)){
                        header("Location:index.php?error=email");
                    }
                    else{
                        ?>
                        <script>
                            alert("Values are Accepted");
                        </script>
                        <a href="./index.php">Back</a><br>
                        <label for="name">Full Name : <?php echo $fullName; ?></label><br>
                        <label for="name">Email : <?php echo $email; ?></label><br>
                        <label for="name">Needed Service : <?php echo $service; ?></label><br>
                        <label for="name">Phone Number: <?php echo $phone; ?></label><br>
                        <label for="name">Budget : <?php echo $budgetCost; ?></label><br>
                        <label for="name">Product : <?php echo $products; ?></label><br>
                        <label for="Message">Message : <?php echo $message; ?></label><br>
                        <?php
                            
                    }
                }
            }
        }
    }