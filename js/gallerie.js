// mise en place de levenement click

let mesImagesThumbnails = document.getElementsByClassName('mesThumbnails');
console.log(mesImagesThumbnails);

//on recupere 1 tableua array, pr mettre 1 evenement sur ttes les images : une boucle

for(let imgEnCours of mesImagesThumbnails) {
    imgEnCours.addEventListener('click', function(){
       // console.log(this.src);
        console.log(this.getAttribute('src'));

        let newSrc = this.getAttribute('src');
        //strin.replace(on_cherche, on_remplace) //permet de remplacer du txt
        newSrc=newSrc.replace('/thumbnails/', '/images/');
        newSrc=newSrc.replace('-150x150', '');
        console.log(newSrc);// on obtient le chemin et le nom de la grande image

        let alt= this.alt;


        //on place limage et le alt ds les element concernés
        document.getElementById('imagePrincipale').src = newSrc;
        document.getElementById('textCaption').textContent = alt;

        //si les src pr les petites et les gdes images sont similaires : il suffit davoir ces 2 lignes
        // document.getElementById('imagePrincipale').src = this.src;
        // document.getElementById('textCaption').textCaption = this.alt;

      
    });
}

document.getElementById('imagePrincipale').addEventListener('click', function(){
    document.getElementById('imageModal').src = this.src;
    
    // on declenche louverture de la modal, avec la ligne recuperee ds la doc bootstrap (qui utilise jquery)
    $('#myModal').modal('show');
});