<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Student Profile</title>
</head>
<body>
    <div class="header">
        <div class="nav">
            <div class="logo"><span class="logodesign">My</span>Portfolio</div>
            <div class="navbar">
                <ul>
                    <li><a href="#home">HOME</a></li>
                    <li><a href="#about">ABOUT</a></li>
                    <li><a href="#skill">SKILLS</a></li>
                    <li><a href="#contact">CONTACT US</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container" id="home">
        <div class="home" >
            <div class="image">
                <img src="rajukumar.jpg" alt="">
            </div>
            <div class="home1">
                <h3>I'm</h3>
                <h1>Raju Kumar</h1>    
            </div>
        </div>
    </div>
    <div class="container" id="about">
            <h1>About Me</h1>
            <div class="about" >
                <div class="image">
                    <img src="rajukumar.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Hi Everyone</h3>
                    <p>My Name is Raju Kumar. I am form Muzaffarpur District of Bihar. So I'm currently living in Dankaur, Teacher Colony, near Dronacharya temple. So I'm student of engineering and I'm creative and hardworking. I'm in an MCA(Master of Compute Application) first year. So I'm purssuing MCA form Galgotias Univercity. I'm a Fresher join MCA but My Im is a good post as a Fullstack Developer. before I have a Bachelor's degree in BCA from MMHAPU(Maulana Mazahrul Haque Arabic & Persian Univercity Pantna) Patna. I love coding, playing Cricket, listen Music, watching Videos, reading and writing. Thats all about Me. <span>Thank you!</span></p>
                    <button onclick="popup()">More</button>
                </div>
            </div>
        </div>
        <div class="modal" id="modal">
            <div class="modal-box">
                <div class="modal-content">
                   <p>Name : Raju Kumar </p> 
                </div>
                <div class="modal-content">
                    <p>Birthday : 12 September 1999</p>
                </div>
                <div class="modal-content">
                    <p>Degree : Going On </p>
                </div>
                <div class="modal-content">
                    <p>Experience : 0-4 Years </p>
                </div>
                <div class="modal-content">
                    <p>Phone : 8252077457</p>
                </div>
                <div class="modal-content">
                    <p>Email : rajukumarpandit82520@gmail.com</p>
                </div>
                <div class="modal-content">
                    <p>Address : Rampurratan, Siwaipatti, Minapur, Muzaffarpur, Bihar 843128 </p>
                </div>
                <button onclick="hides()" class="btn">Close</button>
            </div>
        </div>
        <div class="container" id="skill">
        <h1>My Educations</h1>
        <div class="skill">
            <div class="box">   
                <h3>Inter</h3>
                <p>M.B.B.L College Muzaffarpur | 2016 -2018 </p>
                <p>I have completed 12th form BSEB Patna with Marks 50.8%</p>
            </div>
            <div class="box">
                <h3>Batchelor of Computer Application</h3>
                <p>Chetan Sadhan Institute and Technology College Muzaffarpur | 2018 -2022 </p>
                <p>I have completed Under Graduation form MMHAPU Patna with Marks 72.96%</p>
            </div>
       </div>
       <h1>My Skills</h1> 
       <div class="skill">
            <div class="box">
                <p>HTML</p>
            </div>
            <div class="box">
                <P>CSS</P>
            </div>
            <div class="box">
                <P>PHP</P>
            </div>
            <div class="box">
                <P>JavaScript</P>
            </div>
            <div class="box">
                <P>MySql</P>
            </div>
            <div class="box">
                <P>SQL</P>
            </div>
            <div class="box">
                <P>C Language</P>
            </div>
            <div class="box">
                <P>C++</P>
            </div>
            <div class="box">
                <P>Java</P>
            </div>
            <div class="box">
                <p>Data Structure</p>
            </div>
       </div>
    </div>
    <div class="container" id="contact">
        <h1>Contact Me</h1>
        <form action="" method="post" class="form">
            <input type="text" name="name" id="name" placeholder="Your Name" required>
            <input type="email" name="email" id="email" placeholder="Your Email" required>
            <input type="text" name="subject" id="subject" placeholder="Subject" required>
            <textarea name="message" id="message" cols="3" rows="6" placeholder="Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>
    <div class="footer">
        <ul>
            <li><a href="">Instagram</a></li>
            <li><a href="">Facebook</a></li>
            <li><a href="">Linkdin</a></li>
            <li><a href="">Github</a></li>
        </ul>
        <p>Privacy | Terms | FAQs | Help</p>
        <p> 2022&copy;Copyright</p>
        <p>Developed By : Mr. Raju Kumar</p>
    </div>
    <script src="JavaScript.js"></script>
</body>
</html>