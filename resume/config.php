<?
// Enter your personal details here to build your online resume.

// Let's start with some basic info.  You must include your full name, but if you don't want to include your phone number or email address you can just delete those lines entirely.
$personal['first_name']= 'Ioan';
$personal['last_name'] = 'Petras';
$personal['phone_number'] = '(+46)700-657-986';
$personal['email_address'] = 'contact@ioanpetras.com';

// Now let's add any social media pages you've created and want to share.  You can add whatever you want by following the format below.  The first item you add is the name of the social media site, and the second item you add is the URL to your page.
$social_media[] = array('Facebook', 'http://facebook.com/jan.petras21');
$social_media[] = array('Twitter', 'http://twitter.com/janpetras21');
$social_media[] = array('LinkedIn', 'http://se.linkedin.com/in/janpetras');

// Cool.  With that stuff out of the way, let's input your work history.  This part requires a bit more information but it's similar to adding a social media page like you did above but with more information.  The first item you enter is last year you worked at the job (or the range of time, if you prefer).  The second item is your job title, the third is the company you worked for, and the fourth is a description of the work you did there.  The description can get a little long, but that's okay.  Just be sure not to use any single quotes ('') or things will break!  You can add as many jobs as you like and the script will adapt.
$work_history[] = array('2012 - present',
						'Digital Marketing Assistant / Web Developer',
						'AIESEC Sweden',
						'Responsible for all online external communications. Brand management and communication strategy creation. Web development (HTML/CSS/JavaScript). Social media promotion responsibilities (SEO, PPC, AdWords, Analytics, Webmaster).');
$work_history[] = array('2011 - 2012',
						'Marketing Communications Specialist',
						'MBT Austria',
						'Involved in planning, developing and implementing the marketing strategy. Strategic planning and branding for the entry into the Eastern European market. Performed marketing research and maintained the marketing budget plan.');
$work_history[] = array('2010',
						'Account Manager Internship',
						'Nasii Advertising',
						'Used CMS for connecting the company to existing and potential customers. Liaison between the clients and the creative / media planning department. Performed successful marketing research for the development of new campaigns.');

// Phew!  That was the hard part.  Now we need to enter in some other important information about you.  Let's start with your education.  You only need to enter two things: your school and a description of your degree.  If you went to Brown University you'd enter that for your school, then put your year and graduation date as the description (e.g. "BA in Social Sciences, Class of 2002").
$education[] = array('Uppsala University', 'Digital Media, M.Sc.');
$education[] = array('Babes-Bolyai', 'Marketing and Communication Science, B.Sc.');

// Presumably you learned something in school and developed a few skills over the course of your lifetime.  Let's add them here.  
$skills[] = array('Web Development', 'HTML5, CSS3, PHP, Javascript, Python');
$skills[] = array('Marketing', 'Advertising, brand management, SEO and PPC');
$skills[] = array('Finance', 'Business economics, budget management, risk analysis');

// Finally, let's list any awards or honors you've received so you can show off your accomplishments.  To add an award, just use the format below.  (I'm sure you have the hang of this by now, but we're going to go over it anyway.)  The first item you enter is the name of the award/honor (e.g. "Advertising Gold Award" or "Published in the New Yorker") and the second item is the description of the award/honor (e.g. "2010 TV Ads Under $50,000" or "Short story about the trials of Orthodox Jews in Arkansas, May 2016").
$certificates[] = array('Finance Certificate', 'Stanford University Venture Lab');
$certificates[] = array('Computer Science Certificate', 'Harvard University CS50x edX platform');

// Languages
$languages[] = array('English', 'Really good.');
$languages[] = array('Swedish', 'Working.');
$languages[] = array('Romanian', 'Really good.');
$languages[] = array('Spanish', 'Meh.');
$languages[] = array('Chinese', '载入中...');

// Want to turn off any of the sections on your resume?  You can do that in the settings.  Just change any section from true to false and it'll disappear.  (Note: You can't turn off your work history--that's sort of important!)
$settings['social_media'] = true;
$settings['education'] = true;
$settings['skills'] = true;
$settings['certificates'] = true;
$settings['languages'] = true;

// There are also a few other settings you can toggle on and off, such as offering a printable version of your resume and whether to use a dark or light style (set style to "dark" or "light" to choose).
$settings['printable'] = false;
$settings['style'] = "dark";
$settings['lang'] = "en";
?>
