@extends('master')
@section('title', 'Enchères terminées')
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
       
    </div>
</div>
@endsection