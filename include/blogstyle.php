<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box; 
}  
video{
object-fit: cover;
}
#videobg{
    position: fixed;
    z-index: -1; 
   min-width: 100%;
    min-height: 100%; 
    width: 100%;
    height: 100vh;
    background-size: cover;  
    background-blend-mode: darken; 
    background: radial-gradient(#ffb03b 50%, rgba(255, 176, 59, 0.4) 52%);
} 
.videobg{ 
    width: 100%;
    height: 100vh;
    display: block;
    background: linear-gradient(rgb(0,0,0,0.7),rgba(0,0,0,0.7));
   overflow: hidden;
}

.belief{
    height: 40vh;
}

.videodesc{
    width: 100%;
    height: 20vh;
    display: flex;
    justify-content: center;
    align-items: center;
} 

.videologo{
    width: 60%;
    height: 60vh;
    margin: auto; 
    display: flex; 
    flex-direction: column;
    justify-content: center;
    align-items: center; 
}
.videologosp{
    min-width: 20%;;
    min-height: 25vh; 
    background: url('images/brand.jpg'); 
    background-size: 130% 100%; 
    display: flex; 
    flex-direction: column;
    justify-content: center; 
    align-items: center;
    background-repeat: no-repeat;
} 
.videologo h3{
    color: white; 
    font-family: monospace; 
    margin-top: 3%; 
    text-align: center;
}
.videodesc h1{
    color: white; 
    border-bottom: 1px solid white; 
    text-align: center;
    margin-top: 16%;
}  
.videologosp h2{
    font-family: monospace;
    color:red;
    text-shadow: 1px 1px 1px 1px black, 2px 2px 2px 2px grey; 
    border-bottom: 2px solid red; 
    display: inline-block; 
    background-color: black;
}
.action{
    position: block;
    display: flex;
    justify-content: center;
    align-items: center;
}
.action h1{
    border-bottom: 1px solid black;
}
.belief{
  border: 10px solid red;
}

.testimonial{
  width: 100%;
  height: 20vh;
  padding: 2%;
}
.testimonial p{
  color: white;
}
.innertext{
  width: 50%;
  height: 15vh;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
}
.wrapperbox{
  background-color: rgba(0,0,0,0.7);
  width: 94%;
  padding: 8%;
}
.innertext{
    width: 100%;
}
.is{
  color: rgb(224, 149, 51);
}

.quality{
  margin-top: 25%;
  height: 50vh;
  width: 100%;
  padding: auto;
}
.act{
    border-bottom: 1px solid white;
}
@media (min-width: 1024px) {
  .testimonials {
    background-attachment: fixed;
  }
}

@media (min-width: 992px) {
  .testimonials .testimonial-item p {
    width: 80%;
  }
}

@media (min-aspect-ratio: 16/9) {
    #videoBG {
        width:100%;
        height: auto;
    }
}
@media (max-aspect-ratio: 16/9) {
    #videoBG { 
        width:auto;
        height: 100%;
    }
} 

@media (max-width: 767px) {
    #videoBG {
        display: none;
    }
    body {
        background: url('service4.jpg');
        background-size: cover;
    }
}
@media only screen and (max-width: 245px){
    h1{
        font-size: 1rem;;
    } 
    h3{
        font-size: 0.7rem;
    } 
} 
@media only screen and (max-width: 124px){
    h1{
        font-size: 0.6rem;
    }
}  
@media only screen and (max-width: 910px){
    .videologosp{
        min-width: 45%;
    }
}
@media only screen and (max-width: 530px){
    .videologosp{
        min-width: 90%;
    }
}
</style>