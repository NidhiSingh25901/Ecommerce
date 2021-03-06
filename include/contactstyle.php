<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
} 
.act{
    border-bottom: 1px solid white;
}
.contact{
    width: 100%;
    height: 100vh;
    background: url('images/service1.jpg'); 
    background-size: 100% 100%; 
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-blend-mode: darken;
    background-color: rgba(0,0,0,0.7);
} 
.chead{
    width: 100%;
    height: 20vh;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    top: 3%;
} 
.chead h1{
    border-bottom: 1px solid white; 
    color: white;
    position: absolute;
    top: 11%;
} 

.timedetail{
    border: 1px solid orange;
    margin: auto; 
    display: flex; 
    flex-direction: row;
    justify-content: space-evenly;
    flex-wrap: wrap; 
    background-color: transparent; 
    margin: 4%; 
    border-radius: 2%;
} 
.time{  
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin: 2%; 
    padding: 3%; 
    background-color:  transparent;
    color: white;
}
.time i{
    color: rgb(202, 141, 29);
} 
.t3{
    text-align: left;
}
.t1 a{
    text-decoration: none;
    color: white;
}
.t1 a:hover{
    text-decoration: none;
    color: rgb(202, 141, 29);
}
.maptrace{
    width: 100%;
    height: 90vh; 
    padding: 5%;
} 
.maptrace iframe{
    margin: auto;
    display: flex;
    justify-content: center;
    align-items: center;  
} 
.resiframe{
    position: relative;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    width: 80%;
    height: 80%; 
    z-index: -1; 
    box-shadow: 5px 10px 18px #888888;
} 

.contactform{
    width: 100%;
    height: 91vh; 
    background: url('images/service2.jpg'); 
    background-attachment: fixed; 
    background-size: 100% 100%;
    background-repeat: no-repeat;
    background-blend-mode: darken;
    background-color: rgba(0, 0,0,0.6);
} 
.contacthead{
    width: 100%;
    height: 20vh;
    display: flex;
    justify-content: center;
    align-items: center;
} 
.contacthead h1{
    border-bottom: 1px solid white; 
    text-align: center; 
    color: white;
}  
.contactfill{
    width: 80%;
    height: 50vh; 
    margin: auto;
}
.contact1{
    display: flex;
    flex-direction: row;
} 
.contact1 input{
    width: 37.8vw;
    height: 8vh; 
} 
.input1{
    margin: 2% 2%;
} 
.input2{
    margin-top: 2%;
} 
.contact2{
    display: flex;
    flex-direction: column; 
} 
.contact2 input{
    margin: 2% 2%;
    width: 77vw;
    height: 8vh;
} 
.textarea{
    margin: 2% 2%; 
} 
textarea{
    width: 100%; 
    height: 19vh;
}  
.contactbtn{
    display: flex;
    justify-content: center;
    align-items: center; 
} 
.contactusbtn{
    width: 25%; 
    height: 5vh; 
    border-radius: 1%; 
    background-color: rgb(202, 141, 29); 
} 
input{
    background-color: transparent; 
    color: white;
} 
textarea{
    background-color: transparent; 
    color: white;
} 

input:hover{
    box-shadow: 5px 10px 18px #888888;;
} 
textarea:hover{
    box-shadow: 5px 10px 18px #888888;
} 
input[type="submit"]:hover{
    background-color: transparent; 
    border: 1px outset white;
}

.querybox{
    width: 100%;
    height: 8vh;
  display: flex;
   justify-content: center;
   align-items: center;  
}
.querybox a{
    color: rgb(202, 141, 29) !important;
    text-decoration: none;
}
.querybox a:hover{
   
    text-decoration: none;
}
@media only screen and (max-width: 396px){
    .contact1{
        flex-direction: column;
    } 
    .contact1 input{
        width: 100%;
    } 
    .timedetail p{
        font-size: small;
    } 
    h1{
        font-size: small;
    }
} 
@media only screen and (max-width: 120px){
    .timedetail p{
        font-size: xx-small;
    }
} 
@media only screen and (max-width: 90px){
    .timedetail p{
        font-size: 0.2rem;
    } 
    h1{
        font-size: 0.5rem;
    }
}

@media only screen and (max-width: 281px){
    .contact{
        height: 80%;
    }
}
</style>