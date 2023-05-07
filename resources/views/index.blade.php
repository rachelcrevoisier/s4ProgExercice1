@extends('master')
@section('title', 'Accueil')
@section('content')

<link rel="stylesheet" href="assets/css/bouton.css">
<link rel="stylesheet" href="assets/css/recherche.css">
<link rel="stylesheet" href="assets/css/texteSurImage.css">
<section class="texte-image">
    <img src="assets/img/visuel/fondTimbres.webp" alt="Image de timbres">
    <aside class="recherche bleu">
        <input type="text" class="termeRecherche" placeholder="Que recherchez-vous ?" aria-label="Recherche">
        <button aria-label="Validation Recherche" type="submit" class="boutonRecherche clair">
            <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                <path d="M796 935 533 672q-30 26-69.959 40.5T378 727q-108.162 0-183.081-75Q120 577 120 471t75-181q75-75 181.5-75t181 75Q632 365 632 471.15 632 514 618 554q-14 40-42 75l264 262-44 44ZM377 667q81.25 0 138.125-57.5T572 471q0-81-56.875-138.5T377 275q-82.083 0-139.542 57.5Q180 390 180 471t57.458 138.5Q294.917 667 377 667Z" />
            </svg>
        </button>
    </aside>
</section>
<div class="titre">
    <h2>Nouvellement en ligne</h2><a href="portail">Voir tout</a>
</div>
<link rel="stylesheet" href="assets/css/etiquettes.css">
<link rel="stylesheet" href="assets/css/grille.css">
<link rel="stylesheet" href="assets/css/carte.css">
<section class="grilleAccueil">
    <div class="grilleIcone">
        <article class="carte-texte-image">
            <img src="assets/img/timbres/poteau-totemique.webp" alt="Timbre Poteau Totemique">
            <div class="carte-texte">
                <h4>Australie #1015 Endommagé NonCert $213</h4>
                <p>1953 - Australie</p>
                <p>Temps restant : 9j 4h 36</p>
            </div>
            <button class="bouton petit clair">Voir</button>
        </article>
        <article class="carte-texte-image">
            <img src="assets/img/timbres/tupper.webp" alt="Timbre Tupper">
            <div class="carte-texte">
                <h4>Finlande #1017 Excellente NonCert $843</h4>
                <p>1976 - Finlande</p>
                <p>Temps restant : 2j 6h 38</p>
            </div>
            <button class="bouton petit clair">Voir</button>
        </article>
        <article class="carte-texte-image">
            <img src="assets/img/timbres/industrie-miniere-du-canada.webp" alt="Timbre industrie du Canada">
            <div class="carte-texte">
                <h4>Canada #1019 Moyenne Cert $395</h4>
                <p>1954 - Canada</p>
                <p>Temps restant : 4j 8h 40</p>
            </div>
            <button class="bouton petit clair">Voir</button>
        </article>
        <article class="carte-texte-image">
            <img src="assets/img/timbres/insuline.webp" alt="Timbre Insuline">
            <aside class="certifie carte-texte-image__certifie"><img src="assets/img/visuel/certifie.webp" alt="">
            </aside>
            <div class="carte-texte">
                <h4>France #1010 Endommagé NonCert $530</h4>
                <p>1921 - France</p>
                <p>Temps restant : 4j 8h 30</p>
            </div>
            <button class="bouton petit clair">Voir</button>
        </article>
        <article class="carte-texte-image">
            <img src="assets/img/timbres/l-j-papineau.webp" alt="Timbre l-J Papineau">
            <div class="carte-texte">
                <h4>Canada #1011 Parfaite NonCert $239</h4>
                <p>1971 - Canada</p>
                <p>Temps restant : 5j 9h 31</p>
            </div>
            <button class="bouton petit clair">Voir</button>
        </article>
    </div>
</section>
<div class="titre">
    <h2>Fin imminente</h2><a href="portail">Voir tout</a>
</div>
<section class="grilleAccueil">
    <div class="grilleIcone">
        <article class="carte-texte-image">
            <img src="assets/img/timbres/reine-victoria.webp" alt="Timbre Reine Victoria">
            <aside class="etiquette etiquette_jaune carte-texte-image__etiquette">Imminent</aside>
            <div class="carte-texte">
                <h4>Canada #1001 Parfaite Cert $234</h4>
                <p>1917 - Canada</p>
                <p>Temps restant : 1j 4h 23</p>
            </div>
            <button class="bouton petit clair">Voir</button>
        </article>
        <article class="carte-texte-image">
            <img src="assets/img/timbres/bennett.webp" alt="Timbre Benmett">
            <aside class="etiquette etiquette_jaune carte-texte-image__etiquette">Imminent</aside>
            <div class="carte-texte">
                <h4>Espagne #1004 Moyenne NonCert $567</h4>
                <p>1980 - Espagne</p>
                <p>Temps restant : 2j 3h 25</p>
            </div>
            <button class="bouton petit clair">Voir</button>
        </article>
        <article class="carte-texte-image">
            <img src="assets/img/timbres/chasseur-inuit.webp" alt="Timbre Chasseur Inuit">
            <aside class="etiquette etiquette_jaune carte-texte-image__etiquette">Imminent</aside>
            <aside class="certifie carte-texte-image__certifie"><img src="assets/img/visuel/certifie.webp" alt="">
            </aside>
            <div class="carte-texte">
                <h4>Canada #1006 Parfaite Cert $987</h4>
                <p>1955 - Canada</p>
                <p>Temps restant : 4h 06</p>
            </div>
            <button class="bouton petit clair">Voir</button>
        </article>
        <article class="carte-texte-image">
            <img src="assets/img/timbres/sir-donald-smith.webp" alt="Timbre sir Donald Smith">
            <aside class="etiquette etiquette_jaune carte-texte-image__etiquette">Imminent</aside>
            <div class="carte-texte">
                <h4>Belgique #1009 Moyenne Cert $982</h4>
                <p>1970 - Belgique</p>
                <p>Temps restant : 1j 7h 29</p>
            </div>
            <button class="bouton petit clair">Voir</button>
        </article>
        <article class="carte-texte-image">
            <img src="assets/img/timbres/r-l-borden.webp" alt="Timbre r-l Border">
            <aside class="etiquette etiquette_jaune carte-texte-image__etiquette">Imminent</aside>
            <aside class="certifie carte-texte-image__certifie"><img src="assets/img/visuel/certifie.webp" alt="">
            </aside>
            <div class="carte-texte">
                <h4>Portugal #1012 Excellente Cert $943</h4>
                <p>1951 - Portugal</p>
                <p>Temps restant : 1h 32</p>
            </div>
            <button class="bouton petit clair">Voir</button>
        </article>
    </div>
</section>
<div class="titre">
    <h2>Les enchères certifiées </h2><a href="portail">Voir tout</a>
</div>
<section class="grilleAccueil">
    <div class="grilleIcone">
        <article class="carte-texte-image">
            <img src="assets/img/timbres/drapeau-canadien.webp" alt="Timbre drapeau canadien">
            <aside class="certifie carte-texte-image__certifie"><img src="assets/img/visuel/certifie.webp" alt="">
            </aside>
            <div class="carte-texte">
                <h4>Canada #1005 Endommagé Cert $765</h4>
                <p>1965 - Canada</p>
                <p>Temps restant : 9j 4h 26</p>
            </div>
            <button class="bouton petit clair">Voir</button>
        </article>
        <article class="carte-texte-image">
            <img src="assets/img/timbres/chasseur-inuit.webp" alt="Timbre Chasseur Inuit">
            <aside class="etiquette etiquette_jaune carte-texte-image__etiquette">Imminent</aside>
            <aside class="certifie carte-texte-image__certifie"><img src="assets/img/visuel/certifie.webp" alt="">
            </aside>
            <div class="carte-texte">
                <h4>Canada #1006 Parfaite Cert $987</h4>
                <p>1955 - Canada</p>
                <p>Temps restant : 4h 06</p>
            </div>
            <button class="bouton petit clair">Voir</button>
        </article>
        <article class="carte-texte-image">
            <img src="assets/img/timbres/insuline.webp" alt="Timbre Insuline">
            <aside class="certifie carte-texte-image__certifie"><img src="assets/img/visuel/certifie.webp" alt="">
            </aside>
            <div class="carte-texte">
                <h4>France #1010 Endommagé NonCert $530</h4>
                <p>1921 - France</p>
                <p>Temps restant : 4j 8h 30</p>
            </div>
            <button class="bouton petit clair">Voir</button>
        </article>
        <article class="carte-texte-image">
            <img src="assets/img/timbres/r-l-borden.webp" alt="Timbre r-l Borden">
            <aside class="etiquette etiquette_jaune carte-texte-image__etiquette">Imminent</aside>
            <aside class="certifie carte-texte-image__certifie"><img src="assets/img/visuel/certifie.webp" alt="">
            </aside>
            <div class="carte-texte">
                <h4>Portugal #1012 Excellente Cert $943</h4>
                <p>1951 - Portugal</p>
                <p>Temps restant : 1h 32</p>
            </div>
            <button class="bouton petit clair">Voir</button>
        </article>
        <article class="carte-texte-image">
            <img src="assets/img/timbres/congres-upu.webp" alt="Timbre Congres Upu">
            <aside class="etiquette etiquette_rouge carte-texte-image__etiquette">Vendu</aside>
            <aside class="certifie carte-texte-image__certifie"><img src="assets/img/visuel/certifie.webp" alt="">
            </aside>
            <div class="carte-texte">
                <h4>Pologne #1018 Bonne Cert $3029</h4>
                <p>1935 - Pologne</p>
                <p>Vendu pour 654$</p>
            </div>
            <button class="bouton petit clair">Voir</button>
        </article>
    </div>
</section>
<link rel="stylesheet" href="assets/css/visuelEtTexte.css">
<div class="visuelEtTexte">
    <img class="visuelLord" src="assets/img/lord/bernardMaris.webp" alt="Lord Reginald Stampee">
    <div>
        <h1>Lord Reginald Stampee</h1>
        <p>Lord Reginald Stampee, duc de Worcessteshear, est philatéliste depuis sa tendre enfance au milieu des années
            cinquante. Il s'est fait connaître pour sa passion des timbres et sa collection exceptionnelle.</p>
        <button class="bouton grand bleu">Pour en savoir plus</button>
    </div>
</div>
<div class="titre">
    <h2>Devenir philatéliste</h2><a href="commentDevenirPhilateliste.html">Tout Lire</a>
</div>
<link rel="stylesheet" href="assets/css/articles.css">
<section class="articles">

    <article class="articleVedette">
        <img src="assets/img/visuel/carnetTimbres.webp" alt="Un philateliste, c'est quoi">
        <h3>Un philatéliste, c'est quoi ?</h3>

        <button class="bouton grand bleu">Lire l'article</button>
    </article>

    <section>
        <article class="articleEnPlus">
            <img src="assets/img/visuel/philateliste.webp" alt="Comment démarrer une collection de timbres">
            <div class="articlesEnPlus">
                <h4>Comment démarrer une collection de timbres </h4>
                <button class="bouton petit bleu btArticle">Lire</button>
            </div>
        </article>
        <article class="articleEnPlus">
            <img src="assets/img/visuel/conservation.webp" alt="Comment conserver vos timbres">
            <div class="articlesEnPlus">
                <h4>Comment conserver vos timbres</h4>
                <button class="bouton petit bleu btArticle">Lire</button>
            </div>
        </article>
        <article class="articleEnPlus">
            <img src="assets/img/visuel/outils.webp" alt="Les outils indispensables">
            <div class="articlesEnPlus">
                <h4>Les outils indispensables</h4>
                <button class="bouton petit bleu btArticle">Lire</button>
            </div>
        </article>
    </section>
</section>
<section class="texte-image aide">
    <img src="assets/img/visuel/fondAide.webp" alt="Image de timbres">
    <aside class="texte">
        <h2>Besoin d'aide ? Contactez-nous !</h2>
        <p>Nos heures de bureau sont du lundi au vendredi de 8h30 à 17h00, heure du Royaume-Uni</p>
        <p>Le siège social est basé en Angleterre mais vous pouvez nous joindre au Canada, aux Etats-Unis, en Australie.</p>
        <button class="bouton grand clair">Contactez-nous</button>
    </aside>
</section>
@endsection