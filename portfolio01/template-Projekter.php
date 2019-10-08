<?php
/* Template Name: Projekter*/
get_header();
?>
<main class="indhold">
<!--Projekter--> 
<section class="projekter">
        <section class="projekter">
            <h1 class="blue">BR Julekatalog | 1.Sem Eksamen</h1>
            <p> Vi har arbejdet med at digitalisere BR`s Julekatalog som vores første eksamen her på multimediedesigner uddannelsen. 
                Vi udviklede vores produkt baseret på indsamlet data for bedst muligt at give vores målgruppe den bedste oplevelse med vores 
                produkt. Det vigtigt at kunne grundlægge, hvorfor man har gjort, som man har. Vores process tog udgangspunkt i metoden Scrum.
                Vi lavede sprints med goals og afholde møder, hvor vi rapporterede vores arbejde.
                Personligt arbejdede jeg med at benytte grid til at kontrollere indhold på siden. Det en meget spændende
                 måde at kontrollere ens overflade 
                med, fordi du har responsiv kontrol af, hvordan ens indhold bliver vist.
            </p>
            <video controls muted src="<?php bloginfo("template_directory");?>/video/br.mp4"></video>
         
          
    
     </section>
     <section class="projekter">
        <h1 class="blue">Equiefree | 2.Sem Eksamen</h1>
        <p>Vi Arbejdede på en landing-page for Equiefree.dk, hvor jeg stod for at lave det funktionelle Javascript, som kontrol til at skifte 
            videobackground på de selvlavede knapper, photogalleri og diverse.
        </p>
        <video controls muted src="<?php bloginfo("template_directory");?>/video/equi.mp4"></video>
       
 </section>
 <section class="projekter">
    <h1 class="blue">Rick N Morty | 2.Sem projekt</h1>
    <p>RicknMorty Coinapp er et lille projekt vi lavede i 2.semester, hvor jeg stod for at kode funktionen,
        at når der clickes på mønten, tager den et tilfældigt resultat af enten plat eller krone, baseret på resultatet
        starter der en ny funktion, som giver et positivt eller negativt resultat tilbage, taget fra en database.js
    </p>
      <video controls muted src="<?php bloginfo("template_directory");?>/video/ricknmorty.mp4"></video>
  

</section>

 </section>
</main>
<?php get_footer();?>