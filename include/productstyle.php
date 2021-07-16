<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.product{
    width: 100%;
    height: 100vh;
    background: url('images/product1.jpg');
    background-attachment: fixed;
    background-blend-mode: darken;
    background-color: rgba(68, 67, 67, 0.7);
    background-size: 100% 100%;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    flex-direction: column;
}
.product button{
    background-color: black;
    color: white;
    padding: 0.5%;
    border-radius: 10%;
}
.product button:hover{
    background-color: transparent;
    color: white;
}
.producthead{
    width: 100%;
    height: 20vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
.act{
    border-bottom: 1px solid white;
}
.producthead h3{
    border-bottom: 1px solid black;
}
.products{
    margin: 2%;
}
.products img{
    width: 20vw;
    height: 20vh;
}
.menu-list{
    width: 60%;
    border-bottom: 1px solid black;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: auto;
}

.request a{
    background-color: #343a40;;
    color: white;
    border-radius: 5%;
    text-decoration: none;
}
.request a:hover{
    background-color: black;
    color: white;
}
</style>