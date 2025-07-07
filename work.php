    <?php 
    $name = "Portfolio";
    include_once "quick/header.php";
    ?>
        <style>
          .resume-container{
              width: 100%;
              display: flex;
              flex-direction: column;
              align-items: center;
            }

            .section-container{
              display: flex;
	            flex-wrap: wrap;
	            justify-content: space-evenly;
            	overflow: hidden;
	            width: 90%;
              margin: 5%;
              padding-top: 25px;
              padding-bottom: 25px;
              background-color: #efefef;
              border-radius: 5px;
              box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }

            .section-container.reverse{
              flex-direction: row-reverse;
            }
            .section-text{
              width: 40%;
            }
            .section-image{
              width: 40%;
              align-self: center;
            }
            .section-image img{
              width: 100%;
              border-radius: 5px;
            }

            .section-text{
              display: flex;
              flex-direction: column;
              align-items: center;
            }

            .section-body{
              padding-top: 20px;
              width: 100%;
              align-content: flex-start;
            }

            .download{
              margin-bottom: 20px;
            }

            @media only screen and (max-width: 650px) {
              .section-container{
                flex-direction: column;
                width: 70%;
                padding-top: 0;
              }
              .section-container.reverse{
                flex-direction: column;
              }
              .section-image{
                width: 100%;
              }
              .section-image img{
                border-radius: 5px 5px 0 0;
              }
              .section-text{
                width: 95%;
                padding: 2.5%;
              }
            }

            
        </style>
        <div class="resume-container">
        <div class="section-container">
          <div class="section-image">
              <img src="images/coding.jpg">
          </div>
          <div class="section-text">
            <div class="section-title">
              <h2> Projects & Programming </h2>
            </div>
            <div class="section-body">
              <p>Throughout my educational journey, I have created many different projects
                 and experimented with various programming languages and frameworks. One of
                  my most notable projects was developed with a partner in class. For this
                   project, the entire class was to divide into teams of two and compete to
                    make the most innovative and engaging game in C, using one of Ohio State's
                     libraries. My teammate and I ended up winning Best in Class with a 
                     Blackjack emulator!</p>
            </div>
          </div>
        </div>

        <div class="section-container reverse">
          <div class="section-image">
              <img src="images/osu.jpg">
          </div>
          <div class="section-text">
            <div class="section-title">
                <h2> Education and Leadership </h2><br>
            </div>
            <div class="section-body">
                  <p>At The Ohio State University, I am a member of the Delta Theta Sigma 
                    agricultural fraternity, where I currently serve as the Director of 
                    Communications. In this role, I am responsible for posting on the Delta 
                    Theta Sigma Instagram and Facebook pages as well as maintaining and 
                    improving the website. Apart from the fraternity, I am a member of BDAA 
                    (Big Data Analytics Association).</p>
            </div>
          </div>
        </div>

        <div class="section-container">
          <div class="section-image">
              <img src="images/machine_shop.jpeg">
          </div>
          <div class="section-text">
            <div class="section-title">
              <h2> Career Experience </h2><br>
            </div>
            <div class="section-body">
              <p>Working in the manufacturing industry has taught me many valuable lessons about attention
                 to detail and that small changes in a machine can have a tremendous impact on the machined
                  part. Many different variables such as temperature, tool wear, and coolant levels can 
                  drastically change how a part may turn out. I apply this lesson to programming by
                   recognizing that a single line of code can drastically change a project, and that understanding an entire system is vital to problem solving within it. 
              </p>
            </div>
          </div>
        </div>

        
        <a href="files/EMERSON_SCHNIPKE_RESUME_2024.pdf" download="EMERSON_SCHNIPKE_RESUME" class="download">DOWNLOAD RESUME</a>

        </div>
    
    <!--FOOTER-->
    <?php 
          include_once "quick/footer.php";
    ?>
  </body>
</html>