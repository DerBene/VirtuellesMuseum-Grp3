<?php
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
html,body {
    width: 100%;
    margin: 0px;
    padding: 0px;
    overflow-x: hidden; 
}
	
div.bg {
	background-image: url(webroot/img/image.jpg);
	background-size:     cover;
    background-repeat:   no-repeat;
	background-position: top center;
	width:100vw;
	padding: 5vw;
	padding-top: -8rem;
}

.zeitstrahl{
	background-image: linear-gradient(white, black);
	background-size:     cover;
    background-repeat:   no-repeat;
	background-position: top center;
	padding: 4vw;
}









* {box-sizing:border-box}
.mySlides {display:none}

.mySlides:hover{
	cursor: pointer;
}

/* Slideshow container */
.slideshow {
  max-width: 1000px;
  width: 60vw;
  position: relative;
  margin: auto;
}

.slideshow:hover {
  box-shadow: 0px 0px 30px #101010;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 20%;
  width: auto;
  padding-top: 20vh;
  padding-left: 32px;
  padding-bottom: 20vh;
  padding-right: 32px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.textb {
  color: #121212;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #626262;
  font-size: 12px;
  padding: 12px 14px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor:pointer;
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 0.5s;
  animation-name: fade;
  animation-duration: 0.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next, .text {font-size: 11px}
}











.timeline {
  list-style: none;
  padding: 20px 0 20px;
  position: relative;
}
.timeline:before {
  top: 0;
  bottom: 0;
  position: absolute;
  content: " ";
  width: 3px;
  background-color: #eeeeee;
  left: 50%;
  margin-left: -1.5px;
}
.timeline > li {
  margin-bottom: 20px;
  position: relative;
}
.timeline > li:before,
.timeline > li:after {
  content: " ";
  display: table;
}
.timeline > li:after {
  clear: both;
}
.timeline > li:before,
.timeline > li:after {
  content: " ";
  display: table;
}
.timeline > li:after {
  clear: both;
}
.timeline > li > .timeline-panel {
  width: 46%;
  float: left;
  border: 1px solid #d4d4d4;
  border-radius: 2px;
  padding: 20px;
  position: relative;
  -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
  box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
  background-color:#ffffff;
}
.timeline > li > .timeline-panel:before {
  position: absolute;
  top: 26px;
  right: -15px;
  display: inline-block;
  border-top: 15px solid transparent;
  border-left: 15px solid #ccc;
  border-right: 0 solid #ccc;
  border-bottom: 15px solid transparent;
  content: " ";
}
.timeline > li > .timeline-panel:after {
  position: absolute;
  top: 27px;
  right: -14px;
  display: inline-block;
  border-top: 14px solid transparent;
  border-left: 14px solid #fff;
  border-right: 0 solid #fff;
  border-bottom: 14px solid transparent;
  content: " ";
}
.timeline > li > .timeline-badge {
  color: #fff;
  width: 50px;
  height: 50px;
  line-height: 50px;
  font-size: 1.4em;
  text-align: center;
  position: absolute;
  top: 16px;
  left: 50%;
  margin-left: -25px;
  background-color: #999999;
  z-index: 100;
  border-top-right-radius: 50%;
  border-top-left-radius: 50%;
  border-bottom-right-radius: 50%;
  border-bottom-left-radius: 50%;
}
.timeline > li.timeline-inverted > .timeline-panel {
  float: right;
}
.timeline > li.timeline-inverted > .timeline-panel:before {
  border-left-width: 0;
  border-right-width: 15px;
  left: -15px;
  right: auto;
}
.timeline > li.timeline-inverted > .timeline-panel:after {
  border-left-width: 0;
  border-right-width: 14px;
  left: -14px;
  right: auto;
}
.timeline-badge.primary {
  background-color: #2e6da4 !important;
}
.timeline-badge.success {
  background-color: #3f903f !important;
}
.timeline-badge.warning {
  background-color: #f0ad4e !important;
}
.timeline-badge.danger {
  background-color: #d9534f !important;
}
.timeline-badge.info {
  background-color: #5bc0de !important;
}
.timeline-title {
  margin-top: 0;
  color: inherit;
}
.timeline-body > p,
.timeline-body > ul {
  margin-bottom: 0;
}
.timeline-body > p + p {
  margin-top: 5px;
}
</style>

</head>
<body>

<div class="bg">
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="slide_img" src="webroot/img/ruth_cohn/Ruth_Cohn_Plakat.png" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="slide_img" src="webroot/img/michael_winkler/Winkler.png" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="slide_img" src="webroot/img/maria_montessori/Montessori.png" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div>

		
		<div class="zeitstrahl">
			    <div class="page-header">
			        <h1 id="Epochen"><center>Epochen</center></h1>
			    </div>
			    <ul class="timeline">
			        <li>
			          <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
			          <div class="timeline-panel">
			            <div class="timeline-heading">
			              <h4 class="timeline-title">Altertum</h4>
			              <p><small class="textb-muted"><i class="glyphicon glyphicon-time"></i>4500 v. Chr. - 500 n. Chr.</small></p>
			            </div>
			            <div class="timeline-body">
			              <p>Am Anfang des Altertums steht die Ausbildung der Schrift und der altorientalischen Reiche Vorderasiens – Mesopotamien (Sumer, Akkad, Babylonien, Mittani, Assyrien), Iranisches Hochland (Elam, Medien, Persien), Levante (Ugarit) und Kleinasien/Anatolien (Hethiterreich, Phrygien, Lydien, Luwien) – sowie Ägyptens.

Das Altertum endet mit dem Zerfall des römischen und sassanidischen Staatengefüges während der Völkerwanderung und der arabischen Expansion (Untergang Westroms 476/480; Tod Justinians 565; Vernichtung des Sassanidenreichs 651). In der neueren Forschung wird die Übergangszeit zwischen Antike und Mittelalter (vom Ende des 3. bis zum Anfang des 7. Jahrhunderts) als eigener Abschnitt des Altertums gezählt.</p>
			            </div>
			          </div>
			        </li>
			        <li class="timeline-inverted">
			          <div class="timeline-badge"><i class="glyphicon glyphicon-credit-card"></i></div>
			          <div class="timeline-panel">
			            <div class="timeline-heading">
			              <h4 class="timeline-title">Mittelalter</h4>
			              <p><small class="textb-muted"><i class="glyphicon glyphicon-time"></i>500 - 1500 n. Chr.</small></p>
			            </div>
			            <div class="timeline-body">
			              <p>Mittelalter bezeichnet in der europäischen Geschichte die Epoche zwischen dem Ende der Antike und dem Beginn der Neuzeit, also ca. zwischen dem 6. und 15. Jahrhundert. Sowohl der Beginn als auch das Ende des Mittelalters sind Gegenstand der wissenschaftlichen Diskussion und werden recht unterschiedlich angesetzt.

Im Übergang von der Spätantike ins Frühmittelalter zerbrach die politische und kulturelle Einheit des durch die griechisch-römische Antike geprägten Mittelmeerraums. Während das Byzantinische Reich im Osten intakt blieb, ging das Westreich 476 unter. Es bildeten sich neue Reiche innerhalb (wie das Frankenreich, das Westgotenreich auf der Iberischen Halbinsel und die Reiche der Angelsachsen in Britannien) und außerhalb (wie die Herrschaften der Slawen in Ost- und Südosteuropa und die neuen Reichsbildungen in Skandinavien) des ehemaligen weströmischen Reichs. Bevölkert waren diese Reiche von der ansässigen romanisierten Bevölkerung und aus in der Völkerwanderungszeit eingewanderten Gruppen (germanische Stämme und Slawen).

Während der antike Kernraum bereits christlich geprägt war, wurden im Mittelalter die übrigen paganen (heidnischen) Gebiete Europas christianisiert. Im Frühmittelalter bildete sich im Wesentlichen die politische Grundordnung späterer Zeiten heraus. Das anschließende Hochmittelalter war gekennzeichnet durch den Aufschwung von Wirtschaft, Wissenschaft und Kultur. Im Spätmittelalter erfolgte der langsame Übergang in die Frühe Neuzeit.

Mit dem Islam entstand im 7. Jahrhundert eine neue Religion, die sich infolge der arabischen Eroberungen in West- und Mittelasien, Nordafrika und in Teilen Südeuropas ausbreitete, bevor christliche Herrscher die Rückeroberung in Spanien (Reconquista) und Süditalien/Sizilien einleiteten. In Südosteuropa hingegen drangen seit dem späten 14. Jahrhundert die Osmanen weiter vor.

Die vorherrschende Gesellschafts- und Wirtschaftsform des Mittelalters war der Feudalismus. Grundzüge dieser Zeit waren eine nach Ständen geordnete Gesellschaft, ein durch das Christentum bestimmtes Weltbild, eine christlich geprägte Wissenschaft und Literatur, Architektur, Kunst und Kultur sowie Latein als gemeinsame, übergreifende Bildungssprache. Nach dem Großen Schisma von 1054 strebte sowohl die katholische Kirche als auch die orthodoxe Kirche die Einheit des Christentums unter ihrem Dach an. Diese Bemühungen scheiterten jedoch.

Von großer Bedeutung für das christliche Europa waren die Juden. Auf Grund des Zinsverbots der katholischen Kirche waren den Christen Geldgeschäfte verboten, nicht aber den andersgläubigen Juden. Sie waren Schutzbefohlene der Landesherren und wurden als Minderheit nur widerwillig geduldet. Aufgrund des Antijudaismus im Mittelalter waren sie Opfer von Judenpogromen und Vertreibungen.</p>
			            </div>
			          </div>
			        </li>
			        <li>
			          <div class="timeline-badge"><i class="glyphicon glyphicon-credit-card"></i></div>
			          <div class="timeline-panel">
			            <div class="timeline-heading">
			              <h4 class="timeline-title">Frühzeit</h4>
			              <p><small class="textb-muted"><i class="glyphicon glyphicon-time"></i>1500 - 1700 n. Chr.</small></p>
			            </div>
			            <div class="timeline-body">
			              <p>Mit der Reformation kam es zu einem Niedergang des katholischen Bildungswesens in den 1520er Jahren. Danach verstärkten sowohl die katholische als auch die evangelischen Kirchen ihre pädagogischen Anstrengungen; so gründete der Jesuiten­orden ab 1540 in ganz Europa Schulen. Die protestantischen Schulen dienten vor allem auch der Verbreitung der dazugehörigen Ideologie, die später als protestantische Arbeitsethik bekannt wurde: Askese und Arbeit erscheinen als die Daseinsberechtigung und Voraussetzung für den Einzug ins Himmelreich; Rausch und Genuss werden dagegen abgelehnt. Dieser Ansatz wurde auch in der Sozialfürsorge angewendet. Waren Almosen bislang ein Teil christlicher Nächstenliebe, wurde nun von den Armen selbst ein Beitrag verlangt. Arbeitshäuser und andere Zwangseinrichtungen wurden zunehmend zu ihrer Bekämpfung eingerichtet.

Im Dreißigjährigen Krieg wurden große Teile Mitteleuropas entvölkert und das Bildungswesen kam weitgehend zum Erliegen. Geprägt von dem Gemetzel entstand um 1632 die erste große pädagogische Abhandlung: Jan Amos Komenský (Johannes Comenius)': Didactica Magna, in der er eine Allgemeinbildung für alle Menschen forderte. Neben der Förderung der Muttersprache sollte Pädagogik für ihn auf eine gerechte Gesellschaft hinarbeiten, in der Menschen unabhängig von Geschlecht oder Herkunft die gleichen Rechte haben. Sein Ziel war es, „allen alles zu lehren“. Die sich aus diesem Ideal ableitende Schulpflicht wurde in den kommenden hundert Jahren in den meisten deutschen Teilstaaten eingeführt, allerdings keineswegs im Sinne von Comenius: Sie diente vor allem dazu, die Bevölkerung im Sinne der absolutistischen Herrscher zu indoktrinieren. Im 18. Jahrhundert gingen die Staaten von den Leibes- und Lebensstrafen zu ökonomisch und erzieherisch begründeten Arbeitstrafen über. Es entstanden nun vermehrt Arbeits-, Zucht-, Waisen- und Spinnhäuser. Deren Insassen gehörten vor allem den marginalisierten unter- und außerständischen Bevölkerungsgruppen, der migrierenden und ortsfesten Armut an. Die dort zu leistende Manufakturarbeit, für die freiwillig kaum jemand zu gewinnen war, war verbunden mit religiöser Belehrung. Die Lebens- und Arbeitsbedingungen dort waren ein Hohn auf den moralischen wie auf den aufklärerischen Anspruch. Viele der Internierten überlebten sie nicht.</p>
			            </div>
			          </div>
			        </li>
			        <li class="timeline-inverted">
			          <div class="timeline-panel">
			            <div class="timeline-heading">
			              <h4 class="timeline-title">Nachzeit</h4>
			              <p><small class="textb-muted"><i class="glyphicon glyphicon-time"></i>1700 - 1800 n. Chr.</small></p>
			            </div>
			            <div class="timeline-body">
			              <p>Währenddessen entwickelten sich in anderen Teilen Europas Wissenschaft und Technik rasant und damit kamen neue aufklärerische Bildungsideen auf. John Locke formulierte den Gedanken der tabula rasa, nach dem die Menschen bei Geburt wie ein leeres Blatt seien, das erst durch die Erziehung beschrieben würde. Damit formulierte er einen Grundgedanken der bürgerlichen Pädagogik, in welcher der Erziehung alles möglich erscheint – zugleich sind diejenigen, die von der Erziehung betroffen sind, ein Nichts. Diese Ideologie findet sich auch in dem Erziehungsroman Émile oder über die Erziehung von Jean-Jacques Rousseau; in Deutschland wurde sie unter anderem vom Philanthropen Christian Gotthilf Salzmann und in der Schweiz von Johann Heinrich Pestalozzi vertreten. Kindheit wurde damit erstmals in Europa als ein eigenständiger Lebensabschnitt wahrgenommen, zuvor wurden hier Kinder als „kleine Erwachsene“ betrachtet.

Im Jahr 1779 wurde der erste deutsche Lehrstuhl für Pädagogik eingerichtet und durch Ernst Christian Trapp an der Universität Halle eingenommen. Die Pädagogik war davor ein Teilgebiet der Theologie und galt von nun an als eigenständiges Universitätsfach. Auch andere christliche Pädagogen, z. B. August Hermann Francke, haben wichtige Beiträge zur Ablösung der christlichen durch die bürgerliche Erziehungsphilosophie geleistet.[3]

Mit der Aufklärung kamen auch Gedanken der Toleranz und Gleichberechtigung von Minderheiten auf. Besonders die jüdischen Ansätze der Haskala bereiteten ab 1760 die Emanzipation vor, in einigen „Freischulen“ wurde auch eine gemeinsame Beschulung jüdischer und christlicher Schüler praktiziert – die "Jüdische Freischule" wurde 1778 in Berlin von David Friedländer gegründet. Die kurzzeitige Gleichstellung der Juden in Deutschland infolge der französischen Besatzung wurde allerdings mit dem Wiener Kongress 1815 rückgängig gemacht.</p>
			            </div>
			          </div>
			        </li>
			        <li>
			          <div class="timeline-badge"><i class="glyphicon glyphicon-floppy-disk"></i></div>
			          <div class="timeline-panel">
			            <div class="timeline-heading">
			              <h4 class="timeline-title">19. Jahrhundert</h4>
			              <p><small class="textb-muted"><i class="glyphicon glyphicon-time"></i>1800 - 1900 n. Chr.</small></p>
			            </div>
			            <div class="timeline-body">
			              <p>Das lange 19. Jahrhundert umfasst am Anfang ein Zeitalter der Revolutionen, das mit der Französischen Revolution 1789 beginnt oder noch früher unter Einbezug des nordamerikanischen Aufstandes. Dieses Zeitalter der Revolutionen endet dann mit der Niederlage Napoleons 1815, oder später. Am Ende des Jahrhunderts beginnt ein Zeitalter des Imperialismus oder Hochimperalismus, womit die Zeit bis zum Ersten Weltkrieg überbrückt wird; oder aber man lässt das Zeitalter und damit das lange 19. Jahrhundert mit dem Epochenjahr 1917 oder dem Kriegsende 1918 oder erst nach den Friedensschlüssen (1919/1920 oder gar später) enden.</p>
			            </div>
			          </div>
			        </li>
			        <li class="timeline-inverted">
			          <div class="timeline-badge"><i class="glyphicon glyphicon-thumbs-up"></i></div>
			          <div class="timeline-panel">
			            <div class="timeline-heading">
			              <h4 class="timeline-title">20. Jahrhundert</h4>
			              <p><small class="textb-muted"><i class="glyphicon glyphicon-time"></i>1900 - 2000 n. Chr.</small></p>
			            </div>
			            <div class="timeline-body">
			              <p>Das 20. Jahrhundert begann am 1. Januar 1901 und endete mit dem 31. Dezember 2000. Um Zentenniumsfeier und das Jubiläum zum 30. Reichsgründungstag am 18. Januar 1901 nicht miteinander in Konkurrenz geraten zu lassen, erließ Kaiser Wilhelm II. abweichend für Deutschland ein Dekret, welches den Beginn des neuen Jahrhunderts auf den 1. Januar 1900 festlegte. Das 20. Jahrhundert zählt zur Epoche der Neuzeit und war besonders durch den Imperialismus und die beiden Weltkriege sowie den daraus erwachsenden Niedergang der europäischen Kolonialreiche und den Kalten Krieg geprägt, ebenso von der exponentiellen Zunahme der Weltbevölkerung, der Automatisierung und der Digitalisierung von Wirtschaftsprozessen sowie der Polarisierung zwischen der Ersten und der Dritten Welt. Wichtige Technologien wie Kunststoffe, Elektronik, Raumfahrt und Antibiotika veränderten die Welt.</p>
			            </div>
			          </div>
			        </li>
			        <li>
			          <div class="timeline-badge"><i class="glyphicon glyphicon-floppy-disk"></i></div>
			          <div class="timeline-panel">
			            <div class="timeline-heading">
			              <h4 class="timeline-title">21. Jahrhundert</h4>
			              <p><small class="textb-muted"><i class="glyphicon glyphicon-time"></i>2000 - 2100 n. Chr.</small></p>
			            </div>
			            <div class="timeline-body">
			              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
			            </div>
			          </div>
			        </li>
			    </ul>
		</div>
	
	<script>
	var slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
	  showSlides(slideIndex += n);
	}

	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}

	function showSlides(n) {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  var dots = document.getElementsByClassName("dot");
	  if (n > slides.length) {slideIndex = 1}    
	  if (n < 1) {slideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) {
	      slides[i].style.display = "none";  
	  }
	  for (i = 0; i < dots.length; i++) {
	      dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";  
	  dots[slideIndex-1].className += " active";
	}
	</script>
	
</body>
</html>