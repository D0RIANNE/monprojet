document.addEventListener("DOMContentLoaded", function(){
    
    
    /*----------------------------PAGE PERSONA---------------------------*/
    $(document).ready(function(){
        bindEvents();
    });
    
    function bindEvents(){
       $('.accordeon-title').click(function(e){
          $(this).parent().find('.accordeon-content').toggle();
       });
    }
    
    
    /*------------------------------CANVAS------------------------*/
    window.onload = function() {
    
      let canvas = document.getElementById("canvas");
      console.log(canvas);
      if(canvas!=null) {
        let ctx = canvas.getContext('2d');
        let image = document.getElementById('basket');
        let red = document.getElementById('red');
        let pink = document.getElementById('pink');
        let green = document.getElementById('green');
        let color_red = document.getElementById('color_red');
        let color_green = document.getElementById('color_green');
        let color_pink = document.getElementById('color_pink');
        let txt= document.getElementById('txt');
        let add=document.getElementById('add');
        let clear=document.getElementById('clear');
        let write =document.getElementById('write');
        let img_custom=document.getElementById('img_custom');
        let send=document.getElementById('send');
        let posX = 130;
        let posY = -190;
      
      
      //CHARGER LA CHAUSSURE
      ctx.drawImage(image, 130, -190, 900, 900);
      //CHARGER LES COULEURS
      red.addEventListener('click', function(){
        ctx.drawImage(image, 130, -190, 900, 900);
        ctx.drawImage(color_red, 130, -190, 900, 900);
      });
      
      green.addEventListener('click', function(){
        ctx.drawImage(image, 130, -190, 900, 900);
        ctx.drawImage(color_green, 130, -190, 900, 900);
      });
      
      pink.addEventListener('click', function(){
        ctx.drawImage(image, 130, -190, 900, 900);
        ctx.drawImage(color_pink, 130, -190, 900, 900);
      });
    //CHARGER TEXTE
      add.addEventListener("click", function(){
        ctx.drawImage(image, 130, -190, 900, 900);
        ctx.font = "40pt Dancing script,cursive";
        ctx.fillStyle = "rgb(0,0,0)";
        ctx.fillText(txt.value, 290, 350);
      });
      
      txt.addEventListener('focus', function() {
        container_personnalisation.removeEventListener('keydown', moveImage);
      })
      
      clear.addEventListener('click', function(){
        ctx.drawImage(image, 130, -190, 900, 900);
        
      })
      
      //CHARGER L'IMAGE 
      
      let reader = new FileReader();
      let img = new Image();
      let masque = document.getElementById('masque');
        
      let uploadImage = (e) => {
        reader.onload = () => {
          img.onload = () => {
            
            ctx.drawImage(image, 130, -190, 900, 900);
            ctx.globalAlpha = 0.8;
            ctx.drawImage(img, 130, -190, 900, 900);
            ctx.globalAlpha = 1;
            ctx.drawImage(masque, 130, -190, 900, 900)
          };
          
          img.src = reader.result;
          
        }
        reader.readAsDataURL(e.target.files[0])
        }
        
      let imageLoader = document.getElementById('uploader')
      imageLoader.addEventListener('change', uploadImage);
      
      
      //DEPLACER L'IMAGE
      let container_personnalisation = document.getElementById('container_personnalisation');
      container_personnalisation.addEventListener('keydown', moveImage);
      
     
     function moveImage(e) {
       e.preventDefault();
       let key = e.code;
       console.log(key);
       if(key==='ArrowDown') {
         posY += 10;
       }
       
       if(key==='ArrowUp') {
         posY -= 10;
       }
       if(key==='ArrowLeft') {
         posX -= 10;
       }
       
       if(key==='ArrowRight') {
         posX += 10;
       }
       
        ctx.drawImage(image, 130, -190, 900, 900);
        ctx.globalAlpha = 0.8;
        ctx.drawImage(img, posX, posY, 900, 900);
        ctx.globalAlpha = 1;
        ctx.drawImage(masque, 130, -190, 900, 900)
        ctx.fillStyle = 'white';
        ctx.fillRect(0,0,130,700);
        ctx.fillRect(1030,0,170,700);
     }
     
    }
    
   
    
    };
        
    /*------------------------------PANIER------------------------*/   
    
    let ajout = document.getElementById('addCart');
    let button_size = document.querySelector('.list_size');
    
    if(button_size!=null) {
      button_size.addEventListener('click', function(e) {
          let size = document.getElementsByClassName('size');
          for(let i of size) {
              i.classList.remove('checked');
              
          }
          e.target.classList.add('checked');
      });
    }
    
    if(ajout!=null) {
      ajout.addEventListener("click", function(e){
      	let id = document.getElementById('id');
        let name = document.getElementById('name');
      	let checked_size = document.querySelector('.checked');
        if(checked_size==null) {
          alert('vous devez choisir une taille');
        } else {
      	// récupérer toutes les infos de personnalisation (test dans la console)
      	let formdata = new FormData();
      	formdata.append('id', id.value);
      	formdata.append('name', name.value);
      	formdata.append('size', checked_size.value);
      	let obj = {'method':'POST', 'body':formdata};
      	
      	//APPEL AJAX
      	// envoyer 	id.value au fichier ajax en GET ou en POST
      	fetch('ajax/panierajax.php', obj)
          .then(response => response.text())
          .then(data => {
              //le fichier ajax renvoie data qu'on affiche dans la console
      		console.log(data);
      		window.alert('produit ajouter');
          })
          .catch(err => console.error(err));
        }
        
    
      });
      
    }
    
    
    /*-----------------------------PAGE HOME------------------------------*/
    /*-----------------------------SLIDESHOW---------------------*/

});