<?php get_header();?>
<main class="indhold">
<section class="introinfo">
        <img class="CV-logo" src="<?php bloginfo("template_directory");?>/img/0101.png" alt="profilphoto">
<article class="introinfopoints">
        <img src="<?php bloginfo("template_directory");?>/img/icons/kodning1.png" alt=""><p>Jeg tilbyder solid kodning i HTML, CSS og Javascript</p>
        <img src="<?php bloginfo("template_directory");?>/img/icons/undersøg1.png" alt=""><p>Jeg stræber efter at holde mig opdateret på nye metoder og deres anvendelse</p>
        <img src="<?php bloginfo("template_directory");?>/img/icons/teamwork1.png" alt=""><p>Planlæggelse og teamwork er kernen af alle udviklingshold</p> 
</article>
<article class="velkommen-title"> 
        <h3>Frontend Udvikling | CMS | SEO </h3>
        <p>Jeg har passion for at udvikle hjemmesider, funktioner, udseende, og se det hele virke sammen er en fryd! </p> 
    </article>
</section>

<hr class="split">
   
<section class="storystartTo" id="steptwo">
    <article>  
        <h1>Sematisk HTML</h1>
        <p>Når der skal kodes hjemmesider, er det vigtigt at forstå, hvordan det kodes semantisk.
           Med semantisk struktur vil google bedre kunne forstå ens indhold, som vil lede til hen til,
            at ens hjemmeside dukker op i en google-søgning.
           Se min korte video, der demonstrerer det kort.
        </p>
    </article>   
      <video  muted loop autoplay src="<?php bloginfo("template_directory");?>/video/sematisk.mp4"></video>
        </section>

<section class="storystart" id="steptree">
        <video muted loop autoplay src="<?php bloginfo("template_directory");?>/video/responsive.mp4"></video>
       <article>
           <h1>Responsivt CSS grid kontrol</h1>
            <p>En ny smart metode at kontrollere dit indhold er gennem CSS Grid.
                Det en rigtig smart måde at kontrollere, hvor og hvordan dit indhold forholder sig på websiten,
                du kan også ændre deres størrelse og forhold til forskellige størrelseformater, 
                så det vil være venligt til mobil, tablet, og computer. se video for eksempel.
                </p>
       </article>  
    </section>

<section class="storystartTo" id="stepfour">
    <article>
        <h1>Funktion med Javascript</h1>
            <p>En normal anvendelse af Javascript er til funktioner som ved bestemte begivenheder på en hjemmeside, reagere Javascript
                og udfører bestemte aktioner, som man har defineret. Se videoen som et eksempel på, hvad en funktion, der reagere på et click og 
                som giver et resultat af plat eller krone, enten et negativt eller positivt resultat med et ikon med vedlagt lyd,
                 som er håndteret af et sekundært javascript med data. 
                </p>
    </article>       
            <video muted loop autoplay src="<?php bloginfo("template_directory");?>/video/ricknmorty1.mp4"></video>      
    </section>
<section class="selvstudie">
    <article>
        <h1>Selvstudie</h1>
        <p>Jeg studerer yderligere på Teamtreehouse.com, de har mange linjer, man kan følge. 
            jeg har primært fuldt deres front-end udviklingslinje, click på logo for at se mit fremskridt.
        </p>
    </article>
    <a target="blank" href="https://teamtreehouse.com/martinsvendsen"><img class="treehouse" src="<?php bloginfo("template_directory");?>/img/treehouse.png" alt=""></a>
</section>
<section class="siteAdress">
    <button class="sitebutton"><a href="projekter/"><p>Projekter</p> </a></button>
    <button class="sitebutton"><a href="CV/"><p>CV</p></a></button>
    

</section>

</main>
<?php get_footer();?>