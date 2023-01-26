<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    @notifyCss
    <title>SUMON</title>
    <link rel="stylesheet" href="{{ asset('website/css/style.css') }}">
</head>
<body>
    <div id="header">
        <div class="container">
            <nav>
                <img src="images/logo.jpeg" class="logo">
                <ul id="sidemenu">
                    <li><a href="#header">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <i class="fas fa-times" onclick="closemenu()"></i>
                </ul>
                <i class="fas fa-bars" onclick="openmenu()"></i>
            </nav>
            <div class="header-text">
                <p>Center Forward</p>
                <h1>Hi, I am <span>CR7</span><br>from Portugal</h1>
            </div>
        </div>
    </div>
    <!-- -------------------About Me------------- -->
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="{{ url('/uploads/',auth()->user()->image)}}" width="600px" style="border-radius: 3px;">
                </div>
                <div class="about-col-2">
                    <h1 class="sub-title">About Me</h1>
                    <p>Cristiano Ronaldo dos Santos Aveiro GOIH ComM is a Portuguese professional footballer who plays as a forward for Saudi Professional League club Al Nassr and captains the Portugal national team.</p>
                    <div class="tab-titles">
                        <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                        <p class="tab-links" onclick="opentab('experiences')">Experiences</p>
                        <p class="tab-links" onclick="opentab('education')">Education</p>
                    </div>
                    <div class="tab-content active-tab" id="skills">
                        <ul>
                            <li><span>UI/UX</span><br>Ui Ux Designer</li>
                            <li><span>Backend Development</span><br>Backend Development</li>
                            <li><span>App Development</span><br>Mobile App Development</li>
                        </ul>
                    </div>
                    <div class="tab-content" id="experiences">
                        <ul>
                            <li><span>Hello</span><br>Ui Ux Designer</li>
                            <li><span>Backend Development</span><br>Backend Development</li>
                            <li><span>App Development</span><br>Mobile App Development</li>
                        </ul>
                    </div>
                    <div class="tab-content" id="education">
                        <ul>
                            <li><span>Hi</span><br>Ui Ux Designer</li>
                            <li><span>Backend Development</span><br>Backend Development</li>
                            <li><span>App Development</span><br>Mobile App Development</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- --------------Services--------------- -->
    <div id="services">
        <div class="container">
            <h1 class="sub-title">My Services</h1>
        <div class="services-list">
            <div>
                <i class="fa-solid fa-code"></i>
                <h2>Web design</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis, sequi doloremque! Aut mollitia, repellendus atque, nisi animi fuga distinctio blanditiis earum debitis ducimus vitae maxime, aliquam porro architecto. Eum, est!</p>
                <a href="#">Learn more</a>
            </div>
            <div>
                <i class="fa-brands fa-app-store-ios"></i>
                <h2>Mobile App</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis, sequi doloremque! Aut mollitia, repellendus atque, nisi animi fuga distinctio blanditiis earum debitis ducimus vitae maxime, aliquam porro architecto. Eum, est!</p>
                <a href="#">Learn more</a>
            </div>
            <div>
                <i class="fa-solid fa-crop-simple"></i>
                <h2>UI/UX</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis, sequi doloremque! Aut mollitia, repellendus atque, nisi animi fuga distinctio blanditiis earum debitis ducimus vitae maxime, aliquam porro architecto. Eum, est!</p>
                <a href="#">Learn more</a>
            </div>
        </div>
        </div>
    </div>
    <!-- -----------------------Portfolio------------------ -->
    <div id="portfolio">
        <div class="container">
            <h1 class="sub-title">My Work</h1>
            <div class="work-list">
                <div class="work">
                    <img src="images/web.png" alt="Web Development">
                    <div class="layer">
                        <h3>Social Media App</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, error? Debitis eligendi, perspiciatis corrupti.</p>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="images/map.jpeg" alt="Mobile App Development">
                    <div class="layer">
                        <h3>Ui/Ux Design</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, error? Debitis eligendi, perspiciatis corrupti.</p>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="images/ui.jpeg" alt="UI/UX design">
                    <div class="layer">
                        <h3>Mobile App</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, error? Debitis eligendi, perspiciatis corrupti.</p>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
            </div>
            <a href="#" class="btn">See More</a>
        </div>
    </div>
    <!-- -----------------------Contact------------------ -->
    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h1 class="sub-title">Contact Me</h1>
                    <p><i class="fa-solid fa-paper-plane"></i>contact@example.com</p>
                    <p><i class="fa-solid fa-phone"></i>01xxxxxxxxx</p>
                    <div class="social-icons">
                        <a href=""><i class="fa-brands fa-square-facebook"></i></a>
                        <a href=""><i class="fa-brands fa-square-github"></i></a>
                        <a href=""><i class="fa-brands fa-linkedin"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                    </div>
                    <a href="images/sumon_se_php_laravel.pdf" download class="btn btn-2">Download CV</a>
                </div>
                <div class="contact-right">
                    <form action="">
                        <input type="text" name="name" placeholder="Your name" required>
                        <input type="email" name="email" placeholder="Your email" required>
                        <textarea name="message" rows="6" placeholder="Your message"></textarea>
                        <button type="submit" class="btn btn-2">Message</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>CopyRight @ MD SUMON HOSSAIN</p>
        </div>
    </div>
    <x:notify-messages />
    @notifyJs
    <script>
        var tablinks = document.getElementsByClassName("tab-links");
        var tabcontents = document.getElementsByClassName("tab-content");
        function opentab(tabname){
            for(tablink of tablinks){
               tablink.classList.remove("active-link");
            }
            for(tabcontent of tabcontents){
                tabcontent.classList.remove("active-tab");
            }
            event.currentTarget.classList.add("active-link");
            document.getElementById(tabname).classList.add("active-tab");
        }
    </script>
    <script>
        var sidemenu = document.getElementById("sidemenu");
        function openmenu(){
            sidemenu.style.right = "0";
        }
        function closemenu(){
            sidemenu.style.right = "-200px";
        }
    </script>
</body>
</html>