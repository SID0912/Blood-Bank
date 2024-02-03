<?php
include "header.php";
?>
    </header>
    <!-- / header -->
    <!-- content -->
    <article id="content">
      <div class="wrapper">
        <div class="box1">
          <div class="line1 wrapper">
            <section class="col1">
              <h2><strong>O</strong>ur<span> Address</span></h2>
              <strong class="address"> Country :<br>
              City     :<br>
              Zip Code   :<br>
              Telephone    :<br>
              E-Mail   : </strong> India<br>
              Ahmedabad <br>
              380051<br>
              +919924510179<br>
              <a href="#">Siddhantgayakwad@gamil.com</a><br>  </section>
            <section class="col2 pad_left1">
              <h2 class="color2"><strong>S</strong>unrise info<span>Tech</span></h2>
              <p class="pad_bot1" >307,Akshar Complex.,<br>NR.Shivranjani Cross Road,<br>Satellite,Ahmedabad,<br> Gujarat 380015.</p>
          </section>
          </div>
        </div>
      </div>
      <div class="wrapper">
        <div class="pad_left2 relative">
          <h4 class="color3"><span>Contact</span>Form</h4>
         
         <img src="images/page6_img1.png" alt="" class="img1">
          <form id="ContactForm"  method="post">
            <div>
 
              <div class="wrapper"><span>Your Name:</span>
                <input type="text"  name="c_nm"class="input">
              </div>
              <div class="wrapper"><span>Your E-mail:</span>
                <input type="text" name="c_email"class="input">
              </div>
              
                            <div class="textarea_box"><span>Your Message:</span>
                <textarea type="textarea" name="c_msg" cols="1" rows="1"></textarea>
              </div>
              <button type="submit" name="s1" class="button2 color3">Send</a> <a href="#" class="button2 color3">Clear</a> </div>
          </form>
          <?php
		  if(isset($_POST['s1']))
{
$nm=$_POST['c_nm'];
$em=$_POST['c_email'];
$mssg=$_POST['c_msg'];
include "connection.php";
$query=mysqli_query($con,"insert into contact values('','$nm','$em','$mssg')");
if($query>0)
{
echo "Successfully Added";
}
else
{
echo "Try again...";
}
}

		  ?>
        </div>
      </div>
    </article>
    <!-- / content -->
    <?php
include "footer.php";
?>