@extends('master')
@section('title', 'Toutes les enchères')
@section('content')


<section class="iconesAffichage haut">
    <svg class="affichage_icone" xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 96 960 960" width="30">
        <path d="M120 546V216h330v330H120Zm0 390V606h330v330H120Zm390-390V216h330v330H510Zm0 390V606h330v330H510ZM180 486h210V276H180v210Zm390 0h210V276H570v210Zm0 390h210V666H570v210Zm-390 0h210V666H180v210Zm390-390Zm0 180Zm-180 0Zm0-180Z" />
    </svg>
    <svg class="affichage_liste" xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 96 960 960" width="30">
        <path d="M377 858v-60h463v60H377Zm0-252v-60h463v60H377Zm0-253v-60h463v60H377ZM189 895q-28.05 0-48.025-19Q121 857 121 828.5t19.5-48q19.5-19.5 48-19.5t47.5 19.975Q255 800.95 255 829q0 27.225-19.387 46.612Q216.225 895 189 895Zm0-252q-28.05 0-48.025-19.681Q121 603.638 121 576t19.975-47.319Q160.95 509 189 509q27.225 0 46.613 19.681Q255 548.362 255 576t-19.387 47.319Q216.225 643 189 643Zm-1-253q-27.637 0-47.319-19.681Q121 350.638 121 323t19.681-47.319Q160.363 256 188 256q27.637 0 47.319 19.681Q255 295.362 255 323t-19.681 47.319Q215.637 390 188 390Z" />
    </svg>
</section>
<div class="portail">
    <link rel="stylesheet" href="assets/css/filtre.css">
    <div class="filtre">
        <details open>
            <summary>Filtres</summary>
            <details>
                <summary>Dates</summary>
                Du _________________<br>
                Au _________________
            </details>
            <details>
                <summary>Enchères</summary>
                <input type="checkbox" name="enchereEnCours" aria-label="En Cours"> En cours <br>
                <input type="checkbox" name="enchereEnCours" aria-label="Terminées"> Terminées<br>
                <input type="checkbox" name="enchereEnCours" aria-label="Fin imminente"> Fin imminente<br>
            </details>
            <details>
                <summary>Pays</summary>
                <input type="checkbox" name="pays" aria-label="Canada"> Canada <br>
                <input type="checkbox" name="pays" aria-label="France"> France <br>
                <input type="checkbox" name="pays" aria-label="Espagne"> Espagne
                <p class="voirPlus">Voir plus</p>
            </details>
            <details>
                <summary>Certifiés</summary>
                <input type="checkbox" name="certifie" aria-label="Öui"> Oui <br>
                <input type="checkbox" name="certifie" aria-label="Non"> Non
            </details>
            <details>
                <summary>Condition</summary>
                <input type="checkbox" name="condition" aria-label="Parfaite"> Parfaite <br>
                <input type="checkbox" name="condition" aria-label="Excellente"> Excellente <br>
                <input type="checkbox" name="condition" aria-label="Bonne"> Bonne
                <p class="voirPlus">Voir plus</p>
            </details>
        </details>
    </div>
    <link rel="stylesheet" href="assets/css/etiquettes.css">
    <link rel="stylesheet" href="assets/css/grille.css">
    <link rel="stylesheet" href="assets/css/carte.css">
    <link rel="stylesheet" href="assets/css/bouton.css">
    <div class="grilleIcone">
        <article class="carte-texte-image">
            <img src="assets/img/timbres/reine-victoria.webp" alt="Timbre reine Victoria">
            <aside class="etiquette etiquette_jaune carte-texte-image__etiquette">Imminent</aside>
            <div class="carte-texte">
                <h4>Canada #1001 Parfaite Cert $234</h4>
                <p>1917 - Canada</p>
                <p>Temps restant : 1j 4h 23</p>
            </div>
            <button class="bouton petit clair">Voir</button>
        </article>
        <article class="carte-texte-image">
            <img src="assets/img/timbres/le-vent-d-ouest.webp" alt="Timbre le vent d'ouest">
            <aside class="etiquette etiquette_rouge carte-texte-image__etiquette">Vendu</aside>
            <div class="carte-texte">
                <h4>Canada #1002 Excellente NonCert $1234</h4>
                <p>1917 - Canada</p>
                <p>Vendu pour 1234 $</p>
            </div>
            <button class="bouton petit clair">Voir</button>
        </article>
        <article class="carte-texte-image">
            <img src="assets/img/timbres/Fou-de-Bassan.webp" alt="Timbre Fou de Bassan">
            <div class="carte-texte">
                <h4>France #1003 Bonne Cert $345</h4>
                <p>1940 - France</p>
                <p>Temps restant : 7j 2h 24</p>
            </div>
            <button class="bouton petit clair">Voir</button>
        </article>
        <article class="carte-texte-image">
            <img src="assets/img/timbres/drapeau-canadien.webp" alt="Timbre drapeau Canadien">
            <aside class="certifie carte-texte-image__certifie"><img src="assets/img/visuel/certifie.webp" alt=""></aside>
            <div class="carte-texte">
                <h4>Canada #1005 Endommagé Cert $765</h4>
                <p>1965 - Canada</p>
                <p>Temps restant : 9j 4h 26</p>
            </div>
            <button class="bouton petit clair">Voir</button>
        </article>
        <article class="carte-texte-image">
            <img src="assets/img/timbres/bennett.webp" alt="Timbre Bennett">
            <aside class="etiquette etiquette_jaune carte-texte-image__etiquette">Imminent</aside>
            <div class="carte-texte">
                <h4>Espagne #1004 Moyenne NonCert $567</h4>
                <p>1980 - Espagne</p>
                <p>Temps restant : 2j 3h 25</p>
            </div>
            <button class="bouton petit clair">Voir</button>
        </article>
        <article class="carte-texte-image">
            <img src="assets/img/timbres/chasseur-inuit.webp" alt="Timbre chasseur Inuit">
            <aside class="etiquette etiquette_jaune carte-texte-image__etiquette">Imminent</aside>
            <aside class="certifie carte-texte-image__certifie"><img src="assets/img/visuel/certifie.webp" alt=""></aside>
            <div class="carte-texte">
                <h4>Canada #1006 Parfaite Cert $987</h4>
                <p>1955 - Canada</p>
                <p>Temps restant : 4h 06</p>
            </div>
            <button class="bouton petit clair">Voir</button>
        </article>
        <article class="carte-texte-image">
            <img src="assets/img/timbres/louis-riel.webp" alt="Timbre Louis Riel">
            <aside class="etiquette etiquette_rouge carte-texte-image__etiquette">Vendu</aside>
            <div class="carte-texte">
                <h4>Italie #1007 Excellente Cert $765</h4>
                <p>1970 - Italie</p>
                <p>Vendu pour 2986$</p>
            </div>
            <button class="bouton petit clair">Voir</button>
        </article>
        <article class="carte-texte-image">
            <img src="assets/img/timbres/alex-mackenzie.webp" alt="Timbre Alex Mackenzie">
            <div class="carte-texte">
                <h4>Allemagne #1008 Bonne NonCert $653</h4>
                <p>1970 - Allemagne</p>
                <p>Temps restant : 2j 6h 28</p>
            </div>
            <button class="bouton petit clair">Voir</button>
        </article>
        <article class="carte-texte-image">
            <img src="assets/img/timbres/sir-donald-smith.webp" alt="Timbre Sir Donald Smith">
            <aside class="etiquette etiquette_jaune carte-texte-image__etiquette">Imminent</aside>
            <div class="carte-texte">
                <h4>Belgique #1009 Moyenne Cert $982</h4>
                <p>1970 - Belgique</p>
                <p>Temps restant : 1j 7h 29</p>
            </div>
            <button class="bouton petit clair">Voir</button>
        </article>
        <article class="carte-texte-image">
            <img src="assets/img/timbres/insuline.webp" alt="Timbre Insuline">
            <aside class="certifie carte-texte-image__certifie"><img src="assets/img/visuel/certifie.webp" alt=""></aside>
            <div class="carte-texte">
                <h4>France #1010 Endommagé NonCert $530</h4>
                <p>1921 - France</p>
                <p>Temps restant : 4j 8h 30</p>
            </div>
            <button class="bouton petit clair">Voir</button>
        </article>
        <article class="carte-texte-image">
            <img src="assets/img/timbres/l-j-papineau.webp" alt="Timbre L-J Papineau">
            <div class="carte-texte">
                <h4>Canada #1011 Parfaite NonCert $239</h4>
                <p>1971 - Canada</p>
                <p>Temps restant : 5j 9h 31</p>
            </div>
            <button class="bouton petit clair">Voir</button>
        </article>
        <article class="carte-texte-image">
            <img src="assets/img/timbres/r-l-borden.webp" alt="Timbre R-L Borden">
            <aside class="etiquette etiquette_jaune carte-texte-image__etiquette">Imminent</aside>
            <aside class="certifie carte-texte-image__certifie"><img src="assets/img/visuel/certifie.webp" alt=""></aside>
            <div class="carte-texte">
                <h4>Portugal #1012 Excellente Cert $943</h4>
                <p>1951 - Portugal</p>
                <p>Temps restant : 1h 32</p>
            </div>
            <button class="bouton petit clair">Voir</button>
        </article>
        <article class="carte-texte-image">
            <img src="assets/img/timbres/roi-georges-VI.webp" alt="Timbre Roi Georges VI">
            <div class="carte-texte">
                <h4>Angleterre #1013 Bonne Cert $356</h4>
                <p>1960 - Angleterre</p>
                <p>Temps restant : 7j 2h 34</p>
            </div>
            <button class="bouton petit clair">Voir</button>
        </article>
        <article class="carte-texte-image">
            <img src="assets/img/timbres/abbott.webp" alt="Timbre Abbott">
            <aside class="etiquette etiquette_rouge carte-texte-image__etiquette">Vendu</aside>
            <div class="carte-texte">
                <h4>Autriche #1014 Moyenne NonCert $937</h4>
                <p>1980 - Autriche</p>
                <p>Vendu pour 456$</p>
            </div>
            <button class="bouton petit clair">Voir</button>
        </article>
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
            <img src="assets/img/timbres/Reine-Elizabeth-II-Couronnement.webp" alt="Timbre Reine Elizabeth II">
            <aside class="etiquette etiquette_rouge carte-texte-image__etiquette">Vendu</aside>
            <div class="carte-texte">
                <h4>Luxembourg #1016 Parfaite NonCert $235</h4>
                <p>1943 - Luxembourg</p>
                <p>Vendu pour 234$</p>
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
            <img src="assets/img/timbres/congres-upu.webp" alt="Timbre Congres UPU">
            <aside class="etiquette etiquette_rouge carte-texte-image__etiquette">Vendu</aside>
            <aside class="certifie carte-texte-image__certifie"><img src="assets/img/visuel/certifie.webp" alt=""></aside>
            <div class="carte-texte">
                <h4>Pologne #1018 Bonne Cert $3029</h4>
                <p>1935 - Pologne</p>
                <p>Vendu pour 654$</p>
            </div>
            <button class="bouton petit clair">Voir</button>
        </article>
        <article class="carte-texte-image">
            <img src="assets/img/timbres/industrie-miniere-du-canada.webp" alt="Timbre Industrie Miniere">
            <div class="carte-texte">
                <h4>Canada #1019 Moyenne Cert $395</h4>
                <p>1954 - Canada</p>
                <p>Temps restant : 4j 8h 40</p>
            </div>
            <button class="bouton petit clair">Voir</button>
        </article>
    </div>
</div>
@endsection