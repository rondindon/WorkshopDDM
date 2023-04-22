<?php 

session_start();

if(isset($_GET['memberID'])){
    if($_GET['memberID'] == 1){
        $_SESSION['name'] = "Brian Chung";
        $_SESSION['assoc'] = "VP Product";
        $_SESSION['desc'] = "This team member is highly skilled in project management and has exceptional communication skills. They lead the team and make important decisions that drive the project forward.";
        $_SESSION['src'] = "/ddm-wix/final/img/team/m1.jpg";
        header("Location:member_desc.php");
    }elseif($_GET['memberID'] == 2){
        $_SESSION['name'] = "Kelly Parker";
        $_SESSION['assoc'] = "Assistant";
        $_SESSION['desc'] = "This team member is a natural collaborator and works well with others. They are skilled at building relationships and fostering a positive team dynamic.";
        $_SESSION['src'] = "/ddm-wix/final/img/team/m4.jpg";
        header("Location:member_desc.php");
    }elseif($_GET['memberID'] == 3){
        $_SESSION['name'] = "Brad Grecco";
        $_SESSION['assoc'] = "Marketing Associate";
        $_SESSION['desc'] = "This team member is an expert in their particular field and possesses a wealth of knowledge and experience. They are often sought out for their expertise and provide valuable insight to the team.";
        $_SESSION['src'] = "/ddm-wix/final/img/team/m3.jpg";
        header("Location:member_desc.php");
    }elseif($_GET['memberID'] == 4){
        $_SESSION['name'] = "Camilla Jones";
        $_SESSION['assoc'] = "Content Manager";
        $_SESSION['desc'] = "This team member is highly empathetic and provides emotional support to other members of the team. They are skilled at listening and offer guidance and encouragement when needed.";
        $_SESSION['src'] = "/ddm-wix/final/img/team/m6.jpg";
        header("Location:member_desc.php");
    }elseif($_GET['memberID'] == 5){
        $_SESSION['name'] = "Marcus Harris";
        $_SESSION['assoc'] = "Account Director";
        $_SESSION['desc'] = "This team member is highly analytical and adept at solving complex problems. They thrive in challenging situations and are able to find solutions when others cannot.";
        $_SESSION['src'] = "/ddm-wix/final/img/team/m5.jpg";
        header("Location:member_desc.php");
    }elseif($_GET['memberID'] == 6){
        $_SESSION['name'] = "Ashley Amerson";
        $_SESSION['assoc'] = "Manager";
        $_SESSION['desc'] = "This team member is highly creative and is always coming up with new and innovative ideas. They have a unique perspective and often think outside the box.";
        $_SESSION['src'] = "/ddm-wix/final/img/team/m2.jpg";
        header("Location:member_desc.php");
    }
}

if(isset($_GET['destroy'])){
    session_unset();
    session_destroy();
    header("Location:/ddm-wix/final/pages/our_team.php?destroy=success");
}

if(isset($_GET['newsID'])){
    if($_GET['newsID'] == 1){
        $_SESSION['newsID'] = $_GET['newsID'];
        $_SESSION['title'] = "How to Tuck Your Car’s Front and Rear Bumpers";
        $_SESSION['img'] = "/ddm-wix/final/img/low/sHEMQK.jpg";
        $_SESSION['author'] = "Seam Michaels";
        $_SESSION['date'] = "22.3. 2023";
        $_SESSION['desc'] = "Bumpers. Does anybody really give a darn about them? Well, yes, anybody building a race car or a show car gives a darn. Race car builders usually care about weight more than looks, and show car builders usually care more about looks than weight, though; each gives a darn for a different reason.";
        header("Location:/ddm-wix/final/pages/news/news.php");
    }elseif($_GET['newsID'] == 2){
        $_SESSION['newsID'] = $_GET['newsID'];
        $_SESSION['title'] = "Lowrider L.A. Super Show 2022 Pt. III: It’s Showtime!";
        $_SESSION['img'] = "/ddm-wix/final/img/low/uv9ftg.jpg";
        $_SESSION['author'] = "Daniel Williams";
        $_SESSION['date'] = "21. 3. 2023";
        $_SESSION['desc'] = 'Every time a Lowrider Super Show date is announced, the calls for a SoCal tour stop are always echoed by those who remember the days when Los Angeles served as a major part of the schedule. It’s been over two decades since the last show, and long-term lowriders never forget, so the official announcement of the March 20, 2022 tour date that broke last year was a welcome addition to the events calendar. <br> <br>


        Expected to sell out quickly, the show nevertheless exceeded those those expectations and tickets were all spoken for in just a few hours. Southern Californians are typically tasked with making their way to Las Vegas, Arizona, New Mexico, and various other regions for the Super Show series, so it was a given that with an event in their backyard, they wasted no time in reserving their respective spots.<br> <br>
        
        
        Along with the locals came droves of out-of-state lowriders that, even in the face of painfully high gas prices, made the journey to the Long Beach Convention Center. The massive price spike virtually doubled most budgets as trucks and trailers made their way across state lines. Ask anyone in attendance, however, and it was all worth it for the massive show and a much-needed return to Los Angeles County.';
        header("Location:/ddm-wix/final/pages/news/news.php");
    }elseif($_GET['newsID'] == 3){
        $_SESSION['newsID'] = $_GET['newsID'];
        $_SESSION['title'] = "Exclusive Gallery From the 2022 Mooneyes Show in Yokohama Japan";
        $_SESSION['img'] = "/ddm-wix/final/img/low/NI02tn.jpg";
        $_SESSION['author'] = "Sarah Jones";
        $_SESSION['date'] = "19. 3. 2023";
        $_SESSION['desc'] = "For 30 years, the folks who own Mooneyes—which encompasses two parts houses, one in Santa Fe Springs, California, and the other in Yokohama, Japan—have put together an awesome hot rod event, which was the first such indoor gathering in Japan when it first started in 1992.<br> <br>



        Held in the heart of Yokohama inside a 217,000 square-foot convention center, the event includes some 300 custom vehicles, 500 custom motorcycles, and roughly 250 vendors who, along with more than 20,000 attendees, try to take all of it in over the course of a single 10-hour day! It's a challenge to be sure, mostly because there is so much to look at.
        <br> <br>
        
        Besides a great representation of American vehicles (most of which were customized in Japan) you get to see how they customize Japanese-market vehicles, many of which have never even been heard of in the States. Each year's show highlights certain types of vehicles, with this year's group being Deuces for the 90th anniversary of the '32 Ford, another area set aside for Mopar Muscle (with a handful of Plymouth Road Runners—very rare in Japan), and another called Volkswagen Air Cooled in Action for pre-68 Cal-look cars. Another gathering, Willys Heaven, had eight different Willys vehicles.";
        header("Location:/ddm-wix/final/pages/news/news.php");
    }elseif($_GET['newsID'] == 4){
        $_SESSION['newsID'] = $_GET['newsID'];
        $_SESSION['title'] = "The Lowrider Super Show Tour Lands in the Southwest";
        $_SESSION['img'] = "/ddm-wix/final/img/la-supershow-setup-pink-magenta-patterns.jpg";
        $_SESSION['author'] = "Derek Wells";
        $_SESSION['date'] = "18. 3. 2023";
        $_SESSION['desc'] = "The Lowrider Super Show made its way to Hidalgo, Texas, for a two-day indoor/outdoor event that included the sort of high caliber lowriders you've come to expect from the tour, including a full blown concert and festival that brought in thousands of locals to join in the celebration.";
        header("Location:/ddm-wix/final/pages/news/news.php");
    }elseif($_GET['newsID'] == 5){
        $_SESSION['newsID'] = $_GET['newsID'];
        $_SESSION['title'] = "Lowrider L.A. Super Show 2022 Pt. III: It’s Showtime!";
        $_SESSION['img'] = "/ddm-wix/final/img/low/Hydraulic_Car.jpg";
        $_SESSION['author'] = "Daniel Williams";
        $_SESSION['date'] = "21. 3. 2023";
        $_SESSION['desc'] = "Our first impression on the street is that the GR86 feels a lot like our 2020, but with more power, a quicker throttle response, and stiffer chassis. The ride seemed a little rough to begin with, but the turn in response was fantastic, and no matter which gear you are in, the car never really seems dead. We couldn't wait to see how this translated on track!<br>

        Our first track day with the 86 was at Roebling Road Raceway, our home track, and one that we have put in thousands of laps at over the past 10 years. We love to gather data from our various cars in different configurations at this track so that we have something to compare to. Our first few sessions with the 86 was in her completely stock configuration. <br>
        
        We were able to squeeze a 1:25.9 out of the car (our 2020 was able to do a 1:27.9 stock). The stock tires are a huge limiting factor as they just made the car feel disconnected from the track and required a little bit of effort to keep the car pointed straight. The brakes need to be upgraded as they started to fade less than a few laps into the session and braking points had to be backed up more and more.";
        header("Location:/ddm-wix/final/pages/news/news.php");
    }elseif($_GET['newsID'] == 6){
        $_SESSION['newsID'] = $_GET['newsID'];
        $_SESSION['title'] = "Tuned 2022 GR86 Dyno Results";
        $_SESSION['img'] = "/ddm-wix/final/img/BMW30.jpg";
        $_SESSION['author'] = "Michael Jackson";
        $_SESSION['date'] = "11. 3. 2023";
        $_SESSION['desc'] = "Ecuteck has finally released support for the GR86 and we wasted no time in getting ours on the dyno with our amazing in-house tuner behind the computer! After a pretty full day of tuning he was finally able to get the car close to where he is satisfied with it. There may be some tweaking in the future, but until now, we think this bump in power will definitely be noticeable on both the street and track!<br> <br>


        The car baselined on the same day at 219.5WHP, and after dialing the tune in we stopped at 231WHP. The car is running on 93 octane and is equipped with an HKS catback exhaust, PLM front pipe, Perrin inlet tube, and a K&N air filter. The car baselined bone stock at 213WHP on our dyno back in February, and made 219 with bolt on modifications only.<br>
        
        We plan to get this thing out on track soon to test out the before and after tune results as far as driveability and track time improvements. Follow along as we compete in Gridlife ClubTR, Optima Ultimate Street Car Challenge, and maybe even some Global Time Attack! We look forward to seeing how the car progresses!";
        header("Location:/ddm-wix/final/pages/news/news.php");
    }
}

if(isset($_GET['news'])){
    session_unset();
    session_destroy();
    header("Location:/ddm-wix/final/pages/news&events.php?destroy=success");
}

if(isset($_GET['eventID'])){
    if($_GET['eventID'] == 1){
        $_SESSION['date'] = "ut 25.04. | California, USA";
        $_SESSION['title'] = "Workshop show";
        $_SESSION['desc'] = "We will show you our very own workshop !";
        $_SESSION['img'] = "/ddm-wix/final/img/classic-car-127.jpg";
        $_SESSION['time'] = "25. 4., 17:00 – 26. 4., 21:30 <br>
        California, USA";
        $_SESSION['map'] = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1593.6203977897333!2d-120.08681181104889!3d36.9801850857158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80940be650b9c603%3A0x8c317f830feba401!2s2155%20N%20Schnoor%20St%2C%20Madera%2C%20CA%2093637%2C%20USA!5e0!3m2!1sen!2ssk!4v1682181241467!5m2!1sen!2ssk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
        header("Location:/ddm-wix/final/pages/events/event.php");
    }elseif($_GET['eventID'] == 2){
        $_SESSION['date'] = "pi 09. 6.  |  Los Angeles";
        $_SESSION['title'] = "Lowrider Los Angeles Super Show";
        $_SESSION['desc'] = "The super car show taking place in LA !";
        $_SESSION['img'] = "/ddm-wix/final/img/supershow-roll-in-gunmetal-impala-profile.jpg";
        $_SESSION['time'] = "09. 6., 14:20 – 10. 6., 14:20 <br>
        Los Angeles, Los Angeles, CA, USA";
        $_SESSION['map'] = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3305.186967269669!2d-118.25565742363288!3d34.064721117070206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c7aab15bc031%3A0x30cd944fd7b0c55c!2s437%20N%20Boylston%20St%2C%20Los%20Angeles%2C%20CA%2090012%2C%20USA!5e0!3m2!1sen!2ssk!4v1682181184232!5m2!1sen!2ssk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
        header("Location:/ddm-wix/final/pages/events/event.php");
    }
}

?>