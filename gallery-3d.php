<?php /* Template Name: Gallery 3D */ ?>
<!--

TODO:
    [ ] hyperlink logos
-->

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <title><?php echo get_bloginfo( 'name' ); ?></title>
        <meta content="<?php echo get_bloginfo( 'name' ); ?>" property="og:title">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <?php wp_head(); ?>
	</head>
	<body data-url="<?php echo get_template_directory_uri(); ?>">
        <div id="container"></div>
<!--		<div id="blocker"></div>-->
        <header>
            <div>
                <p class="button back" id="back">info</p>
            </div>
            <div>
                <h1 class="title" id="title">(Re)Visions of Chicago Public Schools</h1>
            </div>
            <div>
                <img class="logos" src="<?php echo get_template_directory_uri(); ?>/img/combo.svg">
            </div>
            <div>
                 <p class="button artist" id="artist-info">about</p>
            </div>
        </header>
        <div class="overlay" id="overlay">
			<div>
                <h1>(Re)Visions of Chicago Public Schools</h1>
                <img class="logos" src="<?php echo get_template_directory_uri(); ?>/img/combo.svg">
                <br>
                <img id="gif" src="<?php echo get_template_directory_uri(); ?>//img/acs_web_transparent.gif">
                <p id="instructions">Move your phone and tap the screen to explore the gallery</p>
				<button class="hidden" id="startButton">ENTER GALLERY</button>
			</div>
		</div>
        <div class="arrows">
            <div id="arrow-left">→</div>
            <div id="arrow-right">→</div>
        </div>
        <div class="work-title">
            <p>Charles Anderson, Michele Clark Magnet High School</p>
        </div>
		<section id="gallery-data" class="gallery-data">

<?php

$subpages = get_posts(array(
	'post_type' => 'page',
	'post_parent'=> $post->ID
));

function media($w, $class) {
	$type = $w['type'];
	$title = $w['title'];

	if($type == 'YouTube') {
	?>
	<article class="<?php echo $class ?>" data-link="<?php echo $w['link']; ?>" data-type="<?php echo $type; ?>" data-title="<?php echo $title; ?>"></article>
	<?php
	} else {
	?>
	<article class="<?php echo $class ?>" data-file="<?php echo $w['image']; ?>" data-type="<?php echo $type; ?>" data-title="<?php echo $title; ?>"></article>
	<?php
	}
}

function room($p, $class) {
	?>
	<article class="room <?php echo $class; ?>" data-name="<?php echo get_the_title($p->ID) ?>" data-ID="<?php echo $p->ID ?>">
		<?php

		$artworks = get_field('artwork', $p);

		if($artworks) {
			foreach($artworks as $w) {
				if($w['cover'] == true) {
					media($w, 'cover');
					break;
				}
			}
			?>
				<section class="works">
					<?php
					foreach($artworks as $w) {
						media($w, 'work');
					}
					?>
				</section>
			<?php
		}
		?>
	</article>
	<?php
}

if($subpages) {
?>
	<section class="rooms multiple">
<?php
	foreach($subpages as $p) {
		room($p, '');
	}
	?>
	</section>
	<?php
} else {
	room($post, 'single');
}
?>
		</section>
        <section id="gallery-data2" class="gallery-data">
            <section class="artists">
                <article class="artist" data-name="Matt Siber" data-dir="work/MattSiber/">
                    <article class="cover" data-file="COVER.jpg" data-type="image" data-title="Untitled Object 1"></article>
                    <section class="works">
                        <article class="work" data-file="20191209cpslives-siber253.jpg" data-type="image" data-title="Untitled Object 13"></article>
                        <article class="work" data-file="20191209cpslives-siber253.jpg" data-type="image" data-title="Untitled Object 13"></article>
                        <article class="work" data-file="20191209cpslives-siber253.jpg" data-type="image" data-title="Untitled Object 13"></article>
                        <article class="work" data-file="20191209cpslives-siber253.jpg" data-type="image" data-title="Untitled Object 13"></article>
                        <article class="work" data-file="20191209cpslives-siber253.jpg" data-type="image" data-title="Untitled Object 13"></article>
                    </section>
                </article>
                <article class="artist" data-name="Matt Siber 2" data-dir="work/MattSiber/">
                    <article class="cover" data-file="COVER.jpg" data-type="image" data-title="Untitled Object 1"></article>
                    <section class="works">
                        <article class="work" data-file="20191209cpslives-siber253.jpg" data-type="image" data-title="Untitled Object 13"></article>
                        <article class="work" data-file="20191209cpslives-siber253.jpg" data-type="image" data-title="Untitled Object 13"></article>
                        <article class="work" data-file="20191209cpslives-siber253.jpg" data-type="image" data-title="Untitled Object 13"></article>
                        <article class="work" data-file="20191209cpslives-siber253.jpg" data-type="image" data-title="Untitled Object 13"></article>
                        <article class="work" data-file="20191209cpslives-siber253.jpg" data-type="image" data-title="Untitled Object 13"></article>
                    </section>
                </article>
                <article class="artist" data-name="Matt Siber 3" data-dir="work/MattSiber/">
                    <article class="cover" data-file="COVER.jpg" data-type="image" data-title="Untitled Object 1"></article>
                    <section class="works">
                        <article class="work" data-file="20191209cpslives-siber253.jpg" data-type="image" data-title="Untitled Object 13"></article>
                        <article class="work" data-file="20191209cpslives-siber253.jpg" data-type="image" data-title="Untitled Object 13"></article>
                        <article class="work" data-file="20191209cpslives-siber253.jpg" data-type="image" data-title="Untitled Object 13"></article>
                        <article class="work" data-file="20191209cpslives-siber253.jpg" data-type="image" data-title="Untitled Object 13"></article>
                        <article class="work" data-file="20191209cpslives-siber253.jpg" data-type="image" data-title="Untitled Object 13"></article>
                    </section>
                </article>
            </section>
        </section>
		<section id="info" class="info">
			<article class="main" id="info-main">
				<?php the_field('info'); ?>
			</article>
			<?php
			if($subpages) {
				foreach($subpages as $p) {
					?>
						<article class="main" id="info-<?php echo $p->ID ?>">
							<?php the_field('info', $p->ID); ?>
						</article>
					<?php
				}
			}
			?>
			<footer>
                <p>Copyright CPS Lives &amp; 062 2020 <a href="https://cpslives.org/" target="_blank">cpslives.org</a>   <a href="https://www.062official.com/" target="_blank">062official.com</a></p>
                <p>site by acs <a href="http://andrewcs.info/" target="_blank">andrewcs.info</a></p>

            </footer>
		</section>
        <section style="height: 0; opacity: 0; overflow: hidden;" id="info2" class="info">    `
            <article class="main" id="info-main">
                <h1 class="bigtitle">(Re)Visions of Chicago Public Schools</h1>

                <p>CPS Lives and 062 are happy to present (Re)Visions of Chicago Public Schools, our first virtual group show of works by 18 CPS Lives artists. The landscape of public education is ever changing, and the role of artists as narrators is becoming increasingly important in documenting these stories. Our artists are committed to showing honest depictions of public education and of the youth of Chicago. We are dedicated to taking an active role in the future by helping shape the youth arts community into a positive and groundbreaking space for experimentation and freedom. This is apparent in the bodies of work in the exhibition, and the new virtual space where it is shown.</p>
                <p>This exhibition continues through June 22nd, 2020.</p>

                <h2>Participating Artists</h2>

                 <ul class="artists">
                    <li>Marzena Abrahamik</li>
                    <li>Suzette Bross</li>
                    <li>Scott Fortino</li>
                    <li>Jim Iska</li>
                    <li>Janet Mesic-Mackie</li>
                    <li>Doug McGoldrick</li>
                    <li>Lynn Renee Persin</li>
                    <li>Jeff Phillips</li>
                    <li>John Preus</li>
                    <li>Eileen Ryan</li>
                    <li>Justin Schmitz</li>
                    <li>Matt Siber</li>
                    <li>Edra Soto</li>
                    <li>Krista Wortendyke</li>
                    <li>Kelly Costello</li>
                    <li> Karishma Kalpesh Dotia </li>
                    <li>Kioto Aoki</li>
                    <li> Jan Tichy</li>
                </ul>


<!--
                <h2>Upcoming Events</h2>

                <img src="<?php echo get_template_directory_uri(); ?>/img/Discussion%20Poster%20Final-03%20(1).jpg">
                <img src="<?php echo get_template_directory_uri(); ?>/img/4COVER%20(5).jpg">
                <img src="<?php echo get_template_directory_uri(); ?>/img/17YWLCS__FLYERIMAGE%20(5).jpg">
-->

                <h2>Past Events</h2>


                <iframe width="560" height="315" src="https://www.youtube.com/embed/WYFdVbRRP_w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <h1></h1>

                <h2>062</h2>

                <p>Named after local zip code in Gwangju, South Korea, 062 is a 501(c)(3) non-profit art gallery housed within the Zhou B Art Center in Bridgeport, Chicago and is committed to the promotion of global art discourse. 062 is an open platform for artists and cultural organizations. 062 supports the work of emerging and established artists through the dissemination of ideas, actions and conversations, and experimental exhibition formats.</p>

                <a href="https://www.062official.com/" target="_blank">062official.com</a>

                <h2>CPS Lives</h2>

                <p>CPS Lives has built a reputation of tapping into the heart of the city through the tastemakers who know its streets best : artists, educators, students.</p>
                <p>CPS Lives is a 501(c)(3) non-profit arts organization that pairs Chicago artists, designers, thinkers and makers with a Chicago Public School during the academic year to collaborate on a project, sharing the unique and individual story of each Chicago Public School. Each story will be celebrated and exhibited throughout the city in local Chicago Public Library branches and other exhibition spaces, as well as existing on the CPS Lives social media and website as an accessible digital archive of public school history for students, families, community members, educators, administrators, policymakers &amp; the general public. The Chicago Public School system is the nation’s third largest school district, serving over 400,000 students in more than 660 schools. The sheer scale and complexity of the Chicago Public School system renders it opaque to the general public, where stories of its successes and resilience remain untold. This project shows the power of public education in Chicago. Our artists produce artwork that provides a unique window into the Chicago Public School system, generating support and reinforcing belief in the Chicago Public School mission “to provide a high quality public education for every child in every neighborhood”.</p>

                <a href="https://cpslives.org/" target="_blank">cpslives.org</a>
                <h2>Contact Information</h2>
                <ul>
                    <li>062 | S.Y Lim | Director | staff@062official.com</li>
                    <li>062 | Abhay Seghal | Gallery Assistant |  abhayseghal@062official.com</li>
                    <li>CPS LIVES | Suzette Bross| Executive Director | suzettebross@cpslives.com</li>
                    <li>CPS LIVES | Kendall Hill | Artistic Director | kendallhill@cpslives.com</li>
                    <li>CPS LIVES | Sophia Padgett Perez | Artistic Director | sophiapadgettperez@cpslives.com</li>
                    <li>DESIGN &amp; DEVELOPMENT | Andrew C. Shike | <a href="https://andrewcs.info/" target="_blank">andrewcs.info</a> | andrewcshike@gmail.com </li>
                </ul>
<!--
                <p>062 | S.Y Lim | Director | staff@062official.com</p>
                <p>062 | Abhay Seghal | Gallery Assistant |  abhayseghal@062official.com</p>
                <p>CPS LIVES | Suzette Bross| Founder | suzettebross@cpslives.com</p>
                <p>CPS LIVES | Kendall Hill | Artistic Director | kendallhill@cpslives.com</p>
                <p>CPS LIVES | Sophia Padgett Perez | Artistic Director | sophiapadgettperez@cpslives.com</p>
                <p>DESIGN &amp; DEVELOPMENT | Andrew C. Shike | <a href="https://andrewcs.info/">andrewcs.info</a> | andrewcshike@gmail.com </p>
-->

            </article>
            <article class="main" id="info-MarzenaAbrahamik">
                <h1 class="bigtitle">Marzena Abrahamik</h1>

<!--                https://youtu.be/pfCJT2U_cgg-->
                <iframe width="560" height="315" src="https://www.youtube.com/embed/pfCJT2U_cgg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <p>Marzena Abrahamik received her BA from Loyola University in 2002 and her MFA from Yale University in 2013. Her recent solo exhibitions include presentations at Johalla Projects, Chicago (2017, 2015), the Gallery of Classic Photography, Moscow (2013), and the Turchin Center for the Visual Arts, Boone, North Carolina (2012). Group exhibition highlights include the Silver Eye Center for Photography, Pittsburgh (2016), Weinberg/Newton Gallery, Chicago (2016), Soccer Club Club, Chicago (2016), Sushi Bar, New York (2014), the International Photography Festival, Tel-Aviv (2014), and Aperture, New York (2013). Her work is included in the collections of the Art Institute of Chicago and Haas Family Art Library at Yale University. Her work can currently be seen in the Whitney Houston Biennial in New York</p>

                <img class="headshot" src="<?php echo get_template_directory_uri(); ?>//headshots/MarzenaAbrahamik_Headshot.jpg">

                <h2>Project Description</h2>

                <p>WOMAN SIGNIFIES, is an ongoing collaboration with Chicago Public High Schools’ students as extracurricular programming to support schools with depleting arts education. I started photographing at Young Women’s Leadership Charter School in Douglas, a school that closed in the Spring of 2019 and have continued the collaboration with Michele Clark Academic Magnet High School students in Austin. The project focuses on gender perceptions and how photography can present gender relative to context. A majority of young women today believe that gender does not define us the way it has in the past and we no longer feel pressure to conform to traditional gender roles or behaviors. As an artist my intention is to preserve the student’s autonomy while underlining their self-discovery and their strengths. The final photographs are spontaneous and collaborative meditation; their aim is to situate the sitter within their own psychologies. We work together on the pose and location in order to arrive together at the final image. Each photograph resonates with the tension between the woman as student, and woman as an individual, a woman as she is within her community, and a woman as she is seen through the eyes of the audience.</p>

                <p>Our collaborations revolve around discussions: how they would like to be seen and what they would like the photograph to feel like. The language of photography is explained and communicated. What does it mean for the subject of the photograph to look into the camera and how looking away from the camera often allows for a narrative to emerge. Through the introduction of visual representations I hope to equip and empower students with an understanding of the limitations and possibilities of being represented today.</p>

                <a href="./artist-pdfs/Marzena%20Abrahamik%20List.pdf" target="_blank" class="low"target="_blank" class="low">List of Works</a>
            </article>
            <article class="main" id="info-JustinSchmitz">
                <h1 class="bigtitle">Justin Schmitz</h1>

                <iframe width="560" height="315" src="https://www.youtube.com/embed/qa3nhIIw-z0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <p>Justin Schmitz is a Chicago based Photographer. He is the recipient of the Toby Devan Lewis Fellowship, The Tierney Fellowship,City of Chicago CAAP Grant, Albert P. Weisman Scholarship, and The Union League Civic and Arts Foundation Scholarship. A collection of his work was part of the Midwest Photographers Project at the Museum of Contemporary Photography.  He was runner-up for the Photography Book Now Prize, and a finalist for the Honickman First Book Prize</p>

                <img class="headshot" src="<?php echo get_template_directory_uri(); ?>//headshots/JSchmitz.jpg">

                <h2>Project Description</h2>

                <p>Justin Schmitz is spending his year photographing at Taft High School. I spent most of my energy photographing at large events like Friday night football games and dances. The Taft Homecoming dance was an event where I made the photographs that most closely represent what I am looking for as an artist. </p>

                <p>Being a teenager feels like being pulled in multiple directions. The internal evolution of thoughts, ideas and feelings are confronted with the outward physical transformations that mark any teenage experience. My interest in youth culture stems from a desire to see the outward markers of this change in an attempt to understand the internal emotional experiences. </p>

                <a href="./artist-pdfs/Justin%20Schmitz%20List.pdf"target="_blank" class="low">List of Works</a>
            </article>
            <article class="main" id="info-KiotoAokiJanTichy">

<!--
                <iframe width="560" height="315" src="https://www.youtube.com/embed/njCIlcqakUc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Az0UFPMA5AU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/TMYbhqMafgw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/kG-y7khgs_k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/L_SA2OKrYrE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/sanoDKX6EbM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/OeQo91eUrHo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/apCk6TLToPg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/wYgNwBkZS8c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/832-2bmRYKg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/obMlM1irz4s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
-->

                <h1 class="bigtitle">Kioto Aoki</h1>


                <p>Kioto Aoki is a visual artist whose practice includes photography, film, books and installations to engage the material specificity of the analogue image and image-making process. Using the nuances of time, space, form, light and motion, her work explores different modes of perception as it relates to the space between the still and the moving image. Her work also explores the photographic and cinematic interpretations of the body in space and includes a series of dance-movement films. She has exhibited and screened in Chicago, Berlin, Los Angeles, San Francisco, London and Japan. Her work is held in Joan Flasch Artists’ Book Collection and the Museum of Contemporary Art Chicago Library. Kioto received her MFA from The School of the Art Institute of Chicago and is currently an artist in residence for HATCH Projects at the Chicago Artists Coalition.</p>

                <img class="headshot" src="<?php echo get_template_directory_uri(); ?>/headshots/Aoki_Headshot.jpeg">

                <h1 class="bigtitle">Jan Tichy</h1>


                <p>Jan Tichy is a contemporary artist and educator and works at the intersection of video, sculpture, architecture, and photography. Born in Prague in 1974, Tichy studied art in Israel before earning his MFA from the School of the Art Institute of Chicago, where he is now Associate Professor at the Department of Photography and the Department of Art &amp; Technology Studies. Tichy has had solo exhibitions at the MCA Chicago; Tel Aviv Museum of Art; CCA Tel Aviv; Wadsworth Atheneum Museum of Art; Museum of Contemporary Photography, Chicago; Santa Barbara Museum of Art and Chicago Cultural Center among others. In 2011, he created Project Cabrini Green, a community based art project that illuminated with spoken word the last high rise building of the Cabrini Green housing projects. In 2014 Tichy started to work on an NEA supported, community project in Gary, IN – the Heat Light Water cultural platform. Beyond Streaming: a sound mural for Flint at the Broad Museum in Michigan in 2017 brought teens from Flint and Lansing to share their experience of the ongoing water crisis. In 2018 Tichy was one of the inaugural artists for Art on the Mart.</p>

                <img class="headshot" src="<?php echo get_template_directory_uri(); ?>/headshots/Jan%20Tichy.png">

                <iframe width="560" height="315" src="https://www.youtube.com/embed/5z1qIi9I4vU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <a href="./artist-pdfs/Jan%20and%20Kioto%20List.pdf"target="_blank" class="low">List of Works</a>

            </article>
            <article class="main" id="info-SuzetteBross">
<!--                <section>-->
                    <h1 class="bigtitle">Suzette Bross</h1>

                <img class="headshot" src="<?php echo get_template_directory_uri(); ?>/headshots/Suzette%20Bross.jpeg">



                <p>Suzette Bross is a lens-based artist living and working in Chicago, Illinois. Her practice explores notions of time, technology, liminality and community. Consistently addressed in her projects are the spaces in between time that occur in everyday life, created utilizing everyday technologies. Bross’ film background is evident when she investigates the nature of time and applies elements of motion to her conceptual work. Through her community based work, Bross hopes to engage viewers and demonstrate the significance of art in the everyday. Bross has collaborated with “StreetWise” magazine which helps Chicago homeless women and men achieve personal stability and strength through social services and aiding with employment. She is also the Founder and Executive Director of the non-profit arts organization, “CPS Lives”, which creates residencies for artists in Chicago Public Schools to create art, engage students and share stories about the importance of public school education. Bross’ art works are realized as individual objects, installations, in book form and as public art. Among the permanent collections that her work is featured in are the Art Institute of Chicago, the Cleveland Museum of Art, the Museum of Contemporary Photography in Chicago, the Mary and Leigh Block Museum of Art at Northwestern University. Bross has exhibited her Walks series in a solo show at Geary Contemporary in New York City, NY and the group exhibition, titled ‘Alien Nation’, at Lehman, College Art Gallery in Bronx, New York. Her series, For the Glass, was featured in solo exhibitions at the Chicago Artists Coalition and Lehman Arts Center in North Andover, MA, Geary Contemporary booth at EXPO Chicago 2016, and as the first exhibition in the Chicago Google Artist Initiative.</p>

                <iframe width="560" height="315" src="https://www.youtube.com/embed/Z_x3ki_wUso" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<!--                </section>-->

                <h2>Project Description</h2>

                <p>Principal Project is an ongoing body of work within CPS Lives, a citywide nonprofit arts organization where Chicago artists are paired with Chicago Public schools to share each school’s unique story. The photographic portraits of Chicago Public School Principals in their offices show what the leaders of public school look like today. The formal portraits showcase the dynamic range of character and personality of each leader. Mementos and signage in the offices tell stories about each individual, what things are important to them and their ideas about leadership in their school community. By using traditional documentary methods, I hope to change conceptual and cultural perceptions of what a leader of a public school looks like. </p>

                <a href="./artist-pdfs/Suzette%20Bross%20List.pdf"target="_blank" class="low">List of Works</a>
            </article>
            <article class="main" id="info-KellyCostelloKarishmaKalpeshDotia">
                <h1 class="bigtitle">Kelly Costello</h1>

                <iframe width="560" height="315" src="https://www.youtube.com/embed/F0cujVvyYC8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <p>Kelly Costello splits her time between running her own design firm, Panorama Innovation, and teaching at several universities, including Northwestern University, Institute of Design (IIT), and the executive education program at CEDIM design school in Mexico. Her company frequently hires CAP-X students from the School of the Art Institute to help with various design projects, including the final phase of this project for CPS Lives. Kelly now focuses much of her work on civic innovation and design coaching for Bloomberg Philanthropies. She holds a Master of Design from IIT’s Institute of Design and a Designing Your Life coaching certificate, a program which uses design thinking to re-imagine one’s future.</p>

                <img class="headshot" src="<?php echo get_template_directory_uri(); ?>/headshots/KellyCostello_Headshot.jpg">

                <h1 class="bigtitle">Karishma Kaplesh Dotia</h1>

                <p>Karishma Kaplesh Dotia is a budding designer with an entrepreneurial mindset, who leverages problem-solving skills, user-centric approach, and research into creating socially conscious designs. As a Bachelor of Fine Arts student at the School of the Art Institute of Chicago (SAIC), she has presented her works at international summits, most notably the Bio design Challenge 2018 at the Museum of Modern Art. She has also collaborated with government bodies to work on design solutions concerning public health and environmental problems. New challenges inspire her.</p>

                <img class="headshot" src="<?php echo get_template_directory_uri(); ?>/headshots/Karishma%20Dotia_Headshot.jpg">



                <h2>Project Description</h2>

                <p>This project began as a collaboration between the Student Voice Committee (SVC) at Galileo Scholastic Academy and a team of graduate design students in my class at IIT’s Institute of Design. The ID students facilitated a design project to explore options for re-imagining the school library. Thus, KRE8 Studio, a new approach to a school library, was conceptualized. Inspired by the idea of KRE8 Studio, Connie Amon, the school librarian decided to create a mobile maker station. With that goal in mind, two teams of students from Segal Design Institute of Northwestern University took on the challenge of designing prototypes for mobile maker stations. The mobile stations support “studios” for robotics, electronics, circuitry, production, animation, design, and digital fabrication (3D printing). Students have now placed two prototypes at Galileo Scholastic and the next phase of our CPS Lives project is to understand how these are performing and create improvements in the next iteration of these mobile maker stations.</p>

                <a href="./artist-pdfs/Kelly%20Costello%20List.pdf"target="_blank" class="low">List of Works</a>

            </article>
            <article class="main" id="info-ScottFortino">
                <h1 class="bigtitle">Scott Fortino</h1>


                <p>Scott Fortino developed his approach to photography out of experiences directly related to his position as a Chicago police officer. This work led to the publication of his monograph, Institutional, which depicted seemingly impersonal architectural spaces while revealing the embedded evidence of personal use. He received his MFA from the University of Illinois at Chicago and a BA from Columbia College Chicago. He has had solo exhibitions in Chicago at the Museum of Contemporary Art and the Museum of Contemporary Photography. His work is in the collections of the Art Institute of Chicago, Milwaukee Art Museum, Worcester Art Museum and the Museum of Contemporary Photography, and numerous public and private collections. He lives and works in Chicago.</p>

                <img class="headshot" src="<?php echo get_template_directory_uri(); ?>/headshots/ScottFortino2.jpg">

                <a href="./artist-pdfs/Scott%20Fortino%20List.pdf"target="_blank" class="low">List of Works</a>

            </article>
            <article class="main" id="info-JimIska">
                <h1 class="bigtitle">Jim Iska</h1>

                <p>Jim Iska has been photographing the urban scene for over thirty years. After graduating from the Institute of Design in Chicago in 1980, Iska’s work has revolved around architecture from the classic to the vernacular, and its integral role in defining the city. He collaborated with author and historian Francis Morrone on a series of architectural guidebooks of New York City, Philadelphia, and Brooklyn in the 1990s.  Iska also produced contemporary photography for the first and second editions ofThe City in a Garden: A History of Chicago’s Parks by Julia S. Bachrach.  He is currently the author of the blog “In and About the City.”</p>

                <img class="headshot" src="<?php echo get_template_directory_uri(); ?>/headshots/James%20Iska.jpg">

                <h2>Project Description</h2>

                <p>MILESTONE</p>

                <p>Stone Scholastic Academy is a K-through 8 magnet elementary school in the Edgewater neighborhood on the far north side of Chicago. It was our children’s school.  While I’ve been around the people in these photographs for years, beyond faces on the playground, I came to know the members of the Stone Graduating Class of 2019 for real when I volunteered to document the production of the school play. </p>

                <p>To their credit, once the curtain rose, the teachers in charge of that project sat back and watched as the students managed every aspect of the production. What struck me was the way this group bonded together as a team to make the production a success.</p>

                <p>That probably shouldn’t come as a surprise as many of these kids had known each other for nine years or more. That’s a good chunk of one’s life when you’re only fourteen years old.</p>

                <p>To help celebrate the milestone of leaving the only school some of them have ever known, I chose to make portraits of graduates on their last full week at Stone. The setting and the choice of the people to be photographed with them, if any, was theirs.</p>

                <p>The  2019 class of Stone has dispersed, most of them going on to CPS high schools like North Side Academy, Lane Tech, Jones, Walter Payton, Von Steuben and Senn, while others have moved to the suburbs.</p>

                <p>But my guess is the connections they made at Stone will be lifelong.</p>

                <p><strong>I have no doubt that members of this class will go on to make the world a better place.</strong></p>

                <a href="./artist-pdfs/James%20Iska%20List.pdf"target="_blank" class="low">List of Works</a>

            </article>
            <article class="main" id="info-DougMcGoldrick">
                <h1 class="bigtitle">Doug McGoldrick</h1>

                <iframe width="560" height="315" src="https://www.youtube.com/embed/1gV_XPKsPX4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <p>I was born in Princeton, NJ, but raised in a suburb of Minneapolis. I grew up sailing in the summer and cross country skiing in the winter, in the spring and fall my dad and I would go out and take pictures. I have a masters degree from the University of Wisconsin Madison, but I still can’t spell to save my life. I live in a quaint burg just outside the city limits of Chicago. I’ve worked for companies as large as International Paper and as small as some local free newspaper you find in a coffee shop. I can handle any job you can throw at me – as long as I don’t have to spell much. And I love anything that gets me traveling.</p>

                <img class="headshot" src="<?php echo get_template_directory_uri(); ?>/headshots/Doug.jpg">

                <h2>Project Description</h2>

                <p>For my cps lives project I’m interested in looking at the transition times. The times when students are entering and exiting school, the times between classes, and recess. I want to see how they interact with each other when they have more freedom of movement. </p>

                <a href="./artist-pdfs/Doug%20McGoldrick%20List.pdf"target="_blank" class="low">List of Works</a>
            </article>
            <article class="main" id="info-JanetMesicMackie">
                <h1 class="bigtitle">Janet Mesic-Mackie</h1>

                <iframe width="560" height="315" src="https://www.youtube.com/embed/rpBZawJdfkQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <p>Janet Mesic Mackie has been a professional photographer for over 30 years, and has honed a vision and body of work that is informed by her love of nature, of form, and her training as a visual artist. “In recent years, my work has moved in a direction that emphasizes the beauty of form found all around us. From landscapes to portraits and images of horses, I look to capture the essence and vitality in the natural world.” As an editorial photographer, Mesic Mackie’s work has appeared in Elle Décor, Veranda, Interiors Magazine, and House Beautiful, among others. She has also been included in numerous interior design books. Janet Mesic-Mackie has a Bachelor’s degree in Printmaking and Photography from the University of Oregon. She lives and works in Chicago, Illinois.</p>

                <img class="headshot" src="<?php echo get_template_directory_uri(); ?>/headshots/Janet%20Mesic%20Mackie.jpeg">

                <h2>Project Description</h2>

                <p>This project aims to show the personal impact a music curriculum has for students attending Chicago public schools. I have paired the photographs with the student’s own words describing what having access to music has meant to theme. Access to music and art are often viewed as non essential. Arts programs are often the first programs cut by schools as a cost saving measure. Often these are the programs that can be the most impactful for many students.</p>

                <a href="./artist-pdfs/Janet%20Mesic-Mackie%20List.pdf"target="_blank" class="low">List of Works</a>
            </article>
            <article class="main" id="info-LynnReneePersin">
                <h1 class="bigtitle">Lynn Renee Persin</h1>

<!--                https://youtu.be/iG5qAgQIvpQ-->
                <iframe width="560" height="315" src="https://www.youtube.com/embed/iG5qAgQIvpQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <p>Lynn Renee Persin received her BA in English from the University of Michigan where she studied creative writing and begged her way into photography classes in the art school. She started her career working as a photographer’s assistant and studio manager for Chicago based photographers. Using the skill set she gained managing studios she became a photography shoot producer and spent a decade producing commercial photography shoots for clients like Coca Cola, Discover Card, Nike, Champion, and Miller Lite. In the meantime she’s continued to pursue her photography career breaking off on her own in 2016. Her work has been featured on billboards and busses for local JCC Apachi Day Camps, and she has exhibited in The Artist Project at the Merchandise Mart and multiple Around the Coyote Festivals where she received curator’s choice by Tricia Van Eyck of the Museum of Contemporary Art. </p>

                <img class="headshot" src="<?php echo get_template_directory_uri(); ?>/headshots/20190813-_DSC0204.jpg">

                <h2>Project Description</h2>

                <p>Being an eight year old is such a unique time in a child’s life, they are mature enough to put complete ideas together but young enough to believe that anything is possible. This was the inspiration I used for this portrait project for the second grade at Edison Regional Gifted Center in the Albany Park neighborhood in Chicago. My goal was to create portraits that could serve as a time capsule, telling us who they are, what they love, and what they believe in by using their own words in their own handwriting.</p>

                <p>Working with their second grade teacher and their art teacher, we put together a writing prompt for them to answer, “what is your favorite thing about yourself and how can you share it with the world?” While they filled out the their answers, I photographed each of them in the hallway by the art class and we discussed the prompts during their portrait sessions. I put a chair down so that they would sit relatively still; they are definitely at that age where their bodies want to move all the time. The chair is positioned sideways to allow each student another voice in this project, a choice in how they sat down and interacted with my camera and me. While photographing one student the rest were in the art room filling out their answers, which I scanned and placed into the selected portraits. Now viewers can get to know these students on many different levels; they can see how they look, see how they dress, how they sit, read what they wrote, and see their handwriting exactly how it looked on February 5, 2020.</p>

                <a href="./artist-pdfs/Lynn%20Renee%20Persin%20List.pdf"target="_blank" class="low">List of Works</a>
            </article>
            <article class="main" id="info-JeffPhillips">
                <h1 class="bigtitle">Jeff Phillips</h1>

<!--                //2BBNhDgJPso-->
                <iframe width="560" height="315" src="https://www.youtube.com/embed/2BBNhDgJPso" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <p>Jeff Phillips is a Chicago-based photographic artist who has been passionate about photography for more than 35 years. He serves as a member of the board of directors of Filter Photo, and for the past nine years has helped produce the annual Filter Photo Festival. His photographs have been exhibited and published internationally through a variety of media channels including books, newspapers, and magazines. Phillips has presented and lectured about his work at South by Southwest (SXSW), Society for Photographic Education (SPE), ASMP Midwest, and other venues including Pecha Kucha in Chicago and at Contemporary Art Museum in St. Louis. Phillips is the creator of Lost and Found: The Search for Harry and Edna (harryandedna.com), a vernacular photography and social media experiment that became a traveling exhibition and subsequently received international media attention for its content and production.</p>

                <img class="headshot" src="<?php echo get_template_directory_uri(); ?>/headshots/Jeff%20Phillips%20-%20Headshot.jpg">

                <h2>Project Description</h2>

                <p>As a resident artist for CPS Lives, I was assigned to photograph Phoenix Military Academy— a public high school in one of Chicago's most troubled neighborhoods. Considering myself an indie-thinking member of Generation X, how could I possibly find a positive story in a place that I perceived to be a veiled recruiting station for the U.S. Army?  Quickly my prejudice gave way to understanding, and it seemed that all I'd previously believed was wrong. I knew one thing for sure: If these young adults are the ones who will shape our future, then <em>everything is going to be alright.</em></p>

                <a href="./artist-pdfs/Jeff%20Phillips%20List.pdf"target="_blank" class="low">List of Works</a>
            </article>
            <article class="main" id="info-JohnPreus">

<!--
                <video width="642" height="440" controls>
                    <source src="<?php echo get_template_directory_uri(); ?>/img/COVER.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
-->
<!--                <iframe width="560" height="315" src="https://www.youtube.com/embed/Xf8OV6ITWu8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->

                <h1 class="bigtitle">John Preus</h1>

                <p>John Preus (rhymes with choice – b. 1971) spent his early years running barefoot under a cathedral of trees in Makumira, Tanzania, then grew up in Minneapolis, Minnesota, and northern Wisconsin.  Preus, currently works as an artist, builder, fabricator, amateur writer, musician, and collaborator.  After receiving his bachelors in art, Preus studied hand-tool furniture-making with master, John Nesset. Preus co-founded SHoP, a community art space in Hyde Park Chicago with Laura Shaeffer (2011), and Material Exchange with Sara Black (2005). and collaborated with Theaster Gates on the Dorchester Projects, and was project lead for 12 Ballads for Huguenot House, at Documenta 13, the culmination of a 6 year collaboration with Gates. Preus was recently a Kaplan resident at Northwestern University, a 2016 nominee for the US Artist Fellowship, and was included in New City’s Chicago Art 50 in 2016. </p>

                <img class="headshot" src="<?php echo get_template_directory_uri(); ?>/headshots/John%20Preus%2012.01.52%20PM.jpg">

                <h2>Project Description</h2>

                <p>I have been working with broken and damaged furniture from the large scale school closings of 2013, both as a contractor and an artist. For me this is both a critique of our educational system, and an attempt to imagine and explore what seems to me a tragic failure of primary education in the US. For my project with Sullivan high school in Rogers Park, I worked with a handful of advanced students who took small cutoff pieces of the wood and plastic furniture that I brought in, and they fashioned a variety of objects including masks and totems, using these little scraps of wood and plastic. Because Sullivan does not have a shop, and has very few woodworking tools, the students would draw onto the wood or plastic, the shapes that they wanted and I would take them back to my shop, and my daughter who recently graduated from high school and was an apprentice in my studio for the past year, cut them out and I brought them back to the students. They made a series of objects with the materials - masks, totems, and garments. </p>

                <p>I consider it a tragic state of affairs because of our culture of liability, and how our legal system works, and through no fault of the public schools themselves, there are very few schools that offer hands on education in the trades for fear of injuries and lawsuits. This is a deeply flawed aspect of our legal system that has drastic repercussions on our education system. Not everyone can, nor should want to go to college. It is honorable to work in the trades and my project with Sullivan was a modest attempt to offer them some experience working safely with sharp and dangerous cutting tools.  We cannot put nerf corners on the whole world for our young people, and trying to do so does them an unforgivable disservice. </p>

                <a href="./artist-pdfs/John%20Preus%20List.pdf"target="_blank" class="low">List of Works</a>
            </article>
            <article class="main" id="info-EileenRyan">
                <h1 class="bigtitle">Eileen Ryan</h1>

                <img class="headshot" src="<?php echo get_template_directory_uri(); ?>/headshots/Eileen%20Ryan.jpeg">

                <iframe width="560" height="315" src="https://www.youtube.com/embed/fufViXB4R74" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <p>Photography is my entry to so many worlds. In the same week I have photographed in a homeless shelter, President Bill Clinton and in the ER of a major trauma center. The stories I tell through the lens reveal the human spirit and the journeys we all make through this life. My practice takes the form of educator, community activist and photographer. My concerns frequently address the teenage years, family, memory and locality. I received a BFA from St. Mary’s College, Notre Dame and a MFA from the School of the Art Institute of Chicago.</p>



                <h2>Project Description</h2>

                <p>My project is called “Out of the Shadows” and I worked with mostly first generation students at Jones College Prep who are immigrants, children of immigrants or allies of immigrants, I created this project because I wanted to celebrate the diversity, the inspiration and contributions immigrants give to our nation. I sought to create a safe space where students could choose how to be represented by the camera, seeking an interactive relationship between being seen and seeing. The stories these students shared with me told a story of resilience and inspiration. In one of the country’s most diverse public school systems, these young people give hope to the future of our world.</p>

                <a href="./artist-pdfs/Eileen%20Ryan%20List.pdf"target="_blank" class="low">List of Works</a>
            </article>
            <article class="main" id="info-MattSiber">
                <h1 class="bigtitle">Matt Siber</h1>

                <iframe width="560" height="315" src="https://www.youtube.com/embed/oPC7nPULhuM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <p>Matt Siber (b.1972) is a Chicago-based visual artist working in photography, digital imaging, video, installation and sculpture. With an MFA in Photography from Columbia College Chicago, he has had solo exhibitions in Madrid, Berlin and Chicago among other venues. His first monograph, Idol Structures, was published by the DePaul Art Museum, Chicago in 2015. His artwork is part of many private and public permanent collections including The Art Institute of Chicago, The Museum of Contemporary Photography, and The Bidwell Foundation. His work has been published internationally in publications including ArtForum, Sculpture Magazine, Flash Art, Aperture and EXIT Magazine. He has received grants from the David C. and Sarajean Ruttenberg Arts Foundation, the Aaron Siskind Foundation and the Illinois Arts Council. Siber is Assistant Adjunct Professor in the Photography Department of The School of The Art Institute of Chicago.</p>

                <img class="headshot" src="<?php echo get_template_directory_uri(); ?>/headshots/Matt%20Siber.JPG">

                <h2>Project Description</h2>

                <p>One aspect of my residency at the A.N. Pritzker Elementary school is an examination of the objects within the school. From singular objects that become emphasized through photography, to temporary assemblages of multiple objects that are as much a result of my own sculptural sensibilities as they are about relating these objects to one another in unexpected ways. In series, the images create a set of relationships that speak to the physical aspects of the educational environment, while inviting the viewer to apply metaphorical connections.</p>

                <a href="./artist-pdfs/Matt%20Siber%20List.pdf"target="_blank" class="low">List of Works</a>
            </article>
            <article class="main" id="info-EdraSoto">
                <h1 class="bigtitle">Edra Soto</h1>

                <iframe width="560" height="315" src="https://www.youtube.com/embed/NHwhWx9QvFk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <p>Edra Soto (b. Puerto Rico) is an interdisciplinary artist, educator, curator, and co-director of the outdoor project space THE FRANKLIN. She is invested in creating and providing visual and educational models propelled by empathy and generosity. Her recent projects, which are motivated by civic and social actions, focus on fostering relationships with a wide range of communities. Soto holds an MFA from The School of the Art Institute of Chicago, and a bachelor’s degree from Escuela de Artes Plastics de Puerto Rico. She teaches Introduction to Social Engagement at University of Illinois in Chicago and is a Lecturer at the School of the Art Institute of Chicago.</p>

                <img class="headshot" src="<?php echo get_template_directory_uri(); ?>/headshots/Edra%20Soto.jpg">

                <h2>Project Description</h2>

                <p>The work titled <strong>‘Present’</strong> is a collection of drawings that memorializes my brief conversations with art students from Lisa Pennell’s art class at George Westinghouse College Prep. Having worked as a high school teacher for 10 years; living steps away from this College Prep and my perpetual interest in connecting with diverse communities lead me to finally engage with this group of students.   Our conversations were more about my curiosity to get to know them, where they came form, and how they felt about East Garfield Park, our neighborhood. The 'Present' collection is based on an archival project I created 15 years ago titled ‘A Year in Review’. This project consisted on the documentation of the year 2004 by sourcing photographs published in the Chicago Sun Times. The photographs are traced to a piece of soft metal resembling a contemporary version of a Mexican milagro. Traditional milagros are small charms used  as a votive offerings or for healing purposes. The powerful significance attached to these soft pieces of pushed metal prompted me to respond in a contemporary context, enduring their sincere sentimental value.</p>

                <a href="./artist-pdfs/Edra%20Soto%20List.pdf"target="_blank" class="low">List of Works</a>
            </article>
            <article class="main" id="info-KristaWortendyke">
                <h1 class="bigtitle">Krista Wortendyke</h1>
<!--                https://www.youtube.com/watch?v=hxhhESRYUMU
-->
                <iframe width="560" height="315" src="https://www.youtube.com/embed/hxhhESRYUMU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


                <p>Krista Wortendyke (b. 1979, Nyack, New York) is a Chicago-based conceptual artist. She received her MFA in Photography from Columbia College in 2007. Her ongoing work examines violence through the lens of photography. Her images are a result of a constant grappling with the mediation of war and brutality both locally and globally. Her work has been exhibited at the Museum of Contemporary Photography, Schneider Gallery and Weinberg/Newton Gallery in Chicago, The Griffin Museum in Boston, and many other venues across the United States. Additionally, Krista’s work is part of the permanent collection at the Museum of Fine Arts Houston and the Museum of Contemporary Photography. Krista is currently the coordinator for Senn High School’s Fine &amp; Performing Arts Magnet Program, Senn Arts.</p>

                <img class="headshot" src="<?php echo get_template_directory_uri(); ?>/headshots/Krista.jpg">

                <h2>Project Description</h2>

                <p>As the coordinator for a CPS fine and performing arts magnet program, I find myself in my school building at hours when others are not. The quiet hallways, classrooms, closets, and corners reveal arrangements left behind by unsuspecting artists that take on new interest when they are removed from the context of the bustle of the day and the din of teenagers. Past and present are in constant collision creating over a century of layers of old and new.  My images explore the history and personality of the school, the building structure, and the people who exist inside of it through the odd, funny, and strangely beautiful arrangements of objects that I find.</p>

                <a href="./artist-pdfs/Krista%20Wortendyke%20List.pdf"target="_blank" class="low">List of Works</a>
            </article>
            <article class="main" id="info-MarzenaAbrahamikJustinSchmitz">
                <h1 class="bigtitle">Marzena Abrahamik</h1>

                <p>Marzena Abrahamik received her BA from Loyola University in 2002 and her MFA from Yale University in 2013. Her recent solo exhibitions include presentations at Johalla Projects, Chicago (2017, 2015), the Gallery of Classic Photography, Moscow (2013), and the Turchin Center for the Visual Arts, Boone, North Carolina (2012). Group exhibition highlights include the Silver Eye Center for Photography, Pittsburgh (2016), Weinberg/Newton Gallery, Chicago (2016), Soccer Club Club, Chicago (2016), Sushi Bar, New York (2014), the International Photography Festival, Tel-Aviv (2014), and Aperture, New York (2013). Her work is included in the collections of the Art Institute of Chicago and Haas Family Art Library at Yale University. Her work can currently be seen in the Whitney Houston Biennial in New York</p>

                <img class="headshot" src="<?php echo get_template_directory_uri(); ?>/headshots/MarzenaAbrahamik_Headshot.jpg">

                <h1 class="bigtitle">Justin Schmitz</h1>

                <p>Justin Schmitz is a Chicago based Photographer. He is the recipient of the Toby Devan Lewis Fellowship, The Tierney Fellowship,City of Chicago CAAP Grant, Albert P. Weisman Scholarship, and The Union League Civic and Arts Foundation Scholarship. A collection of his work was part of the Midwest Photographers Project at the Museum of Contemporary Photography.  He was runner-up for the Photography Book Now Prize, and a finalist for the Honickman First Book Prize</p>

                <img class="headshot" src="<?php echo get_template_directory_uri(); ?>/headshots/JSchmitz.jpg">

                <h2>Project Description</h2>

                <p>Marzena Abrahamik and Justin Schmitz worked together to create images for the athletic teams and clubs at Michele Clark High School. The work was originally conceived to provide the staff images for their yearbook layouts. Working together, they created images that would elevate the standard yearbook photograph into something more dramatic and memorable. These photographs made in the context of the CPS Lives Residency take on another life when presented outside the yearbook context. Our intention is to to inspire positive social change by creating an archive of empowering portraits.</p>

                <a href="./artist-pdfs/Marzena%20and%20Justin%20list.pdf"target="_blank" class="low">List of Works</a>
            </article>
            <footer>
                <p>Copyright CPS Lives &amp; 062 2020 <a href="https://cpslives.org/" target="_blank">cpslives.org</a>   <a href="https://www.062official.com/" target="_blank">062official.com</a></p>
                <p>site by acs <a href="http://andrewcs.info/" target="_blank">andrewcs.info</a></p>

            </footer>
        </section>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
        <!-- <script src="<?php echo get_template_directory_uri(); ?>/tween.umd.js"></script> -->
        <!-- <script type="module" src="<?php echo get_template_directory_uri(); ?>/main.js"></script> -->
<!--
		<script type="module">

        </script>
-->
        <?php get_footer(); ?>
	</body>
</html>
